<?php include("includes/connection.php");?>
<?php include("includes/functions.php");?>
<?php
if(isset($_POST['submit_btn'])){
   $id = htmlspecialchars($_GET['subj']);

   $name = htmlspecialchars($_POST['name']);
   $visibility = htmlspecialchars($_POST['visibility']);
   $position = htmlspecialchars($_POST['position']);
   $content = htmlspecialchars($_POST['description']);

   $errors = array();

   $field_names = ['Название'=>$name, 'Видимый'=>$visibility, 'Позиция'=>$position, 'Содержание'=>$content];

   foreach($field_names as $key => $field){
     if(!isset($field) || (empty($field) && $key !== 'Видимый') ){
     $errors[] = $key;
    }
   }

   if(empty($errors)){
   $insert_query = "UPDATE subjects SET
                   name = '{$name}',
                   position = $position,
                   visible = $visibility,
                   content = '{$content}' 
                   WHERE id = $id
                   ";
   $new_subject = $connection->prepare($insert_query);
   $new_subject->execute();
    $message = "Вы успешно обновили раздел";
   }else{
    $message = "Проверьте поля формы на заполнение: <br/>";
    $output = '';
    foreach($errors as $single){
     $output .= " - $single <br/>";
    }
   }
   $message .= $output;
}
?>
<?php include("header.php"); ?>
<?php 
  $subject = get_subject_by_id($sel_subject);
?>
  
   <section class="slider col-lg-9">
   <h3 class="offset-sm-2">Редактирование раздела: </h3>
   <?php
    if(!empty($message)){
     echo $message;
    }
    ?>
   <form method="post" action="edit_subject.php?subj=<?php echo $subject['id']; ?>">
    <div class="form-group row">
      <label for="title" class="col-sm-2 col-form-label text-right">Название</label>
      <div class="col-sm-10">
      <input type="input" class="form-control form-control-sm" id="title" name="name" placeholder="Внесите название" value="<?php echo $subject['name']; ?>">
      </div>
    </div>
    <fieldset class="form-group">
      <div class="row">
        <legend class="col-sm-2 col-form-label text-right">Видимый</legend>
        <div class="col-sm-10">
          <div class="form-check custom-control-inline">
            <input class="form-check-input" type="radio" name="visibility" id="gridRadios1" value="1"
            <?php 
               if($subject['visible'] == 1) echo " checked ";
            ?>
            >
            <label class="form-check-label col-form-label-sm" for="gridRadios1">
              Видимый
            </label>
          </div>
          <div class="form-check custom-control-inline">
            <input class="form-check-input" type="radio" name="visibility" id="gridRadios2" value="0"
            <?php 
               if($subject['visible'] == 0) echo " checked ";
            ?> 
            >
            <label class="form-check-label col-form-label-sm" for="gridRadios2">
              Скрытый
            </label>
          </div>
        </div>
      </div>
    </fieldset>
    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label text-right">Позиция</label>
      <div class="col-sm-10">
        <select class="form-control form-control-sm" name="position">
         <?php 
          $count_subjects = count(get_all_subjects()->fetchAll());
          for($curr = 1; $curr <= $count_subjects+1; $curr++){
          echo '<option value="'.$curr.'"';
           if($curr == $subject['position']){
            echo "selected";
           }
          echo '>'.$curr.'</option>';
         }
         ?>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label class="col-form-label col-sm-2 text-right" for="description">Описание раздела</label>
      <div class="col-sm-10">
        <textarea class="form-control" id="description" name="description" rows="3"><?= $subject['content']; ?></textarea>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-2"></div>
      <div class="col-sm-10"> 
        <button type="submit" class="btn btn-success" name="submit_btn" value="sub">Сохранить</button>
        <a href="delete_subject.php?subj=<?php echo $subject['id']; ?>" class="btn btn-danger" onclick="return confirm('Вы уверены, что желаете удалить данный раздел?');">Удалить</a>
         <a href="new_page.php?subj=<?php echo $subject['id']; ?>" class="btn btn-success offset-sm-3">Добавить статью</a>
      </div>
    </div>
  </form>
</section>
<!-- End of form  --> 
   </section>
  </section>
  <!-- end of main-content section -->
 </section>
 <?php include("footer.php"); ?>