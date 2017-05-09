<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;
$this->layout = "new";
?>
<script type="text/javascript">
window.onload=function () {
    $('#about').addClass('active');
};
</script>

<div class="text-center">
    <h1> About This Website</h1>
    <p style="text-align:center;">
    "Gator Trador" is a website designed exclusively for the students of San Francisco State University to be able to buy and sell items easily.
    </p>
    <hr>
</div>

<div class="text-center">
    <h1> About The Team</h1>
    <p style="text-align:center"> 
    We are a team of 6 people who are developing the website "Gator Trador" for the students of San Francisco State University. This website is for
    helping students of SFSU to buy and sell Items. The team lead is Rebecca Stankus, tech lead is 
    Farbod, and other team members are Krunal, Kai and Kyle
    </p>
    <hr>
</div>

<div class="text-center">
    <h2>Meet the Team...</h2><br><br>
    
    <h1><a href="http://sfsuse.com/~sp17g08/648app/rebecca">Rebecca Stankus</a><br>
    <small>Team lead and  UI Developer<br><br></small></h1>
    <h1><a href="http://sfsuse.com/~sp17g08/648app/farbod">Farbod</a><br>
    <small>CTO and Backend Developer<br><br></small></h1>
    <h1><a href="http://sfsuse.com/~sp17g08/648app/jeremy">Jeremy Ibay</a><br>
    <small>Git/Github Admin and UI Developer<br><br></small></h1>
    <h1><a href="http://sfsuse.com/~sp17g08/648app/krunal">Krunal Shah</a><br>
    <small>Documentation and UI Developer<br><br></small> </h1>
    <h1><a href="http://sfsuse.com/~sp17g08/648app/kai">Kai</a><br>
    <small>Documentation and Backend developer<br><br></small></h1>
    <h1><a href="http://sfsuse.com/~sp17g08/648app/kyle">Kyle Kamibayashi</a><br>
    <small>Chief Spokesperson and Backend Developer<br><br></small></h1>
   <hr>
</div>
<script>document.title = "Gator Trader-About";</script>
