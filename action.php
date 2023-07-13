<?php

require_once 'vendor/autoload.php';

use App\classes\FullName;
use App\classes\Calculator;

if (isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        include 'pages/home.php';
    }elseif ($_GET['page'] == 'full-name')
    {
        include 'pages/fullName.php';
    } elseif ($_GET['page'] == 'get-full-name')
    {
        $fullName = new FullName($_POST);
        $result = $fullName->index();
        include 'pages/fullName.php';
    } elseif ($_GET['page'] == 'calculator')
    {
        include 'pages/calculator.php';
    } elseif ($_GET['page'] == 'calculator-result')
    {
        $calculator = new Calculator($_POST);
        $result = $calculator->index();
        include 'pages/calculator.php';
    } elseif ($_GET['page'] == 'series')
    {
        include 'pages/series.php';
    }
}