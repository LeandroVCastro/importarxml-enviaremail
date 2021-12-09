<!DOCTYPE html>
<html>

<head>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }} ">
    <title>Listagem de pessoas</title>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}">Pessoas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/importarxml')}}">Importar XML</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/emailemmassa')}}">Enviar e-mail em massa</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @if ($message = Session::get('sucesso'))
        <br>
        <div class="alert alert-success" role="alert">
            {{ $message }}
        </div>
        @endif

        @if ($message = Session::get('erro'))
        <br>
        <div class="alert alert-danger" role="alert">
            {{ $message }}
        </div>
        @endif
    </div>
