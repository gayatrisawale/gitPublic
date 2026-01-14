<?php
$users = [
    [
        "id" => 1,
        "name" => "Alice",
        "email" => "alice@example.com",
        "role" => "admin"
    ],
    [
        "id" => 2,
        "name" => "Bob",
        "email" => "bob@example.com",
        "role" => "editor"
    ],
    [
        "id" => 3,
        "name" => "Charlie",
        "email" => "charlie@example.com",
        "role" => "viewer"
    ]
];

foreach($users as $key=>$value){
   echo"<pre>";print_r( $value['name']);

}

?>

