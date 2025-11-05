<?php
include 'mongodb.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $collection->updateOne(
    ['_id' => new MongoDB\BSON\ObjectId($id)],
    ['$set' => ['status' => 'concluída']]
  );
}

header('Location: index.php');
