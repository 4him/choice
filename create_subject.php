<?php include("includes/connection.php");?>
<?php require_once("includes/functions.php");?>
<?php

$name = htmlspecialchars($_POST['name']);
$visibility = htmlspecialchars($_POST['visibility']);
$position = htmlspecialchars($_POST['position']);
$content = htmlspecialchars($_POST['description']);

$error = array();

$field_names = ['Название'=>$name, 'Видимый'=>$visibility, 'Позиция'=>$position, 'Содержание'=>$content];

foreach($field_names as $key => $field){
  if(!isset($field) || empty($field) ){
  $error[] = "Check your form - insert - ".$key;
 }
}

if(empty($error)){
$insert_query = "INSERT INTO subjects 
                 (name, position, visible, content)
                 VALUES
                 ('{$name}', $position, $visibility, '{$content}')";
$new_subject = $connection->prepare($insert_query);
$new_subject->execute();
 header("Location: content.php");
}else{
 print_r($error);
echo '<a href="content.php">Вернуться на главную</a>';
}


?>