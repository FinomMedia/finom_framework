<?php include __DIR__."/../partials/header.php" ?>

<h1>Toto je home page stránek default_multipage</h1>

<?= component("_blank.component", $data->blank) ?>

<?= componentV2("_blank_v2.simple",$data->blank) ?>

<?= componentV2("_blank_v2.simple",["v2name"=>"Manuálně zadaný název"]) ?>

<?= componentV2("custom._blank_v2.simple",["v2name"=>"Manuálně zadaný název"]) ?>


<?php include __DIR__."/../partials/footer.php" ?>
