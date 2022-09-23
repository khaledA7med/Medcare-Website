<?php

function bot_msg($user_msg){
    $url = 'http://localhost:5000/chat';
    $data = array('msg' => $user_msg);
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    #$result = json_decode($result, true);
    return $result;
}

?>