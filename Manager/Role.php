<?php

namespace App\Manager;

use App\Entity\Role as RoleEntity;

class Role
{

    public function __construct() {

    }

    public function save(RoleEntity $role): string {
        return 'Saved !';
    }

}