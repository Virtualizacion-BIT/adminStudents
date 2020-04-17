<?php
include_once('../config/Database.php');

class Student
{
  public $conn;

  function __construct()
  {
    $db = new Database();
    $this->conn = $db->__construct();
  }

  /**
   * Función que nos permitirá insertar un nuevo alumno.
   * @param => $params: Parametros que se envían en el formulario.
   * @return => Retorna la respuesta de la ejecuación de la consulta.
   */
  function save($params)
  {
    /* Inicializamos las variables */
    $firstName = $params['firstName'];
    $lastName = $params['lastName'];
    $email = $params['email'];
    $note = $params['note'];
    $image = $params['image'];

    // Creamos la consulta para insertar los datos.
    $insert = " INSERT INTO Students VALUES (NULL, '$firstName', '$lastName', '$email', '$note', '$image') ";

    return mysqli_query($this->conn, $insert); //Retornamos el resultado de la consulta.
  }

  function update($params)
  {
    /* Inicializamos las variables */
    $firstName = $params['firstName'];
    $lastName = $params['lastName'];
    $email = $params['email'];
    $note = $params['note'];
    $image = $params['image'];
    $id = $params['id'];

    // Creamos la consulta para insertar los datos.
    $insert = " UPDATE Students SET firstName = '$firstName', lastName = '$lastName', email = '$email', note = '$note', image = '$image' WHERE id = $id ";

    return mysqli_query($this->conn, $insert); //Retornamos el resultado de la consulta.
  }

  function getStudents()
  {
    $sql = "SELECT * FROM Students";
    return mysqli_query($this->conn, $sql);
  }

  function getOne($id)
  {
    $sql = "SELECT * FROM Students WHERE id = $id ";
    return mysqli_query($this->conn, $sql);
  }

  function remove($id)
  {
    $sql = " DELETE FROM Students WHERE id = $id ";
    return mysqli_query($this->conn, $sql);
  }
}
