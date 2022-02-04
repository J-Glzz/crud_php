<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/fontawesome.min.css" integrity="sha512-r9kUVFtJ0e+8WIL8sjTUlHGbTLwlOClXhVqGgu4sb7ILdkBvM2uI+n/Fz3FN8u3VqJX7l9HLiXqXxkx2mZpkvQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.10/sweetalert2.css" integrity="sha512-fSWkjL6trYj6KvdwIga30e8V4h9dgeLxTF2q2waiwwafEXD+GXo5LmPw7jmrSDqRun9gW5KBR+DjvWD+5TVr8A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body id="change">
    <div class="container">
        <h2>Registre los datos del alumno</h2>
            <form  id="formGuardar"> 
                <div class="form-group">
                    <div class="form-group">
                        <label for="inputoNombre" class="col-sm-2 col-form-label">Nombre</label>
                        <input type="text" name="nombre" class="form-control" id="inputNombre" placeholder="Inserte su nombre. Ej: Juan" required>
                    </div>
                    <div class="form-group">
                        <label for="inputApellidos" class="col-sm-2 col-form-label">Apellidos</label>
                        <input type="text" name="apellidos" class="form-control" id="inputApellidos" placeholder="Inserte sus apellidos. Ej: Perez Perez" required>
                    </div>
                    <div class="form-group">
                        <label for="inputBoleta" class="col-sm-2 col-form-label">Boleta</label>
                        <input type="maxlength" maxlength="4" name="boleta" class="form-control" id="inputBoleta" placeholder="Digite su numero de boleta (4 digitos)" required>
                    </div>    
                </div>
                <div class="form-group">
                    <label for="selectCarrera" class="col-sm-2 col-form-label">Carrera</label>
                    <select name="carrera" class="form-control" id="selectCarrera" required>
                        <option value="">Opciones</option>
                        <option value="ICE">Ing. Comunicaciones y electronica</option>
                        <option value="ICA">Ing. Control y automatizacion</option>
                        <option value="IE">Ing. Electrica</option>
                        <option value="ISI">Ing. Sistemas Automotrices</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark" name="insertar" onclick="loadDoc()"> Enviar</button>
                </div>
            </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.10/sweetalert2.min.js" integrity="sha512-LwESE8nE3vcnoUWmYo6skVQ+BRT5UhqnPweGro7e22RSDLVwftCfFIPt+Ha2tm1Gg7RXvYp/jPyih3DUB06PwA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/functions.js"></script>
</html>