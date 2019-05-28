<?php include("includes/connection.php");?>
<?php include("includes/functions.php");?>
<?php include("header.php"); ?>
  
   <section class="slider col-lg-9">
   <form method="post" action="create_subject.php">
    <div class="form-group row">
      <label for="title" class="col-sm-2 col-form-label text-right">Название</label>
      <div class="col-sm-10">
      <input type="input" class="form-control form-control-sm" id="title" name="name" placeholder="Внесите название">
      </div>
    </div>
    <fieldset class="form-group">
      <div class="row">
        <legend class="col-sm-2 col-form-label text-right">Видимый</legend>
        <div class="col-sm-10">
          <div class="form-check custom-control-inline">
            <input class="form-check-input" type="radio" name="visibility" id="gridRadios1" value="1" checked>
            <label class="form-check-label col-form-label-sm" for="gridRadios1">
              Видимый
            </label>
          </div>
          <div class="form-check custom-control-inline">
            <input class="form-check-input" type="radio" name="visibility" id="gridRadios2" value="0">
            <label class="form-check-label col-form-label-sm" for="gridRadios2">
              Скрытый
            </label>
          </div>
        </div>
      </div>
    </fieldset>
    <div class="form-group row">
     <?php 
     $count_subjects = count(get_all_subjects()->fetchAll());
         echo($count_subjects);
     ?>
      <label for="" class="col-sm-2 col-form-label text-right">Позиция</label>
      <div class="col-sm-10">
        <select class="form-control form-control-sm" name="position">
          <option selected>Укажите позицию</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label class="col-form-label col-sm-2 text-right" for="description">Описание раздела</label>
      <div class="col-sm-10">
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-2"></div>
      <div class="col-sm-10"> 
        <button type="submit" class="btn btn-success">Создать раздел</button>
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