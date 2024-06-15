<?php

function greeting()
{
    /* This sets the $time variable to the current hour in the 24 hour clock format */
    $time = date("H");
    /* Set the $timezone variable to become the current timezone */
    $timezone = date("e");

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
