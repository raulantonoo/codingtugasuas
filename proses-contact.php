<?php

if (isset($_POST['kirim'])) {


    $UserName = $_POST['nama'];
    $Email = $_POST['email'];
    $Pesan = $_POST['pesan'];

    if (empty($UserName) || empty($Email) || empty($Pesan)) {
        header('location:contact.php?error');
    } else {
        $to = "huntrs8$@gmail.com";

        if (mail($to, $Pesan, $Email)) {
            header("location:contact.php?success");
        }
    }
} else {
    header("location:contact.php");
}
