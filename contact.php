<?php
$cssFilePaths = [
    '/css/layout/contact.css'
];
?>
<!DOCTYPE html>
<html>
<head>
    <?php include('resources/partials/header.php') ?>
</head>
<body>
<?php include('resources/partials/nav.php') ?>
<main>
    <div class="page page-contact">
        <h1 class="page-about__main-heading center margined">Kontakt</h1>
        <div class="ct">
            <form action="" class="page-contact page-contact__form">
                <div class="ctr">
                    <div class="fleft page-contact__form-input-hf">
                        <input type="text" placeholder="Meno" class="page-contact__form-input">
                    </div>
                    <div class="fleft page-contact__form-input-hf">
                        <input type="text" placeholder="E-mail" class="page-contact__form-input">
                    </div>
                </div>
                <div class="ctr page-contact__form-input--message">
                    <textarea name="message" id="message" cols="30" rows="10" class="page-contact__form-input">
                    </textarea>
                </div>
                <div class="ctr page-contact__consent-wrapper">
                    <input type="checkbox" name="consent_agreed" id="consent_agreed">
                    <label for="consent_agreed">Súhlasím so spracovaním osobných údajov.</label>
                </div>
                <div class="ctr center">
                    <input type="submit" value="Poslat" class="btn-blue">
                </div>
            </form>
        </div>

    </div>

</main>
<?php include('resources/partials/footer.php') ?>
</body>
</html>