<h1>Cadastro de Cliente</h1>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<form method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">Razão Social:</label>
        <input type="text" name="razao_social" class="form-control @error('razao_social') is-invalid @enderror"/>
        @if ($errors->has('razao_social'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('razao_social') }}</strong>
            </span>
        @endif
    </div>
    <div class="mb-3">
        <label class="form-label">Nome Fantasia:</label>
        <input type="text" name="nome_fantasia" class="form-control @error('nome_fantasia') is-invalid @enderror"/>
        @if ($errors->has('nome_fantasia'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('nome_fantasia') }}</strong>
            </span>
        @endif
    </div>
    <div class="mb-3">
        <label class="form-label">CNPJ:</label>
        <input type="text" name="cnpj" class="form-control @error('cnpj') is-invalid @enderror"/>
        @if ($errors->has('cnpj'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('cnpj') }}</strong>
            </span>
        @endif
    </div>
    <div class="mb-3">
        <label class="form-label">Endereço:</label>
        <input type="text" name="endereco" class="form-control @error('endereco') is-invalid @enderror"/>
        @if ($errors->has('endereco'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('endereco') }}</strong>
            </span>
        @endif
    </div>
    <div class="mb-3">
        <label class="form-label">Email:</label>
        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"/>
        @if ($errors->has('email'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
    <div class="mb-3">
        <label class="form-label">Telefone:</label>
        <input type="text" name="telefone" class="form-control @error('telefone') is-invalid @enderror"/>
        @if ($errors->has('telefone'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('telefone') }}</strong>
            </span>
        @endif
    </div>
    <div class="mb-3">
        <label class="form-label">Nome do Responsável:</label>
        <input type="text" name="nome_do_responsavel" class="form-control @error('nome_do_responsavel') is-invalid @enderror"/>
        @if ($errors->has('nome_do_responsavel'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('nome_do_responsavel') }}</strong>
            </span>
        @endif
    </div>
    <div class="mb-3">
        <label class="form-label">CPF:</label>
        <input type="text" name="cpf" class="form-control @error('cpf') is-invalid @enderror"/>
        @if ($errors->has('cpf'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('cpf') }}</strong>
            </span>
        @endif
    </div>
    <div class="mb-3">
        <label class="form-label">Celular:</label>
        <input type="text" name="celular" class="form-control @error('celular') is-invalid @enderror"/>
        @if ($errors->has('celular'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('celular') }}</strong>
            </span>
        @endif
    </div>

    <input type="submit" value="adicionar"/>
</form>
