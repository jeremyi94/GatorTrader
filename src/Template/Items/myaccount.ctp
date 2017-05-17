<?php
$this->viewBuilder('new')->layout('new');
$this->layout('new');

 echo $username; 
 echo '</br>'; 
 ?>

<?php foreach($items as $item) ?>
{
  <?php  echo 'Category name: '. $item->category_name; ?>
  <?php  echo '<br>';?>
  <?php  echo 'Title: '. $item->title;?>
  <?php  echo '<br>';?>
  <?php  echo 'Description: '. $item->description;?>
  <?php  echo '<br>';?>
  <?php  echo 'price: '. $item->price;?>
  <?php  echo '<br>';?>
    <?php if($item['img1'] === 1): ?>
    <div class="thumbnail"><?= '<p><li class="span3h"> <img src="../webroot/img/items/thumbnails/' . $item['id'] . 'a.jpg" alt="' .$item['description']. '"/></li>' ?></div>
    <?php endif; ?>
    <?php if($item['img2'] === 1): ?>
    <div class="thumbnail"><?= ' <p><li class="span3h"> <img src="../webroot/img/items/thumbnails/' . $item['id'] . 'b.jpg" alt="' .$item['description']. '"/></li>' ?></div>
    <?php endif; ?>
    <?php if($item['img3'] === 1): ?>
    <div class="thumbnail"><?= ' <p><li class="span3h"> <img src="../webroot/img/items/thumbnails/' . $item['id'] . 'c.jpg" alt="' .$item['description']. '"/></li>' ?></div>
    <?php endif; ?>
    <?php if($item['img4'] === 1): ?>
    <div class="thumbnail"><?= ' <p><li class="span3h"> <img src="../webroot/img/items/thumbnails/' . $item['id'] . 'd.jpg" alt="' .$item['description'].  '"/></li>' ?></div>
    <?php endif; ?>
}
?>

