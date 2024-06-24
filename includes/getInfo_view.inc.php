<?php

declare(strict_types=1);
require_once "config_session.inc.php";

function displayName(){
    if (isset($_SESSION['cardDetails_0'])) {
        $name = $_SESSION['cardDetails_0']["name"];
        echo $name;

    } else {
        echo "no name retrieved!";
    }
}

function displayEmail(){
    if (isset($_SESSION['cardDetails_0'])) {
        $email = $_SESSION['cardDetails_0']["email"];
        echo $email;

    } else {
        echo "no name retrieved!";
    }
}

function displayPosition(){
    if (isset($_SESSION['cardDetails_0'])) {
        $position = $_SESSION['cardDetails_0']["position"];
        echo $position;

    } else {
        echo "no name retrieved!";
    }
}

function displayAddress(){
    if (isset($_SESSION['cardDetails_0'])) {
        $address = $_SESSION['cardDetails_0']["address"];
        echo $address;

    } else {
        echo "no name retrieved!";
    }
}

function displayImage(){
    if (isset($_SESSION['cardDetails_3'])) {
        $image = $_SESSION['cardDetails_3']["image"];

        echo "<img src='$image' >";

    } else {
        echo "no name retrieved!";
    }
}