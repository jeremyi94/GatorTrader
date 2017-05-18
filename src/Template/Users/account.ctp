<?php

?>
<?php foreach( $userItems as $result): ?>
<div style="padding: 5%">
<div style="border: 1px solid gray;">
<div style="float:left;padding: 5px;">
<a href=<?= $this->Url->build(['controller' => 'items', 'action' => 'view', $result['id']]);?>>
   <!-- <script type="text/javascript">
        
    if(<?//php echo $result['img1']?> == '1'){
         document.write("<img src='/webroot/img/items/thumbnails/<?//php echo $result['id']?>a.jpg' >");
        
    }
    
     if(<?//php echo $result['img2']?> == '1'){
         document.write("<img src=""webroot/img/items/thumbnails/',<?//php echo $result['id']?>,'b.jpg" alt="',<?//php echo $result['description']?>'/>");
        
    }
    
     if(<?//php echo $result['img3']?> == '1'){
        document.write("<img src=""webroot/img/items/thumbnails/',<?//php echo $result['id']?>,'c.jpg" alt="',<?//php echo $result['description']?>'/>");
        
     }
    
     if(<?//php echo $result['img4']?> == '1'){
         document.write("<img src=""webroot/img/items/thumbnails/',<?//php echo $result['id']?>,'d.jpg" alt="',<?//php echo $result['description']?>'/>");
        
    }
    
    </script>-->
</a>

</div>
    
<div style="padding:30px" class="page-header">
 <?php    
$output = '<p> Title:'.$result['title'] .'<p> Description: ' .$result['description'] .'<p>Price: $' .$result['price'] .'<p>Date Posted: ' .$result['date_posted']
 ?>
 <?php if($result['img1'] === 1): ?>
 <div class="thumbnail"><?= '<p><li class="span3h"> <img src="../webroot/img/items/thumbnails/' . $result['id'] . 'a.jpg" alt="' .$result['description']. '"/></li>' ?></div>
 <?php endif; ?>
 <?php if($result['img2'] === 1): ?>
 <div class="thumbnail"><?= ' <p><li class="span3h"> <img src="../webroot/img/items/thumbnails/' . $result['id'] . 'b.jpg" alt="' .$result['description']. '"/></li>' ?></div>
 <?php endif; ?>
 <?php if($result['img3'] === 1): ?>
 <div class="thumbnail"><?= ' <p><li class="span3h"> <img src="../webroot/img/items/thumbnails/' . $result['id'] . 'c.jpg" alt="' .$result['description']. '"/></li>' ?></div>
 <?php endif; ?>
 <?php if($result['img4'] === 1): ?>
 <div class="thumbnail"><?= ' <p><li class="span3h"> <img src="../webroot/img/items/thumbnails/' . $result['id'] . 'd.jpg" alt="' .$result['description'].  '"/></li>' ?></div>
 <?php endif; ?>
 <?php print($output); ?>
<!--<h1><u><?//='Title: ' .$result['title']?></u></h1>
<h3><?//= 'price: $' .$result ['price'] ?></h3>
<p><?//= 'description: ' .$result['description'] ?></p>
<h4><?//= 'Posted on: ' .$result['date_posted'] ?></p> -->

<?php echo '</div><form action="reply"><button type="submit" class="btn buy">Buy Now</button></form></div><br>';?>
</div>
</div>
    
<?php endforeach; ?>
</div>
