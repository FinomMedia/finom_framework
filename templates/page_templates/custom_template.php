<?php namespace ProcessWire; ?>
<?php include __DIR__."/../partials/header.php" ?>

<div id="content">
	custom template z modules/webengine/page_templates
</div>	
<div class="description">
	
<?=$page->title?>

<?php include __DIR__."/../page_layouts/default.php" ?>

<?php Templater::partialBegin("content")?>

	<div>
		Toto je obsah v parcialu.
	</div>

<?php Templater::partialEnd()?>


<?php Templater::partialBegin("content2")?>

	<div>
		Toto je obsah v parcialu 2.
	</div>

<?= Templater::partialEnd()?>

<?= Templater::getPartial("content")?>


<h2>Matrix render</h2>
<?php componentMatrixRender() ?>
	
</div>

<?php include __DIR__."/../partials/footer.php" ?>





