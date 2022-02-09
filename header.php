<?php
    $pageTitle = "Framework - FINOM";
    $fontFace = "https://res.cloudinary.com/patrik-vadura/raw/upload/v1641887298/fontFaces/BrandonGrotesque/fontBrandonGrotesque_gf3jjy.css";
?>

<!DOCTYPE html>
<html lang="cs-CZ">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <title>
            <?php echo $pageTitle; ?>
        </title>

        <?php
            $web = $_GET['web'];

            echo "<link rel='stylesheet' href='assets/css/config.$web.css'>";
        ?>

        <link rel="stylesheet" href="<?php echo $fontFace; ?>">
        <script defer src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js"></script>
    </head>

    <body id="body">

        <?php
            if ($_GET['web'] == 'marak') {
                include 'components/header/header.marak.php';
            }

            if ($_GET['web'] == 'antonovic') {
                include 'components/header/header.antonovic.php';
            }
        ?>
