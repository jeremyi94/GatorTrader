<h1>
	Getting all items with certain tags
	<?=$this->Text->toList($tags); ?>
</h1>

<section>
	<?php
	foreach ($items as $item) { ?>
		<article>
			<h4><?= $this->Html->link($item->category, $item->url);?>
			</h4>
			<small><?= h($item->url) ?></small>
			
			<?= $this->Text->autoParagraph($item->category); ?>
		</article>
	<?php } ?>
</section>
