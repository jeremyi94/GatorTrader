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
        <div  class="page-header"><br><p>
            <h1>Sell <small> Submit Your Listing</small></h1>
        </div>
        <div class="row">
            <?php echo $this->Form->create($item, ['enctype' => 'multipart/form-data']); ?>
            <fieldset>
                <div class="span5 offset1">
                    <?php
                    echo$this->Form->hidden('id');
                    echo $this->Form->hidden('date_posted');
                    echo $this->Form->hidden('sold');
                    echo $this->Form->input('title');
                    echo $this->Form->input('price');
                    echo '<label>Category</label>';
                    echo $this->Form->select('category', ['Furniture', 'Electronics', 'Books', 'Sports', 'Kitchen', 'Clothing', 'other'], ['empty' => '(choose one)']);
                    echo '<label>Description</label>';
                    echo $this->Form->textarea('description', ['style' => 'width: 400px; height: 300px:']);
                    ?>
                </div>
                <div class="span5 offset1">
                    <label>Upload as many as 4 images in order...</label>
                    <div class="image-upload">
                        <label for="file-input">
                            <topcorner><img src="http://www.chatterboxwalls.co.uk/images/camera-icon-md.gif" height="60" width="60"/></topcorner>
                        </label>
                        <input id="file-input" type="file"/>
                    </div>
                    <?php
                    echo '<label>Image 1</label>';
                    echo $this->Form->file('img1');
                    echo '<label>Image 2</label>';
                    echo $this->Form->file('img2', ['required' => 'no']);
                    echo '<label>Image 3</label>';
                    echo $this->Form->file('img3', ['required' => 'no']);
                    echo '<label>Image 4</label>';
                    echo $this->Form->file('img4', ['required' => 'no']);
                    ?>
                </div>
                <div class="span12"><center><br><?= $this->Form->submit('Submit', ['class' => 'btn']) ?> </center></div>
            </fieldset>
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