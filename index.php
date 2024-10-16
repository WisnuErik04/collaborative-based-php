<!DOCTYPE html>
<html lang="id">
<?php 
require "session.php";

require "koneksi.php";
require "fungsi_cb.php";
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
    <title>Katalog film</title>
    <meta name="description" content="Katalog film indonesia.">
    <link rel="canonical" href="https://filmindonesia.or.id/film">
    <link rel="alternate" hreflang="id" href="https://filmindonesia.or.id/film?page=7">
    <meta property="og:title" content="Katalog film">
    <meta property="og:description" content="Katalog film indonesia.">
    <meta property="og:url" content="https://filmindonesia.or.id/film">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="id_ID">
    <meta property="og:locale:alternate" content="en_US">
    <meta property="og:image" content="https://filmindonesia.or.id/img/logo-cover.png">

    <meta name="twitter:site" content="@FilmID_">
    <script type="application/ld+json">{"@context":"https:\/\/schema.org","@type":"ItemList","name":"Katalog film","description":"Katalog film indonesia.","url":"https:\/\/filmindonesia.or.id\/film","itemListElement":[{"@type":"ListItem","position":1,"item":{"@type":"Movie","name":"Botting (Pengantin)","description":"Siti (Ririn Jamil) sering mendapat surat dari lelaki yang belum pernah ia kenal. Siti dijanjikan akan dinikahi. Tapi lelaki itu tak kunjung datang.","url":"https:\/\/filmindonesia.or.id\/film\/lf-b016-24-577157","image":{"@type":"ImageObject","name":"Poster","url":"https:\/\/filmindonesia.or.id\/img\/poster.svg"},"datePublished":"21-03-2024","genre":["Drama","Misteri"],"actor":[{"@type":"Person","name":"Adrian Ibrahim Magentag","url":"https:\/\/filmindonesia.or.id\/nama\/nmp65e832028064b"},{"@type":"Person","name":"Ririn Jamil","url":"https:\/\/filmindonesia.or.id\/nama\/nmp65e8321a79d24"},{"@type":"Person","name":"Shinta Trishap","url":"https:\/\/filmindonesia.or.id\/nama\/nmp65e83280b469b"},{"@type":"Person","name":"Dimas","url":"https:\/\/filmindonesia.or.id\/nama\/nmp65e833078e077"}],"director":[{"@type":"Person","name":"Syaiful HR","url":"https:\/\/filmindonesia.or.id\/nama\/nmp59d702722eec1"}]}},{"@type":"ListItem","position":2,"item":{"@type":"Movie","name":"Hantu Polong","description":"(Rory Asyari), Ali (Leon Dozan), Bella (Rachel Hawadi) dan Jali (Daffa Aryoseno) turun dari kapal di dermaga desa Syair Setapang dan bertemu dengan Mahiah","url":"https:\/\/filmindonesia.or.id\/film\/lf-h011-24-149451","image":{"@type":"ImageObject","name":"Poster","url":"https:\/\/filmindonesia.or.id\/img\/poster.svg"},"datePublished":"14-03-2024","genre":["Horor"],"actor":[{"@type":"Person","name":"Rachel Hawadi","url":"https:\/\/filmindonesia.or.id\/nama\/nmp63e89ad7281d9"},{"@type":"Person","name":"Leon Dozan","url":"https:\/\/filmindonesia.or.id\/nama\/nmp53f43b102f414"},{"@type":"Person","name":"Rory Asyari","url":"https:\/\/filmindonesia.or.id\/nama\/nmp65a8d2a5db19d"},{"@type":"Person","name":"Berlliana Lovell","url":"https:\/\/filmindonesia.or.id\/nama\/nmp65e4353394471"},{"@type":"Person","name":"Daffa Aryoseno","url":"https:\/\/filmindonesia.or.id\/nama\/nmp65e4356e76ef1"}],"director":[{"@type":"Person","name":"Amir Mirza Gumay","url":"https:\/\/filmindonesia.or.id\/nama\/nmp5af13d3008368"}]}},{"@type":"ListItem","position":3,"item":{"@type":"Movie","name":"1 CM: Pasukan Merah Putih","description":"Dua kelompok anak-anak melakoni permainan tradisional perang-perangan untuk mempertahankan perbatasan sebuah negara yang tidak boleh tergeser bahkan 1","url":"https:\/\/filmindonesia.or.id\/film\/lf-1020-24-028292","image":{"@type":"ImageObject","name":"Poster","url":"https:\/\/filmindonesia.or.id\/img\/poster.svg"},"datePublished":"14-03-2024","genre":["Komedi","Drama"],"actor":[{"@type":"Person","name":"Raihan Firjatullah Valendiaz","url":"https:\/\/filmindonesia.or.id\/nama\/nmp65e57df417f5f"},{"@type":"Person","name":"Ovellia Angeline Yan","url":"https:\/\/filmindonesia.or.id\/nama\/nmp65e57e19ac786"},{"@type":"Person","name":"Icha Lubis","url":"https:\/\/filmindonesia.or.id\/nama\/nmp65e57e3569e01"},{"@type":"Person","name":"Aidil Fitrah Ghassani","url":"https:\/\/filmindonesia.or.id\/nama\/nmp65e57f2ca6d03"},{"@type":"Person","name":"Destyn Clara Hanessa Sinaga","url":"https:\/\/filmindonesia.or.id\/nama\/nmp65e57f429c597"},{"@type":"Person","name":"Widya Nitisara","url":"https:\/\/filmindonesia.or.id\/nama\/nmp65e6c78a54571"}],"director":[{"@type":"Person","name":"Dedy Arliansyah Siregar","url":"https:\/\/filmindonesia.or.id\/nama\/nmp5ae01cde41a0b"}]}},{"@type":"ListItem","position":4,"item":{"@type":"Movie","name":"Bad Boy in Love","description":"Di sekolahnya, Jethro (Jeff Smith) disegani, jago tarung dan cerdas. Jethro sekelas dengan Sara (Nicole Parham), gadis Solo pemalu, sederhana, dan rambutnya","url":"https:\/\/filmindonesia.or.id\/film\/lf-b012-24-292257","image":{"@type":"ImageObject","name":"Poster","url":"https:\/\/filmindonesia.or.id\/img\/poster.svg"},"datePublished":"14-03-2024","genre":["Drama"],"actor":[{"@type":"Person","name":"Jeff Smith","url":"https:\/\/filmindonesia.or.id\/nama\/nmp59704762caad3"},{"@type":"Person","name":"Cassandra Lee","url":"https:\/\/filmindonesia.or.id\/nama\/nmp55dff5220f8a9"},{"@type":"Person","name":"Nicole Parham","url":"https:\/\/filmindonesia.or.id\/nama\/nmp5b7274e66ef90"}],"director":[{"@type":"Person","name":"Hanny R Saputra","url":"https:\/\/filmindonesia.or.id\/nama\/nmp4b9781fec22ae"}]}},{"@type":"ListItem","position":5,"item":{"@type":"Movie","name":"Tanduk Setan","description":"Horor Ramadan tentang kelahiran dan kematian yang terjadi ketika terbitnya Tanduk Setan. Teror saat menanti kelahiran anak akibat hamil duluan dan 14 hari","url":"https:\/\/filmindonesia.or.id\/film\/lf-t011-24-103894","image":{"@type":"ImageObject","name":"Poster","url":"https:\/\/filmindonesia.or.id\/img\/poster.svg"},"datePublished":"14-03-2024","genre":["Horor"],"actor":[{"@type":"Person","name":"Rukman Rosadi","url":"https:\/\/filmindonesia.or.id\/nama\/nmp4f3f8344c1bf6"},{"@type":"Person","name":"Diah Permatasari","url":"https:\/\/filmindonesia.or.id\/nama\/nmp4c2501650db72"},{"@type":"Person","name":"Taskya Giantri","url":"https:\/\/filmindonesia.or.id\/nama\/nmp508e6a41dabe6"},{"@type":"Person","name":"Boy Muhammad","url":"https:\/\/filmindonesia.or.id\/nama\/nmp65e0316176f35"},{"@type":"Person","name":"Nur Mayati","url":"https:\/\/filmindonesia.or.id\/nama\/nmp65e0317829708"}],"director":[{"@type":"Person","name":"Bobby Prasetyo","url":"https:\/\/filmindonesia.or.id\/nama\/nmp5a4f35b89cad3"},{"@type":"Person","name":"Amriy R Suwardi","url":"https:\/\/filmindonesia.or.id\/nama\/nmp65e02d0e18a57"}]}},{"@type":"ListItem","position":6,"item":{"@type":"Movie","name":"Kartolo Numpak Terang Bulan","description":"Rumah Cak Kartolo (Cak Kartolo) jadi tempat kos empat mahasiswa: Simon (Beta Sofiansyah) asal Papua, Yusuf (Wandi Marzuki) asal Makassar, Boncel (Rizky","url":"https:\/\/filmindonesia.or.id\/film\/lf-k024-24-747154","image":{"@type":"ImageObject","name":"Poster","url":"https:\/\/filmindonesia.or.id\/img\/poster.svg"},"datePublished":"14-03-2024","genre":["Komedi"],"actor":[{"@type":"Person","name":"Cak Kartolo","url":"https:\/\/filmindonesia.or.id\/nama\/nmp5a6ac484617bd"},{"@type":"Person","name":"Cak Sapari","url":"https:\/\/filmindonesia.or.id\/nama\/nmp5a6ac496e65ee"},{"@type":"Person","name":"Ning Kastini","url":"https:\/\/filmindonesia.or.id\/nama\/nmp65e429dbafb0b"}],"director":[{"@type":"Person","name":"Ainun Ridho","url":"https:\/\/filmindonesia.or.id\/nama\/nmp53280ea3d6daa"}]}},{"@type":"ListItem","position":7,"item":{"@type":"Movie","name":"24 Jam Bersama Gaspar","description":"Indonesia 2032. Gaspar (Reza Rahadian), detektif partikelir, menemukan petunjuk tentang misteri hilangnya Kirana (Shofia Shireen), sahabat masa kecilnya.","url":"https:\/\/filmindonesia.or.id\/film\/lf-2018-23-171439","image":{"@type":"ImageObject","name":"Poster","url":"https:\/\/filmindonesia.or.id\/img\/poster.svg"},"datePublished":"14-03-2024","genre":["Kejahatan","Drama","Distopia"],"actor":[{"@type":"Person","name":"Shenina Cinnamon","url":"https:\/\/filmindonesia.or.id\/nama\/nmp5b3c8ed57040c"},{"@type":"Person","name":"Reza Rahadian Matulessy","url":"https:\/\/filmindonesia.or.id\/nama\/nmp4b83d7198e51d"}],"director":[{"@type":"Person","name":"Yosep Anggi Noen","url":"https:\/\/filmindonesia.or.id\/nama\/nmp4cea2b919ab7c"}]}},{"@type":"ListItem","position":8,"item":{"@type":"Movie","name":"Perjalanan Pembuktian Cinta","description":"Fathia (Dea Annisa), seorang hafidzah, menjalani pernikahan atas paksaan orang tuanya. Ia dinikahkan dengan Satya (Donny Damara) pria beristri yang usianya","url":"https:\/\/filmindonesia.or.id\/film\/lf-p025-24-965259","image":{"@type":"ImageObject","name":"Poster","url":"https:\/\/filmindonesia.or.id\/img\/poster.svg"},"datePublished":"07-03-2024","genre":["Drama"],"actor":[{"@type":"Person","name":"Dea Annisa","url":"https:\/\/filmindonesia.or.id\/nama\/nmp56e7af786a15b"},{"@type":"Person","name":"Teuku Ryan Rezky","url":"https:\/\/filmindonesia.or.id\/nama\/nmp4c36c72f4c73a"},{"@type":"Person","name":"Donny Damara Prasa Dhana","url":"https:\/\/filmindonesia.or.id\/nama\/nmp4bb5a371014f4"}],"director":[{"@type":"Person","name":"M Amrul Ummami","url":"https:\/\/filmindonesia.or.id\/nama\/nmp58ce17f1227cb"}]}},{"@type":"ListItem","position":9,"item":{"@type":"Movie","name":"Titip Surat untuk Tuhan","description":"Tulus (Muhammad Adhiyat) panik ketika kakak perempuannya, Dinda (Olivia Morrison), pingsan di sekolah karena tertimpuk bola. Keadaan semakin buruk, ketika","url":"https:\/\/filmindonesia.or.id\/film\/lf-t020-24-293468","image":{"@type":"ImageObject","name":"Poster","url":"https:\/\/filmindonesia.or.id\/img\/poster.svg"},"datePublished":"07-03-2024","genre":["Drama"],"actor":[{"@type":"Person","name":"Adhiyat Abdulkhadir","url":"https:\/\/filmindonesia.or.id\/nama\/nmp599400142f2db"},{"@type":"Person","name":"Donny Damara Prasa Dhana","url":"https:\/\/filmindonesia.or.id\/nama\/nmp4bb5a371014f4"},{"@type":"Person","name":"Marsha Timothy","url":"https:\/\/filmindonesia.or.id\/nama\/nmp4b83999a1abe4"},{"@type":"Person","name":"Olivia Morrison","url":"https:\/\/filmindonesia.or.id\/nama\/nmp65dda0458f575"}],"director":[{"@type":"Person","name":"Karsono Hadi","url":"https:\/\/filmindonesia.or.id\/nama\/nmp4b9bad3d8e39e"}]}},{"@type":"ListItem","position":10,"item":{"@type":"Movie","name":"Kuyang: Sekutu Iblis yang Selalu Mengintai","description":"Bimo (Dimas Aditya) memutuskan menjadi PNS dan ditugaskan di sebuah desa pedalaman. Bimo membawa istrinya Sriatun (Alyssa Abidin), yang menolak tinggal","url":"https:\/\/filmindonesia.or.id\/film\/lf-k036-24-324685","image":{"@type":"ImageObject","name":"Poster","url":"https:\/\/filmindonesia.or.id\/img\/poster.svg"},"datePublished":"07-03-2024","genre":["Horor"],"actor":[{"@type":"Person","name":"Putri Ayudya","url":"https:\/\/filmindonesia.or.id\/nama\/nmp54fa9f107a1fb"},{"@type":"Person","name":"Alyssa Abidin","url":"https:\/\/filmindonesia.or.id\/nama\/nmp60928c030f73c"},{"@type":"Person","name":"Elly D Luthan","url":"https:\/\/filmindonesia.or.id\/nama\/nmp599401a71428b"},{"@type":"Person","name":"Dimas Aditya","url":"https:\/\/filmindonesia.or.id\/nama\/nmp4bb30251ab397"}],"director":[{"@type":"Person","name":"Yongki Ongestu","url":"https:\/\/filmindonesia.or.id\/nama\/nmp60928a3d66b74"}]}},{"@type":"ListItem","position":11,"item":{"@type":"Movie","name":"Siri Na Pacce","description":"Tobo diminta oleh keluarga Karaeng Jarre untuk menikahi anaknya yang hamil (patongko siri - menutupi rasa malu). Tobo yang hanya mencintai Baji,","url":"https:\/\/filmindonesia.or.id\/film\/lf-s011-24-824732","image":{"@type":"ImageObject","name":"Poster","url":"https:\/\/filmindonesia.or.id\/img\/poster.svg"},"datePublished":"29-02-2024","genre":["Drama"],"actor":[{"@type":"Person","name":"Muhammad Rafly Heriawan","url":"https:\/\/filmindonesia.or.id\/nama\/nmp65d59f42b6073"},{"@type":"Person","name":"Ega Noviantika","url":"https:\/\/filmindonesia.or.id\/nama\/nmp65d59fec0c8eb"},{"@type":"Person","name":"Ardan Dangnga","url":"https:\/\/filmindonesia.or.id\/nama\/nmp65d5a018d8885"},{"@type":"Person","name":"Ridwan Sau","url":"https:\/\/filmindonesia.or.id\/nama\/nmp65d5a035919fe"},{"@type":"Person","name":"Anto Sarro","url":"https:\/\/filmindonesia.or.id\/nama\/nmp65d5a04c6f09e"}],"director":[{"@type":"Person","name":"Surya Darmawan","url":"https:\/\/filmindonesia.or.id\/nama\/nmp65d59a9487bae"}]}},{"@type":"ListItem","position":12,"item":{"@type":"Movie","name":"Mendung Tanpo Udan","description":"Udan (Erick Estrada), mahasiswa tingkat akhir, sangat terobsesi dengan musik. Obsesi ini tanpa disadari membuat Udan menjadi pribadi idealis dan keras","url":"https:\/\/filmindonesia.or.id\/film\/lf-m016-24-469855","image":{"@type":"ImageObject","name":"Poster","url":"https:\/\/filmindonesia.or.id\/img\/poster.svg"},"datePublished":"29-02-2024","genre":["Drama"],"actor":[{"@type":"Person","name":"Yunita Siregar","url":"https:\/\/filmindonesia.or.id\/nama\/nmp568cbf6965ef6"},{"@type":"Person","name":"Erick Estrada","url":"https:\/\/filmindonesia.or.id\/nama\/nmp54abccbab3bc2"}],"director":[{"@type":"Person","name":"Kris Budiman","url":"https:\/\/filmindonesia.or.id\/nama\/nmp65c5c7cbab025"}]}},{"@type":"ListItem","position":13,"item":{"@type":"Movie","name":"Bonnie","description":"Bonnie (Livi Ciananta) sering dikeluarkan dari sekolah karena menggunakan ototnya sebagai seorang petarung untuk membela hak-hak para siswi dan haknya","url":"https:\/\/filmindonesia.or.id\/film\/lf-b006-24-511477","image":{"@type":"ImageObject","name":"Poster","url":"https:\/\/filmindonesia.or.id\/img\/poster.svg"},"datePublished":"29-02-2024","genre":["Laga"],"actor":[{"@type":"Person","name":"Livi Ciananta","url":"https:\/\/filmindonesia.or.id\/nama\/nmp65cc81b5d1e77"}],"director":[{"@type":"Person","name":"Agus Pestol","url":"https:\/\/filmindonesia.or.id\/nama\/nmp4d536a3b3d1df"},{"@type":"Person","name":"Marsha Hermansyah Abidin","url":"https:\/\/filmindonesia.or.id\/nama\/nmp65cb151790901"}]}},{"@type":"ListItem","position":14,"item":{"@type":"Movie","name":"Pasar Setan","description":"Tamara (Audi Marissa), polisi wanita, menangani sebuah kasus pembunuhan di hutan terlarang tempat ia bertugas. Kasus ini melibatkan Kevin (Roy Sungkono),","url":"https:\/\/filmindonesia.or.id\/film\/lf-p010-24-018332","image":{"@type":"ImageObject","name":"Poster","url":"https:\/\/filmindonesia.or.id\/img\/poster.svg"},"datePublished":"29-02-2024","genre":["Horor","Mendebarkan atau Menegangkan"],"actor":[{"@type":"Person","name":"Roy Sungkono","url":"https:\/\/filmindonesia.or.id\/nama\/nmp5ac372f792516"},{"@type":"Person","name":"Rana Audi Marissa","url":"https:\/\/filmindonesia.or.id\/nama\/nmp4c2a0ddcc4b6b"}],"director":[{"@type":"Person","name":"Wisnu Suryapratama","url":"https:\/\/filmindonesia.or.id\/nama\/nmp4c6a717e3194a"}]}},{"@type":"ListItem","position":15,"item":{"@type":"Movie","name":"Pemandi Jenazah","description":"Hidup Lela, anak Ibu Siti yang bekerja sebagai pemandi jenazah di kampungnya, berubah setelah ibunya meninggal secara misterius. Ia harus menjalankan proses","url":"https:\/\/filmindonesia.or.id\/film\/lf-p014-24-582241","image":{"@type":"ImageObject","name":"Poster","url":"https:\/\/filmindonesia.or.id\/img\/poster.svg"},"datePublished":"22-02-2024","genre":["Horor"],"actor":[{"@type":"Person","name":"Amara Sophie","url":"https:\/\/filmindonesia.or.id\/nama\/nmp59eb0b7f38a48"},{"@type":"Person","name":"Aghniny Haque","url":"https:\/\/filmindonesia.or.id\/nama\/nmp5b62be5179f3d"},{"@type":"Person","name":"Ibrahim Risyad","url":"https:\/\/filmindonesia.or.id\/nama\/nmp634baf5185ef6"},{"@type":"Person","name":"Djenar Maesa Ayu","url":"https:\/\/filmindonesia.or.id\/nama\/nmp4b76f3b2e349d"}],"director":[{"@type":"Person","name":"Hadrah Daeng Ratu","url":"https:\/\/filmindonesia.or.id\/nama\/nmp4ce7df9e59107"}]}}]}</script>
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
                    
                    <?php include_once "nav.php";?>
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
                <div class="mdc-layout-grid main-content__grid">
                    <div class="mdc-layout-grid__inner">
                        <div class="main-content__content mdc-layout-grid__cell mdc-layout-grid__cell--span-4-phone mdc-layout-grid__cell--span-8-tablet mdc-layout-grid__cell--span-9-desktop">
                            <div class="page-hero m-off">
                                <h1 class="page-hero__title text--hashtag">Katalog</h1>
                            </div>

                            <section class="panel panel--fit coming-soon">
                                <div class="panel__heading">
                                    <div class="panel__heading__title text--hashtag">Rekomendasi berdasarkan yang kamu sukai</div>
                                        <div class="panel__heading__actions">
                                            <span class="panel__heading__action">
                                                <div class="mdc-touch-target-wrapper">
                                    
                                                </div>
                                            </span>
                                        </div>
                                    </div>
            
                                    <div class="mdc-layout-grid__inner">
                                        <?php 
                                            $recomend_collaborative_based = collaborative_based($session_usr_id);
                                            $top_recommendation = 0;
                                            // echo "<pre>";
                                            // print_r($recomend_collaborative_based);
                                            // echo "</pre>";
                                            foreach ($recomend_collaborative_based as $key => $value) :
                                                if ($top_recommendation == 4) {
                                                    break;
                                                }
                                                $top_recommendation++;
                                                // echo $key;
                                                // echo "<br>";
                                                $query = "SELECT *
                                                            FROM film 
                                                            WHERE film_id = '$key'";
                                                $film = select_query($query);
                                        ?>
                                        <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-2-phone mdc-layout-grid__cell--span-2-tablet mdc-layout-grid__cell--span-3-desktop">
                                            <div class="mdc-card mdc-card--outlined fi-card movie-card">
                                                <div class="mdc-card__primary-action mdc-ripple-upgraded" data-url="detail.php?id=<?=$film['film_id']?>">
                                                    <div class="mdc-card__media mdc-card__media--378-473 lazyloaded" data-bgset="<?=$film['film_img_link']?> [--phone] | <?=$film['film_img_link']?> [--desktop] | <?=$film['film_img_link']?>" style="background-image: url(&quot;<?=$film['film_img_link']?>&quot;);">
                                                        <div class="mdc-card__media-content">
                                                            <div class="fi-card__media-content__inner">
                                                                <div class="fi-card__media-content__label">
                                                                    <a href="detail.php?id=<?=$film['film_id']?>"><?=$film['film_nama']?></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <picture style="display: none;"><source data-srcset="<?=$film['film_img_link']?>" media="(max-width: 599px)" sizes="226px" srcset="<?=$film['film_img_link']?>"><source data-srcset="<?=$film['film_img_link']?>" media="(min-width: 840px)" sizes="226px" srcset="<?=$film['film_img_link']?>">
                                                    <source data-srcset="<?=$film['film_img_link']?>" sizes="226px" srcset="<?=$film['film_img_link']?>"><img alt="" class="lazyautosizes lazyloaded" data-sizes="auto" data-parent-fit="cover" sizes="226px"></picture></div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach;?>
                                    </div>
                            </section>
                            <div class="panel"></div>
                            <?php
                                $page = $_GET['page']?? 1;
                                $dataAwal = ($page-1)*15;
                                $query = "SELECT *
                                            FROM film 
                                            order by film_id asc 
                                            LIMIT 15 OFFSET $dataAwal";
                                $film = selectAll_query($query);
                                foreach ($film as $key => $value) :
                            ?>
                            <div class="mdc-layout-grid__inner">
                                <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-1-phone mdc-layout-grid__cell--span-2-tablet mdc-layout-grid__cell--span-2-desktop">
                                    <div class="mdc-card rd-off">
                                        <div class="mdc-card__primary-action" tabindex="0">
                                            <div class="mdc-card__media mdc-card__media--378-473 lazyload"
                                                data-bgset="<?=$value['film_img_link']?>, <?=$value['film_img_link']?>-2x 2x, <?=$value['film_img_link']?>, <?=$value['film_img_link']?>-2x 2x"
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
                                                    <a href="detail.php?id=<?=$value['film_id']?>"><?=$value['film_nama']?></a>
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
                                            <p>Tanggal rilis: <?=$value['film_tgl_rilis']?></p>
                                            <p><?= substr($value['film_sinopsis'],0,250)." ..."; ?></p>
                                            <p> Sutradara: <a href="#"><?=$value['film_sutradara']?></a> <br>
                                                Pemeran: <a href="#"><?=$value['film_pemeran']?></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                            <?php endforeach;?>
    
                            <div class="pagination-container pagination-container--align-center">
                                <ul class="pagination" role="navigation">
                                    <?php for ($i=1; $i <= 7; $i++) : ?>
                                    <li>
                                        <div class="mdc-touch-target-wrapper">
                                            <a class="mdc-button mdc-button--touch <?php if ($i == $page) echo "mdc-button--unelevated mdc-button--active" ?>" href="index.php?page=<?=$i?>" role="button">
                                                <div class="mdc-button__ripple"></div>
                                                <i class="iconify mdc-button__label"><?=$i?></i>
                                                <div class="mdc-button__touch"></div>
                                            </a>
                                        </div>
                                    </li>
                                    <?php endfor; ?>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="main-content__sidebar mdc-layout-grid__cell mdc-layout-grid__cell--span-4-phone mdc-layout-grid__cell--span-8-tablet mdc-layout-grid__cell--span-3-desktop">
                            <div class="panel sidebar-hero top-gap">
                                <div id="widget:random-trivia" class="align-center">
                                    <p>Judul <em>Gersang tapi Damai</em> (1977) adalah hasil sebuah sayembara. Ceritanya berasal dari sayembara cerita Departemen Penerangan.</p>
                                </div>
                            </div>
                            <div id="widget:upcoming-movies" class="panel panel--outlined panel--secondary">
                                <div class="panel__heading">
                                    <div class="panel__heading__title">Segera rilis</div>
                                    <div class="panel__heading__actions">
                                        <a class="mdc-icon-button mdc-icon-button--on-primary mdc-icon-button--small" href="https://filmindonesia.or.id/film/segera-rilis" data-tippy-content="Daftar lengkap">
                                            <i class="iconify mdc-icon-button__icon" data-inline="false" data-icon="mdi:arrow-right" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="mdc-list">
                                    <a href="https://filmindonesia.or.id/film/lf-p010-24-113311" class="mdc-list-item">
                                        <span class="mdc-list-item__text">
                                            Pulau Hantu
                                        </span>
                                    </a>
                                            <a href="https://filmindonesia.or.id/film/lf-k029-24-362620" class="mdc-list-item">
                                        <span class="mdc-list-item__text">
                                            Kemah Terlarang: Kesurupan Massal
                                        </span>
                                    </a>
                                            <a href="https://filmindonesia.or.id/film/lf-s018-24-307502" class="mdc-list-item">
                                        <span class="mdc-list-item__text">
                                            Startup Never Give Up
                                        </span>
                                    </a>
                                            <a href="https://filmindonesia.or.id/film/lf-t011-24-878524" class="mdc-list-item">
                                        <span class="mdc-list-item__text">
                                            Tebusan Dosa
                                        </span>
                                    </a>
                                            <a href="https://filmindonesia.or.id/film/lf-b028-24-206253" class="mdc-list-item">
                                        <span class="mdc-list-item__text">
                                            Bolehkah Sekali Saja Kumenangis
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
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

