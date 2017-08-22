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



  <form class="form" method="POST" action="admin.php" >
  <?php  
  // if ($send)
  //    $sql = mysql_query("INSERT  into pages (title, content)
  //           values ('".$_POST['title']."', '".$_POST['text']."');");

   mysqli_query($connection, "INSERT INTO `articles`(`title`, `image`, `text`, `categorie_id`, `pubdate`) VALUES ('".$_POST['title']."','".$_POST['image']."','".$_POST['text']."','".$cat['id']."', NOW()" ); 

  ?>

      <div id="comment-add-form" class="block">
        <h3>Add your comment</h3>
        <div class="block__content">
  <div class="form__group">
    <div class="row">
      <div class="col-md-6">
        <input type="text" class="form__control" required="" name="title" placeholder="Title" value=" <?php echo $_POST['title']; ?> ">
      </div>
      <div class="col-md-6">
        <input type="file" class="form__control" name="image" multiple accept="image/*,image/jpeg" required="" name="image" placeholder="image" value=" <?php echo $_POST['image']; ?> ">
      </div>
<!--       <div class="col-md-4">
        <input type="text" class="form__control" required="" name="text" placeholder="text" value=" <?php echo $_POST['text']; ?> ">
      </div> -->
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
  <?php include "includes/footer.php"; ?>

  </div>

</body>
</html>

<!-- $config = @mysql_connect('server','username','password'); -->
<!-- <table border="1" align="center">
  <tr>
    <td>Введите заголовок страницы</td>
    <td>Введите текст</td>
  </tr>
  <tr>
    <td valign="top"><input name="my_title" type="text"
        size="50" /></td>
    <td valign="top"><textarea name="my_text" cols="60"
        rows="30" > </textarea></td>
  </tr>
</table>
<div align="center">
<input name="send" type="submit" value="Отправить" />
</div> -->