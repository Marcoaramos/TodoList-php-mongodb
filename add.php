<?php
include 'mongodb.php'; // Conecta ao MongoDB

// Verifica se o campo 'title' foi enviado via POST
if (isset($_POST['title'])) {
  $title = $_POST['title'];

  // Insere a nova tarefa na coleção 'tasks'
  $collection->insertOne([
    'title' => $title,
    'status' => 'pendente'
  ]);
}

// Redireciona de volta para a página principal
header('Location: index.php');
