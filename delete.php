<?php
include 'mongodb.php'; // Conecta ao MongoDB

// Verifica se o parâmetro 'id' foi enviado via GET
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // Remove a tarefa da coleção 'tasks' com base no ID
  $collection->deleteOne(['_id' => new MongoDB\BSON\ObjectId($id)]);
}

// Redireciona de volta para a página principal
header('Location: index.php');
