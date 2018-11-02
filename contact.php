<?php
$cssFilePaths = [
    '/css/layout/contact.css'
];
?>

<?php include('resources/partials/header.php') ?>
<?php include('resources/partials/nav.php') ?>
    <main>
        <div class="page page-contact">
            <h1 class="page-about__main-heading center margined">Kontakt</h1>
            <div class="ct">
                <form action="" class="page-contact page-contact__form" method="post">
                    <div class="ctr">
                        <div class="fleft fx-50">
                            <input type="text" placeholder="Meno" class="page-contact__form-input">
                        </div>
                        <div class="fleft fx-50">
                            <input type="text" placeholder="E-mail" class="page-contact__form-input">
                        </div>
                    </div>
                    <div class="ctr">
                        <div class="fx-100 page-contact__form-input--message">
                                <textarea name="message" id="message" cols="30" rows="10"
                                          class="page-contact__form-input"></textarea>
                        </div>
                    </div>
                    <div class="ctr page-contact__consent-wrapper">
                        <div class="fx-100">
                            <input type="checkbox" name="consent_agreed" id="consent_agreed">
                            <label for="consent_agreed">Súhlasím so spracovaním osobných údajov.</label>
                        </div>
                    </div>
                    <div class="ctr center">
                        <input type="submit" value="Poslať" class="btn-blue">
                    </div>
                </form>
            </div>

        </div>

    </main>
<?php include('resources/partials/footer.php') ?>