<?php

function generateStory($singular_noun, $verb, $color, $distance_unit){
  $story = "The $singular_noun are lovely, $color, and deep. \n
    But I have promises to keep, \n
    And $distance_unit to go before I $verb, \n
    And $distance_unit to go before I $verb. \n";
  return $story;
}

echo generateStory("turtle", "eat", "green", "metres");
echo generateStory("potato", "grow", "yellow", "miles");
echo generateStory("unicorn", "fly", "blue", "centimeters");