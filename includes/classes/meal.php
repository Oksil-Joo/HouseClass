<?php

class Meal
{   
    /**
     * @var Appetizer
     */
    protected $appetizer;

    /**
     *  @var MainDish
     */
    protected $mainDish;

    /**
     * @var Dessert
     */
    protected $dessert;

    /**
     * whatever comment you want
     * @param Appetizer
     * @param MainDish
     * @param Dessert
     * @return void
    */

    public function __construct(Appetizer $appetizer, MainDish $mainDish, Dessert $dessert)
    {
        $this->appetizer = $appetizer;
        $this->mainDish = $mainDish;
        $this->dessert = $dessert;
    }
    /**
     * this returns the message for when someone eats a meal
     * 
     * @return string
    */
    public function eat(): string
    {
        $appetizerResult = $this->appetizer->eat();
        $mainDishResult = $this->mainDish->eat();
        $dessertResult = $this->dessert->eat();

        return $appetizerResult . ' '
            . $mainDishResult . ' '
            . $dessertResult;
        
        // return $appetizerResult . ' ' . $mainDishResult . ' ' . $dessertResult;
    }
    /**
     * set the appetizer to a Appetizer instance.
     * 
     * @param Appetizer
    */
    public function setAppetizer(Appetizer $appetizer)
    {
        $this-> appetizer = $appetizer;
    }
    public function getAppetizer(): Appetizer
    {
        return $this->appetizer;
    }
}