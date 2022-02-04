<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/fontawesome.min.css" integrity="sha512-r9kUVFtJ0e+8WIL8sjTUlHGbTLwlOClXhVqGgu4sb7ILdkBvM2uI+n/Fz3FN8u3VqJX7l9HLiXqXxkx2mZpkvQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.10/sweetalert2.css" integrity="sha512-fSWkjL6trYj6KvdwIga30e8V4h9dgeLxTF2q2waiwwafEXD+GXo5LmPw7jmrSDqRun9gW5KBR+DjvWD+5TVr8A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="users.php">Alumnos</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="register.php">Registrar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <h2>Lista de alumnos</h2>
        <div class="table-responsive">
            <table class="table table-dark table-striped" id="tableRespon">
                <thead>
                    <tr class="text-center">
                        <th>Boleta</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Carrera</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar información</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formUpdate" method="POST">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Número de boleta:</label>
                            <input type="text" maxlength="4" class="form-control" id="inputNumBoleta" name="inputNumBoleta" readonly>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Nombre:</label>
                            <input type="text" class="form-control" id="inputNombre" name="inputNombre">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Apellidos:</label>
                            <input type="text" class="form-control" id="inputApellidos" name="inputApellidos">
                        </div>
                        <div class="form-group">
                            <label for="selectCarrera" class="col-sm-2 col-form-label">Carrera</label>
                            <select name="selectCarrera" class="form-control" id="selectCarrera">
                                <option value="">Opciones</option>
                                <option value="ICE">Ing. Comunicaciones y electronica</option>
                                <option value="ICA">Ing. Control y automatizacion</option>
                                <option value="IE">Ing. Electrica</option>
                                <option value="ISI">Ing. Sistemas Automotrices</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-dark" name="actualizar">Actualizar</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.10/sweetalert2.min.js" integrity="sha512-LwESE8nE3vcnoUWmYo6skVQ+BRT5UhqnPweGro7e22RSDLVwftCfFIPt+Ha2tm1Gg7RXvYp/jPyih3DUB06PwA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/functions.js"></script>

</html>