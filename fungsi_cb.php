<?php 
    // require 'koneksi.php';

    function collaborative_based($id_user_main) {
        $query = "SELECT id_user, id_film, rate_skor
                from rate 
                where id_user = '$id_user_main'"; 
        $ratesAllMainUser = selectAll_query($query);
        // echo"<pre>";
        // echo $query;   
        // print_r($ratesAllMainUser);                                            
        // echo"</pre>";   
       
        // ====== CARI SIM PER USER =======
        $query = "SELECT id_user, id_film, rate_skor
                from rate 
                where id_user != '$id_user_main'
                    AND id_film in (
                        SELECT id_film
                        from rate 
                        where id_user = '$id_user_main'
                    )
                ORDER BY id_user"; 
        $ratesAllUser = selectAll_query($query);
        // echo"<pre>";
        // echo $query;   
        // echo"</pre>";  

        $groupedRatesAllUser = [];
        foreach ($ratesAllUser as $item) {
            $id_user = $item['id_user'];

            foreach ($ratesAllMainUser as $key => $value) {
                if ($value['id_film'] == $item['id_film']) {
                    // $item['id_film_main_user'] = $value['id_film'];
                    $item['rate_skor_main_user'] = $value['rate_skor'];
                    $item['dis_rate_skor'] = pow($value['rate_skor']-$item['rate_skor'], 2);
                    break ;
                }
                // echo $value['id_film'] .'asasas'. $item['id_film'].'<br>';
            }
            if (!isset($groupedRatesAllUser[$id_user])) {
                $groupedRatesAllUser[$id_user] = [];
            }
            $groupedRatesAllUser[$id_user][] = $item;
        }
        // echo"<pre>";
        // print_r($groupedRatesAllUser);                                            
        // echo"</pre>"; 
        
        $tot_sim = 0;
        $other_user = [];
        foreach ($groupedRatesAllUser as $key => $value) {
            $tot_dis = 1;
            foreach ($value as $key2 => $value2) {
                $tot_dis += $value2['dis_rate_skor'];
            }
            $sim = 1 / $tot_dis;
            $groupedRatesAllUser[$key]['sim'] = $sim;

            $tot_sim += $sim; 

            $other_user[] = $key;

        }
        // echo"<pre>";
        // print_r($groupedRatesAllUser);                                            
        // print_r($tot_sim);                                            
        // print_r($other_user);                                            
        // echo"</pre>";     
        

        // ====== CARI REKOMENDASI =======
        $query = "SELECT id_film
                from rate 
                where id_user != '$id_user_main'
                    AND id_user in ('".implode("', '", $other_user)."')
                    AND id_film not in (
                        SELECT id_film
                        from rate 
                        where id_user = '$id_user_main'
                    )
                GROUP BY id_film";
        $calon_rekomendasi = selectAll_query($query);
        // echo"<pre>";
        // print_r($calon_rekomendasi);                                            
        // echo"</pre>";     
        $rekomendasi = [];
        foreach ($calon_rekomendasi as $key => $value) {
            $id_film_calon_rekomendasi = $value['id_film'];
            $sim_r = 0;
            for ($i=0; $i < count($other_user); $i++) { 
                $query = "SELECT rate_skor
                    from rate 
                    where id_user = '$other_user[$i]'
                        AND id_film = '$id_film_calon_rekomendasi'";
                $r_film = select_query($query);
                $r_rate_film = $r_film['rate_skor']?? 0;
                $sim_r += $r_rate_film*$groupedRatesAllUser[$other_user[$i]]['sim'];

                // echo"<pre>";                            
                // print_r($r_rate_film." * ".$groupedRatesAllUser[$other_user[$i]]['sim']);                                            
                // echo "<br>";                                          
                // print_r($r_rate_film*$groupedRatesAllUser[$other_user[$i]]['sim']);                                            
                // echo"</pre>";     
            }
            $rekomendasi[$id_film_calon_rekomendasi] = $tot_sim/$sim_r;
            // echo"<pre>";
            // print_r('a '.$tot_sim);                                            
            // echo"<br>"; 
            // print_r($sim_r);                                            
            // echo"</pre>";     
            
        }
        // echo"<pre>";
        // print_r($rekomendasi);                                            
        // echo"<br>"; 
        arsort($rekomendasi);
        // print_r($rekomendasi);                                            
        // echo"</pre>";     
        
        return $rekomendasi;                                            

    }

?>