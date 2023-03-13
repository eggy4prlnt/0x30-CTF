<?php
if (isset($_COOKIE['is_admin']) && $_COOKIE['is_admin'] == true) {
    echo 'flag: ' . file_get_contents('1n1_4d4laH_fl4g.txt');
} else {
    echo 'You are not admin';
}
