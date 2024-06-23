<?php

declare(strict_types=1);

function displayName(){
    if (isset($_SESSION['cardDetails_2'])) {
        $name = $_SESSION['cardDetails_2']["name"];
        echo $name;

    } else {
        echo "no name retrieved!";
    }
}

function displayEmail(){
    if (isset($_SESSION['cardDetails_2'])) {
        $email = $_SESSION['cardDetails_2']["email"];
        echo $email;

    } else {
        echo "no name retrieved!";
    }
}

function displayPosition(){
    if (isset($_SESSION['cardDetails_2'])) {
        $position = $_SESSION['cardDetails_2']["position"];
        echo $position;

    } else {
        echo "no name retrieved!";
    }
}

function displayAddress(){
    if (isset($_SESSION['cardDetails_2'])) {
        $address = $_SESSION['cardDetails_2']["address"];
        echo $address;

    } else {
        echo "no name retrieved!";
    }
}

function displayImage(){
    if (isset($_SESSION['cardDetails_5'])) {
        $image = $_SESSION['cardDetails_5']["image"];

        echo "<img src='$image' >";

    } else {
        echo "no name retrieved!";
    }
}