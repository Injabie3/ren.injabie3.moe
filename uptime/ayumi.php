<?php
    $url = "http://aws.injabie3.moe/uptime/ayumi.php";
    $ch = curl_init( $url );
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
    $result = curl_exec($ch);
    curl_close($ch);
    echo $result;
?>