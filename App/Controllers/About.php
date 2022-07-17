<?php

namespace App\Controllers;

use \Core\View;
use \Core\Model;

class About extends \Core\Controller
{
    public function index()
    {
        $user = new \App\Models\User;
        $view = new View;
        $view->render('about', ['userID' => $user->getUser(1)]);
    }
    public function page($page)
    {
        $user = new \App\Models\User;
        $view = new View;
        $view->render('about', ['userID' => $user->getUser($page)]);
    }
}
