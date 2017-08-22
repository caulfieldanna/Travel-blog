 <header id="header">
      <div class="header__top">
        <div class="container">
          <div class="header__top__logo">
          <a href="/"  class="logo"><h1><?php echo $config['title']; ?><h1></a>
            
          </div>
          <nav class="header__top__menu">
            <ul>
              <li><a href="/">Home page</a></li>
              <li><a href="/pages/about_me.php">About</a></li>
              <li><a href="<?php echo $config['vk_url']; ?>" target="_blank">I'm in VK</a></li>
            </ul>
          </nav>
        </div>
      </div>

      <?php 
          $categories_q = mysqli_query($connection, "SELECT * FROM `articles_categories`");
          $categories = array();
          while ( $cat = mysqli_fetch_assoc($categories_q) )
          {
            $categories[] = $cat;
          }
       ?>

      <div class="header__bottom">
        <div class="container">
          <nav>
            <ul>
            <?php 
              foreach( $categories as $cat ) 
              {
                ?>
                <li><a href="/<?php echo $cat['title'] . '.php';?>"><?php echo $cat['title']; ?></a></li>

                <?php
              }
            ?>
            </ul>
          </nav>
        </div>
      </div>
    </header>


    