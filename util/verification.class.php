<?php
function verificacao($path)
{
    if(!$_SESSION['loginEncontrado']){
        header('Location: '.$path);
        exit;
    }
}