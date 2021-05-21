<h1>Clientes</h1>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<br><a class="btn btn-success" href="client/add" style="background-image: linear-gradient(to top right, rgb(110, 14, 235), rgb(128, 4, 76));">Adicionar</a>
<a class="btn btn-success" href="/dashboard">Home</a><br><br>

@if(count($list) > 0)
<table class="table">
    <thead class="table-dark">
      <tr>
        <th>Razão Social</th>
        <th>Nome Fantasia</th>
        <th>CNPJ</th>
        <th>Endereço</th>
        <th>E_mail</th>
        <th>Telefone</th>
        <th>Nome do Responsavel</th>
        <th>CPF</th>
        <th>Celular</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($list as $item)
            <tr>
              <td class="align-middle">{{ $item->razao_social }}</td>
              <td class="align-middle">{{ $item->nome_fantasia }}</td>
              <td class="align-middle">{{ $item->cnpj }}</td>
              <td class="align-middle">{{ $item->endereco }}</td>
              <td class="align-middle">{{ $item->email }}</td>
              <td class="align-middle">{{ $item->telefone }}</td>
              <td class="align-middle">{{ $item->nome_do_responsavel }}</td>
              <td class="align-middle">{{ $item->cpf }}</td>
              <td class="align-middle">{{ $item->celular }}</td>
              <td><a style="background-image: linear-gradient(to top right, rgb(4, 8, 231), rgb(9, 194, 226), rgb(9, 194, 226), rgb(4, 8, 231));"
                class="btn btn-primary" href="client/edit/{{ $item->id }}">Editar</a></td>
              <td><a class="btn btn-danger" href="client/destroy/{{ $item->id }}">Excluir</a></td>
            </tr>
        @endforeach
    </tbody>
  </table>
@else
    <h1>Não há itens.</h1>
@endif
