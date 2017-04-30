<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;
$this->layout = "new";
?>
<style>
div.container {
 width: 100%;
 border: 1px solid gray;
}
article {
 margin-left: 170px;
 border-left: 1px solid gray;
 padding: 1em;
 overflow: hidden;
}

</style>
<?php foreach( $results as $result): ?>
<div style="padding: 5%">
<div style="border: 1px solid gray;">
<div style="float:left;padding: 5px;">
<a href=<?= $this->Url->build(['controller' => 'items', 'action' => 'view', $result['id']]);?>>
</a>


</div>
<article>
<h1><u><?='Title: ' .$result['title'] ?></u></h1>
<h3><?= 'price: $' .$result ['price'] ?></h3>
<p><?= 'description: ' .$result['description'] ?></p>
</article>
</div>
</div>
<?php endforeach; ?>
