<h1>Nova Proposta</h1>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<form method="POST" enctype="multipart/form-data">
    @csrf

        <label>Cliente:</label><br>
        <select name="cli_id">
            @foreach ($clientes as $cliente)
                <option value="{{ $cliente->id }}" >{{ $cliente->nome_fantasia }}</option>
            @endforeach
        </select><br><br>

        <div class="mb-3">
            <label class="form-label">Endereco da Obra:</label>
            <input type="text" name="endereco_da_obra" class="form-control @error('endereco_da_obra') is-invalid @enderror"/>
            @if ($errors->has('endereco_da_obra'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('endereco_da_obra') }}</strong>
                </span>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Valor Total:</label>
            <input type="text" name="valor_total" class="form-control @error('valor_total') is-invalid @enderror"/>
            @if ($errors->has('valor_total'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('valor_total') }}</strong>
                </span>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Sinal:</label>
            <input type="text" name="sinal" class="form-control @error('sinal') is-invalid @enderror"/>
            @if ($errors->has('sinal'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('sinal') }}</strong>
                </span>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Quantidade de Parcelas:</label>
            <input type="text" name="quantidade_de_parcela" class="form-control @error('quantidade_de_parcela') is-invalid @enderror"/>
            @if ($errors->has('quantidade_de_parcela'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('quantidade_de_parcela') }}</strong>
                </span>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Valor das Parcelas:</label>
            <input type="text" name="valor_das_parcelas" class="form-control @error('valor_das_parcelas') is-invalid @enderror"/>
            @if ($errors->has('valor_das_parcelas'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('valor_das_parcelas') }}</strong>
                </span>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Data de Início do Pagamento:</label>
            <input type="text" name="data_ini_do_pag" class="form-control @error('data_ini_do_pag') is-invalid @enderror"/>
            @if ($errors->has('data_ini_do_pag'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('data_ini_do_pag') }}</strong>
                </span>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Datas das Parcelas:</label>
            <input type="text" name="data_das_parcelas" class="form-control @error('data_das_parcelas') is-invalid @enderror"/>
            @if ($errors->has('data_das_parcelas'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('data_das_parcelas') }}</strong>
                </span>
            @endif
        </div>
        <div class="mb-3">
            <label class="custom-file-input">Anexar Arquivos(PDF ou DOC):</label>
            <input type="file" name="anexar_arquivo" class="form-control"/>
        </div>
        <select name="status">
                <option value="0" >Fechado</option>
                <option value="1" >Aberto</option>
        </select><br><br>

    <input type="submit" value="adicionar"/>
</form>
