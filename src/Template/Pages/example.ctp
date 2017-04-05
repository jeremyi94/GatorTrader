<?php

/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = "new";


if (!Configure::read('debug')):
    throw new NotFoundException('Please replace src/Template/Pages/home.ctp with your own version.');
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>

        <!-- Work -->
        <section id="work-section">
            <div  class="page-header">
                <h1>Featured Work <small>Selected items from my portfolio</small></h1>
            </div>
            <ul class="thumbnails">
                <li class="span4"> <a href="img/dummies/b-01.jpg" class="thumbnail"> <img src="img/dummies/01.jpg" alt=""> </a> <span class="thumb-caption">Lorem Ipsum Dolor</span> </li>
                <li class="span4"> <a href="img/dummies/b-02.jpg" class="thumbnail"> <img src="img/dummies/02.jpg" alt=""> </a> <span class="thumb-caption">Lorem Ipsum Dolor</span> </li>
                <li class="span4"> <a href="img/dummies/b-03.jpg" class="thumbnail"> <img src="img/dummies/03.jpg" alt=""> </a> <span class="thumb-caption">Lorem Ipsum Dolor</span> </li>
            </ul>
            <ul class="thumbnails">
                <li class="span3"> <a href="img/dummies/b-04.jpg" class="thumbnail"> <img src="img/dummies/04.jpg" alt=""> </a> <span class="thumb-caption">Lorem Ipsum Dolor</span> </li>
                <li class="span3"> <a href="img/dummies/b-05.jpg" class="thumbnail"> <img src="img/dummies/05.jpg" alt=""> </a> <span class="thumb-caption">Lorem Ipsum Dolor</span> </li>
                <li class="span3"> <a href="img/dummies/b-06.jpg" class="thumbnail"> <img src="img/dummies/06.jpg" alt=""> </a> <span class="thumb-caption">Lorem Ipsum Dolor</span> </li>
                <li class="span3"> <a href="img/dummies/b-07.jpg" class="thumbnail"> <img src="img/dummies/07.jpg" alt=""> </a> <span class="thumb-caption">Lorem Ipsum Dolor</span> </li>
            </ul>
        </section>
        <!-- ENDS work -->
        <!-- info -->
        <section id="info-section" class="information" >
            <div  class="page-header">
                <h1>Information <small>Learn everything about me</small></h1>
            </div>
            <ul id="information-tabs" class="nav nav-pills ">
                <li><a href="#summary" data-toggle="tab">Summary</a></li>
                <li><a href="#skills" data-toggle="tab">Skills</a></li>
                <li><a href="#experience" data-toggle="tab">Experience</a></li>
                <li><a href="#education" data-toggle="tab">Education</a></li>
                <li><a href="#awards" data-toggle="tab">Awards</a></li>
            </ul>
            <!-- tab content -->
            <div class="tab-content">
                <!-- Summary -->
                <div class="summary-section tab-pane active" id="summary">
                    <p ><strong>Resume is a free template</strong> It's responsive, HTML 5 valid all of this in one single page. It's fully documented and you can use it with no attribution or credit back required for commercial and personal projects, redistribution is not allowed if you want to use it in a different way please contact me.</p>
                    <p>Thanks to thebeaststudio.com for sharing their work as placeholder images.</p>
                    <p><strong>Some dummy text</strong> Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus </p>
                </div>
                <!-- ENDS Summary -->
                <!-- Skills -->
                <div class="tab-pane listing" id="skills">
                    <div class="entry">
                        <div class="clearfix">
                            <div class="rating p"> <i class="icon-star"></i> <i class="icon-star"></i> <i class="icon-star"></i> </div>
                            <h3 class="heading pull-leasft">Web Design</h3>
                        </div>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.</p>
                    </div>
                    <div class="entry">
                        <div class="clearfix">
                            <div class="rating p"> <i class="icon-star"></i> <i class="icon-star"></i> <i class="icon-star-empty"></i> </div>
                            <h3 class="heading pull-leasft">Web Development</h3>
                        </div>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.</p>
                    </div>
                    <div class="entry">
                        <div class="clearfix">
                            <div class="rating p"> <i class="icon-star"></i> <i class="icon-star-empty"></i> <i class="icon-star-empty"></i> </div>
                            <h3 class="heading pull-leasft">Illustration</h3>
                        </div>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.</p>
                    </div>
                </div>
                <!-- ENDS Skills -->
                <!-- Experience -->
                <div class="tab-pane" id="experience">
                    <table class="table experience-table">
                        <tbody>
                            <tr>
                                <td><h3 class="position" >Digital Media Director</h3>
                                    <span class="date"> Sep 2011 - Present</span><small>That Company</small></td>
                                <td><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi.</p></td>
                            </tr>
                            <tr>
                                <td><h3 class="position">Chief Executive Officer</h3>
                                    <span class="date"> Oct 2000 - Sep 2011</span><small>Acme Toys</small></td>
                                <td><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi.</p></td>
                            </tr>
                            <tr>
                                <td><h3 class="position">Media Engineer</h3>
                                    <span class="date"> Jan 1994 - Oct 2000</span><small>That Company</small></td>
                                <td><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi.</p></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- ENDS Experience -->
                <!-- Education -->
                <div class="tab-pane listing" id="education">
                    <div class="entry">
                        <h3 class="heading">University of Wollongong in Dubai</h3>
                        <span class="date">2011 – 2011</span>
                        <p>Major or Area of study: Communication Studies, Business Management, Human Resources, Business Law, Business Studies, Digital Production, Print Production, Computer Science</p>
                    </div>
                    <div class="entry">
                        <h3 class="heading">Helwan University</h3>
                        <span class="date">2004 – 2007</span>
                        <p>Completed executive training in Sales Motivation, CRM, Management and Sales</p>
                    </div>
                    <div class="entry">
                        <h3 class="heading">Cambridge International School</h3>
                        <span class="date">1999- 2000</span>
                        <p>IGCSE, Commerce</p>
                    </div>
                </div>
                <!-- ENDS Education -->
                <!-- Awards -->
                <div class="tab-pane" id="awards">
                    <ul class="awards-list">
                        <li>
                            <h3  class="heading">“Elite Author” at ThemeForest </h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
                            <a class="btn" href="#">Link</a></li>
                        <li>
                            <h3  class="heading">“Elite Author” at ThemeForest </h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
                            <a class="btn" href="#">Link</a></li>
                        <li>
                            <h3  class="heading">“Elite Author” at ThemeForest </h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
                            <a class="btn" href="#">Link</a></li>
                    </ul>
                </div>
                <!-- ENDS Awards -->
            </div>
            <!-- ENDS tab content -->
        </section>
        <!-- ENDS info -->
        <!-- Contact -->
        <section id="contact-section" >
            <div  class="page-header">
                <h1>Contact <small> Get in touch</small></h1>
            </div>
            <div class="row">
                <!-- Form col -->
                <div class="span8">
                    <form class="well" id="contactForm" action="#" method="post">
                        <label>Your Name</label>
                        <input type="text" class="input-xlarge" placeholder="Whats your name?" name="name" id="name">
                        <label>Your Email</label>
                        <input type="text" class="input-xlarge" placeholder="How can i contact you?" name="email" id="email">
                        <label>Your Web</label>
                        <input type="text" class="input-xlarge" placeholder="Have a website?" name="web" id="web">
                        <label>Message</label>
                        <textarea class="input-xxlarge"  rows="4"  name="comments"  id="comments"></textarea>
                        <p>
                            <input type="button" value="Send" name="submit" id="submit" class="btn"/>
                        </p>
                    </form>
                    <div id="error" class="alert alert-error">Error</div>
                    <div id="sent-form-msg" class="alert alert-success">Your message was sent!</div>
                </div>
                <!-- ENDS form col -->
                <div class="span4">
                    <ul class="address-block unstyled">
                        <li class="address"><i class="icon-home"></i> Address line, city, state ZIP</li>
                        <li class="phone"><i class="icon-comment"></i> +123 456 789</li>
                        <li class="email"><i class="icon-envelope"></i><a href="#"> email@server.com</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- ENDS Contact -->
   
    <footer>
    </footer>
</div>
<!-- JavaScript at the bottom for fast page loading -->
<script src="js/jquery-1.7.1.min.js"></script>
<!-- scripts concatenated and minified via build script -->
<script src="js/plugins.js"></script>
<script src="js/bootstrap-dropdown.js"></script>
<script src="js/bootstrap-scrollspy.js"></script>
<script src="js/bootstrap-tab.js"></script>
<script src="js/bootstrap-collapse.js"></script>
<script src="js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script src="js/custom.js"></script>
