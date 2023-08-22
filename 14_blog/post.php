<?php
   include_once("templates/header.php");

   if(isset($_GET['id'])){

    $postId = $_GET['id'];
    $currentPost;

     foreach($posts as $post) {

        if($post['id'] == $postId){
            $currentPost = $post;
        }
     }
   }


?>
  <main id="post-container">
     <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
                 <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. A reprehenderit soluta molestias, harum exercitationem est voluptates quam at hic aperiam architecto accusantium alias, ex tempore eos distinctio, commodi perferendis sequi?
                 Consequuntur iusto nobis alias nostrum iure aut aspernatur ad! Tempora atque laborum quo ducimus velit at rem omnis unde. Nulla quae delectus consequuntur libero explicabo vel ducimus vero quis placeat.
                 Placeat doloremque illo dicta consequuntur inventore quos voluptates quis deserunt, ipsam earum maiores minima iusto natus corporis minus libero culpa quaerat. Nihil itaque perspiciatis doloremque delectus maxime a? Molestiae, velit.
                 Deleniti, sed consequuntur delectus suscipit officia dolorum excepturi ad ut cumque distinctio totam quo placeat, aspernatur beatae officiis quidem praesentium dolorem, odio eos ducimus illum! Consectetur eligendi dolorum vitae vel!
                 Aliquid quisquam sunt ea excepturi fugit molestias odio autem. Culpa possimus, pariatur modi nulla debitis recusandae deleniti incidunt odio aspernatur repellendus ad distinctio est suscipit accusantium aliquid cupiditate tempore maiores.</p>

                 <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. A reprehenderit soluta molestias, harum exercitationem est voluptates quam at hic aperiam architecto accusantium alias, ex tempore eos distinctio, commodi perferendis sequi?
                 Consequuntur iusto nobis alias nostrum iure aut aspernatur ad! Tempora atque laborum quo ducimus velit at rem omnis unde. Nulla quae delectus consequuntur libero explicabo vel ducimus vero quis placeat.
                 Placeat doloremque illo dicta consequuntur inventore quos voluptates quis deserunt, ipsam earum maiores minima iusto natus corporis minus libero culpa quaerat. Nihil itaque perspiciatis doloremque delectus maxime a? Molestiae, velit.
                 Deleniti, sed consequuntur delectus suscipit officia dolorum excepturi ad ut cumque distinctio totam quo placeat, aspernatur beatae officiis quidem praesentium dolorem, odio eos ducimus illum! Consectetur eligendi dolorum vitae vel!
                 Aliquid quisquam sunt ea excepturi fugit molestias odio autem. Culpa possimus, pariatur modi nulla debitis recusandae deleniti incidunt odio aspernatur repellendus ad distinctio est suscipit accusantium aliquid cupiditate tempore maiores.</p>

        </div>
        
        <aside id="nav-container">
             <h3 id="tags-title">Tags</h3>
             <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                   <li> <a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
             </ul>
                  <h3 id="categories-title">Categorias</h3>
             <ul id="categories-list">
                <?php foreach($categories as $category): ?>
                     <li> <a href="#"><?= $category ?></a></li>
                <?php endforeach; ?>
             </ul>
        </aside>
  </main>
   
<?php
   include_once("templates/footer.php");
?>    
