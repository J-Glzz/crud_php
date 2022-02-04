<?php
try 
{
   $functionCall = array_key_exists("controller", $_REQUEST) ? $_REQUEST['controller'] : "";

   if (!function_exists($functionCall))
      throw new Exception("Acción no identificada: $functionCall \n");

   $result = call_user_func_array($functionCall, array());
   echo $result;
}
catch (Exception $e) 
{
   echo $e->getMessage();
}

function listReg()
{
   try 
   {
      include 'connectionDB.php';

      $Conn = new connDB();
      $Conn->openConn();
      $query = "SELECT * FROM alumnos.infoAlumnos";
      $rs = $Conn->metQuery($query);

      foreach ($rs as $x => $val) {
         echo "<tr class='text-center'>";
         echo "<td>" . $val["boleta"] . "</td>";
         echo "<td>" . $val["nombre"] . "</td>";
         echo "<td>" . $val["apellidos"] . "</td>";
         echo "<td>" . $val["carrera"] . "</td>";
         echo "<td>
                  <button type='button' class='btn btn-danger' onclick='deleteReg(\"" . $val["boleta"] . "\");'><i class='fas fa-trash-alt'></i></button>
                  <button type='button' class='btn btn-info' onclick='updateReg(\"" . $val["boleta"] . "\", \"" . $val["nombre"] . "\", \"" . $val["apellidos"] . "\", \"" . $val["carrera"] . "\")'><i class='fas fa-edit'></i></button>
               </td>";
         echo "</tr>";
      }
   } 
   catch (Exception $e) 
   {
      echo $e->getMessage();
   }
}

function save()
{
   try 
   {
      include 'connectionDB.php';
      $iniCon = new connDB();
      $iniCon->openConn();

      $nombre = $_REQUEST['nombre'];
      $apellidos = $_REQUEST['apellidos'];
      $carrera = $_REQUEST['carrera'];
      $boleta = $_REQUEST['boleta'];

      $check = "SELECT COUNT(*) FROM infoalumnos WHERE boleta = $boleta";
      $consulta = $iniCon ->insertQuery($check);
      $consulta -> bindParam(':boleta', $_GET['boleta'], PDO::PARAM_STR, 12);
      $consulta -> Execute();

      if($consulta -> fetchColumn()) throw new Exception("Ya existe el numero de boleta, revisa tu informacion.");
      //antes de insert verificar si existe la llave primaria, en caso que exista provocar una excepción

      //throw new Exception("Ya existe la llave primaria.");

      $query = "INSERT INTO infoalumnos(nombre, apellidos, carrera, boleta)VALUES(:nombre, :apellidos, :carrera, :boleta)";

      $consulta = $iniCon->insertQuery($query);
      $consulta->bindParam(':nombre', $nombre, PDO::PARAM_STR, 30);
      $consulta->bindParam(':apellidos', $apellidos, PDO::PARAM_STR, 30);
      $consulta->bindParam(':carrera', $carrera, PDO::PARAM_STR, 30);
      $consulta->bindParam(':boleta', $boleta, PDO::PARAM_STR, 30);

      if ($consulta->Execute()) 
      {
         echo "success";
      }
      else 
      {
         echo "Ocurrio un error mientras se agregaban los datos.";
      } 
   } 
   catch (Exception $e) 
   {
      echo $e->getMessage();
   }
}

function update()
{
   include 'connectionDB.php';
   $iniCon = new connDB();
   $iniCon->openConn();

   $nombre = trim($_REQUEST['inputNombre']);
   $apellidos = trim($_REQUEST['inputApellidos']);
   $carrera = trim($_REQUEST['selectCarrera']);
   $boleta = trim($_REQUEST['inputNumBoleta']);

   $query = "UPDATE `infoalumnos`
            SET `nombre` = :nombre, 
            `apellidos` = :apellidos, 
            `carrera` = :carrera 
            WHERE `boleta` = :boleta";

   $consulta = $iniCon->insertQuery($query);
   $consulta->bindParam(':nombre', $nombre, PDO::PARAM_STR, 30);
   $consulta->bindParam(':apellidos', $apellidos, PDO::PARAM_STR, 30);
   $consulta->bindParam(':carrera', $carrera, PDO::PARAM_STR, 30);
   $consulta->bindParam(':boleta', $boleta, PDO::PARAM_STR, 30);

   if ($consulta->Execute()) 
   {
         echo "success";
   } 
   else 
   {
      echo "Ocurrio un error mientras se agregaban los datos.";
   }
  
   try 
   {
   } 
   catch (Exception $e) 
   {
      echo $e->getMessage();
   }
}

function delete()
{
   try 
   {
      include 'connectionDB.php';
      $numBoleta = array_key_exists("numBoleta", $_REQUEST) ? $_REQUEST["numBoleta"] : "";
      $iniCon = new connDB();
      $iniCon->openConn();

      $query = "DELETE FROM infoalumnos WHERE boleta=:boleta";
      $consulta = $iniCon->insertQuery($query);
      $consulta->bindParam(':boleta', $numBoleta, PDO::PARAM_STR, 30);

      if ($consulta->Execute()) 
      {
         echo "success";
      } 
      else 
      {
         echo "Ocurrio un error mientras se agregaban los datos.";
      }
   } 
   catch (Exception $e) 
   {
      echo $e->getMessage();
   }
}
