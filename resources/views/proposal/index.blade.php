<h1>Propostas</h1>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<br><a class="btn btn-success" href="proposal/add" style="background-image: linear-gradient(to top right, rgb(110, 14, 235), rgb(128, 4, 76));">Adicionar</a>
<a class="btn btn-success" href="/dashboard">Home</a>
<a class="btn btn-primary" href="proposal/export">Excel</a><br><br>

@if(count($list) > 0)
<form action="" enctype="multipart/form-data">
 <table class="table">
    <thead class="table-dark">
      <tr>
        <th>Cliente</th>
        <th>Endereço da Obra</th>
        <th>Valor Total</th>
        <th>Sinal</th>
        <th>Quantidade de Parcelas</th>
        <th>Valor das Parcelas</th>
        <th>Data Pag.</th>
        <th>Data das Parcelas</th>
        <th>Anexo</th>
        <th>Status</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($list as $item)
            <tr>
                <td class="align-middle">{{ $item->nome_fantasia }}</td>
                <td class="align-middle">{{ $item->endereco_da_obra }}</td>
                <td class="align-middle">{{ $item->valor_total }}</td>
                <td class="align-middle">{{ $item->sinal }}</td>
                <td class="align-middle">{{ $item->quantidade_de_parcela }}</td>
                <td class="align-middle">{{ $item->valor_das_parcelas }}</td>
                <td class="align-middle">{{ $item->data_ini_do_pag }}</td>
                <td class="align-middle">{{ $item->data_das_parcelas }}</td>
                <td class="align-middle alert-link">
                    <a href="{{ url("proposal/download/{$item->anexar_arquivo}") }}" download="" style="text-decoration: none;">Baixar Anexo</a>
                </td>
                <td class="align-middle alert-link">
                    <a href="{{ route('proposal.done', ['id' => $item->id ]) }}" style="text-decoration: none;">
                        @if($item->status===1) Aberto @else Fechado @endif
                    </a>
                </td>
                <td>
                    <a style="background-image: linear-gradient(to top right, rgb(4, 8, 231), rgb(9, 194, 226), rgb(9, 194, 226), rgb(4, 8, 231));"
                       class="btn btn-primary" href="proposal/edit/{{ $item->id }}">Editar</a>
                </td>
                <td><a class="btn btn-danger" href="proposal/destroy/{{ $item->id }}">Excluir</a></td>
            </tr>
        @endforeach
    </tbody>
  </table>
</form>
@else
    <h1>Não há itens.</h1>
@endif
