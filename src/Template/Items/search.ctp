<?php

use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$count = count($results);
echo '<div style="padding: 50px">';
// making our count center and bigger as well
echo '<h1><small>';
// this shows the number of our items that we searched
echo "Found " . $count . " items";
echo '<br></small></h1></div>';
foreach ($results as $result) {
    echo '<div class="span12" style="margin-bottom:50px">';
    echo '<h1>' . $result['title'] . '</h1>';
    if ($result['img1'] != 0)
        echo '<div class="span3"><a href  = "' . $this->Url->build(['controller' => 'items', 'action' => 'view', $result['id']]) . '"><img class="span3 thumbnail" src="' . $result['img1'] . '" hspace="20"/></a>';
    echo '<p class="span3">$' . $result['price'];
    echo '</div><br><p class="span5">' . $result['description'] . '</div><p>';
}
?>