<?php include("includes/connection.php");?>
<?php require_once("includes/functions.php");?>
<?php
print_r($_POST);

$name = htmlspecialchars($_POST['name']);
$visibility = htmlspecialchars($_POST['visibility']);
$position = htmlspecialchars($_POST['position']);
$content = htmlspecialchars($_POST['description']);

$insert_query = "INSERT INTO subjects 
                 (name, position, visible, content)
                 VALUES
                 ('{$name}', $position, $visibility, '{$content}')";
$new_subject = $connection->prepare($insert_query);
$new_subject->execute();
?>