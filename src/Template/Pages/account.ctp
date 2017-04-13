<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = "new";
?>
<!-- Contact -->
        <section id="contact-section" >
            <div  class="page-header">
                <h1>Hello User Name</h1>
            </div>
            <div class="row">
                
                <div class="span8">
                    <h1>Messages</h1>
                    <div class="page-header"><a href="#"><ul class="messagelist"><li class="messagedate">03/12/17 12:45p.m.</li><li class="username"> JuneBug </li><li> So we're meeting today at the Caeser Chavez building... </li></ul></a></div>
                    <div class="page-header"><a href="#"><ul class="messagelist"><li class="messagedate">03/10/17 10:11a.m.</li><li class="username"> ShowBoats </li><li> I have a question about the goat you listed for sale on...</li></ul></a></div>
                    <div class="page-header"><a href="#"><ul class="messagelist"><li class="messagedate">03/07/17 08:01p.m.</li><li class="username"> MaryJane </li><li> Are you still selling the bow tie? I would like to see... </li></ul></a></div>
                </div>
                <div class="span3" style="padding-left: 50px">
                    <h1>Account Info</h1>
                    <ul class="address-block unstyled">
                        <li class="address"><i class="icon-home"></i> Full Name</li>
                        <li class="email"><i class="icon-envelope"></i><a href="#"> email@server.com</a></li>
                        <br>
                        <input type="button" value="Edit Info" name="submit" id="editinfo" class="btn"/>
                        <br><br><br>
                        <input type="button" value="Delete Account" name="submit" id="deleteaccount" class="btn"/>
                    </ul>
                </div>
            </div>
        </section>
        <!-- ENDS Contact -->

