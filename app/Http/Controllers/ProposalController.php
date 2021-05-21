<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use App\Models\Client;
use App\Exports\ProposalExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\CreateProposalResquest;

class ProposalController extends Controller
{
    public function index()
    {

        $list = Proposal::join('clients', 'proposals.cli_id', '=', 'clients.id')
        ->orderBy('proposals.status')
        ->orderBy('clients.nome_fantasia')
        ->orderBy('proposals.data_ini_do_pag')
        ->get(['proposals.*', 'clients.nome_fantasia']);
        //$list = Proposal::with('client')->orderBy('status')->get();

        return view('proposal.index', compact('list'));
    }

    public function create()
    {
        $clientes = Client::all()->sortBy('nome_fantasia');
        return view('proposal.add', compact('clientes'));
    }

    public function store(CreateProposalResquest $request)
    {
        $validated = $request->validated();

        $file = $validated['anexar_arquivo'];
        $fileName = time().'.'.$file->getClientOriginalextension();
        $validated['anexar_arquivo']->move('arquivos', $fileName);
        $validated['anexar_arquivo'] = $fileName;

        Proposal::create($validated);

        return redirect()->route('proposal.index');
    }

    public function download($file)
    {
        $path = public_path("arquivos/{$file}");
        $headers = array('Content-Type: application/pdf',);
        return response()->download($path, $file, $headers);
    }

    public function edit($id)
    {
        $data = Proposal::find($id);

        if($data) {
            return view('proposal.edit', [
                'data' => $data
            ]);
        } else{
            return redirect()->route('proposal.index');
        }
    }

    public function update(CreateProposalResquest $request, $id)
    {
        Proposal::find($id)->update($request->all());

        return redirect()->route('proposal.index');
    }

    public function destroy($id)
    {
        Proposal::find($id)->delete();

        return redirect()->route('proposal.index');
    }

    public function export()
    {
        return Excel::download(new ProposalExport, "Lista de Propostas.xlsx");
    }

    public function done($id){

        //DB::select('UPDATE tarefas SET resolvido = 1 - resolvido WHERE id = :id', ['id' => $id]);

        $proposta = Proposal::find($id);
        if($proposta){
            $proposta->status = 1 - $proposta->status;
            $proposta->save();
        }


        return redirect()->route('proposal.index');
    }
}
