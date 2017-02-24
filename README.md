# a2
DWA Assignment 2 Scrabble Scorer

This Scrabble Score Calculator primarily follows the functions of the example, with the 
addition of the "Is this the first word?" field.
The idea behind this is that on every other turn except for the first, one of the letters
from your word would already be in play and not a tile from your hand.  Therefore, the
number of letters required for a bingo changes from 7 to 8.

Known Issues:

Error validation does not test for spaces, when ideally it should.  This could be fixed
using something like the following:

$word = str_replace (" ", "", $word);

The issue with this solution is it makes sanitizing more difficult.  I wanted to use the
$form->prefill() function like fooboks does in order to prevent the text input from clearing.
prefill() also nicely has the sanitize() function built in.  Given more time I think I could
write my own code that would both keep the text in the field and sanitize the output, but
for now this seems like an allowable solution.

Possible upgrades:

These are not "known issues" per se, in that they are not problems with basic
functionality, but instead are ideas for more complex functionality that could be
added in a future version.

A more complete scrabble scorer would include single letter multipliers, and could account
for situations like words being spelled in 2 directions, or words formed by extending
shorter words already in play.

One more contingency is the fact that in Scrabble the first word is always played on a 
double word score multiplier.  This implementation allows the user to check the 
"Is first word" box, and also a different multiplier than double.  A more strict
implementation might show an error message or automatically change the multiplier to 
double whenever "Is first word" is checked.