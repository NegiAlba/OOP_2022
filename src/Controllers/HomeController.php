<?php

declare(strict_types=1);

namespace App\Controllers;

class HomeController
{
    public function index(): string
    {
        // include VIEWS_PATH.'homepage.php';

        return (new \App\View('homepage'))->render();
    }

    public function form(): string
    {
        // echo '<pre>';
        // var_dump($_POST);
        // echo '</pre>';
        $form = $_POST;

        return (new \App\View('homepage', ['form' => $form]))->render();
    }
}