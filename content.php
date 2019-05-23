<?php include("includes/connection.php");?>
<?php include("includes/functions.php");?>
<?php include("header.php"); ?>
  
   <section class="slider col-lg-9">
    <?php 
    $subject = get_subject_by_id($sel_subject);
    echo $subject['name'];
    ?>
   </section>
  </section>
  <!-- end of menu and slider section -->
  <section class="content">
   <section class="row">
    <section class="posts col-lg-4">
     <h2>О нас</h2>
     <p>Мы являемся организацией, которая преподает компьютерное обучение для всех категорий населения. Также мы стараемся передать всем нашим участникам не только технические знания, но и моральные ценности для развития позитивной стороны нашего общества.</p>
    </section>
    <section class="posts col-lg-4">
     <h2>Что мы делаем</h2>
     <p>В данный момент мы занимаемся разработкой веб-приложения (сайта), который будет помогать всем посетителям совершить правильный выбор, о котором впоследствии этот человек не будет сожалеть.</p>
    </section>
    <section class="posts col-lg-4">
     <h2>Контакты</h2>
     <p>Вы можете связаться с нами по данным, которые указаны ниже:</p>
     <address>
      Наш адрес: Кишинев, ул. Василе Александри 133<br>
      E-mail: scriptehinfo@gmail.com<br>
      Телефон: 79156655<br>
     </address>
    </section>
   </section>
   <!-- end of content section  -->
   <section class="row">
    <section class="portfolio col-lg-4">
     <h3>Последние работы</h3>
     <a href="#">Сайт</a>
     <a href="#">Публикации</a>
     <a href="#">Фото</a>
    </section>
    <section class="portfolio-icons col-lg-12">
     <ul class="row">
      <li class="col"><a href="#"><img src="images/thumb_1.jpg" alt=""></a></li>
      <li class="col"><a href="#"><img src="images/thumb_2.jpg" alt=""></a></li>
      <li class="col"><a href="#"><img src="images/thumb_3.jpg" alt=""></a></li>
      <li class="col"><a href="#"><img src="images/thumb_4.jpg" alt=""></a></li>
      <li class="col"><a href="#"><img src="images/thumb_1.jpg" alt=""></a></li>
      <li class="col"><a href="#"><img src="images/thumb_1.jpg" alt=""></a></li>
      <li class="col"><a href="#"><img src="images/thumb_1.jpg" alt=""></a></li>
      <li class="col"><a href="#"><img src="images/thumb_1.jpg" alt=""></a></li>
      <li class="col"><a href="#"><img src="images/thumb_2.jpg" alt=""></a></li>
      <li class="col"><a href="#"><img src="images/thumb_3.jpg" alt=""></a></li>
     </ul>
    </section>
   </section>
   <!-- end of portfolio section  -->
  </section>
  <!-- end of main-content section -->
 </section>
 <?php include("footer.php"); ?>