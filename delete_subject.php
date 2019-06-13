<?php include("includes/connection.php");?>
<?php include("includes/functions.php");?>
<?php
	if(intval($_GET['subj'])){
		$id = htmlspecialchars($_GET['subj']);
		$delete_query = "DELETE FROM subjects 
						WHERE id = {$id} 
						LIMIT 1 ";
		$delete = $connection->prepare($delete_query);
		$delete->execute();
		$result = $delete->rowCount();
		$message = $result == 1 ? "Раздел успешно удален" : "Удаление раздела не удалось";
		echo $message;
		echo '<a href="content.php">Вернуться на главную</a>';
	}else{
		header("location: index.php");
	}
?>