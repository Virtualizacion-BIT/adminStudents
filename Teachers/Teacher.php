<?php
include_once('../config/Database.php');

class Teacher
{
  public $conn;

  function __construct()
  {
    $db = new Database();
    $this->conn = $db->__construct();
  }

  /**
   * Función que nos permitirá insertar un nuevo profesor.
   * @param => $params: Parametros que se envían en el formulario.
   * @return => Retorna la respuesta de la ejecuación de la consulta.
   */
  function save($params)
  {
    /* Inicializamos las variables */
    $firstName = $params['firstName'];
    $lastName = $params['lastName'];
    $email = $params['email'];
    $password = md5($params['password']);
    $course = $params['course'];

    // Creamos la consulta para insertar los datos.
    $insert = " INSERT INTO Teachers VALUES (NULL, '$firstName', '$lastName', '$email', '$password', '$course' ) ";

    return mysqli_query($this->conn, $insert); //Retornamos el resultado de la consulta.
  }

  function login($params)
  {
    $email = $params['email'];
    $password = md5($params['password']);
    $sql = " SELECT password FROM Teachers WHERE email = '$email' ";
    $result = mysqli_query($this->conn, $sql);
    if ($result->num_rows === 0){
      return false;
    }else{
      $teacher = mysqli_fetch_object($result);
      if ($password === $teacher->password){
        return true;
      }else{
        return false;
      }
    }
  }
}
