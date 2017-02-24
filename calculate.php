<?php
 
require("ScrabbleScorer.php");
require("Tools.php");
require("Form.php");
use DWA\Tools;
use DWA\Form;




$form = new DWA\Form($_GET);

$word = $form->get('word', $default = '');
$multiplier = $form->get('bonus');
$isBingo = $form->isChosen('bingo');
$isFirstWord = $form->isChosen('firstWord');

$word = str_replace(" ", "", $word);


$scorer = new ScrabbleScorer($word, $multiplier, $isBingo, $isFirstWord);

$errors = null;

$total = 0;

if($form->isSubmitted()) {
	$errors = $form->validate(
		[
			'word' => 'required|alpha',
		]
	);
	
	if(!$errors){
		$total = $scorer->calculateTotal();
	}
}