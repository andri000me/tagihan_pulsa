<?php

    //akses
    include('hak-akses.php');

    if($rolle == 'admin'){
        $resultSelect = mysqli_query($con, "CALL select_transaksi_penembakan_log()");
        mysqli_next_result($con);
    } else if($rolle == 'sales'){
        $resultSelect = mysqli_query($con, "CALL select_transaksi_penembakan_log_by_sales('".$id."')");
        mysqli_next_result($con);
    }

?>