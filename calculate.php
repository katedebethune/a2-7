<?php
 
    require("ScrabbleScorer.php");
    require("Tools.php");
    require("Form.php");
    use DWA\Tools;
    use DWA\Form;
    
    $scorer = new ScrabbleScorer();
    $form = new DWA\Form($_GET);
    
    $testVar = 55;
    
    $isFirstWord = $form->isChosen('firstWord');
    $isBingo = $form->isChosen('bingo');
    
    $word = $form->get('word');
    
    $letters = str_split($word);
    
    $total = 0;
    
    foreach($letters as $letter) {
        $total += $scorer->getTileScores()[$letter];
    }
    
    $multiplier = $form->get('bonus');
    
    $total *= $multiplier;
    
    if ($isBingo) {
        if (($isFirstWord && strlen($word) >= 7) || (!$isFirstWord && strlen($word) >= 8)){
            $total += 50;
        }
    }
    
    

    
