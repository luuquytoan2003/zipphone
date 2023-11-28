<?php
function renderAD($path, $data = [])
{
    extract($data);
    $view = "../admin/" . $path . ".php";
    include_once $view;
}
function renderUS($path,$data = [])
{
    extract($data);
    $view = "../users/".$path.".php";
    include_once $view;
}
?>