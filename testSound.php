<?php

    header( "Content-type: application/json" );
    header( "Access-Control-Allow-Origin: *" );
    // header( "Access-Control-Allow-Origin: http://192.168.1.73:19006" );

    
$myObj = [];
// $myObj1 = [
//     "ClientName" => "John",
// 	"Video" => "https://www.kozco.com/tech/piano2-Audacity1.2.5.mp3",
// 	"city" => "New York",
// ];
// $myObj2 = [
//     "ClientName" => "david",
// 	"Video" => "https://www.kozco.com/tech/organfinale.mp3",
// 	"city" => "New York",
// ];
// $myObj3 = [
//     "ClientName" => "SALAH",
// 	"Video" => "https://file-examples.com/wp-content/uploads/2017/11/file_example_MP3_700KB.mp3",
// 	"city" => "New York",
// ];
// array_push($myObj, $myObj1, $myObj2, $myObj3);
$myObj1 = [

	"ClientName"=> "paulpalmier",
        "Name"=> "Chez Paul",
        "City"=> "Casablanca",
        "Address"=> "55, Bd Mohamed Abdou",
        "PictureFormat"=> ".jpg",
        "Mood"=> "Jazz",
        "SongArtist"=> "Stacey Kent",
        "SongTitle"=> "Test",
        "SongGuid"=> "ccdcb7e34bcc455b8b3ef49017eb8628",
        "SongDuration"=> "300",
        "SongElapsed"=> "33",
        "SongRemaining"=> "266",
        "SongCategory"=> "Jazzy",
        "Nickname"=> "nobody"
];
// $myObj2 = [

// 	"ClientName"=> "paulpalmier",
//         "Name"=> "Chez Paul",
//         "City"=> "Casablanca",
//         "Address"=> "55, Bd Mohamed Abdou",
//         "PictureFormat"=> ".jpg",
//         "Mood"=> "Jazz",
//         "SongArtist"=> "Stacey Kent",
//         "SongTitle"=> "Test",
//         "SongGuid"=> "ccdcb7e34bcc455b8b3ef49017eb8628",
//         "SongDuration"=> "300",
//         "SongElapsed"=> "33",
//         "SongRemaining"=> "266",
//         "SongCategory"=> "Jazzy",
//         "Nickname"=> "nobody"
// ];

array_push($myObj, $myObj1);
$json = json_encode($myObj);
echo  ($json);


