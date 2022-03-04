<!doctype html>
<html lang="en-es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Registro</title>
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
                    <i class="bi bi-person-plus-fill"></i> Registro
                </h1>
            </div>
            <div class="card-body">
                <form id="form" method="POST" action="/sign-up">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 border-right">
                            <div class="form-group required">
                                <label for="name">Nombre</label>
                                <input type="text" id="nombre" name="name" placeholder="Nombre" class="form-control {{($errors->first('name') ? ' form-error' : '')}}" value="{{ old('name') }}" >
                            </div>
                            <div class="form-group required">
                                <label for="lastName">Apellidos</label>
                                <input type="text" id="lastName" name="lastName" placeholder="Apellidos" class="form-control {{($errors->first('lastName') ? ' form-error' : '')}}" value="{{ old('lastName') }}">
                            </div>
                            <div class="form-group required">
                                <label for="dni">DNI</label>
                                <input type="text" id="dni" name="dni" placeholder="DNI" class="form-control {{($errors->first('dni') ? ' form-error' : '')}}" value="{{ old('dni') }}">
                            </div>
                            <div class="form-group">
                                <label for="phone">Teléfono</label>
                                <input type="text" id="phone" name="phone" placeholder="Teléfono" class="form-control {{($errors->first('phone') ? ' form-error' : '')}}" value="{{ old('phone') }}">
                            </div>
                            <div class="form-group">
                                <label for="country">País</label>
                                <select class="form-select" id="country" name="country" placeholder="País" class="form-control" value="{{ old('country') }}">
                                    <option disabled selected>- Seleccionar país -</option>
                                    @foreach($countries as $country)
                                    <option value="{{$country}}">{{$country}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group required">
                                <label for="email">Correo</label>
                                <input type="email" id="email" name="email" placeholder="Correo" class="form-control {{($errors->first('email') ? ' form-error' : '')}}" value="{{ old('email') }}">
                            </div>
                            <div class="form-group required">
                                <label for="password">Contraseña</label>
                                <input type="password" id="password" name="password" placeholder="Contraseña" class="form-control {{($errors->first('password') ? ' form-error' : '')}}" value="{{ old('password') }}">
                            </div>
                            <div class="form-group required">
                                <label for="password">Confirmar contraseña</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirmar contraseña" onpaste="return false;" class="form-control {{($errors->first('password_confirmation') ? ' form-error' : '')}}" value="{{ old('password_confirmation') }}">
                            </div>
                        </div>
                    </div>
                    <div class="row border-top">
                        <div class="col-md-12">
                            <div class="form-group required">
                                <label for="accountNumber">Número cuenta bancaria (IBAN)</label>
                                <input type="text" id="accountNumber" name="accountNumber" placeholder="Número cuenta bancaria (IBAN)" class="form-control {{($errors->first('accountNumber') ? ' form-error' : '')}}" value="{{ old('accountNumber') }}">
                            </div>
                            <div class="form-group">
                                <label for="about">Sobre ti</label>
                                <textarea type="text" id="about" name="about" placeholder="Sobre ti" class="form-control {{($errors->first('about') ? ' form-error' : '')}}" value="{{ old('about') }}"></textarea>
                            </div>
                        </div>
                    </div>
                </form>
                @include('alerts')
                <div class="buttons-container">
                    <button class="btn btn-primary" type="submit" form="form">
                        <i class="bi bi-person-plus-fill"></i> Registrarse
                    </button>
                </div>
            </div>

            <div class="card-footer text-center">
                <a href="/login">¿Ya tienes una cuenta? Inicia sesión ahora</a>
            </div>
        </div>

    </div>
</body>

</html>
