<?php

function greeting()
{
    /* This sets the $time variable to the current hour in the 24 hour clock format */
    $time = new DateTime("H", new DateTimeZone('Asia/Makassar'));

    if ($time < "11") {
        return "Selamat Pagi!";
    } else if ($time >= "11" && $time < "16") {
        return "Selamat Siang!";
    } else if ($time >= "16" && $time < "18") {
        return "Selamat Sore!";
    } else if ($time >= "18") {
        return "Selamat Malam!";
    }
}
?>
