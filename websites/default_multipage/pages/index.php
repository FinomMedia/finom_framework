<?php
include __DIR__."/../partials/header.php";

component("_blank.component", $data->blank);

componentV2("_blank_v2.simple",false);

include __DIR__."/../partials/footer.php";
?>
<h1>Toto je home page stránek default_multipage</h1>