<?php
function prx($data)
{
    echo "<pre>";
    print_r($data);
    exit;
}

function pr($data)
{
    echo "<pre>";
    print_r($data);
}

function prm($data)
{
    $cat = json_decode(json_encode($data), true);
    echo "<pre>";
    print_r($cat);
}