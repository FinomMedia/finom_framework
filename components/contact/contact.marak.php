<?php
    $contactTitle = "Kontaktujte mě";
?>

<div id="contact" class="contact contact-01">
    <div class="wrap">
        <h2>
            <?php echo $contactTitle; ?>
        </h2>

        <div class="grid-4">
            <div class="contactBox">
                <img src="https://res.cloudinary.com/patrik-vadura/image/upload/v1643617381/marak_web/icons/icon_contact_01_uh9abr.svg">

                <h4>
                    Adresa
                </h4>

                <p>
                    Stojanova 1334, <br> Uherské Hradiště, 686 01
                </p>
            </div>

            <div class="contactBox">
                <img src="https://res.cloudinary.com/patrik-vadura/image/upload/v1643617381/marak_web/icons/icon_contact_02_a2uxbk.svg">

                <h4>
                    Telefon
                </h4>

                <p>
                    +420 777 888 164
                </p>
            </div>

            <div class="contactBox">
                <img src="https://res.cloudinary.com/patrik-vadura/image/upload/v1643617381/marak_web/icons/icon_contact_03_puo7j0.svg">

                <h4>
                    Email
                </h4>

                <p>
                    marak@finomgroup.cz
                </p>
            </div>

            <div class="contactBox">
                <img src="https://res.cloudinary.com/patrik-vadura/image/upload/v1643617381/marak_web/icons/icon_contact_04_jf6r53.svg">

                <h4>
                    Web
                </h4>

                <p>
                    finomgroup.cz
                </p>
            </div>
        </div>

        <div class="wrapS">
            <form>
                <div class="columns">
                    <div class="input" >
                        <div class="input__label">
                            Celé jméno *
                        </div>

                        <div class="input__box">
                            <input type="text" name="name" required />
                        </div>
                    </div>

                    <div class="input" >
                        <div class="input__label">
                            Email *
                        </div>

                        <div class="input__box">
                            <input type="email" name="email" required />
                        </div>
                    </div>
                </div>

                <div class="input" >
                    <div class="input__label">
                        Předmět *
                    </div>

                    <div class="input__box">
                        <input type="text" name="subject" required />
                    </div>
                </div>

                <div class="input" >
                    <div class="input__label">
                        Vaše zpráva *
                    </div>

                    <div class="input__box">
                        <textarea name="message" rows="4" required></textarea>
                    </div>
                </div>

                <div class="action">
                    <a class="btn btnOutlinedPrimary" type="submit" value="Submit">
                        Odeslat
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>