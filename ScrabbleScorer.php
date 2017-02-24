<?php

class ScrabbleScorer{

    private $word;
    private $multiplier;
    private $isBingo;
    private $isFirstWord;
    private $letters;
    private $tileScores = 
        ["a" => 1, "b" => 3, "c" => 3, "d" => 2,
         "e" => 1, "f" => 4, "g" => 2, "h" => 4,
         "i" => 1, "j" => 8, "k" => 5, "l" => 1,
         "m" => 3, "n" => 1, "o" => 1, "p" => 3,
         "q" => 10, "r" => 1, "s" => 1, "t" => 1,
         "u" => 1, "v" => 4, "w" => 4, "x" => 8,
         "y" => 4, "z" => 10];
    
    public function getTileScores() {
        return $this->tileScores;
    }
    
    public function getLetters(){
        return $this->letters;
    }
    
    public function __construct($word, $multiplier, $isBingo, $isFirstWord) {
        $this->word = $word;
        $this->multiplier = $multiplier;
        $this->isBingo = $isBingo;
        $this->isFirstWord = $isFirstWord;
        
        $word = strtolower($word);
        $this->letters = str_split($word);    
    }   
    
    public function calculateTotal(){
        $total = 0;
        foreach($this->letters as $letter) {
			$total += $this->tileScores[$letter];
		}
		$total *= $this->multiplier;
		if ($this->isBingo) {
			if (($this->isFirstWord && strlen($this->word) >= 7) || 
			        (!$this->isFirstWord && strlen($this->word) >= 8)){
				$total += 50;
			}
		}
		return $total;
    }
} # End Of Class
