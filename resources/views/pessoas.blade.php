@include('commons.head')

<br>
<div class="container-fluid">
    <a href="{{url('cadastroPessoa')}}" class="btn btn-primary float-end" id="btn-cadastrar-pessoa">Cadastrar pessoa manualmente</a>
    <table id="table_pessoas" class="table table-striped table-hover table-sm">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Documento</th>
                <th>CEP</th>
                <th>Endereço</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>UF</th>
                <th>Telefone</th>
                <th>E-mail</th>
                <th>Ativo</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pessoas as $pessoa)
                <tr>
                    <td>{{ $pessoa->id }}</td>
                    <td>{{ $pessoa->nome }}</td>
                    <td>{{ $pessoa->documento }}</td>
                    <td>{{ $pessoa->cep }}</td>
                    <td>{{ $pessoa->endereco }}</td>
                    <td>{{ $pessoa->bairro }}</td>
                    <td>{{ $pessoa->cidade }}</td>
                    <td>{{ $pessoa->uf }}</td>
                    <td>{{ $pessoa->telefone }}</td>
                    <td>{{ $pessoa->email }}</td>
                    <td>
                        @if ($pessoa->ativo === 1)
                        <span class="badge bg-success">SIM</span>
                        @endif

                        @if ($pessoa->ativo === 0) 
                            <span class="badge bg-danger">NÃO</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{url('/editarPessoa/' . $pessoa->id)}}" class="btn btn-primary btn-sm">Editar</a>
                    </td>
                    <td>
                        <a href="{{url('/excluirPessoa/' . $pessoa->id)}}" class="btn btn-danger btn-sm">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('commons.footer')