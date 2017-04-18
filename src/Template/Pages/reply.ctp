<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = "new";
?>
            <div class="row">
                <!-- Form col -->
                <div class='span2'><p></div>
                <div class="span8" >
                    <form class="well" id="contactForm" action="#" method="post">
                        <p>To:  User Name
                        <label>Subject</label>
                        <input type="text" class="input-xlarge" placeholder="RE ..." name="subject" id="subject">
                        <label>Message</label>
                        <textarea class="input-xxlarge"  rows="4"  name="comments"  id="comments"></textarea>
                        <p>
                            <input type="button" value="Send" name="submit" id="submit" class="btn"/>
                        </p>
                    </form>
                </div>
                <!-- ENDS form col -->
                
            </div>



