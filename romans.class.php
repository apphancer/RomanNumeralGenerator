<?php

interface RomanNumeralGenerator {
    public function generate($numeral); // convert from int -> roman
    public function parse($roman); // convert from roman ->int
}


class Numbers implements RomanNumeralGenerator
{
    
    private $romans = array(
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1,
    );
    
    public function generate($numeral)
    {
        $result = null;
        
        foreach ($this->romans as $key => $value) 
        {
            $matches = intval($numeral / $value);
            $result .= str_repeat($key, $matches);
            $numeral = $numeral % $value;
        }
           
        return $result;
    }
    
    public function parse($roman)
    {
        $result = 0;
        
        foreach ($this->romans as $key => $value) {
            while (strpos($roman, $key) === 0) {
                $result += $value;
                $roman = substr($roman, strlen($key));
            }
        }
        
        return $result;  
    }
}
