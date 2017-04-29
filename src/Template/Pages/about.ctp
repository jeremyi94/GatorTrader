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
<script type="text/javascript">
window.onload=function () {
    $('#about').addClass('active');
};
</script>
<br>
<br>
<br>
<div class="text-center">
<h1> About This Website</h1>
<br>
<p style="color:brown; text-align:center;">
"Gator Trador" is a website designed exclusively for the students of San Francisco State University to be able to buy and sell items easily.
</p>
</div>
<br>
<br>
<br>

<div class="text-center">
<h1> About The Team</h1>
<br>
<p style="text-align:center; color:brown;"> 
We are a team of 6 people who are developing the website "Gator Trador" for the students of San Francisco State University. This website is for
helping students of SFSU to buy and sell Items. The team lead is Rebecca Stankus, tech lead is 
Farbod, and other team members are Krunal, Kai and Kyle
</p>
</div>
<br>
<br>
<br>
<div class="text-center">
    <br>
    <h1 style="color: #364878">Meet Team 8...</h1>
<br>

<center><a href="http://sfsuse.com/~sp17g08/648app/rebecca">Rebecca Stankus</a><br></center>
<center style="color:brown">Team lead and Database admin<br><br><br></center>
<center><a href="http://sfsuse.com/~sp17g08/648app/farbod">Farbod</a><br></center>
<center style="color:brown">CTO and backend developer<br><br><br></center>
<center><a href="http://sfsuse.com/~sp17g08/648app/jeremy">Jeremy Ibay</a><br></center>
<center style="color:brown">Git/Github admin and UI developer<br><br><br></center>
<center><a href="http://sfsuse.com/~sp17g08/648app/krunal">Krunal Shah</a><br></center>
<center style="color:brown">Documentationa and UI developer<br><br><br></center> 
<center><a href="http://sfsuse.com/~sp17g08/648app/kai">Kai</a><br></center>
<center style="color:brown">Documentationa and backend developer<br><br><br></center>
<center><a href="http://sfsuse.com/~sp17g08/648app/kyle">Kyle Kamibayashi</a><br></center>
<center style="color:brown">Chief Spokesperson and Backend Developer<br><br><br></center>
   
</div>
<script>document.title = "Gator Trader-About";</script>
