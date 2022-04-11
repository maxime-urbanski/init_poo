<?php

class Person
{
    private string $firstname;
    private string $lastname;
    private string $address;
    private string $birthday;

    public function __construct(string $firstname, string $lastname, string $birthday, string $address)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->address = $address;
        $this->birthday = $birthday;
    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }
    public function getLastname(): string
    {
        return $this->lastname;
    }
    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }
    public function getBirthday(): string
    {
        return $this->birthday;
    }


    public function information(): string
    {
        $name = $this->getFirstname() . " " . $this->getLastname();
        $birth = $this->getBirthday();
        $address = $this->getAddress();

        return "Je m'appelle $name, je suis née le $birth et j'habite à $address";
    }

    public static function getAge(string $age): string
    {
        $dateOfBirth = $age;
        $dateToday = date("d-m-Y");
        $currentAge = date_diff(date_create($dateToday), date_create($dateOfBirth));
        return "J'ai " .$currentAge->y . ' ans';
    }
}
