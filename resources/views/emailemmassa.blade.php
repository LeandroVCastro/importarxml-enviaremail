@include('commons.head')

<br>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Enviar e-mail em massa</h3>
        </div>
        <div class="card-body">

            <form action="{{ url('enviaemail') }}" method="POST">
                @csrf
                <p>O e-mail será enviado para todas as pessoas ativas</p>
                <textarea id="email_textarea" name="email_textarea"></textarea>

                <br>
                <button class="btn btn-primary float-end">Enviar e-mail em massa</button>
            </form>
        </div>

    </div>

</div>

@include('commons.footer')
