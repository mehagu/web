<?php

require_once "db.php";

$stmt = $pdo->query("select * from works");
$works = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>мой сайт</title>
	<link rel="stylesheet" href="assets/style.css">
   <link rel="stylesheet" href="assets/lightgallery-bundle.min.css">
   <link rel="stylesheet" href="assets/lg-transitions.css">
   <script src="js/lightgallery.min.js"></script>
   
</head>
<body>

<section class="first-screen section-bg">
  <div class="container">
    <div>
      <h1>Веб-разработчик <br> к вашим услугам</h1>
    </div>
    <div>
      <a class="btn btn-bg" onclick="smoothScroll('#about')"  href="#">Узнать больше</a>
      <a class="btn btn-outline" onclick="smoothScroll('#portfolio')" href="#">Нанять меня</a>
    </div>   
  </div>
 
</section>

<a class="chevron" href="#container">
   <img src="imag/pngegg.png" alt="scroll">
</a>


<section>
  <div id="container" class="container">
    <h2 id="about" >Обо мне</h2>   
  
 	 <p>
	С другой стороны, повышение уровня гражданского сознания обеспечивает широкому кругу специалистов участие в формировании существующих финансовых и административных условий!
  	</p>
 	 <p>
		Соображения высшего порядка, а также постоянное информационно-техническое обеспечение нашей деятельности, в значительной степени обуславливает создание системы масштабного изменения ряда параметров.
  	</p>
  	</div>
</section>

<section>
  <div class="container">
    <h2 id="portfolio" >Галлерея</h2>   
  <div id="lightgallery" class="gallery">
    <?php foreach($works as $work): ?>
    <a class="img-wrapper" 
 data-sub-html="<?= $work['name'] ?>" 
 href="<?= $work['file_path'] ?>">
        <img src="<?= $work['file_path'] ?>" />
    </a>
    <?php endforeach; ?>
</div>
</div>
</section>




<section class="section-bg">
<div class="container">
   <div class="d-flex">
       <div class="w-60 pr-4">
       	 <h2>Давайте работать вместе</h2>
 		 <p>
      		Практический опыт показывает, что новая модель организационной деятельности способствует повышению актуальности системы масштабного изменения ряда параметров!
  		 </p>
       </div>
       <div class="w-40"></div>
        <form action="feadback.php" method="POST">
         <input name="name" required type="text" placeholder="Как к вам обращаться">
         <input name="email" required type="email" placeholder="Ваш email">
          <textarea name="text" required rows="4" placeholder="Сообщение"></textarea>
         <input class="btn btn-bg" type="submit" value="Отправить">
</form>
   </div>
</div>
</section>
<footer>
    <div class="container">
        Copyright &copy; 2020. Все права защищены.
    </div>
</footer>

<script>
   lightGallery(document.getElementById('lightgallery'));
   function smoothScroll(selector) {
    event.preventDefault();

    document.querySelector(selector).scrollIntoView({
         behavior: 'smooth'
    });
   }
</script>
</body>
</html>