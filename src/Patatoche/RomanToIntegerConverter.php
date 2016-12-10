<?php

namespace Hackathon3\Patatoche;
use Hackathon3\Patatoche\ConverterInterface;

class RomanToIntegerConverter implements ConverterInterface
{
    protected $romanInteger = array('I' => 1, 'V' => 5, 'X' => 10, 'L' => 50, 'C' => 100, 'D' => 500, 'M' => 1000);
    private $roman;
    private $len;

    /**
     * Retourne la conversion d'une valeur romaine "élémentaire".
     * Par exemple 5 pour 'V', 10 pour 'X', etc.
     *
     * @param string $roman
     * @return string
     */
    protected function getRomanInteger($roman)
    {
        return $this->romanInteger[$roman];
    }

    /**
     * Convertit un chiffre romain donné en sa représentation décimale.
     *
     * @param string $roman
     * @return string
     */
    public function convert($roman)
    {
        $this->roman = $roman;
        $this->len = strlen($roman);
        $expression = $result = 0;
        $sign = ' + ';

        for ($i = 0; $i < $this->len; $i++) {

            $me = $this->getValue($i);
            $right = $this->getValueOnMyRight($i);

            if ($me < $right)
                $sign = ' - ';

            $expression = $expression . $sign . $me;
            $sign = ' + ';
        }

        eval( '$result = (' . $expression . ');' );

        return $result;
    }

    private function getValue($myPos){
        $letter = $this->roman[$myPos];

        return (int) $this->romanInteger[$letter];
    }

    private function getValueOnMyRight($myPos){
        $rightPos = $myPos + 1;
        $result = null;

        if ($rightPos < $this->len) {
            $letter = $this->roman[$rightPos];
            $result = (int) $this->romanInteger[$letter];
        }

        return $result;
    }

}
