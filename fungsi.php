<?php 
    // require 'koneksi.php';

    function cosine_similarity($id_a, $id_b) {
        $query = "SELECT film_sinopsis
            FROM film 
            WHERE film_id = '$id_a'";
        $film_a = select_query($query);
        $query = "SELECT film_sinopsis
            FROM film 
            WHERE film_id = '$id_b'";
        $film_b = select_query($query);

        $filmsinopsis_film_a = $film_a['film_sinopsis']; 
        $filmsinopsis_film_b = $film_b['film_sinopsis']; 

        // echo $filmsinopsis_film_a;
        // echo "<br>";
        // ------- PREPARATION ------- menghilangkan tanda baca dan merubah ke lowercase    
        $sinopsis_film_a = strtolower(preg_replace('/[^\w\s]/', '', $filmsinopsis_film_a));
        $sinopsis_film_b = strtolower(preg_replace('/[^\w\s]/', '', $filmsinopsis_film_b));
        
        // echo $sinopsis_film_a;
        // echo "<br>";
        // ------- TOKENISASI ------- menjadi array
        $arr_sinopsis_film_a = explode(" ", $sinopsis_film_a);
        $arr_sinopsis_film_b = explode(" ", $sinopsis_film_b);
        // print_r($arr_sinopsis_film_a);
        // echo "<br>";
        
        // ------- ELIMINASI ------- menghilangkan value arr yang serupa
        $arr_uniq_sinopsis_film_a = array_unique($arr_sinopsis_film_a);
        $arr_uniq_sinopsis_film_b = array_unique($arr_sinopsis_film_b);
        // print_r($arr_uniq_sinopsis_film_a);
        // echo "<br>";

        // ------- PROCESSING ------- 
        $kemiripan_a_b = array_intersect($arr_uniq_sinopsis_film_a, $arr_uniq_sinopsis_film_b);
        $total_kemiripan_a_b = count($kemiripan_a_b);
        $akar_a_b = sqrt(count($arr_uniq_sinopsis_film_a)*count($arr_uniq_sinopsis_film_b));
        $nilai_similaritas = $total_kemiripan_a_b / $akar_a_b;
        $nilai_akhir_similaritas = $nilai_similaritas * 100;
        // print_r($kemiripan_a_b);
        // echo "<br>";
        // print_r($total_kemiripan_a_b);
        // echo "<br>";
        // print_r($akar_a_b);
        // echo "<br>";
        // print_r($nilai_similaritas);
        // echo "<br>";
        // print_r($nilai_akhir_similaritas);
        // echo "<br>";
        return $nilai_akhir_similaritas;
    }

?>