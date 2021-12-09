@include('commons.head')

<br>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Importar XML</h3>
        </div>
        <div class="card-body">
            <form action="{{ url('realizarimportacao') }}" method="POST">
                @csrf
                <p>Cole abaixo o XML que deseja importar</p>
                <div class="form-floating">
                    <textarea class="form-control" style="height: 250px; margin-top: 0px" name="xml_textarea"
                        id="xml_textarea"></textarea>
                </div>

                <br>
                <button type="submit" class="btn btn-primary float-end">Iniciar importação</button>

            </form>
        </div>
    </div>
</div>

@include('commons.footer')
