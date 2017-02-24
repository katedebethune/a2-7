<?php require("calculate.php"); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>A2 Scrabble Scorer</title>
        <meta charset="utf-8"/>
        <link type="text/css" rel="stylesheet" href="css/scrabble.css"/>
    </head>
    <body>   
		<div class="content">
			<h1>Scrabble Score Calculator</h1>
			<form method="get" action="index.php">
				<table>
					<tr>
						<td>
						<label for="word">Enter your word <span class="warning">*</span></label>
						</td>
						<td>
						<input type="text" id="word" name="word" value='<?=$form->prefill('word')?>' /><br/>
						</td>
					</tr>
					<tr>
						<td>
						<label for="none">Bonus multiplier</label>
						</td>
						<td>
						<input type="radio" id="none" name="bonus" value="1" 
							<?php if(($form->get("bonus") == 1)||!($form->get("bonus"))) echo 'checked'?> />None<br/>
						<input type="radio" id="double" name="bonus" value="2" 
							<?php if($form->get("bonus") == 2) echo 'checked'?> />Double<br/>
						<input type="radio" id="triple" name="bonus" value="3" 
							<?php if($form->get("bonus") == 3) echo 'checked'?> />Triple<br/>
						</td>
					</tr>
					<tr>
						<td>
						<label for="bingo">Include 50 point "bingo"?</label>
						</td>
						<td>
						<input type="checkbox" id="bingo" name="bingo" 
							<?php if($form->isChosen("bingo")) echo 'checked'?> /><br/>
						</td>
					</tr>
					<tr>
						<td>
						<label for="firstWord">Is this first word of the game?</label>
						</td>
						<td>
						<input type="checkbox" id="firstWord" name="firstWord" 
							<?php if($form->isChosen("firstWord")) echo 'checked'?> /><br/>
						</td>
					</tr>
				</table>
				<input class="submit" type="submit" value="Calculate Score"/>
			</form>
			<?php if($errors): ?>

				<div class='warning'>
					<ul>
						<?php foreach($errors as $error): ?>
							<li><?=$error?></li>
						<?php endforeach; ?>
					</ul>
				</div>
			<?php elseif ($total > 0): ?>
				<div class="display">
					<?= "Your score is $total" ?>
				</div>
			<?php endif; ?>
		</div>
    </body>
</html>