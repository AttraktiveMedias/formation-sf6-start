<?php

namespace App\User;

abstract class User {

    protected ?string $name = null;

    public function __construct(string $name) {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void {
        $this->name = $name;
    }
}