<h1>Edição de Proposta</h1>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<form method="POST">
    @csrf

    <input type="hidden" name="cli_id" value="{{ $data->cli_id }}"/><br><br>

    <div class="mb-3">
        <label class="form-label">Endereco da Obra:</label>
        <input type="text" name="endereco_da_obra" value="{{ $data->endereco_da_obra }}" class="form-control @error('endereco_da_obra') is-invalid @enderror"/>
        @if ($errors->has('endereco_da_obra'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('endereco_da_obra') }}</strong>
            </span>
        @endif
    </div>
    <div class="mb-3">
        <label class="form-label">Valor Total:</label>
        <input type="text" name="valor_total" value="{{ $data->valor_total }}" class="form-control @error('valor_total') is-invalid @enderror"/>
        @if ($errors->has('valor_total'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('valor_total') }}</strong>
            </span>
        @endif
    </div>
    <div class="mb-3">
        <label class="form-label">Sinal:</label>
        <input type="text" name="sinal" value="{{ $data->sinal }}" class="form-control @error('sinal') is-invalid @enderror"/>
        @if ($errors->has('sinal'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('sinal') }}</strong>
            </span>
        @endif
    </div>
    <div class="mb-3">
        <label class="form-label">Quantidade de Parcelas:</label>
        <input type="text" name="quantidade_de_parcela" value="{{ $data->quantidade_de_parcela }}" class="form-control @error('quantidade_de_parcela') is-invalid @enderror"/>
        @if ($errors->has('quantidade_de_parcela'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('quantidade_de_parcela') }}</strong>
            </span>
        @endif
    </div>
    <div class="mb-3">
        <label class="form-label">Valor das Parcelas:</label>
        <input type="text" name="valor_das_parcelas" value="{{ $data->valor_das_parcelas }}" class="form-control @error('valor_das_parcelas') is-invalid @enderror"/>
        @if ($errors->has('valor_das_parcelas'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('valor_das_parcelas') }}</strong>
            </span>
        @endif
    </div>
    <div class="mb-3">
        <label class="form-label">Data de Início do Pagamento:</label>
        <input type="text" name="data_ini_do_pag" value="{{ $data->data_ini_do_pag }}" class="form-control @error('data_ini_do_pag') is-invalid @enderror"/>
        @if ($errors->has('data_ini_do_pag'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('data_ini_do_pag') }}</strong>
            </span>
        @endif
    </div>
    <div class="mb-3">
        <label class="form-label">Datas das Parcelas:</label>
        <input type="text" name="data_das_parcelas" value="{{ $data->data_das_parcelas }}" class="form-control @error('data_das_parcelas') is-invalid @enderror"/>
        @if ($errors->has('data_das_parcelas'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('data_das_parcelas') }}</strong>
            </span>
        @endif
    </div>
    <div class="mb-3">
        <label class="form-label">Anexar Arquivos(PDF ou DOC):</label>
        <input type="text" name="anexar_arquivo" value="{{ $data->anexar_arquivo }}" class="form-control @error('anexar_arquivo') is-invalid @enderror"/>
        @if ($errors->has('anexar_arquivo'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('anexar_arquivo') }}</strong>
            </span>
        @endif
    </div>
    <div class="mb-3">
        <label class="form-label">Status (Em aberto ou Fechado):</label>
        <input type="text" name="status" value="{{ $data->status }}" class="form-control @error('status') is-invalid @enderror"/>
        @if ($errors->has('status'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('status') }}</strong>
            </span>
        @endif
    </div>

    <input type="submit" value="Salvar"/>
</form>
