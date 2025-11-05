<?php
include 'mongodb.php'; 
$tasks = $collection->find(); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Minha Lista de Tarefas</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <h1> Lista de Tarefas</h1>

  <!-- Formulário para adicionar nova tarefa -->
  <form action="add.php" method="POST">
    <input type="text" name="title" placeholder="Digite uma nova tarefa" required>
    <button type="submit">Adicionar</button>
  </form>

  <!-- Lista de tarefas -->
  <ul>
    <?php foreach ($tasks as $task): ?>
      <li>
        <?= $task['title'] ?> - <strong><?= $task['status'] ?? 'pendente' ?></strong>
        <a href="update.php?id=<?= $task['_id'] ?>">[Concluir]</a>
        <a href="delete.php?id=<?= $task['_id'] ?>">[Excluir]</a>
      </li>
    <?php endforeach; ?>
  </ul>
</body>
</html>
