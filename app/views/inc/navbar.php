<header>
    <!-- Main Navbar -->
    <nav class="uk-container uk-navbar">
        <div class="uk-navbar-left">
            <ul class="uk-navbar-nav  logo__wrapper">
                <li class="uk-active">
                    <a href="<?php echo URLROOT; ?>">Drop<strong id="logo">Code</strong></a>
                </li>
            </ul>
        </div>
        <div class="uk-navbar-right">
            <ul class="uk-navbar-nav uk-visible@s">
                <li><a class="uk-text-large" href="<?php echo URLROOT; ?>/auth/contact"><button class="uk-button trailer__rounded__button">
                            Say Hello</button></a></li>
            </ul>
            <a href="#" class="uk-navbar-toggle uk-hidden@s" uk-navbar-toggle-icon uk-toggle="target: #sidenav"></a>
        </div>
    </nav>
</header>

<div id="sidenav" uk-offcanvas="flip: true" class="uk-offcanvas">
    <div class="uk-offcanvas-bar">
        <ul class="uk-nav">
            <li><a class="uk-text-large" href="<?php echo URLROOT; ?>/auth/contact">Say Hello</a></li>
        </ul>
    </div>
</div>