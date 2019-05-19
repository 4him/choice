<?php 
function confirm_query ($query_result){
  if(!$query_result){
   die("There is an error during query.");
  }
}

function get_all_subjects(){
 global $connection;
 $subjects_query = "SELECT * from subjects";
 $all_subjects = $connection->prepare($subjects_query);
 $all_subjects->execute();
 confirm_query($all_subjects);
 return $all_subjects;
}

function get_all_pages($subject_id){
 global $connection;
  $pages_query = 
   "SELECT * from pages 
   where subject_id = {$subject_id}";
 
  $all_pages = $connection->prepare($pages_query);
  $all_pages->execute();
  confirm_query($all_pages);
 return $all_pages;
}

?>