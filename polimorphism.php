<?php

class Animal
{
    private $name;
    private $sound;

    function __construct(string $aName, string $aSound)
    {
        
        $this->name = $aName;
        $this->sound = $aSound;  
    }

    protected function getAnimal()
    {
        return 'These Are : ' . $this->name =  'Animal' . 
        '<br>' . 'They Have Different : ' . $this->sound = 'Sound';
    }
}

class Cats extends Animal
{
    private $name;
    private $sound;


    protected function setAnimal(string $aName, string $aSound)
    {
        $this->name = $aName;
        $this->sound = $aSound;
    }

    public function getAnimal()
    {
        return parent::getAnimal() . '<br>' . 'Name : ' . $this->name =  'Cats' . 
        '<br>' . 'Its Sound Like : ' . $this->sound = 'Meows' . '<br>';
    }

}

class Birds extends Animal 
{
    private $name;
    private $sound;

    protected function setAnimal(string $aName, string $aSound)
    {
        $this->name = $aName;
        $this->sound = $aSound;
    }

    public function getAnimal()
    {
        return parent::getAnimal() . '<br>' . 'Name : ' . $this->name =  'Birds' . 
        '<br>' . 'Its Sound Like : ' . $this->sound = 'Chirps';
    }
}

$cat = new Cats('Cats', 'Meows');
echo $cat->getAnimal();

$bird = new Birds('Birds', 'Chirps');
echo $bird->getAnimal();

