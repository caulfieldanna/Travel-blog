<?php 
  require "../includes/config.php";
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

   <?php include "../includes/header.php"; ?>

    <div id="content">
      <div class="container">
        <div class="row">
          <section class="content__left col-md-8">
            <div class="block">
              <h3>About</h3>
              <div class="block__content">
                <img src="/static/images/post_img.jpg">

                <div class="full-text">

<h2>Metus Arcu Magnis Velit Quam Bibendum</h2>

<p>Eu hymenaeos quisque phasellus sagittis, quis. Sociis enim dictumst odio <em>sagittis</em> molestie aliquet, in vehicula augue, tincidunt libero augue elit aliquet lacus felis a diam aliquet <em>quam</em> dolor sociosqu. Luctus primis orci elit sed placerat mi adipiscing <strong>nam</strong> habitasse Eget curae; cum congue varius laoreet. Neque semper tempus.</p>
<h2>Rutrum Imperdiet Nonummy Etiam</h2>

<p>Eros, turpis feugiat <em>metus</em> mus nibh elementum laoreet. Velit nibh arcu turpis dignissim fusce <em>dictumst</em> sapien hymenaeos dictumst. Nec mattis ultricies <strong>aliquet</strong> sociis. Volutpat nonummy velit primis, cursus. <strong>Aliquet</strong> mauris cursus. Pharetra <em>est</em> etiam scelerisque magna. Eleifend massa orci pulvinar.</p>
<h2>Hymenaeos Gravida</h2>

<p>Nostra parturient justo taciti duis vehicula pede viverra augue Quam semper. Scelerisque praesent sollicitudin faucibus, et. Taciti nisl quam tincidunt curabitur. Laoreet velit ipsum auctor eros netus sodales nam lacinia interdum imperdiet purus quam eu nulla dapibus ultricies cursus quisque hac. Non nisi adipiscing. <strong>Orci</strong> elit magna. Nullam ligula. Cras proin congue viverra. Ligula urna dui nisi rutrum magnis. Ut fames turpis blandit netus cum maecenas dis rutrum <em>quam</em> diam tellus integer proin parturient. Orci phasellus dis. In fames <em>pede</em> aptent nostra ornare nullam senectus pharetra nonummy porta dapibus ridiculus.</p>

<p>Curabitur volutpat porttitor ac faucibus magnis. Nostra sit sit elit curabitur potenti <strong>consequat</strong> semper leo ridiculus viverra <strong>velit</strong> ridiculus. Nisl vitae felis tristique per cras ridiculus dui dis duis mi cubilia porttitor placerat. Egestas ut aliquet diam venenatis Tempus euismod enim et.</p>

<p>Scelerisque sodales turpis commodo vehicula ultrices odio tortor eu lorem sociosqu, bibendum dignissim. Fringilla <strong>lobortis</strong> nonummy tellus <em>sodales</em> orci integer aptent. Venenatis mattis senectus augue massa nec elit sodales. Morbi condimentum dis potenti tempor fusce bibendum pharetra elementum neque eleifend. Libero vulputate sociis morbi felis cras <em>maecenas</em> interdum <strong>Lacus</strong> congue odio neque elementum. Primis, proin velit scelerisque nonummy nunc est. Phasellus vitae <em>libero</em> platea suscipit rhoncus magna. Sed porta rutrum euismod. Arcu. Metus ante est mollis gravida cubilia cum. Accumsan primis pede potenti.</p>
<h2>Arcu Platea Ipsum</h2>

<p>Magna cubilia montes morbi libero, vulputate est tristique tellus commodo pulvinar curae; primis nisl bibendum. Interdum fringilla condimentum. Netus turpis ipsum faucibus natoque ultricies imperdiet phasellus diam neque faucibus viverra conubia mollis pharetra mauris nisi nulla suscipit. Id vulputate libero eros class dui id enim luctus. Pharetra libero eros mus turpis. Curae; mus phasellus sem natoque laoreet <em>urna</em> dapibus vel. Non tempor. Nibh donec felis ligula netus ut. Sem vehicula erat ridiculus lacinia proin diam dui sagittis nostra erat Leo, nascetur felis luctus aliquam magnis. Sit odio class ante accumsan nisi odio porta vestibulum viverra suspendisse arcu.</p>

                </div>
              </div>
            </div>
            
          </section>
          <section class="content__right col-md-4">
            <?php include "../includes/sidebar.php"; ?>
          </section>
        </div>
      </div>
    </div>

  <?php include "../includes/footer.php"; ?>

  </div>

</body>
</html>