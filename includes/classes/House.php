<?php

class House
{
    // public: means anyone can see it
    //protected: means only instances of this class, and their
    // public $paintColor;
    protected $doorPaintColor;
    protected $roofPaintColor;
    protected $wallPaintColor;

    private $width;
    private $height;
    private $length;

    public $roofType = 'shingled';

    public static $author = 'Nick';

    public function __construct($width, $height, $length)
    {
        $this->width = $width;
        $this->height = $height;
        $this->length = $lenght;

        // $this->roofType = 'shingled';
    }

    public function paint($color)
    {
        $this->doorpaintColor = $color;
        $this->roofPaintColor = $color;
        $this->wallPaintColor = $color;
    }

    public function paintWall($color)
    {
        $this->wallPaintColor = $color;
    }

    public static function getAuthor()
    {
    
        return self::$author;
    }
}