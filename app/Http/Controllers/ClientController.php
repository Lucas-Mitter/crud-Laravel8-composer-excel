<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Http\Requests\CreateClientResquest;

class ClientController extends Controller
{
    public function index()
    {
        $list = Client::all();

        return view('client.index', ['list' => $list]);
    }

    public function create()
    {
        return view('client.add');
    }

    public function store(CreateClientResquest $request)
    {
        $validated = $request->validated();
        Client::create($validated);

        return redirect()->route('client.index');
    }

    public function edit($id)
    {
        $data = Client::find($id);

        if($data) {
            return view('client.edit', [
                'data' => $data
            ]);
        } else{
            return redirect()->route('client.index');
        }
    }

    public function update(CreateClientResquest $request, $id)
    {
        $validated = $request->validated();
        Client::find($id)->update($validated);

        return redirect()->route('client.index');
    }

    public function destroy($id)
    {
        Client::find($id)->delete();
        return redirect()->route('client.index');
    }
}
