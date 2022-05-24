<?php
use ProcessWire;



$promoCode = isset($_GET["uai"]) ? $_GET["uai"] : "";
$hash = uniqid();

function handleFileUpload($target_dir,$fileinput_name,$hash){


    if($_FILES[$fileinput_name]["name"]){
        $target_dir = Site::sitePath()."/uploads/";
        $file_name = $hash ."-" . basename($_FILES[$fileinput_name]["name"]);
        $target_file = $target_dir . $file_name;
        $uploadOk = 1;


        // Check file size
        if ($_FILES[$fileinput_name]["size"] > 6750000) {
        bd("Sorry, your file is too large.");
        $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
        if (move_uploaded_file($_FILES[$fileinput_name]["tmp_name"], $target_file)) {
            bd("The file ". htmlspecialchars( basename( $_FILES[$fileinput_name]["name"])). " has been uploaded.");
        } else {
            bd("Sorry, there was an error uploading your file.");
        }
        }

        $fileLink = Site::sitePwUri()."uploads/".$file_name;

        return $fileLink;
    }
    else return false;


}

function handleAffilView($measure,$url,$uai,$hash,$type,$value,$data){

    if(Processwire\wire()->input->cookie->get('systemawk')){
        return false;
    }
    else{
        Processwire\wire()->input->cookie->set('systemawk', 'set', 1); //86400
    }

    $parent = Processwire\wire()->pages->get("finom-energy");
    $template= "affil-record";
    $name = "View-" . date("Y-m-d--h-i-s");

    $values = array(
        "affil_url"=> $url,
        "affil_uai"=> $uai,
        "affil_hash"=> $hash,
        "affil_type"=> $type,
        "affil_value"=> $value,
        "affil_data"=> $data,
    );
    bd($values);

    Processwire\wire()->pages->add($template, $parent, $name, $values);
}

function handleAffilConversion($measure,$url,$uai,$hash,$type,$value,$data){

    Processwire\wire()->input->cookie->set('systemawk', 'set', 1); //86400


    $parent = Processwire\wire()->pages->get("finom-energy");
    $template= "affil-record";
    $name = "Conversion-" . date("Y-m-d--h-i-s");

    $values = array(
        "affil_url"=> $url,
        "affil_uai"=> $uai,
        "affil_hash"=> $hash,
        "affil_type"=> $type,
        "affil_value"=> $value,
        "affil_data"=> $data,
    );
    bd($values);

    Processwire\wire()->pages->add($template, $parent, $name, $values);
}




if (isset($_POST['contactform'])){


    $fields = array();
    foreach($_POST as $key => $value){
        $field["name"]= $key;
        $field["value"]= $value=="on" ? "Ano" : $value;
        $fields[]=$field;

    }


    $gasFile = handleFileUpload(Site::sitePath()."/uploads/","gasFileToUpload",$_POST["hash"]);
    $eleFile = handleFileUpload(Site::sitePath()."/uploads/","eleFileToUpload",$_POST["hash"]);

    //echo "<br><br>";
    //var_dump($fields);



    if($_POST["services"]=="tepelne-cerpadlo") $prefix = "TC - ";
    if($_POST["services"]=="fotovoltaika") $prefix = "FVE - ";
    if($_POST["services"]=="kombinace") $prefix = "FVETC - ";


    $subject = $prefix.$_POST["name"];

    $sendfrom = $sendfrom;


    $text = "";

    foreach($fields as $field){
        if($field["name"]!="contactform"){
            $text.=$field["name"].": ".$field["value"]."\n";
        }
    }

    $text.="\nVyúčtování plynu: ";
    $text.= $gasFile ? $gasFile : "nenahráno";

    $text.="\nVyúčtování elektřiny: ";
    $text.= $eleFile ? $eleFile : "nenahráno";


    //echo "<br><br>";
    //var_dump($text);

    $headers = 'From: web-poptavka@finomenergy.cz' . "\r\n" .
        'Reply-To: noreply@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    bd($sendto);
    $sendtos = explode(",",$sendto);
    bd($sendtos);

    foreach($sendtos as $sendto){
        bd("Odesílám na ".$sendto);
        mail($sendto,$subject,$text,$headers);
    }

    handleAffilConversion("finom-energy","finomenergy.cz",$_POST["code"],$_POST["hash"],"conversion",$_POST["services"],$text);

}

else{
    if($promoCode){
        handleAffilView("finom-energy","finomenergy.cz",$promoCode,$hash,"view",1,"no data");
    }
}



?>


<div id="<?=$componentId?>" class="form">
    <div class="wrap">
        <div class="grid-1">
            <h2>
                <?=$title?>
            </h2>

            <h3>
                <?=$subtitle?>
            </h3>

            <div class="grid-3 form-manual">
                <?php foreach ($manual as $item):?>
                    <div class="item">
                        <h3>
                            <span>
                               <?=$item->id . '.'?>
                            </span>

                            <?=$item->title?>
                        </h3>
                    </div>
                <?php endforeach; ?>
            </div>

            <?php if (isset($_POST['contactform'])): bd($data); ?>
                <?php component("contact.complete", $data->form->complete); ?>
            <?php endif;?>

            <form class="form-boxed" method="post" action="#contact" enctype="multipart/form-data">
                <div class="grid">
                    <b>
                        <?=$contactInfo->title?>
                    </b>
                </div>

                <div class="grid-3">
                    <?php foreach ($contactInfo->items as $item):?>
                        <div class="input smaller">
                            <div class="input__label">
                                <?=$item->label?>
                            </div>

                            <div class="input__box">
                                <input type="<?=$item->type?>" name="<?=$item->name?>" required />
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="grid-3 gapColSmall ais mt-2">
                    <div>
                        <div class="grid mb-1">
                            <b>
                                <?=$timeInterval->title?>
                            </b>
                        </div>

                        <div class="grid gridLg-4 ais">
                            <?php foreach ($timeInterval->items as $item):?>
                                <label class="radio">
                                    <?=$item->label?>

                                    <input
                                            type="radio"
                                            id="<?=$item->name?>"
                                            name="time-interval"
                                            value="<?=$item->name?>"
                                        <?=($item->checked == true) ? "checked" : ""?>
                                    />
                                    <span class="icon"></span>
                                </label>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div>
                        <div class="grid mb-1">
                            <b>
                                <?=$services->title?>
                            </b>
                        </div>

                        <div class="grid gridLg-4 ais">
                            <?php foreach ($services->items as $item):?>
                                <label class="radio">
                                    <?=$item->label?>

                                    <input
                                            type="radio"
                                            id="<?=$item->name?>"
                                            name="services"
                                            value="<?=$item->name?>"
                                        <?=($item->checked == true) ? "checked" : ""?>
                                    />
                                    <span class="icon"></span>
                                </label>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div>
                        <div class="grid">
                            <b>
                                <?=$moreInfo->title?>
                            </b>
                        </div>

                        <div class="grid">
                            <?php foreach ($moreInfo->items as $item):?>
                                <div class="input smaller">
                                    <div class="input__box">
                                        <textarea name="<?=$item->name?>" rows="<?=$item->rows?>" ></textarea>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="grid mt-2">
                            <b>
                                <?=$saleCode->title?>
                            </b>
                        </div>

                        <div class="grid">
                            <?php foreach ($saleCode->items as $item):?>
                                <div class="input smaller">
                                    <div class="input__box">
                                        <input type="<?=$item->type?>" name="<?=$item->name?>" value="<?=$promoCode?>" />
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="file-uploads">
                    <div class="grid mt-2 mb-1">
                        <b>
                            <?=$upload->title?>
                        </b>
                    </div>


                    <div class="grid-2 gapColSmall gapRowNone">
                        <?php foreach ($upload->items as $item):?>
                            <div class="input smaller">
                                <div class="input__label">
                                    <?=$item->label?>
                                </div>

                                <div class="input__box">
                                    <input type="<?=$item->type?>" name="<?=$item->name?>" id="<?=$item->id?>" />
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="action mt-2">
                    <input type="hidden" id="contactform" name="contactform" value="contactform">
                    <input type="hidden" id="hash" name="hash" value="<?=$hash?>">
                    <input class="btn btnOutlinedPrimary " type="submit" value="<?=$sendButton?>" />
                </div>
            </form>
        </div>
    </div>
</div>
