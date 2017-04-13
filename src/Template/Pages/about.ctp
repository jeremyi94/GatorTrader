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
<div class="text-center">
    <br>
    <h1 style="color: #364878">Meet Team 8...</h1>
<br>

<a href="http://sfsuse.com/~sp17g08/648app/jeremy">Jeremy Ibay</a><br><br><br>
<a href="http://sfsuse.com/~sp17g08/648app/rebecca">Rebecca Stankus</a><br><br><br>
<a href="http://sfsuse.com/~sp17g08/648app/kyle">Kyle Kamibayashi</a><br><br><br>
<a href="http://sfsuse.com/~sp17g08/648app/farbod">Farbod </a><br><br><br>
<a href="http://sfsuse.com/~sp17g08/648app/kai">Kai </a><br><br><br>
<a href="http://sfsuse.com/~sp17g08/648app/krunal">Krunal</a><br><br>
</div>
