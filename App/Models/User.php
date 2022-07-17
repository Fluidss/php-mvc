<?php

namespace App\Models;

use PDO;

class User extends \Core\Model
{

    public function getUser($userId)
    {
        return $userId;
    }
}
