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
  <?php include "includes/header.php"; ?>
    
    <?php 
      $article = mysqli_query($connection, "SELECT * FROM `articles` WHERE `id` = " . (int) $_GET['id']);

      if( mysqli_num_rows($article) <= 0 )
      {
     ?>

    <div id="content">
      <div class="container">
        <div class="row">
          <section class="content__left col-md-8">
            <div class="block">
              <h3>Post is not found.</h3>
              <div class="block__content">
                <div class="full-text">
                  This artile doesn't exit!
                </div>
              </div>
            </div>
            
          </section>
          <section class="content__right col-md-4">
            <?php include "includes/sidebar.php"; ?>
          </section>
        </div>
      </div>
    </div>
    <?php 
  } else 
    { // 
      $art = mysqli_fetch_assoc($article);
      mysqli_query($connection, "UPDATE `articles` SET `views` = `views` + 1 WHERE `id` = " . (int) $art['id']); 
      ?>
      <div id="content">
      <div class="container">
        <div class="row">
          <section class="content__left col-md-8">
            <div class="block">
              <a><?php echo $art['views']; ?> views</a>
              <h3><?php echo $art['title']; ?></h3>
              <div class="block__content">
              <img src="static/images/<?php echo $art['image']; ?>" style="max-width: 100%;">
                <div class="full-text"><?php echo $art['text']; ?></div>
              </div>
            </div>

          <div class="block">
          <a href="#comment-add-form">Add your comment</a>
        <h3>Comments</h3>
          <div class="block__content">
            <div class="articles articles__vertical">
            <!-- обработчик формы комментариев -->
         <?php 
              if ( isset($_POST['do_post']) )
              {
                $errors = array();

                if( $_POST['name'] == '' )
                {
                  $errors[] = 'Enter your name';
                }
                if( $_POST['nickname'] == '' )
                {
                  $errors[] = 'Enter your nickname';
                }
                if( $_POST['email'] == '' )
                {
                  $errors[] = 'Enter your email';
                }
                if( $_POST['text'] == '' )
                {
                  $errors[] = 'Enter comment text';
                }

                if ( empty($errors) )
                {
                  // добавить комментарий

                  mysqli_query($connection, "INSERT INTO `comments` (`author`, `nickname`, `email`, `text`, `pubdate`, `articles_id`) VALUES ('".$_POST['name']."',  '".$_POST['nickname']."', '".$_POST['email']."', '".$_POST['text']."', NOW(), '".$art['id']. "')" );

                   // echo '<span style="color: #555; display: block; margin-bottom: 30px; font-size: 20px; padding-top: 60px;border-bottom: 1px solid lightsteelblue;" > Your comment has been added </span>';
                } else 
                {
                  // вывести ошибку
                  echo $errors['0'] . '<hr>';
                }
              }
             ?>
        <!-- выводит блок комментарив на страницу -->
        <?php 
          $comments = mysqli_query($connection, "SELECT * FROM `comments` WHERE `articles_id` = " . (int) $art['id'] . " ORDER BY `id` DESC");
        if( mysqli_num_rows($comments) <= 0)
        {
          echo "No comments yet.";
        }
        while( $comment = mysqli_fetch_assoc($comments) )
        {
          ?>
            <article class="article">
              <div class="article__image" style="background-image: url(https://www.gravatar.com/avatar/<?php echo md5($comment['email']); ?>?s=125);"></div>

              <div class="article__info">
                 <a href="/article.php?id=<?php echo $comment['articles_id']; ?>"><?php echo $comment['author']; ?></a>
             
             <div class="article__info__meta"></div>

                <div class="article__info__preview"><?php echo $comment['text']; ?></div>
               </div>
            </article>
          <?php
        }
      ?>
  </div>
 </div>
</div>
<!-- форма добавления комментариев -->
<div id="comment-add-form" class="block">
  <h3>Add your comment</h3>
  <div class="block__content">
    <form class="form" method="POST" action="/article.php?id=<?php echo $art['id']; ?>/comment-add-form">
      <div class="form__group">
        <div class="row">
          <div class="col-md-4">
            <input type="text" class="form__control" required="" name="name" placeholder="Name" value=" <?php echo $_POST['name']; ?> ">
          </div>
          <div class="col-md-4">
            <input type="text" class="form__control" required="" name="nickname" placeholder="Nickname" value=" <?php echo $_POST['nickname']; ?> ">
          </div>
          <div class="col-md-4">
            <input type="text" class="form__control" required="" name="email" placeholder="Email (won't be visible)" value=" <?php echo $_POST['email']; ?> ">
          </div>
        </div>
      </div>
      <div class="form__group">
        <textarea name="text" required="" class="form__control" placeholder="Comment text ..."><?php echo $_POST['text']; ?></textarea>
      </div>
      <div class="form__group">
        <input type="submit" class="form__control" name="do_post" value="Add comment">
      </div>
    </form>
  </div>
</div>
      </section>
      <!-- SIDEBAR -->
      <section class="content__right col-md-4">
        <?php include "includes/sidebar.php"; ?>
      </section>
    </div>
  </div>
</div>
      <?php
    }
  ?>
  <!-- FOOTER -->
  <?php include "includes/footer.php"; ?>

  </div>

</body>
</html>