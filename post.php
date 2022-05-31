<?php
include_once("templates/header.php");

if (isset($_GET['id'])) {

  $postID = $_GET['id'];
  $currentPost;

  foreach ($posts as $post) {
    if ($post['id'] == $postID) {
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
    <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum aut iste illo fuga fugit veniam animi, tempora voluptatem aliquam id laudantium itaque enim facere optio possimus eligendi tempore laboriosam debitis.
      Vel accusantium dolorum culpa esse ducimus non, debitis expedita aut nobis ut, qui neque minima voluptas, iusto eligendi est enim porro magni vitae? Soluta tempore dicta quas exercitationem distinctio incidunt.
      Ut dicta autem maxime eveniet aperiam odio harum modi consequatur debitis praesentium voluptate earum officia, voluptatibus incidunt quas quos voluptatum, nobis cum iure, odit error officiis! Asperiores sint molestiae tenetur?
      Eos obcaecati recusandae consequatur eius inventore assumenda alias amet quisquam natus non illum deserunt atque, dolorum odio cupiditate suscipit numquam? Magni cum earum delectus velit. Nihil officia perspiciatis ipsa placeat!
      Cum inventore quos nulla, soluta sint et officiis sed dignissimos est praesentium neque officia commodi culpa magni vitae ipsa nesciunt illo. Adipisci sapiente expedita error, temporibus mollitia nisi quaerat ipsam!</p>
    <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum aut iste illo fuga fugit veniam animi, tempora voluptatem aliquam id laudantium itaque enim facere optio possimus eligendi tempore laboriosam debitis.
      Vel accusantium dolorum culpa esse ducimus non, debitis expedita aut nobis ut, qui neque minima voluptas, iusto eligendi est enim porro magni vitae? Soluta tempore dicta quas exercitationem distinctio incidunt.
      Ut dicta autem maxime eveniet aperiam odio harum modi consequatur debitis praesentium voluptate earum officia, voluptatibus incidunt quas quos voluptatum, nobis cum iure, odit error officiis! Asperiores sint molestiae tenetur?
      Eos obcaecati recusandae consequatur eius inventore assumenda alias amet quisquam natus non illum deserunt atque, dolorum odio cupiditate suscipit numquam? Magni cum earum delectus velit. Nihil officia perspiciatis ipsa placeat!
      Cum inventore quos nulla, soluta sint et officiis sed dignissimos est praesentium neque officia commodi culpa magni vitae ipsa nesciunt illo. Adipisci sapiente expedita error, temporibus mollitia nisi quaerat ipsam!</p>
  </div>

  <aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
      <?php foreach ($currentPost['tags'] as $tag) : ?>
        <li><a href="#"><?= $tag ?></a></li>
      <?php endforeach; ?>
    </ul>
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
      <?php foreach ($categories as $category) : ?>
        <li><a href="#"><?= $category ?></a></li>
      <?php endforeach; ?>
    </ul>
  </aside>
</main>


<?php
include_once("templates/footer.php");
?>