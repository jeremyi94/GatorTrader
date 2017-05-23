<!--<?//php
$this->viewBuilder('new')->layout('new');
$this->layout('new');

 echo $username; 
 echo '</br>'; 
 ?> 

<?//php foreach($items as $item) ?>
  <!--<?//php  echo 'Category name: '. $item->category_name; ?>
  <?//php  echo '<br>';?>
  <?//php  echo 'Title: '. $item->title;?>
  <?//php  echo '<br>';?>
  <?//php  echo 'Description: '. $item->description;?>
  <?//php  echo '<br>';?>
  <?//php  echo 'price: '. $item->price;?>
  <?//php  echo '<br>';?> -->
    <!--<?//php if($item['img1'] == 1): ?>
    <div class="thumbnail"><?//= '<p><li class="span3h"> <img src="../webroot/img/items/thumbnails/' . $item['id'] . 'a.jpg" alt="' .$item['description']. '"/></li>' ?></div>
    <?//php endif; ?> -->
    <!--<?//php if($item['img2'] === 1): ?>
    <div class="thumbnail"><?//= ' <p><li class="span3h"> <img src="../webroot/img/items/thumbnails/' . $item['id'] . 'b.jpg" alt="' .$item['description']. '"/></li>' ?></div>
    <?//php endif; ?>
    <?//php if($item['img3'] === 1): ?>
    <div class="thumbnail"><?//= ' <p><li class="span3h"> <img src="../webroot/img/items/thumbnails/' . $item['id'] . 'c.jpg" alt="' .$item['description']. '"/></li>' ?></div>
    <?//php endif; ?>
    <?//php if($item['img4'] === 1): ?>
    <div class="thumbnail"><?//= ' <p><li class="span3h"> <img src="../webroot/img/items/thumbnails/' . $item['id'] . 'd.jpg" alt="' .$item['description'].  '"/></li>' ?></div>
    <?//php endif; ?>  -->



<!--foreach($myMessages as $row)
{
    echo 'receiver_name: '. $row->receiver_name . "\n";
    echo '<br>';
    echo "date: " . $row->date . "\n";
    echo '<br>';
    echo "message: " . $row->text . "\n";
    echo '<br>';
    echo "subject: " . $row->subject . "\n";
    echo '<br>';
    echo "sender_name: " . $row->sender_name . "\n";
    echo '<br>';

} -->


<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;
$this->layout = "new";
?>

<br>


<?php foreach($myMessages as $row)?>
<?php foreach($items as $myItems)?>
<?php $count=count($row);?>
<?php $count_two=count($myItems);?>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Hello <?php echo $username?></h3>
                    <!-- Tabs -->
                    <br><br>
                    <ul class="nav panel-tabs">
                        <li><a href="#messaging" data-toggle="tab" style="padding-right: 20px">Messages</a></li>
                        <li><a href="#selling" data-toggle="tab">My Items For Sale</a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        
                        <div class="tab-pane active" id="messaging">
                            <aside class="lg-side">
                                <div class="inbox-body">
                                    
                                    
                                    <table class="table table-inbox table-hover">                                      
                                        <tbody>
                                            <tr>
                                                <!--<?//php foreach($myMessages as $row) ?> -->
                                                <td class="view-message  dont-show">
                                                
                                                <?php if (empty($row)):?>
                                                <?php echo 'Nothing to Show';?>
                                                <?php else:?>     
                                                <?php echo''.$row->sender_name;?>  
                                                <?php endif;?>
                                                </td>
                                                
                                                <td class="view-message ">
                                                <?php if (empty($row)):?>
                                                <?php echo'Nothing to Show';?>
                                                <?php else: ?>     
                                                <?php echo''.$row->subject;?> 
                                                <?php endif;?>
                                                </td>
                                                
                                                <td class="view-message  text-right">
                                                <?php if (empty($row)):?>
                                                <?php echo'Nothing to Show'?>
                                                <?php else:?>     
                                                <?php echo''.$row->date?> 
                                                <?php endif;?>
                                                </td>
                                                
                                           
                                                <!--<td><a href="message" class="reply">View</a></td>
                                                <td><a href="reply" class="reply">Reply</a></td> -->
                                                <!--<td><button onclick="myFunction()">View</button></td> -->
                                                <td><?php echo $this->Html->link('View', ['controller' => 'items', 'action' => 'mymessage'], ['class' => 'reply']); ?></td>
                                                <!--<td><a href="message" class="reply">View</a>-->
                                                <td><a href="account" ><i class="icon-trash"></i></a></td>
                                               
                                            </tr>
                                            <!--<?//php
                                            function myfunction()
                                            {
                                                echo''.$row->subject;
                                            }
                                            ?> -->
                                         <!--   <tr>
                                                <td class="view-message dont-show">MaryJane</td>
                                                <td class="view-message">Goat</td>
                                                <td class="view-message text-right">3/11/2017 8:32 PM</td>
                                                <td><a href="message" class="reply">View</a></td>
                                                <td><a href="reply" class="reply">Reply</a></td>
                                                <td><a href="account" ><i class="icon-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="view-message dont-show">ShowBoats</td>
                                                <td class="view-message">Bow Tie</td>
                                                <td class="view-message text-right">2/28/2017 7:45 AM</td>
                                                <td><a href="message" class="reply">View</a></td>
                                                <td><a href="reply" class="reply">Reply</a></td>
                                                <td><a href="account" ><i class="icon-trash"></i></a></td>
                                            </tr> -->
                                        </tbody>    
                                    </table>  
                                    
                                </div>
                            </aside>
                        </div>
                        
                        
                        <!--<?//php foreach($items as $myItems) ?> -->
                        <div class="tab-pane" id="selling">
                            <div style="padding: 5%,margin-top: -50px;">
                                <div class="row page-header">
                                        <div class="col">
                                            <?php if($myItems['img1'] == 1): ?>
                                            <div class="thumbnail" style="border:2px;"><?= '<p><span class="span3h"> <img src="../webroot/img/items/thumbnails/' . $myItems['id'] . 'a.jpg" "/></span>' ?></div>
                                            <?php endif; ?>
                                            <!--<?//php if($myItems['img2'] == 1): ?>
                                            <div class="thumbnail"><//?= '<p><li class="span3h"> <img src="../webroot/img/items/thumbnails/' . $myItems['id'] . 'b.jpg" "/></li>' ?></div>
                                            <?//php endif; ?>
                                            <?//php if($myItems['img3'] == 1): ?>
                                            <div class="thumbnail"><?//= '<p><li class="span3h"> <img src="../webroot/img/items/thumbnails/' . $myItems['id'] . 'c.jpg" "/></li>' ?></div>
                                            <?//php endif; ?>
                                            <?//php if($myItems['img4'] == 1): ?>
                                            <div class="thumbnail"><?//= '<p><li class="span3h"> <img src="../webroot/img/items/thumbnails/' . $myItems['id'] . 'd.jpg" "/></li>' ?></div>
                                            <?//php endif; ?> -->
                                            <!--<div class="thumbnail">
                                                <img src="webroot/img/items/9a.jpg" alt="friendly, fun-loving goat looking for friend"/> 
                                            </div> -->
                                            
                                        </div>
                                        <div class="col">
                                            <center>
                                            <h1><small><?php echo 'Title: '. $myItems->title;?></small></h1><br>
                                            <p><?php echo 'description: '. $myItems->description;?>
                                            <h2 class="thumb-caption"><?php echo 'Price: $'. $myItems->price;?></h2>
                                            </center>
                                            
                                        </div>
                                        <center>
                                        <form action="account#selling"><button type="submit" class="btn buy">Remove</button></form>
                                        </center>
                                    <!--</a> -->
                                </div>
                         
                                 
                               <!-- <div class="row page-header">
                                    <a href="item?id=9">
                                        <div class="span3">
                                            <div class="thumbnail">
                                                <img src="webroot/img/items/9a.jpg" alt="friendly, fun-loving goat looking for friend"/>
                                            </div>
                                            <h2 class="thumb-caption">$80.00</h2>
                                        </div>
                                        <div class="span6"> 
                                            <h1><small>Goat</small></h1><br>
                                            <p>friendly, fun-loving goat looking for friend
                                        </div>
                                        <form action="account#selling"><button type="submit" class="btn buy">Remove</button></form>
                                    </a>
                                </div> -->

                            </div>                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ENDS Contact -->


<script>document.title = "Gator Trader-My Account";</script>





