<?php

namespace App\Manager;

use App\Entity\User as UserEntity;

class User
{

    public function __construct() {

    }

    public function save(UserEntity $user): string {
        return 'Saved !';
    }

}