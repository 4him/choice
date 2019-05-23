<?php include("includes/connection.php");?>
<?php include("includes/functions.php");?>
<!DOCTYPE html>
<html>

<head>
 <meta charset="utf-8">
 <title>Как сделать правильный выбор?</title>
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="stylesheet" type="text/css" href="bootstrap">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="/css/main.css">
 </head>

<body>
 <section class="line container-fluid"></section>
 <section class="main-content container">
  <section class="row">
   <section class="col-lg-4 col-md-12 col-sm-12 offset-lg-8">
    <form class="search-form" action="#" method="post">
     <input type="text" name="search" placeholder="Поиск">
     <span>
      <button type="submit"><i class="fas fa-search"></i>
      </button>
     </span>
    </form>
   </section>
  </section>
  
  <header class="row">
   <section class="navigation col-lg-3">
    <section class="row">
     <section class="logo col-xs-12 d-none d-lg-block">
      <img src="images/choice_logo.png" alt="">
     </section>
    </section>
    <?php
    
     if(isset($_GET['subj'])){
      $sel_subject = htmlspecialchars($_GET['subj']);
      $sel_page = null;
     }elseif(isset($_GET['page'])){
      $sel_subject = null;
      $sel_page = htmlspecialchars($_GET['page']);
     }else{
      $sel_subject = null;
      $sel_page = null;
     }
    
    ?>
     <?php echo "Subject id is:".$sel_subject; ?>
     <?php echo "Page id is:".$sel_page; ?>
    <nav class="">
     <ul>
      <li><a href="index.php">Главная</a></li>
      <?php 
       // start subjects loop
      $subjects_result = get_all_subjects();
       // print subjects menu
			 $all_subjects = $subjects_result->fetchAll();
			 foreach($all_subjects as $subject){
       echo '<li ';
        if($sel_subject == $subject['id']){
          echo ' class=" selected " ';
        }
       echo '><a href="index.php?subj='
        .urlencode($subject['id']).
        '">'.$subject['name'].'</a>';
       echo '<ul>';
         // pages loop
        
          $pages_result = get_all_pages($subject['id']);
             // print pages menu
              while ($page = $pages_result->fetch()) {
                 echo '<li ';
                 if($sel_page == $page['id']){
                  echo ' class="selected" ';
                }
                 echo '><a href="index.php?page='.urlencode($page['id']).'">'.$page['name'].'</a></li>';
                 }
         echo '</li>'; 
             // finish pages loop
         echo '</ul>';
       }
       // end subjects loop
       ?>
      <!-- 
            <li><a href="#">Главная</a></li>
            <li><a href="#">Персонажи</a>
              <ul>
                <li><a href="#">Давид</a></li>
                <li><a href="#">Вирсавия</a></li>
                <li><a href="#">Урия</a></li>
                <li><a href="#">Нафан</a></li>
              </ul>
            </li>
            <li><a href="#">Советы</a></li>
            <li><a href="#">Решение</a></li>
            <li><a href="#">Вопросы-Ответы</a></li>
            <li><a href="#">Статья</a></li>
            <li><a href="#">Публикации</a></li>
            <li><a href="#">Войти</a></li> -->
       <li><a href="login.php">Войти</a></li>
     </ul>
     <!-- </div> -->
    </nav>
   </section>
   <section class="slider col-lg-9">
    <ul>
     <li><img src="images/promo01.jpg" alt="" width="100%"></li>
    </ul>
   </section>
  </header>
  <!-- end of header section -->
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
 <footer class="container-fluid">
  <section class="main-content">
   <section class="row">
    <section class="copyright col-lg-3">
     2019 &copy; ScripTehInfo
    </section>
    <section class="social col-lg-3 offset-lg-6">
     <a href="#"><img src="images/facebook.png" alt=""></a>
     <a href="#"><img src="images/twitter.png" alt=""></a>
     <a href="#"><img src="images/rss.png" alt=""></a>
     <a href="#"><img src="images/linkedin.png" alt=""></a>
     <a href="#"><img src="images/youtube.png" alt=""></a>
    </section>
   </section>
  </section>
 </footer>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>