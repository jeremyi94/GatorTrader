<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;
$this->layout = "new";
echo $this->Html->css('search');
?>

<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/PictureSlides-jquery-2.0.js"></script>

<?php 
$count=count($results);
echo  "<h1><small>Found ".$count." items...</small></h1>";?>
<div class="select-wrapper">
  <?php echo $this->Paginator->sort('price', 'By Price', ['class' => 'button']); ?>
  <?php echo $this->Paginator->sort('date_posted', 'By date', ['class' => 'button']); ?>
</div>
  
<?php foreach( $results as $result): ?>

<div style="padding-left: 5%; padding-right:5%">

        <div style="float:left;padding: 5px;">
            <a href=<?= $this->Url->build(['controller' => 'items', 'action' => 'view', $result['id']]);?>>
            </a>
        </div>
    
        
        <div style="padding:30px" class="page-header">
            
            
            <div class="picture-slides-container">
                <div class="picture-slides-fade-container">
                    <?php if($result['img1'] === 1): ?>
                    <div><?= '<a class="picture-slides-image-link"> <img src="../webroot/img/items/thumbnails/' . $result['id'] . 'a.jpg" alt="image"/></a>' ?></div>
                    <?php endif; ?>
                </div> 
                <?php    
            $output = '<h1> Title:'.$result['title'] .'</h1><p> Description: ' .$result['description'] .'</p><p>Price: $' .$result['price'].'</p>'
            ?>
                
                <ul class="picture-slides-thumbnails">
                <?php if($result['img2'] === 1): ?>
                <?= '<li><img src="../webroot/img/items/thumbnails/' . $result['id'] . 'b.jpg" alt="image"/></li>' ?>
                <?php endif; ?>
                <?php if($result['img3'] === 1): ?>
                <?= '<li><img src="../webroot/img/items/thumbnails/' . $result['id'] . 'c.jpg" alt="image"/></li>' ?>
                <?php endif; ?>
                <?php if($result['img4'] === 1): ?>
                <?= '<li><img src="../webroot/img/items/thumbnails/' . $result['id'] . 'd.jpg" alt="image"/></li>' ?>
                <?php endif; ?>
                <?php print($output); ?>
                <?php echo '<p align="center"><a class = "btn right" href="reply">buy now</a></p></div>';?>
                </ul>
            </div>
</div>
<?php endforeach; ?>


<script type="text/javascript">
	jQuery.PictureSlides.set({
		// Switches to decide what features to use
		useFadingIn : true,
		useFadingOut : true,
		useFadeWhenNotSlideshow : true,
		useFadeForSlideshow : true,
		useDimBackgroundForSlideshow : true,
		loopSlideshow : false,
		usePreloading : true,
		useAltAsTooltip : true,
		useTextAsTooltip : false,

		// Fading settings
		fadeTime : 500, // Milliseconds	
		timeForSlideInSlideshow : 2000, // Milliseconds

		// At page load
		startIndex : 1,	
		startSlideShowFromBeginning : true,
		startSlideshowAtLoad : false,
		dimBackgroundAtLoad : false,

		// Large images to use and thumbnail settings
		images : [
			{
				image : "pictures/1.jpg", 
				alt : "Picture 1",
				text : "This is picture 1"
			},
			{                                  

				image : "pictures/2.jpg", 
				alt : "Picture 2",
				text : "This is picture 2",
				url : "http://robertnyman.com"
			},
			{                                  

				image : "pictures/3.jpg", 
				alt : "Picture 3",
				text : "This is picture 3",
				url : "http://456bereastreet.com"
			} // NOTE! No comma after the last object
		],
		thumbnailActivationEvent : "click",

		// Classes of HTML elements to use
		mainImageClass : "picture-slides-image", // Mandatory
		imageLinkClass : "picture-slides-image-link",
		fadeContainerClass : "picture-slides-fade-container",
		imageTextContainerClass : "picture-slides-image-text",
		previousLinkClass : "picture-slides-previous-image",
		nextLinkClass : "picture-slides-next-image",
		imageCounterClass : "picture-slides-image-counter",
		startSlideShowClass : "picture-slides-start-slideshow",
		stopSlideShowClass : "picture-slides-stop-slideshow",
		thumbnailContainerClass: "picture-slides-thumbnails",
		dimBackgroundOverlayClass : "picture-slides-dim-overlay"
	});
</script>
