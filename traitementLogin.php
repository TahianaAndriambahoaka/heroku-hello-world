<?php
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];
    // $date = date('d-m-Y h:i:s');
    $token = $login.$mdp;
    $token = sha1($token);
    print json_encode($token);
?>