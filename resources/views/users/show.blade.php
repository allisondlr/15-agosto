<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <td><b>NOMBRE</b></td>
                        <td>{{$user->names}}</td>
                    </tr>
                    <tr>
                        <td><b>APELLIDO</b></td>
                        <td>{{$user->lastnames}}</td>
                    </tr>
                    <tr>
                        <td><b>CORREO</b></td>
                        <td>{{$user->email}}</td>
                    </tr>
                </table>
                <hr>
                <a href="{{ url('users') }}">Ir al inicio</a>
            </div>
        </div>         
    </div>
</div>
</body>
</html>