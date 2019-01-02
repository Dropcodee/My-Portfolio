<?php require APPROOT . '/views/inc/header.php';  print_r($result);?>
<section class="uk-section uk-section-default">
    <div class="trailer__container">
        <div class="uk-card uk-card-default uk-card-hover">
            <div class="card-header">
                <div class="uk-card-media-top uk-text-center"><img src="<?php echo URLROOT; ?>/img/logo.png" alt=""></div>
                <h3 class="trailer__heading">Thanks for taking out time to reach out, What can do for you?</h3>

                <div class="card-body">
                    <div class="trailer__small__container">
                        <form class="uk-grid-small" uk-grid method="POST" action="<?php echo URLROOT; ?>/auth/contact">
                            <div class="uk-width-1-2@s">
                                <div class="uk-inline">
                                    <span class="uk-form-icon" uk-icon="icon: user"></span>
                                    <input class="uk-input uk-form-width-large uk-form-large <?php echo (!empty($data['name__error'])) ? 'uk-form-danger' : ''; ?>"
                                        type="text" placeholder="Enter Your Name" name="name" value="<?php echo $data['name']; ?>">
                                </div>
                                <span class="uk-text-small uk-text-left uk-text-danger">
                                    <?php echo $data['name__error']; ?></span>
                            </div>
                            <div class="uk-width-1-2@s">
                                <div class="uk-inline">
                                    <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                    <input class="uk-input uk-form-width-large uk-form-large <?php echo (!empty($data['email__error'])) ? 'uk-form-danger' : ''; ?>"
                                        type="text" placeholder="Enter Your Email" name="email" value="<?php echo $data['email']; ?>">
                                </div>
                                <span class="uk-text-small uk-text-left uk-text-danger">
                                    <?php echo $data['email__error']; ?></span>
                            </div>
                            <div class="uk-width-1-1">
                                <textarea class="uk-textarea <?php echo (!empty($data['message__error'])) ? 'uk-form-danger' : ''; ?>"
                                    rows="5" placeholder="Little Message About Your Project..." name="message" value="<?php echo $data['message']; ?>"></textarea>
                                <span class="uk-text-small uk-text-left uk-text-danger">
                                    <?php echo $data['message__error']; ?></span>
                            </div>
                            <div class="uk-width-1-1 uk-text-center">
                                <button class="uk-button trailer__form__button trailer__rounded">Submit<span class="uk-icon"
                                        uk-icon="icon: check"></span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require APPROOT . '/views/inc/footer.php'; ?>