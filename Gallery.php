<?php 
  require "includes/config.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $config['title']; ?></title>

  <!-- Bootstrap Grid -->
  <link rel="stylesheet" type="text/css" href="../media/assets/bootstrap-grid-only/css/grid12.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet"> 

  <!-- Custom -->
  <link rel="stylesheet" type="text/css" href="../media/css/style.css">
</head>
<body>

  <div id="wrapper">
  <!-- HEADER -->
  <?php include "../blog/includes/header.php"; ?>


      <div class="gallery">
        
       <?php 
       // Берет из бд изображения 
          $articles = mysqli_query($connection, "SELECT * FROM `articles` ORDER BY `id` DESC LIMIT 50");
       ?>

       <?php 
        while( $art = mysqli_fetch_assoc($articles) )
        {
          ?>
        <div class="gallery__1">
          <div class="gallery__content">
          <!-- При нажатии на изображение отправляет на страницу статьи  -->
              <a href="/article.php?id=<?php echo $art['id']; ?>""><img src="static/images/<?php echo $art['image']; ?>"></a>
          </div>
          
        </div>
       <?php
        }
      ?>
          <!-- <section class="content__left col-md-8">
          </section>
          <section class="content__right col-md-4">
            <?php //include "includes/sidebar.php"; ?>
          </section> -->

</div>
  <!-- FOOTER -->
  <?php include "includes/footer.php"; ?>

  

</body>
</html>