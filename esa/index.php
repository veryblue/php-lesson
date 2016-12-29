<?php
ini_set( 'display_errors', 1 );

require 'vendor/autoload.php';

$client = new Polidog\Esa\Client("<access_token>", "<team_name>");

//$a = $client->teams();

$res = $client->posts(["q" => "in:Archived/日報"]);
//var_dump($res['posts']);

$posts = $res['posts'];

foreach ($posts as $post) {
    $no = $post['number'];
    //var_dump($no);
    
    //$client->deletePost($no);
}


echo "success?";


