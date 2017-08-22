<!-- гугл карта -->
<div class="block">
  <h3>I'm here &darr; </h3>
  <div class="block__content">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d393736.4209524147!2d-120.13103625205322!3d39.55812412237981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x809940ae9292a09d%3A0x40c5c5ce7438f787!2z0KDQuNC90L4sINCd0LXQstCw0LTQsA!5e0!3m2!1sru!2sru!4v1500550514378" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
</div>

<!-- блок лучших постов -->
   <div class="block">
    <h3>Top of read posts</h3>
    <div class="block__content">
      <div class="articles articles__vertical">
        <?php 
          $articles = mysqli_query($connection, "SELECT * FROM `articles`   ORDER BY `views` DESC LIMIT 5");
       ?>

       <?php 
        while( $art = mysqli_fetch_assoc($articles) )
        {
          ?>
            <article class="article">
              <a href="/article.php?id=<?php echo $art['id']; ?>"><div class="article__image" style="background-image: url(../static/images/<?php echo $art['image']; ?>);"></div></a>
              <div class="article__info">
                 <a href="/article.php?id=<?php echo $art['id']; ?>"><?php echo $art['title']; ?></a>
              <div class="article__info__meta">
              <?php 
                $art_cat = false;
                foreach ( $categories as $cat ) 
                {
                  if( $cat['id'] == $art['categorie_id'] )
                  {
                    $art_cat = $cat;
                    break;
                  }
                }
               ?>
                 <small>Category: <a href="/articles.php?categorie=<?php echo $art_cat['id']; ?>"><?php echo $art_cat['title']; ?></a></small>
               </div>
                <div class="article__info__preview"><?php echo mb_substr(strip_tags($art['text']), 0, 100, 'utf-8') . ' ...'; ?></div>
               </div>
            </article>
          <?php
        }
      ?>

    </div>
  </div>
</div>

<!-- блок с комментариями -->
      <div class="block">
        <h3>Comments</h3>
          <div class="block__content">
            <div class="articles articles__vertical">

        <?php 
          $comments = mysqli_query($connection, "SELECT * FROM `comments`  ORDER BY `id` DESC LIMIT 5");
       ?>

       <?php 
        while( $comment = mysqli_fetch_assoc($comments) )
        {
          ?>
            <article class="article">
              <div class="article__image" style="width: 100px; height: 100px;  margin-top: -10px; background-image: url(https://www.gravatar.com/avatar/<?php echo md5($comment['email']); ?>?s=125);"></div>

              <div class="article__info">
                 <a href="/article.php?id=<?php echo $comment['articles_id']; ?>"><?php echo $comment['author']; ?></a>
             
             <div class="article__info__meta"></div>

                <div class="article__info__preview"><?php echo mb_substr(strip_tags($comment['text']), 0, 100, 'utf-8'); ?></div>
               </div>
            </article>
          <?php
        }
      ?>

  </div>
 </div>
</div>