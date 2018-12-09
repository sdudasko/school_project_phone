<form action="/review_store.php" method="post">
    <div id="reviewCreateModal" class="modal">
        <div class="modal-content"><?= $langFile[$locale]['modal_create']['publish'] ?>
            <span class="review-modal__heading"></span>
            <span class="close">&times;</span>
            <input type="text" name="name" placeholder="<?= $langFile[$locale]['modal_create']['name'] ?>" class="review-modal-input">
            <textarea name="text" placeholder="<?= $langFile[$locale]['modal_create']['text'] ?>" class="review-modal-input"></textarea>
            <input type="submit" value="<?= $langFile[$locale]['modal_create']['cta'] ?>" class="review-modal__cta-post btn-blue btn-blue--small"> <?= $langFile[$locale]['modal_create']['or'] ?> <span
                    class="review-modal__cta-cancel"><?= $langFile[$locale]['modal_create']['cancel'] ?></span>
        </div>
    </div>
</form>