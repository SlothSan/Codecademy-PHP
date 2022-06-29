<?php
$play_count = 0;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;
$i = 1;

echo "I'm going to think of a number between 1 and 10 (inclusive). Do you think you can guess it correctly ? \n";

function guessNumber()
{
  global $play_count, $correct_guesses, $guess_high, $guess_low;
  $play_count++;
  $num = rand(1, 10);
  echo "\nMake your guess...\n";
  $guess = intval(readline(">> "));
  if ($guess > 10 || $guess < 10) {
    echo "\n Silly, guess between 1-10 (inclusive)";
    exit;
  }
  echo "Round: $play_count\nMy Number: $num\nYour guess: $guess";
  if ($guess === $num) {
    $correct_guesses++;
  } elseif ($guess > $num) {
    $guess_high++;
  } else {
    $guess_low++;
  }
}

do {
guessNumber();
$i++;
} while ($i <= 10);

$percent_correct = $correct_guesses/$play_count * 100;

echo "\nAfter $play_count rounds, here are some facts about your guessing:\nYou guessed the number correctly $percent_correct% of the time.\n";

if ($guess_high > $guess_low) {
  echo "\nWhen you guessed wrong you tended to guess high\n";
};

if ($guess_low > $guess_high) {
  echo "\nWhen you guessed wrong, you tended to guess low.\n";
} ;
