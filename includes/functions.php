<?php 
function confirm_query($query_result){
	if(!$query_result){
		die("There is an error during query");
	}
}

function get_all_subjects(){
	global $connection;
	$all_subjects = $connection->prepare(
		"SELECT * from subjects
		ORDER by position ASC");
	$all_subjects->execute();
	confirm_query($all_subjects);
	return $all_subjects;
}

function get_all_pages($subject_id = 1){
	global $connection;
	$pages_query = "SELECT * from pages
	where subject_id = '{$subject_id}' 
	ORDER by position ASC ";
	$all_pages = $connection->prepare($pages_query);
	$all_pages->execute();
	confirm_query($all_pages);
	return $all_pages;
}

function find_selected_page() {
	global $sel_page;
	global $sel_subject;
	if(isset($_GET['subj'])){
		$sel_subject = htmlspecialchars($_GET['subj']);
		$sel_page = null;
	}else if(isset($_GET['page'])){
		$sel_subject = null;
		$sel_page = htmlspecialchars($_GET['page']);
	}else{
		$sel_subject = null;
		$sel_page = null;
	}
}

function navigation($sel_subject){
	// start subjects loop
	$subjects_result = get_all_subjects();
	// print subjects menu
	while ($subject = $subjects_result->fetch()) {
		echo '<li';
			if($subject['id'] == $sel_subject){
				echo ' class=" selected "'; 
			}
		echo '><a href="posts.php?subj='.urlencode($subject['id']).'">' .$subject['name'].'</a>';
	// start pages loop
		$pages_result = get_all_pages($subject['id']);
	// check if any result on pages
		if($pages_result->rowCount() !=0 ){
				// print pages menu
			echo '<ul>';
			while ($page = $pages_result->fetch()){
				echo '<li><a href="single.php?page='.$page['id'].'">'.$page['name'].'</a></li>';
			}
			echo '</ul>';
				// finish pages loop print
		}
		echo '</li>';
	}
}

?>