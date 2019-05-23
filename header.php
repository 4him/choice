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
   <section class="col-lg-3 col-md-12 col-sm-12 offset-lg-9">
    <form class="search-form" action="#" method="post">
     <input type="text" name="search" placeholder="Поиск">
     <span>
      <button type="submit"><i class="fas fa-search"></i>
      </button>
     </span>
    </form>
   </section>
  </section>
  
  <section class="row">
   <section class="navigation col-lg-3">
    <section class="row">
     <section class="logo col-xs-12 d-none d-lg-block">
      <img src="images/choice_logo.png" alt="">
     </section>
    </section>
    <?php find_selected_page(); ?>
     <?php echo "Subject id is:".$sel_subject; ?>
     <?php echo "Page id is:".$sel_page; ?>
    <nav class="">
     <ul>
      <li><a href="index.php">Главная</a></li>
      <?php navigation($sel_subject, $sel_page); ?>
       <li><a href="new_subject.php">+ Создать новый</a></li>
       <li><a href="login.php">Войти</a></li>
     </ul>
     <!-- </div> -->
    </nav>
   </section>
<!--   End of heade and navigation section-->