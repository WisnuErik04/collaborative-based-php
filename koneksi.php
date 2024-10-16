<?php 
    error_reporting(E_ALL);
    // Same as error_reporting(E_ALL);
    ini_set('error_reporting', E_ALL);

    $conn = mysqli_connect('localhost', 'root', '', 'rekomendasi_film_cb') or die ('koneksi ke database GAGAL!');

    function selectAll_query($query){
        global $conn;
        $result = mysqli_query($conn, $query) or die ('query GAGAL!'.mysqli_error($conn));
    
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row; 
        }
    
        return $rows;
    }
    function select_query($query){
        global $conn;
        $result = mysqli_query($conn, $query) or die ('query GAGAL!'.mysqli_error($conn));
    
        $rows = mysqli_fetch_assoc($result); 
        return $rows;
    }
    function cud_query($query){
        global $conn;
        // echo $query;
        mysqli_query($conn, $query) or die ('query GAGAL!'.mysqli_error($conn));
    }

?>