<?php

echo $data["title"];
// echo " - ";
// echo $data["name"];
// echo APPROOT;

foreach ($data['users'] as $user) {
    echo "<p> {$user->user_name} {$user->user_email} </p>";
}
