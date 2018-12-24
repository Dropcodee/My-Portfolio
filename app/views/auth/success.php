<?php require APPROOT . '/views/inc/header.php'; ?>


<section>
    <div class="trailer__container">
        <div class="uk-card uk-card-default uk-card-hover uk-text-center">
            <div class="uk-card-media-top">
                <img src="<?php echo URLROOT; ?>/img/success.png" alt="">
            </div>
            <div class="uk-card-body">
                <h2 class="trailer__heading">Dear
                    <?php echo $data['name'] ?>
                </h2>
                <h6 class="trailer__heading">
                    Thank You For Your Patience, You Will Be Contacted Shortly.
                </h6>
                <a href="<?php echo URLROOT; ?>/views/auth/contact">
                    <button class="uk-button trailer__form__button"> Try Again !</button>
                </a>
            </div>
        </div>
    </div>
</section>

<?php require APPROOT . '/views/inc/footer.php'; ?>