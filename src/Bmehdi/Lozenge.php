<?php

namespace Hackathon3\Bmehdi;

class Lozenge
{
    private $size;
    public $char = 'o';

    public function __construct($size)
    {
        $this->size = $size;
    }

    /**
     * Returns lozenge as a string.
     *
     * Examples :
     *
     * For a lozenge with size 1, returns :
     *
     *  o 
     * o o
     *  o 
     *
     * For a lozenge with size 2, returns :
     * 
     *   o  
     *  o o 
     * o   o
     *  o o 
     *   o  
     *
     * For a lozenge with size 3, returns :
     *
     *    o   
     *   o o  
     *  o   o 
     * o     o
     *  o   o 
     *   o o  
     *    o   
     *
     * Etc.
     */
    public function __toString()
    {
        $lozenge = '';
        $height = $this->size + 1;
        $size = $this->size;

        for ($i = 0; $i < $height; $i++) {
            $comp = $size - $i;
            $lozenge = $lozenge . str_repeat(' ', $comp) . $this->char;
            if ($i != 0) {
                $space = (1 === $i) ? 1 : ($i * 2 - 1);
                $lozenge = $lozenge . str_repeat(' ', $space) . $this->char;
            }
            $lozenge = $lozenge . str_repeat(' ', $comp) . PHP_EOL;
        }
        
        for ($i = $height - 2; $i >= 0; $i--) {
            $comp = $size - $i;
            $lozenge = $lozenge . str_repeat(' ', $comp) . $this->char;
            if ($i != 0) {
                $space = (1 === $i) ? 1 : ($i * 2 - 1);
                $lozenge = $lozenge . str_repeat(' ', $space) . $this->char;
            }
            $lozenge = $lozenge . str_repeat(' ', $comp) . PHP_EOL;
        }

        return substr($lozenge, 0, -1);
    }
}
