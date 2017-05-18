<?php

use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = "new";
?>

<!------------------------Checks if user is logged in------------------------------->

<?php if($loggedIn):?>
<script type="text/javascript">
window.onload=function () {
    $('#sell').addClass('active');
};
</script>
<style type="text/css">
 .topcorner{

  }
  .image-upload > input
{
    display: none;
    position:absolute;
   top:0;
   right:100;
}
</style>
        <!-- Work -->
        <br><br>
        <section id="work-section">
            <div  class="page-header">
                <h1>Sell <small> Submit Your Listing</small></h1>
            </div>
            <div class="span8 offset2">
                    <form class="well" id="contactForm" action="#" method="post">
                        <label>Title</label>
                        <input type="text" class="input-xlarge" name="title" id="title">
                        
                        <label>Price</label>
                        <input type="text" class="input-xlarge" name="price" id="price">
                        <label>Category</label>
                        <select>
                            <option value="Furniture">Furniture/option>
                            <option value="Electronics">Electronics</option>
                            <option value="Books">Books</option>
                            <option value="Sports">Sports</option>
                            <option value="Kitchen">Kitchen</option>
                            <option value="Clothes">Clothes</option>
                            <option value="Other">Other</option>
                        </select>
                        <label>Upload as many as 4 images...</label>
                        <div class="image-upload">
                            <label for="file-input">
                                <topcorner><img src="http://www.chatterboxwalls.co.uk/images/camera-icon-md.gif" height="60" width="60"/></topcorner>
                            </label>
                            <input id="file-input" type="file"/>
                        </div>
                        <label>Description</label>
                        <textarea class="input-xxlarge"  rows="4"  name="comments"  id="comments"></textarea>
                        <p>
                            <input type="button" value="Send" name="submit" id="submit" class="btn"/>
                        </p>
                    </form>
                </div>
        </section>
        <!-- ENDS work -->
<script>document.title = "Gator Trader-Sell";</script>
<?php else:
        header("location:page.php"); // take them to page
        echo "<div>Please login <a href=\"users\login\">here</a> to access page</div>";
    endif;
    ?> 
