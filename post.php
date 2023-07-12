<?php 

include_once("templates/header.php");

if(isset($_GET['id'])){

  $postId = $_GET['id'];
  $currentPost ;

  foreach($posts as $post){
    if($post['id'] == $postId){
      $currentPost = $post;
    }
  }
}

?>
<main id="post-container">
  <div class="content-container">
    <h1 id="main-title"><?= $currentPost['title']?></h1>
    <p id="post-description"><?= $currentPost['description']?></p>
    <div class="img-container">
      <img src="<?= $BASE_URL?>/img/<?=$currentPost['img']?>" alt="<?=$currentPost['title']?>">
    </div>
    <p class="post-content">
      Mussum Ipsum, cacilds vidis litro abertis. Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo
      pose.In elementis mé pra quem é amistosis quis leo.Sapien in monti palavris qui num significa nadis i pareci
      latim.Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus.

      A ordem dos tratores não altera o pão duris.Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam
      vulputate dapibus.Diuretics paradis num copo é motivis de denguis.Posuere libero varius. Nullam a nisl ut ante
      blandit hendrerit. Aenean sit amet nisi.

      Per aumento de cachacis, eu reclamis.Nec orci ornare consequat. Praesent lacinia ultrices consectetur. Sed non
      ipsum felis.Cevadis im ampola pa arma uma pindureta.Sapien in monti palavris qui num significa nadis i pareci
      latim.

      Mais vale um bebadis conhecidiss, que um alcoolatra anonimis.Leite de capivaris, leite de mula manquis sem
      cabeça.Suco de cevadiss deixa as pessoas mais interessantis.Atirei o pau no gatis, per gatis num morreus.

    </p>
  </div>
</main>
<aside id="nav-container">
  <h3 id="tags-title">Tags</h3>
  <ul id="tag-list">
    <?php foreach($currentPost['tags'] as $tag): ?>
    <li><a href="#"><?= $tag ?></a></li>
    <?php endforeach;?>
  </ul>
  <h3 id="categories-title">Tags</h3>
  <ul id="categories-list">
    <?php foreach($categories as $category): ?>
    <li><a href="#"><?= $category ?></a></li>
    <?php endforeach;?>
  </ul>
</aside>

<?php 
include_once("templates/footer.php")
?>