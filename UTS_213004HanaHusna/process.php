<?php
session_start();

//list user yang valid
//selain user ini tidak bisa login.
$list_user = [
    [
        'username' => 'admin',
        'password' => 'admin'
    ]
];

//dapatkan data user dari form
$user = [
    'username' => $_POST['username'],
    'password' => $_POST['password'],
];

//cocokan data user dengan list user yang valid.
//misalnya pakai looping saja.

$not_found = false;

foreach ($list_user as $key => $registered_user) {

    //login success
    if ($registered_user['username'] == $user['username']) {

        if ($registered_user['password'] == $user['password']) {

            $_SESSION['login'] = true;
            $_SESSION['username'] =  $user['username'];
            $_SESSION['message']  = 'Berhasil login ke dalam sistem.';

            header("Location: index.php");
            break;
        } else {
            $_SESSION['error'] = 'Username atau Password salah!';
            $not_found = true;
        }
    } else {
        $_SESSION['error'] = 'Username atau Password salah!';
    }
}
if ($not_found == true) {
    header("Location: login.php");
}