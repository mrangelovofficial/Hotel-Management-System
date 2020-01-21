<?php
require_once "config/env.php";
require_once "core/App.php";
require_once "core/Controller.php";
require_once "core/Model.php";

function assets($path){
    return URL_APP.$path;
}