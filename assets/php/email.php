<?php

if(isset($_POST['g-recaptcha-response'])) {
   // RECAPTCHA SETTINGS
   $captcha = $_POST['g-recaptcha-response'];
   $ip = $_SERVER['REMOTE_ADDR'];
   $key = '6Ldn4wkaAAAAAJduf8y4dUahjC2gy-W7zPIm9FCT';
   $url = 'https://www.google.com/recaptcha/api/siteverify';

   // RECAPTCH RESPONSE
   $recaptcha_response = file_get_contents($url.'?secret='.$key.'&response='.$captcha.'&remoteip='.$ip);
   $data = json_decode($recaptcha_response);

   if(isset($data->success) &&  $data->success === true) {
   }
   else {
      die('Your Captcha is not correct !');
   }
 }



if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    


    $webhookurl = "https://discord.com/api/webhooks/789753970171445259/y6xC5KqzTh65HPsNEoDaqn-l7dWlLtUwQUclZljkpim9fn2ALTMsyUkBpF5dK9tb1Uhv";


$timestamp = date("c", strtotime("now"));

$json_data = json_encode([
    // Message
    "content" => "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

<@553182635346624515><@674028338440044546><@491982143631917056>

    > ***New message***
    
**Name**       :  ". $name ."
**Subject**    :  ". $subject ."
**Message** :  

". $message ."

**Email**        :  ". $email,
    
    // Username
    "username" => $name,

    // Avatar URL.
    // Uncoment to replace image set in webhook
    "avatar_url" => "https://cdn.discordapp.com/attachments/769171094644195329/789722022942605312/army-public-school-logo-66838E4AE8-seeklogo_1.png",

    // Text-to-speech
    "tts" => false,

    // File upload
    "file" => "https://gtavmodspakistan.com/wp-content/uploads/2020/images/gaming.jpg",
    
    // Embeds Array
    // "embeds" => [
    //     [
    //         // Embed Title
            // "title" => "PHP - Send message to Discord (embeds) via Webhook",

    //         // Embed Type
    //         "type" => "rich",

    //         // Embed Description
    //         "description" => "Description will be here, someday, you can mention users here also by calling userID <@12341234123412341>",

    //         // URL of title link
    //         "url" => "https://gist.github.com/Mo45/cb0813cb8a6ebcd6524f6a36d4f8862c",

    //         // Timestamp of embed must be formatted as ISO8601
    //         "timestamp" => $timestamp,

    //         // Embed left border color in HEX
    //         "color" => hexdec( "3366ff" ),

    //         // Footer
    //         "footer" => [
    //             "text" => "GitHub.com/Mo45",
    //             "icon_url" => "https://ru.gravatar.com/userimage/28503754/1168e2bddca84fec2a63addb348c571d.jpg?size=375"
    //         ],

    //         // Image to send
            // "image" => [
            //     "url" => "https://gtavmodspakistan.com/wp-content/uploads/2020/images/suzuki-cultus-e1605712373721.jpg"
            // ],

    //         // Thumbnail
    //         //"thumbnail" => [
    //         //    "url" => "https://ru.gravatar.com/userimage/28503754/1168e2bddca84fec2a63addb348c571d.jpg?size=400"
    //         //],

    //         // Author
    //         "author" => [
    //             "name" => "krasin.space",
    //             "url" => "https://krasin.space/"
    //         ],

    //         // Additional Fields array
    //         "fields" => [
    //             // Field 1
    //             [
    //                 "name" => "Field #1 Name",
    //                 "value" => "Field #1 Value",
    //                 "inline" => false
    //             ],
    //             // Field 2
    //             [
    //                 "name" => "Field #2 Name",
    //                 "value" => "Field #2 Value",
    //                 "inline" => true
    //             ]
    //             // Etc..
    //         ]
//         ]
//     ]

], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );


$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec( $ch );
// If you need to debug, or find out why you can't send message uncomment line below, and execute script.
//echo "response = ".$ch;
curl_close( $ch );






    echo "<h3>Your email has been sent !</h3><br><h4 id='p'>Redirecting in 3 sec.</h4>";
    echo '<script>setTimeout(function(){
  document.getElementById("p").innerHTML = "Redirecting in 3 sec..";
}, 1000);setTimeout(function(){
  document.getElementById("p").innerHTML = "Redirecting in 3 sec...";
}, 1000);setTimeout(function(){
  document.getElementById("p").innerHTML = "Redirecting in 3 sec....";
}, 1000);</script>';
    echo '<script>setTimeout(function(){
  window.location = "https://gtavmodspakistan.com/contact";
}, 1000);</script>';
    
}
else{
header('Location: https://gtavmodspakistan.com');
}
?>