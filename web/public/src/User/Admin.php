<?php

namespace App\User;

class Admin extends Member {

    protected static int $count = 0;
    private AdminLevel $level = AdminLevel::Admin;

    public function __construct(string $name, string $login, string $password, string $age, AdminLevel $level = AdminLevel::Admin) {
        parent::__construct($name, $login, $password, $age);
        $this->level = $level;
    }

    final public function auth(string $login, string $password): bool {
        return $this->level === AdminLevel::SuperAdmin || parent::auth($login, $password);
    }

}