<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;
$this->layout = "new";
?>
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/PictureSlides-jquery-2.0.js"></script>

<style>
    div.container {
      width: 100%;
      border: 1px solid gray;

    }
    .button {
        width: 115px;
        height: 25px;
        background: white;
        padding: 10px;
        text-align: center;
        border-radius: 5px;
        color: yellow;
        font-weight: bold;
    }
    /* Fonts */
html{
	font-size: 100%;	
}

/* Tag-specific */
html, body, form, fieldset, li, h1, h2, h3, h4, h5, h6, p, ul, dl, dt, dd, input{
	margin: 0;
	padding: 0;
}

dl, p, ul, ol{
	margin: 0 0 1em;
	padding: 0;
}






form label{
	cursor: pointer;
}

img{
	border: none;
}

input{
	vertical-align: middle;
}

/* General */
#container{
	background: #fff;
	overflow: hidden;
	width: 452px;
	margin: 2em auto 0;
	padding: 2em 1em 4em;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	-moz-box-shadow: 1px 1px 10px #000;
	-webkit-box-shadow: 1px 1px 5px #000;
}

.navigation-controls {
	position: relative;
	text-align: center;
	background: #fff;
	padding: 5px;
	z-index: 1001;
}

/* Picture slides */
.picture-slides-disabled {
	color: #eee;
}

.picture-slides-container {
	margin-bottom: 2em;
}

.picture-slides-dimmed-background .navigation-controls {
	-moz-border-radius : 0 0 5px 5px;
	-webkit-border-top-left-radius : 0;
	-webkit-border-top-right-radius : 0;
	-webkit-border-bottom-left-radius : 5px;
	-webkit-border-bottom-right-radius : 5px;
}

.picture-slides-dimmed-background .picture-slides-image-text {
	-moz-border-radius: 5px 5px 0 0;
	-webkit-border-top-left-radius : 5px;
	-webkit-border-top-right-radius : 5px;
	-webkit-border-bottom-left-radius : 0;
	-webkit-border-bottom-right-radius : 0;
}

.picture-slides-fade-container {
	position: relative;
	overflow: hidden;
	z-index: 1002;
}

.picture-slides-fade-container a {
	display: block;
	height: 240px;
	text-align: center;
	margin-bottom: 10px;
}

.picture-slides-fade-container a img {
	-moz-box-shadow: 5px 5px 10px #000;
	-webkit-box-shadow: 5px 5px 10px #000;
}

.picture-slides-image-load-fail {
	display: none;
}

.picture-slides-image-text {
	position: relative;
	background: #fff;
	text-align: center;
	padding: 5px 0 10px;
	z-index: 1001;
}

.picture-slides-previous-image, 
.picture-slides-next-image, 
.picture-slides-start-slideshow, 
.picture-slides-stop-slideshow {
	display: none;
}

.picture-slides-previous-image, 
.picture-slides-next-image, 
.picture-slides-start-slideshow, 
.picture-slides-stop-slideshow {
	cursor: pointer;
}

.picture-slides-thumbnails {
	list-style: none;
	margin-top: 1em;
	overflow: hidden;
}

.picture-slides-thumbnails li {
	float: left;
	width: 100px;
	margin: 0 10px 5px 0;
}

.picture-slides-thumbnails li img {
	width: 100px;
}

.picture-slides-thumbnails a {
	outline: none;
}

.picture-slides-thumbnails li .picture-slides-selected-thumbnail img {
	width: 92px;
	padding: 2px;
	background: #ea9d80;
	border: 1px solid #000;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
}


</style>

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
