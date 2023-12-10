protected - Доступ к свойствам и методам которые можно получить только изнутри класса или классов-наследников.

<?php

class Animal {
    protected $food;
    protected $location;

    public function __construct($food, $location) {
        $this->food = $food;
        $this->location = $location;
    }

    public function makeNoise() {
        echo "Лает в {$this->location}";
    }

    public function eat() {
        echo "Ест {$this->food} в {$this->location}";
    }

    public function sleep() {
        echo "Спит в {$this->location}";
    }
}

class Dog extends Animal {
    private $name;

    public function __construct($name, $food, $location) {
        parent::__construct($food, $location);
        $this->name = $name;
    }

    public function bark() {
        echo "Гавкает: {$this->name}";
    }
}

$dog = new Dog("Шарик " ,"кости ", "дворе ");
$dog->makeNoise();
$dog->eat();
$dog->sleep();
$dog->bark()

?>
