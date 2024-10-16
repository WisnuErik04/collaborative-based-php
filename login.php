<?php 
    require 'koneksi.php';
    $all_user = selectAll_query("SELECT * FROM user ");
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        // $remember = $_POST['remember'];    
        $akun_usr_login = $_POST['email'];    
        $akun_pw = md5($_POST['password']);

        $terdaftar = select_query("SELECT * FROM user WHERE user_email = '$akun_usr_login' AND user_password = '$akun_pw'");
        
        if (count($terdaftar) >= 1) {
            session_start();
    
            $_SESSION['session_user_id'] = $terdaftar['user_id'];
            $_SESSION['session_user_name'] = $terdaftar['user_name'];
            $_SESSION['session_user_password'] = $terdaftar['user_password'];
    
            header("location: index.php");
        } else {
            // echo"SELECT * FROM user WHERE user_name = '$akun_usr_login' AND user_password = '$akun_pw'";
            echo'gagal';
        }
    }      
?>
<!DOCTYPE html>
<html         lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="T8Srr0xL4ztbcto5yEDWMp43iPARMmMEv8zwbJRe">

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300..500&family=Roboto:wght@300..700&display=swap" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#00a300">
    <meta name="theme-color" content="#ffffff">
    <title>Masuk log</title>
    <meta name="description" content="Masuk log untuk untuk menggunakan fitur-fitur bagi anggota.">
    <link rel="canonical" href="https://filmindonesia.or.id/otentikasi/gabung">
    <link rel="alternate" hreflang="id" href="https://filmindonesia.or.id/otentikasi/gabung">
    <meta property="og:title" content="Masuk log">
    <meta property="og:description" content="Masuk log untuk untuk menggunakan fitur-fitur bagi anggota.">
    <meta property="og:url" content="https://filmindonesia.or.id/otentikasi/gabung">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="id_ID">
    <meta property="og:locale:alternate" content="en_US">
    <meta property="og:image" content="https://filmindonesia.or.id/img/logo-cover.png">

    <meta name="twitter:site" content="@FilmID_">
        
    <link href="css/front.css" rel="stylesheet">
</head>

<body class="mdc-typography">

    <div class="mdc-drawer-app-content">
        <header class="mdc-top-app-bar">
    <div class="container">
        <div class="mdc-top-app-bar__row">
        <?php include_once "nav.php";?>
        </div>
    </div>
    <div class="search-bar">
    <div class="container">
        <form action="" method="post" role="search">
            <input type="hidden" name="_token" value="T8Srr0xL4ztbcto5yEDWMp43iPARMmMEv8zwbJRe" autocomplete="off">                        <label class="mdc-text-field mdc-text-field--no-label">
                <span class="mdc-text-field__ripple"></span>
                <input class="mdc-text-field__input search-bar__input"
                    name="q"
                    type="text"
                    placeholder="Cari"
                    aria-label="Cari"
                    value="">
                <button class="mdc-icon-button mdc-text-field__icon mdc-text-field__icon--trailing search-bar__close__button" tabindex="0" role="button" aria-label="Tutup">
                    <i class="iconify mdc-icon-button__icon" data-inline="false" data-icon="mdi:close" aria-hidden="true"></i>
                </button>
                <span class="mdc-line-ripple"></span>
            </label>
        </form>
    </div>
</div>
</header>
    <main class="main-content mdc-top-app-bar--fixed-adjust">
        <div class="container">
            <div class="mdc-top-app-bar--fixed-adjust centered w-50">
                <form method="POST" action="" class="authentication-form">
                    <div class="panel panel--outlined login-panel panel--primary panel--padded">
                        <div class="panel__heading">
                            <div class="panel__heading__title">Masuk</div>
                        </div>

                        <div class="panel__content">
                            <div class="flex flex-column">
                            
                                <span class="sr"><input type="hidden" name="_token" value="T8Srr0xL4ztbcto5yEDWMp43iPARMmMEv8zwbJRe" autocomplete="off"></span>

                                <label class="mdc-text-field mdc-text-field--filled form-input fit">
                                    <span class="mdc-text-field__ripple"></span>
                                    <span id="email-field" class="mdc-floating-label">Alamat Surel</span>
                                    <input class="mdc-text-field__input" type="email" name="email" value="" required="required"
                                    data-lpignore="true"  aria-labelledby=email-field
                                                />
                                    <span class="mdc-line-ripple"></span>
                                </label>
                                <label class="mdc-text-field mdc-text-field--filled form-input fit mt-4">
                                    <span class="mdc-text-field__ripple"></span>
                                        <span id="password-field" class="mdc-floating-label">Kata Sandi</span>
                                        <input class="mdc-text-field__input" type="password" name="password" value="" required="required"
                                        data-lpignore="true"  aria-labelledby=password-field
                                                        />
                                    <span class="mdc-line-ripple"></span>
                                </label>

                                <!-- <div class="mdc-form-field form-field fit mt-2">
                                    <div class="mdc-checkbox mdc-checkbox--touch">
                                        <input type="checkbox" class="mdc-checkbox__native-control" name="remember" value="1"
                                            id="remember-field"
                                            />
                                        <div class="mdc-checkbox__background">
                                            <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                                            </svg>
                                            <div class="mdc-checkbox__mixedmark"></div>
                                        </div>
                                        <div class="mdc-checkbox__ripple"></div>
                                    </div>
                                    <label for="remember-field">Ingat Saya</label>
                                </div> -->
                            </div>
                        </div>

                        <div class="panel__footer">
                            <div class="bar">
                                <div class="bar__row">
                                    <section class="bar__section bar__section--align-end">
                                        <!-- <div class="mdc-touch-target-wrapper">
                                            <a class="mdc-button mdc-button--touch" href="https://filmindonesia.or.id/otentikasi/kata-sandi/meminta" role="button">
                                                <div class="mdc-button__ripple"></div> 
                                                <span class="mdc-button__label">Lupa Kata Sandi Anda?</span>
                                                <div class="mdc-button__touch"></div>
                                            </a>
                                        </div> -->
                                        <div class="mdc-touch-target-wrapper">
                                            <button class="mdc-button mdc-button--touch mdc-button--unelevated" type="submit">
                                                <div class="mdc-button__ripple"></div>

                                                
                                                <span class="mdc-button__label">Masuk</span>

                                                
                                                <div class="mdc-button__touch"></div>
                                            </button>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <table>
                    <thead>
                        <tr>
                            <td>Email</td>
                            <td>Password</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($all_user as $key => $value) :?>
                            <tr>
                                <td><?=$value['user_email']?></td>
                                <td>123456</td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            <div class="mdc-layout-grid">
                <div class="mdc-layout-grid__inner">
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-phone mdc-layout-grid__cell--span-8-tablet mdc-layout-grid__cell--span-9-desktop">
                        <div class="terms">
                            <div class="mdc-touch-target-wrapper">
                                <a class="mdc-button mdc-button--touch" href="https://filmindonesia.or.id/kebijakan-perlindungan-privasi" role="button">
                                    <div class="mdc-button__ripple"></div>

                                    
                                    <span class="mdc-button__label">Kebijakan privasi</span>

                                    
                                    <div class="mdc-button__touch"></div>
                                </a>
                            </div>

                            <div class="mdc-touch-target-wrapper">
                                <a class="mdc-button mdc-button--touch" href="https://filmindonesia.or.id/ketentuan-penggunaan" role="button">
                                    <div class="mdc-button__ripple"></div>

                                    
                                    <span class="mdc-button__label">Ketentuan penggunaan</span>

                                    
                                    <div class="mdc-button__touch"></div>
                                </a>
                            </div>

                            <div class="mdc-touch-target-wrapper">
                                <a class="mdc-button mdc-button--touch" href="https://filmindonesia.or.id/pencantuman-sumber-materi-dan-hak-cipta" role="button">
                                    <div class="mdc-button__ripple"></div>

                                    
                                    <span class="mdc-button__label">Ketentuan hak cipta</span>

                                    
                                    <div class="mdc-button__touch"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-phone mdc-layout-grid__cell--span-8-tablet mdc-layout-grid__cell--span-3-desktop">
                        <div class="social-icons">
                            <a class="mdc-icon-button" href="#" title="Twitter" aria-label="Twitter">
                                <i class="iconify mdc-icon-button__icon" data-inline="false" data-icon="mdi:twitter" aria-hidden="true"></i>
                            </a>

                                                    <a class="mdc-icon-button" href="#" title="Facebook" aria-label="Facebook">
                                <i class="iconify mdc-icon-button__icon" data-inline="false" data-icon="mdi:facebook" aria-hidden="true"></i>
                            </a>

                                                    <a class="mdc-icon-button" href="#" title="Tentang Kami" aria-label="Tentang Kami">
                                <i class="iconify mdc-icon-button__icon" data-inline="false" data-icon="mdi:contacts" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </div>

            <script src="css/front.js"></script>
                <script>
        var _paq = window._paq = window._paq || [];
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u="//analytics.filmindonesia.or.id/";
            _paq.push(['setTrackerUrl', u+'matomo.php']);
            _paq.push(['setSiteId', '1']);
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
            g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
        })();
    </script>
    </body>

</html>
