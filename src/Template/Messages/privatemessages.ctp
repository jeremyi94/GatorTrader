
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
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Hello <?php echo $username ?></h3>
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
                                    
                                    <?php foreach($myMessages as $row) ?>
                                    <table class="table table-inbox table-hover">                                      
                                        <tbody>
                                            <tr>
                                                <td class="view-message  dont-show"><?php echo''.$row->sender_name ?></td>
                                                <td class="view-message "><?php echo''.$row->subject ?></td>
                                                <td class="view-message  text-right"><?php echo''.$row->date ?></td>
                                                <td class="view-message  text-right"><?php echo''.$row->text ?></td>
                                                <!--<td><a href="message" class="reply">View</a></td>
                                                <td><a href="reply" class="reply">Reply</a></td> -->
                                                <!--<td><button onclick="myFunction()">View</button></td> -->
                                                <td><a href="message" class="reply">View</a>
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
                        <div class="tab-pane" id="selling">
                            <div style="padding: 5%,margin-top: -50px;">
                                <div class="row page-header">
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
                                </div>
                                 <div class="row page-header">
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
                                </div>

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

