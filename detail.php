<!DOCTYPE html>
<html lang="id">
<?php 
require "koneksi.php";
require "session.php";
require "fungsi.php";

$film_id = $_GET['id'];
$query = "SELECT *
            FROM film 
            WHERE film_id = '$film_id'";
$film = select_query($query);
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="aU0U6ZFgLRKxyZcNspv9iQLOluO2weOBcUABoH2d">

    
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
    <title><?=$film['film_nama']?></title>
    <meta name="description" content="Dua kelompok anak-anak melakoni permainan tradisional perang-perangan untuk mempertahankan perbatasan sebuah negara yang tidak boleh tergeser bahkan 1">
    <link rel="canonical" href="https://filmindonesia.or.id/film/lf-1020-24-028292">
    <link rel="alternate" hreflang="id" href="https://filmindonesia.or.id/film/lf-1020-24-028292">
    <meta property="og:title" content="<?=$film['film_nama']?>">
    <meta property="og:description" content="Dua kelompok anak-anak melakoni permainan tradisional perang-perangan untuk mempertahankan perbatasan sebuah negara yang tidak boleh tergeser bahkan 1">
    <meta property="og:url" content="https://filmindonesia.or.id/film/lf-1020-24-028292">
    <meta property="og:type" content="video.movie">
    <meta property="og:locale" content="id_ID">
    <meta property="og:locale:alternate" content="en_US">
    <meta property="og:duration" content="PT1H35M">
    <meta property="og:release_date" content="14-03-2024">
    <meta property="og:image" content="https://filmindonesia.or.id/f/img/movie/poster/1-cm-pasukan-merah-putih.jpg">

    <meta name="twitter:site" content="@FilmID_">
    <script type="application/ld+json">{"@context":"https:\/\/schema.org","@type":"Movie","name":"1 CM: Pasukan Merah Putih","description":"Dua kelompok anak-anak melakoni permainan tradisional perang-perangan untuk mempertahankan perbatasan sebuah negara yang tidak boleh tergeser bahkan 1","url":"https:\/\/filmindonesia.or.id\/film\/lf-1020-24-028292","image":{"@type":"ImageObject","name":"Poster","url":"https:\/\/filmindonesia.or.id\/img\/poster.svg"},"duration":"PT1H35M","datePublished":"14-03-2024","genre":["Komedi","Drama"],"aggregateRating":{"@type":"AggregateRating","name":"Users rating","ratingCount":0},"actor":[{"@type":"Person","name":"Raihan Firjatullah Valendiaz","url":"https:\/\/filmindonesia.or.id\/nama\/nmp65e57df417f5f"},{"@type":"Person","name":"Ovellia Angeline Yan","url":"https:\/\/filmindonesia.or.id\/nama\/nmp65e57e19ac786"},{"@type":"Person","name":"Icha Lubis","url":"https:\/\/filmindonesia.or.id\/nama\/nmp65e57e3569e01"},{"@type":"Person","name":"Aidil Fitrah Ghassani","url":"https:\/\/filmindonesia.or.id\/nama\/nmp65e57f2ca6d03"},{"@type":"Person","name":"Destyn Clara Hanessa Sinaga","url":"https:\/\/filmindonesia.or.id\/nama\/nmp65e57f429c597"},{"@type":"Person","name":"Widya Nitisara","url":"https:\/\/filmindonesia.or.id\/nama\/nmp65e6c78a54571"}],"director":[{"@type":"Person","name":"Dedy Arliansyah Siregar","url":"https:\/\/filmindonesia.or.id\/nama\/nmp5ae01cde41a0b"}],"producer":[{"@type":"Person","name":"Dedy Arliansyah Siregar","url":"https:\/\/filmindonesia.or.id\/nama\/nmp5ae01cde41a0b"}]}</script>
    <link href="css/front.css" rel="stylesheet">
</head>

<body >

    <aside class="mdc-drawer mdc-drawer--modal">
        <div class="mdc-drawer__header">
            <button class="mdc-icon-button drawer-close-btn" data-inline="false" aria-label="Drawer">
                <i class="iconify mdc-icon-button__icon" data-inline="false" data-icon="mdi:menu-open" aria-hidden="true"></i>
            </button>
        </div>
        <div class="mdc-drawer__content">
            <nav class="mdc-list mdc-drawer__navigation-menu" name="frontend-navigation-drawer">
                <a class="mdc-list-item" href="https://filmindonesia.or.id/artikel" aria-current="page">
                    <span class="mdc-list-item__ripple"></span>
                    <i class="iconify mdc-list-item__graphic" data-icon="mdi:newspaper-variant" aria-hidden="true"></i>
                    <span class="mdc-list-item__text">Artikel</span>
                </a>
                <a class="mdc-list-item" href="https://filmindonesia.or.id/tinjauan">
                    <span class="mdc-list-item__ripple"></span>
                    <i class="iconify mdc-list-item__graphic" data-icon="mdi:comment-text" aria-hidden="true"></i>
                    <span class="mdc-list-item__text">Tinjauan</span>
                </a>
                <a class="mdc-list-item" href="https://filmindonesia.or.id/film">
                    <span class="mdc-list-item__ripple"></span>
                    <i class="iconify mdc-list-item__graphic" data-icon="mdi:book-open-page-variant" aria-hidden="true"></i>
                    <span class="mdc-list-item__text">Katalog</span>
                </a>
            </nav>
        </div>
    </aside>

    <div class="mdc-drawer-scrim"></div>

    <div class="mdc-drawer-app-content">
        <header class="mdc-top-app-bar">
            <div class="container">
                <div class="mdc-top-app-bar__row">
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
                        <div class="mdc-touch-target-wrapper">
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
                        </button>

                        <div class="mdc-menu-surface--anchor">
                            <button class="mdc-icon-button mdc-top-app-bar__action-item" id="top-bar__login-button" aria-label="Masuk">
                                <i class="iconify mdc-icon-button__icon" data-inline="false" data-icon="mdi:account-circle" aria-hidden="true"></i>
                            </button>
                            <div class="dropdown mdc-menu mdc-menu-surface top-bar__dropdown-menu" data-toggler="#top-bar__login-button">
                                <div class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical" tabindex="-1">
                                    <a class="mdc-list-item" href="https://filmindonesia.or.id/otentikasi/gabung" role="menuitem">
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
                    </section>
                </div>
            </div>
            <div class="search-bar">
                <div class="container">
                    <form action="https://filmindonesia.or.id/pencarian" method="post" role="search">
                        <input type="hidden" name="_token" value="aU0U6ZFgLRKxyZcNspv9iQLOluO2weOBcUABoH2d" autocomplete="off">                        <label class="mdc-text-field mdc-text-field--no-label">
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
                <div class="mdc-layout-grid movie-hero">
                    <div class="movie-hero__inner">
                        <div class="mdc-layout-grid__inner">
                            <div class="mdc-layout-grid__cell
                                mdc-layout-grid__cell--span-9
                                mdc-layout-grid__cell--span-4-phone
                                mdc-layout-grid__cell--span-8-tablet
                                mdc-layout-grid__cell--span-9-desktop">
                                <div class="movie-hero__content-panel">
                                    <div class="mdc-layout-grid__inner">
                                        <div class="mdc-layout-grid__cell
                                            mdc-layout-grid__cell--span-4-phone
                                            mdc-layout-grid__cell--span-3-tablet
                                            mdc-layout-grid__cell--span-3-desktop">
                                            <div class="movie-hero__poster">
                                                <div class="mdc-card rd-off">
                                                    <div class="mdc-card__primary-action" tabindex="0">
                                                        <div class="mdc-card__media mdc-card__media--378-473 lazyload"
                                                            data-bgset="<?=$film['film_img_link']?> | <?=$film['film_img_link']?>-2x 2x | <?=$film['film_img_link']?> [--phone] | <?=$film['film_img_link']?>-2x 2x [--phone]"
                                                            data-sizes="auto">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mdc-layout-grid__cell
                                            mdc-layout-grid__cell--span-4-phone
                                            mdc-layout-grid__cell--span-5-tablet
                                            mdc-layout-grid__cell--span-9-desktop">
                                            <div class="movie-hero__content">
                                                <h1 class="movie-hero__title">
                                                    <small class="leading text--lc"><a href="https://filmindonesia.or.id/film"><span class="text--hashtag">Katalog</span></a></small>
                                                    <?=$film['film_nama']?>
                                                </h1>
                                                <?php
                                                    // $query = "SELECT rate_skor, id_user
                                                    //         from rate 
                                                    //         where id_film = '$film_id'"; 
                                                    // $ratesAll = selectAll_query($query);
                                                    $query = "SELECT TRUNCATE(SUM(rate_skor)/COUNT(rate_skor), 1) as avg_rate from rate where id_film = '$film_id'"; 
                                                    $rates = select_query($query);
                                                    // echo"<pre> $query";   
                                                    // print_r($ratesAll);                                            
                                                    // print_r($rates['avg_rate']);                                            
                                                    // echo"</pre>";   
                                                    
                                                    $final_rate = $rates['avg_rate']?? 0;
                                                ?>
                                                <div class="rating-box">
                                                    <span class="score"><?=$final_rate?></span>
                                                    <span class="stars"
                                                        data-rating="<?=$final_rate?>"
                                                        data-store-url="https://filmindonesia.or.id/film/lf-1020-24-028292/peringkat"
                                                        data-busy-text="Penilaian sedang berlangsung. Mohon tunggu..."></span>
                                                </div>
                                                <div class="movie-hero__content__labels">
                                                    <div class="tags">
                                                        <span data-url="https://filmindonesia.or.id/film?genre=komedi"
                                                            class="tag tag--hoverable tag--clear">
                                                            Komedi
                                                        </span>
                                                        <span data-url="https://filmindonesia.or.id/film?genre=drama"
                                                            class="tag tag--hoverable tag--clear">
                                                            Drama
                                                        </span>
                                                        <span data-url="https://filmindonesia.or.id/film?tahun=2024"
                                                            class="tag tag--hoverable tag--clear">
                                                            2024
                                                        </span>
                                                        <span class="tag tag--clear">
                                                            95 mnt
                                                        </span>
                                                        <span class="tag tag--clear">
                                                            Semua Umur (LSF)
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="movie-hero__content__casts">
                                                    Sutradara: <a href="#"><?=$film['film_sutradara']?></a>
                                                    <br>
                                                    Pemeran: <a href="#"><?=$film['film_pemeran']?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mdc-layout-grid__cell
                                mdc-layout-grid__cell--span-3
                                mdc-layout-grid__cell--span-4-phone
                                mdc-layout-grid__cell--span-8-tablet
                                mdc-layout-grid__cell--span-3-descktop">
                                <div class="movie-hero__sidebar">
                                    <div class="movie-hero__sidebar__inner">
                                        <div class="movie-menu">
                                            <div class="movie-menu__section">
                                                <div class=movie-menu__item">
                                                    <div class="mdc-touch-target-wrapper">
                                                        <a class="mdc-button mdc-button--touch mdc-button--unelevated mdc-button--fullwidth" href="https://filmindonesia.or.id/film/lf-1020-24-028292/kredit" role="button">
                                                            <div class="mdc-button__ripple"></div>  
                                                            <span class="mdc-button__label">Kredit</span> 
                                                            <div class="mdc-button__touch"></div>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="movie-menu__item">
                                                    <div class="mdc-touch-target-wrapper">
                                                        <a class="mdc-button mdc-button--touch mdc-button--unelevated mdc-button--fullwidth" href="https://filmindonesia.or.id/film/lf-1020-24-028292/media" role="button">
                                                            <div class="mdc-button__ripple"></div>
                                                            <span class="mdc-button__label">Media</span>
                                                            <div class="mdc-button__touch"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mdc-layout-grid main-content__grid">
                    <div class="mdc-layout-grid__inner">
                        <div class="main-content__content mdc-layout-grid__cell mdc-layout-grid__cell--span-4-phone mdc-layout-grid__cell--span-8-tablet mdc-layout-grid__cell--span-9-desktop">
                            <div class="panel panel--fit">
                                <div class="panel__heading">
                                    <div class="panel__heading__title">Sinopsis</div>
                                </div>
                                <div class="panel__content">
                                    <p><?=$film['film_sinopsis']?></p>
                                </div>
                            </div>
                        </div>
                        <div class="main-content__sidebar mdc-layout-grid__cell mdc-layout-grid__cell--span-4-phone mdc-layout-grid__cell--span-8-tablet mdc-layout-grid__cell--span-3-desktop">
                            <div class="panel sidebar-hero m-off">
                                <div id="widget:random-trivia" class="align-center">
                                    <p><em>Babi Buta Yang Ingin Terbang</em> (2008) memecahkan rekor <em>Jermal</em> (2008) tahun 2011 dalam penampilan di 34 festival internasional. Pada 2012 film ini sudah keliling ke 39 festival, juga di 5 benua.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mdc-layout-grid main-content__grid">
                    <div class="panel panel--fit">
                        <div class="panel__heading">
                            <div class="panel__heading__title">Rekomendasi Film lain</div>
                        </div>
                    </div>
                    <?php
                        $query = "SELECT film_id, film_sinopsis
                                    FROM film 
                                    where film_id != '$film_id'
                                    order by film_id asc";
                        $film = selectAll_query($query);
                        $arr_sim = [];
                        foreach ($film as $key => $value) :
                            $nilai_similaritas = cosine_similarity($film_id, $value['film_id']);
                            $arr_sim[] = [
                                "film_id" => $value['film_id'],
                                "nilai_sim" => $nilai_similaritas,
                            ];
                        endforeach;

                        function compare_nilai_sim($a, $b) {
                            return $b['nilai_sim'] <=> $a['nilai_sim'];
                        }
                        usort($arr_sim, 'compare_nilai_sim');
                        $top5_recommendation = array_slice($arr_sim, 0, 5);;
                       
                        foreach ($top5_recommendation as $key => $value) :
                            $rec_film_id = $value['film_id'];
                            $query = "SELECT *
                                        FROM film 
                                        WHERE film_id = '$rec_film_id'";
                            $film = select_query($query);
                  
                            ?>
                            <div class="mdc-layout-grid__inner panel__content">
                                <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-1-phone mdc-layout-grid__cell--span-2-tablet mdc-layout-grid__cell--span-2-desktop">
                                    <div class="mdc-card rd-off">
                                        <div class="mdc-card__primary-action" tabindex="0">
                                            <div class="mdc-card__media mdc-card__media--378-473 lazyload"
                                                data-bgset="<?=$film['film_img_link']?>, <?=$film['film_img_link']?>-2x 2x, <?=$film['film_img_link']?>, <?=$film['film_img_link']?>-2x 2x"
                                                data-sizes="auto">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-3-phone mdc-layout-grid__cell--span-6-tablet mdc-layout-grid__cell--span-10-desktop">
                                    <div class="panel panel--fit no-margin">
                                        <div class="panel__heading">
                                            <div class="panel__heading__text">
                                                <div class="panel__heading__title">
                                                    <a href="detail.php?id=<?=$film['film_id']?>"><?=$film['film_nama']?></a>
                                                </div>
                                                <div class="panel__heading__tags tags">
                                                    <span class="tag tag--hoverable tag--secondary"
                                                        data-tippy-content="Tahun">
                                                        <a href="https://filmindonesia.or.id/film?tahun=2024">2024</a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel__content">
                                            <p>Tanggal rilis: <?=$film['film_tgl_rilis']?></p>
                                            <p><?= substr($film['film_sinopsis'],0,250)." ..."; ?></p>
                                            <p> Sutradara: <a href="#"><?=$film['film_sutradara']?></a> <br>
                                                Pemeran: <a href="#"><?=$film['film_pemeran']?></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                            <?php endforeach;?>
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
