<!doctype html>
<html lang="en-es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Bienvenido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="/assets/css/styles.css">


</head>

<body class="body">
    <div class="container card-container">
        <div class="card sign-up-card">
            <div class="card-header">
                <h1>
                    <i class="bi bi-person-circle"></i> Bienvenido
                </h1>
            </div>
            <div class="card-body">
                <form id="form" method="POST" action="/">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" id="name" name="name" placeholder="Nombre" class="form-control" readonly  value="{{$user->name}}">
                            </div>
                            <div class="form-group">
                                <label for="lastName">Apellidos</label>
                                <input type="text" id="lastName" name="lastName" placeholder="Apellidos" class="form-control" readonly value="{{$user->lastName}}">
                            </div>
                            <div class="form-group">
                                <label for="dni">DNI</label>
                                <input type="text" id="dni" name="dni" placeholder="DNI" class="form-control" readonly value="{{$user->dni}}">
                            </div>
                            <div class="form-group">
                                <label for="phone">Teléfono</label>
                                <input type="text" id="phone" name="phone" placeholder="Teléfono" class="form-control" readonly value="{{$user->phone}}">
                            </div>
                            <div class="form-group">
                                <label for="country">País</label>
                                <input type="text" id="country" name="country" placeholder="País" class="form-control" readonly value="{{$user->country}}">
                            </div>
                            <div class="form-group">
                                <label for="email">Correo</label>
                                <input type="email" id="email" name="email" placeholder="Correo" class="form-control" readonly value="{{$user->email}}">
                            </div>
                            <div class="form-group">
                                <label for="accountNumber">Número cuenta bancaria (IBAN)</label>
                                <input type="text" id="accountNumber" name="accountNumber" placeholder="Número cuenta bancaria (IBAN)" class="form-control" readonly value="{{$user->accountNumber}}">
                            </div>
                            <div class="form-group">
                                <label for="about">Sobre ti</label>
                                <textarea type="text" id="about" name="about" placeholder="Sobre ti" class="form-control" readonly>{{$user->about}}</textarea>
                            </div>
                        </div>
                    </div>
                </form>
                @include('alerts')
            </div>
            <div class="card-footer text-center">
                <a href="/logout" class="btn btn-danger">
                    <i class="bi-door-open-fill"></i> Cerrar Sesión
                </a>
            </div>
        </div>

    </div>
</body>

</html>
