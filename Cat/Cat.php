<?php

class Cat
{
    private $name;
    private $age;
    private $color;
    private $sex;
    private $race;

    /**
     * Get the value of name
     */ 
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        if (strlen($name) < 3) 
        {
            throw new \RuntimeException('The name must contain at least 3 characters');
        }
        if (strlen($name) > 20) 
        {
            throw new \RuntimeException('The name can\'t exceed 10 characters');
        }
        $this->name = $name;
    }

    /**
     * Get the value of age
     */ 
    public function getAge() : int
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge(int $age)
    {
        if (!is_numeric($age)) 
        {
            throw new \RuntimeException('The age must be a numeric value');
        }
        $this->age = $age;
    }

    /**
     * Get the value of color
     */ 
    public function getColor() : string
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor(string $color)
    {
        if (strlen($color) < 3) 
        {
            throw new \RuntimeException('The color must contain at least 3 characters');
        }
        if (strlen($color) > 10) 
        {
            throw new \RuntimeException('The color can\'t exceed 10 characters');
        }
        $this->color = $color;
    }

    /**
     * Get the value of sex
     */ 
    public function getSex() : string
    {
        return $this->sex;
    }

    /**
     * Set the value of sex
     *
     * @return  self
     */ 
    public function setSex(string $sex)
    {
        if (!in_array($sex, ['male','female'])) {
            throw new \RuntimeException('Sex not allowed');
        }
        
        $this->sex = $sex;
    }

    /**
     * Get the value of race
     */ 
    public function getRace() : string
    {
        return $this->race;
    }

    /**
     * Set the value of race
     *
     * @return  self
     */ 
    public function setRace(string $race)
    {
        if (strlen($race) < 3) 
        {
            throw new \RuntimeException('The race must contain at least 3 characters');
        }
        if (strlen($race) > 20) 
        {
            throw new \RuntimeException('The race can\'t exceed 20 characters');
        }
        $this->race = $race;
    }

    /**
     * create the function to get the infos
     *
     * @return  variables
     */ 
    public function getInfo()
    {
        var_dump($this->name);
        var_dump($this->age);
        var_dump($this->color);
        var_dump($this->sex);
        var_dump($this->race);
    }

    // constructor function
    public static function fromArray(array $definition)
    {
        $cat = new Cat();
        $cat->setName($definition['name'] ?? '')
            ->setAge((int)$definition['age'] ?? '')
            ->setColor($definition['color'] ?? '')
            ->setSex($definition['sex'] ?? '')
            ->setRace($definition['race'] ?? '');
        
        return $cat;
    }
}