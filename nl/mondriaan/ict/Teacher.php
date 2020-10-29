<?php


namespace nl\mondriaan\ict;


class Teacher extends Employee
{
    private string $shortName;
    private array $subjects;
    private array $classes;

    public function __construct(string $firstName, string $lastName, string $shortName,
                                array $subjects, ?array $classes)
    {
        parent::__construct($firstName, $lastName);
        $this->subjects=$subjects;
        $this->classes=$classes ?? [];
        $this->shortName=$shortName;
    }

    /**
     * @return string
     */
    public function getShortName(): string
    {
        return $this->shortName;
    }

    /**
     * @param string $shortName
     */
    public function setShortName(string $shortName): void
    {
        $this->shortName = $shortName;
    }

    /**
     * @return array
     */
    public function getSubjects(): array
    {
        return $this->subjects;
    }

    /**
     * @param array $subjects
     */
    public function setSubjects(array $subjects): void
    {
        $this->subjects = $subjects;
    }

    /**
     * @return array
     */
    public function getClasses(): array
    {
        return $this->classes;
    }

    /**
     * @param array $classes
     */
    public function setClasses(array $classes): void
    {
        $this->classes = $classes;
    }



}