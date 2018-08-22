<?php 
    require_once "config.php";

    try{
        $accessToken = $helper->getAccessToken();
    }catch (\Facebook\Exceptions\FacebookResponseException $e){
        echo "Response Exception: " . $e->getMessage();
        
        exit();
    }catch (\Facebook\Exceptions\FacebookSDKException $e){
        echo "SDK Exception: " . $e->getMessage();
        exit();
    }

    if(!$accessToken){
        header("Location: login.php");
        exit();
    }

    $oAuth2Client = $FB->getOAuth2Client();
    if(!$accessToken->isLongLived())
        $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);

    
    $response = $FB->get('/me?fields=id, first_name, last_name, email, picture.type(large)', $accessToken);
    $userData = $response->getGraphNode()->asArray();
    $_SESSION['userData'] = $userData; 
    $_SESSION['access_token'] = (string) $accessToken;
    header("Location: login.php");
    exit();
    
    

    //user_age_range,user_friends,user_likes,user_link,user_photos,user_posts,user_status,groups_access_member_info,user_events,read_audience_network_insights,read_insights

?>
