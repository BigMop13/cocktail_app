<?php

declare(strict_types=1);


namespace App\Dto;

class RegistrationInput
{
    public function __construct(private readonly string $username, private readonly string $email, private readonly string $password, private readonly string $number)
    {
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }

}