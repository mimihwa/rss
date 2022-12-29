<?php
//교차바인딩을 위한 설정
    $ch=curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); //인증서 검사여부를 하지 않겠다 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //결과값을 받겠다
    curl_setopt($ch, CURLOPT_HEADER, 0); //헤더출력여부
    curl_setopt($ch, CURLOPT_URL, 'https://www.chosun.com/arc/outboundfeeds/rss/category/culture-life/?outputType=xml'); 

    $url_source=curl_exec($ch);
    curl_close($ch);

    echo $url_source; 
?>