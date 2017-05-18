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

<?php if ($loggedIn): ?>
    <script type="text/javascript">
        window.onload = function () {
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
            <?php
            echo $this->Form->create($item); 
            echo$this->Form->hidden('id');
            echo $this->Form->input('title'); 
            echo $this->Form->input('price');
            ?>
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
    <?= $this->Form->end() ?>
        </div>
    </section>
    <!-- ENDS work -->
    <script>document.title = "Gator Trader-Sell";</script>
<?php
else:
    header("location:page.php"); // take them to page
    echo "<div>Please login <a href=\"users\login\">here</a> to access page</div>";
endif;
?> 









<div class="items form large-9 medium-8 columns content">

    <fieldset>
        <legend><?= __('Add Item') ?></legend>
        <?php
        echo $this->Form->input('id');
        echo $this->Form->input('category_name');
        
        echo $this->Form->input('description');
        echo $this->Form->input('price');
        echo $this->Form->input('img1');
        echo $this->Form->input('img2');
        echo $this->Form->input('img3');
        echo $this->Form->input('img4');
        echo $this->Form->input('sold');
        echo $this->Form->input('date_posted');
        ?>
    </fieldset>
<?= $this->Form->button(__('Submit')) ?>

</div>
