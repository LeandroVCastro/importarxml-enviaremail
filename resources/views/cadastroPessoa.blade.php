@include('commons.head')

<br>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Pessoa</h3>
        </div>
        <div class="card-body">
            
            <form action="{{url('salvarPessoa')}}" method="POST">
                @csrf

                <input type="hidden" name="id" value="{{isset($pessoa) ? $pessoa->id : ''}}">
        
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{isset($pessoa) ? $pessoa->nome : ''}}">
        
                <label for="documento" class="form-label">Documento</label>
                <input type="text" class="form-control" id="documento" name="documento" value="{{isset($pessoa) ? $pessoa->documento : ''}}">
        
                <label for="cep" class="form-label">CEP</label>
                <input type="text" class="form-control" id="cep" name="cep" value="{{isset($pessoa) ? $pessoa->cep : ''}}">
        
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" value="{{isset($pessoa) ? $pessoa->endereco : ''}}">
                
                <label for="bairro" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro" value="{{isset($pessoa) ? $pessoa->bairro : ''}}">
                
                <label for="cidade" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" value="{{isset($pessoa) ? $pessoa->cidade : ''}}">
                
                <label for="uf" class="form-label">UF</label>
                <input type="text" class="form-control" id="uf" name="uf" value="{{isset($pessoa) ? $pessoa->uf : ''}}">
        
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" value="{{isset($pessoa) ? $pessoa->telefone : ''}}">
        
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" value="{{isset($pessoa) ? $pessoa->email : ''}}">
        
                <br>
                <input type="checkbox" class="form-check-input" id="ativo" name="ativo" {{isset($pessoa) && $pessoa->ativo === 1 ? 'checked' : ''}}>
                <label class="form-check-label" for="ativo">Ativo</label>
        
                <br>
                <button class="btn btn-primary float-end">Salvar pessoa</button>
            </form>
        </div>

    </div>

</div>

@include('commons.footer')