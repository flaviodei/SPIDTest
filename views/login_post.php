<?php

if (!$url = $sp->loginPost("testenv", 0, 1, 1, null, true)) {
    echo "Already logged in !<br>";
    echo ">Home</a>";
} else {
    echo $url;
}