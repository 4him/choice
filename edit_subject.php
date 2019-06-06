<?php include("includes/connection.php");?>
<?php include("includes/functions.php");?>
<?php include("header.php"); ?>
<?php 
  $subject = get_subject_by_id($sel_subject);
?>
  
   <section class="slider col-lg-9">
   <h3 class="offset-sm-2">Редактирование раздела: </h3>
   <form method="post" action="create_subject.php">
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
        <button type="submit" class="btn btn-success">Сохранить изменения</button>
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