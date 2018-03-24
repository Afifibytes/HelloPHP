<?php
Class Person {

    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    /**
    * @param mixed $age
    */
    public function setAge($age): void
    {
        $this->age = $age;
    }

    /**
    * @param mixed $name
    */
    public function setName($name): void
    {
    $this->name = $name;
    }

    /**
    * @return mixed
    */
    public function getAge()
    {
        return $this->age;
    }

    /**
    * @return mixed
    */
    public function getName()
    {
        return $this->name;
    }
}
