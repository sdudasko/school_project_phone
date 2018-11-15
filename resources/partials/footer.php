<footer class="clearfix">
    <div class="ct">
        <div class="ctr">
            <div class="center">
                <div class="fleft fx-100">
                    <div class="footer-content">
                    </div>
                </div>
            </div>
        </div>
        <div class="ctr">
            <div class="fx-50 footer-logo-section">
                <img src="/resources/img/logo.svg" alt="Xiaomi" class="footer-logo"><span
                        class="footer-text-white">Xiaomi&nbsp;Redmi&nbsp;4A</span>
                <p class="footer-text footer-text-left">
                    © 2018 Stefan Dudasko personal mobile website.<br>
                    XIAOMI is authorized mobile phone brand.<br>
                    The page was designed and created by Stefan Dudasko
                </p>
            </div>
            <div class="fx-50">
                <p class="footer-contact-text">
                    Stay in touch and <a href="/contact.php" class="footer-link">Contact us</a>.
                </p>
            </div>
        </div>
    </div>
</footer>
</div>
</body>

<?php
if (!isset($jsFilePaths)) {
    $jsFilePaths = [];
}

foreach ($jsFilePaths as $path) { ?>
    <script type="text/javascript" src="<?= $path ?>"></script>
<?php } ?>

</html>