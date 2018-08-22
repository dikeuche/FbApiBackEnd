<?php
    session_start();
    require_once "Facebook/autoload.php";

    $FB = new \Facebook\Facebook([
        'app_id' => '259080984723382',
        'app_secret' => 'c0edb5c34bc58eec089fe4fcc1caf585',
        'default_graph_version' => 'v3.1',
    ]);

    $helper = $FB->getRedirectLoginHelper();
?>