<?php

if ($sp->isAuthenticated()) {
    foreach ($sp->getAttributes() as $key => $attr) {
        echo $key . ' - ' . $attr . '<br>';
    }
    echo ">Home</a>";
} else {
    echo "Not logged in !<br>";
    echo "<a href=\"/login\">Login</a>";
}
