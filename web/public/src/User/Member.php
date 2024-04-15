<?php

namespace App\User;


use App\Auth\AuthException;
use App\Auth\AuthInterface;

class Member extends User implements AuthInterface {

    private ?string $login = null;
    private ?string $password = null;
    private ?int $age = null;

    protected static int $count = 0;

    /**
     * @param string $name
     * @param string $login
     * @param string $password
     * @param string $age
     */
    public function __construct(string $name, string $login, string $password, string $age) {

        parent::__construct($name);

        $this->login = $login;
        $this->password = $password;
        $this->age = $age;

        static::$count++;
    }

    public function __destruct() {
        static::$count--;
    }

    /**
     * @param string $login
     * @param string $password
     * @return bool
     * @throws AuthException
     */
    public function auth(string $login, string $password): bool {
        if(!empty($login) &&
            !empty($password) &&
            $this->login === $login && $this->password === $password) {
            return true;
        } else {
            throw new AuthException('Erreur authentification');
        }
    }

    /**
     * @return string
     */
    public static function getCount(): string {
        return "Nombre d'instances de ".static::class." : ".static::$count."<br/>";
    }
}