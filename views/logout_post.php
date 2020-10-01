<?php

if (!$url = $sp->logoutPost(0)) {
    echo "Not logged in !<br>";
    echo ">Home</a>";
} else {
    echo $url;
}
