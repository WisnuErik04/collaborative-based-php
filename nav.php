<!-- <div class="container">
    <div class="mdc-top-app-bar__row"> -->
        <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
            <button class="mdc-icon-button mdc-top-app-bar__navigation-icon drawer-btn" data-inline="false" tabindex="0" aria-label="Drawer">
                <i class="iconify mdc-icon-button__icon" data-inline="false" data-icon="mdi:menu" aria-hidden="true"></i>
            </button>
            <span class="brand-logo">
                <a href="https://filmindonesia.or.id/">
                    <img src="https://filmindonesia.or.id/img/logo-50.svg" alt="logo" loading="lazy" title="FI Logo">
                </a>
            </span>
            <span class="mdc-top-app-bar__title">
                <a href="https://filmindonesia.or.id">Film Indonesia</a>
            </span>
        </section>
        <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end">
            <?php if (isset($session_usr_id)) :?>
                <div class="mdc-touch-target-wrapper">
                        <div class="mdc-button__ripple"></div>
                        <span class="mdc-button__label">Selamat datang, <?=$session_user_name?></span>
                        <div class="mdc-button__touch"></div>

                </div>
                <div class="mdc-menu-surface--anchor">
                <button class="mdc-icon-button mdc-top-app-bar__action-item" id="top-bar__login-button" aria-label="Masuk">
                    <i class="iconify mdc-icon-button__icon" data-inline="false" data-icon="mdi:account-circle" aria-hidden="true"></i>
                </button>
                <div class="dropdown mdc-menu mdc-menu-surface top-bar__dropdown-menu" data-toggler="#top-bar__login-button">
                    <div class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical" tabindex="-1">
                        <a class="mdc-list-item" href="logout.php" role="menuitem">
                            <span class="mdc-list-item__ripple"></span>
                            <i class="iconify mdc-list-item__graphic" data-icon="mdi:account-arrow-left" aria-hidden="true"></i>
                            <span class="mdc-list-item__text">Keluar</span>
                        </a>
                    </div>
                </div>
            </div>
            <?php else :?>
                <!-- <div class="mdc-touch-target-wrapper">
                    <a class="mdc-button mdc-button--touch mdc-top-app-bar__action-item" href="https://filmindonesia.or.id/artikel" role="button">
                        <div class="mdc-button__ripple"></div>
                        <span class="mdc-button__label">Artikel</span>
                        <div class="mdc-button__touch"></div>
                    </a>
                </div>
    
                <div class="mdc-touch-target-wrapper">
                    <a class="mdc-button mdc-button--touch mdc-top-app-bar__action-item" href="https://filmindonesia.or.id/tinjauan" role="button">
                        <div class="mdc-button__ripple"></div>
                        <span class="mdc-button__label">Tinjauan</span>
                        <div class="mdc-button__touch"></div>
                    </a>
                </div>
    
                <div class="mdc-touch-target-wrapper">
                    <a class="mdc-button mdc-button--touch mdc-top-app-bar__action-item" href="https://filmindonesia.or.id/film" role="button">
                        <div class="mdc-button__ripple"></div>
                        <span class="mdc-button__label">Katalog</span>
                        <div class="mdc-button__touch"></div>
                    </a>
                </div>
    
                <button class="mdc-icon-button mdc-top-app-bar__action-item" id="app-bar__search" aria-label="Search">
                    <i class="iconify mdc-icon-button__icon" data-inline="false" data-icon="mdi:search" aria-hidden="true"></i>
                </button> -->
    
                <div class="mdc-menu-surface--anchor">
                    <button class="mdc-icon-button mdc-top-app-bar__action-item" id="top-bar__login-button" aria-label="Masuk">
                        <i class="iconify mdc-icon-button__icon" data-inline="false" data-icon="mdi:account-circle" aria-hidden="true"></i>
                    </button>
                    <div class="dropdown mdc-menu mdc-menu-surface top-bar__dropdown-menu" data-toggler="#top-bar__login-button">
                        <div class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical" tabindex="-1">
                            <a class="mdc-list-item" href="login.php" role="menuitem">
                                <span class="mdc-list-item__ripple"></span>
                                <i class="iconify mdc-list-item__graphic" data-icon="mdi:account-arrow-left" aria-hidden="true"></i>
                                <span class="mdc-list-item__text">Masuk</span>
                            </a>
                            <a class="mdc-list-item" href="https://filmindonesia.or.id/otentikasi/daftar" role="menuitem">
                                <span class="mdc-list-item__ripple"></span>
                                <i class="iconify mdc-list-item__graphic" data-icon="mdi:account-plus" aria-hidden="true"></i>
                                <span class="mdc-list-item__text">Daftar</span>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endif;?>
        </section>
    <!-- </div>
</div> -->