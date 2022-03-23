        <?php
            if ($_GET['web'] == 'marak') {
                include 'components/footer/footer.marak.php';
            }

            if ($_GET['web'] == 'antonovic') {
                include 'components/footer/footer.antonovic.php';
            }

            if ($_GET['web'] == 'finomsport') {
                include 'components/footer/footer.finomsport.php';
            }

            if ($_GET['web'] == 'finomsportCP') {
                include 'components/footer/comingsoon/footer.finomsportCP.php';
            }
        ?>
    </body>
</html>
