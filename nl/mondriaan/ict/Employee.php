<?php
namespace nl\mondriaan\ict;


class Employee
{
    private string $firstName;
    private string $lastName;
    private string $email;
    private string $phoneNumber;
    private \DateTime $hireDate;
    private float $salary;

    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName=$firstName;
        $this->lastName=$lastName;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     */
    public function setPhoneNumber(string $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return \DateTime
     */
    public function getHireDate(): \DateTime
    {
        return $this->hireDate;
    }

    /**
     * @param \DateTime $hireDate
     */
    public function setHireDate(\DateTime $hireDate): void
    {
        $this->hireDate = $hireDate;
    }

    /**
     * @return float
     */
    public function getSalary(): float
    {
        return $this->salary;
    }

    /**
     * @param float $salary
     */
    public function setSalary(float $salary): void
    {
        $this->salary = $salary;
    }



}