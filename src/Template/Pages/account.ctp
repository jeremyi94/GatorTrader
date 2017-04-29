

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
                    <h3 class="panel-title">Hello User Name</h3>
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
                                                <td class="view-message  dont-show">JuneBug</td>
                                                <td class="view-message ">Red Chair</td>
                                                <td class="view-message  text-right">3/14/2017 9:27 AM</td>
                                                <td><a href="message" class="reply">View</a></td>
                                                <td><a href="reply" class="reply">Reply</a></td>
                                                <td><a href="account" ><i class="icon-trash"></i></a></td>
                                            </tr>
                                            <tr>
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
                                            </tr>
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

