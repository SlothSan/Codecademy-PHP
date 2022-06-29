<?php

function magic8Ball()
{
  echo "Tell me... What is your question?\n";
  $question = readline(">>");
  echo "Hmm that is a hard one, your question is \"$question...\" This seems to be weighing heavily on you... I have consulted the world beyond. \nHere is the answer to that which you seek:";
  $choice = rand(1, 20);
  switch ($choice) {
    case 1:
      echo "\nIt is certain.";
      break;
    case 2:
      echo "\nIt is decidedly so.";
      break;
    case 3:
      echo "\nWithout a doubt.";
      break;
    case 4:
      echo "\nYes - definitely";
      break;
    case 5:
      echo "\nYou may rely on it.";
      break;
    case 6:
      echo "\nAs I see it, yes.";
      break;
    case 7:
      echo "\nMost likely.";
      break;
    case 8:
      echo "\nOutlook good.";
      break;
    case 9:
      echo "\nYes.";
      break;
    case 10:
      echo "\nSigns point to yes.";
      break;
    case 11:
      echo "\nReply hazy, try again.";
      break;
    case 12:
      echo "\nAsk again later.";
      break;
    case 13:
      echo "\nBetter not tell you now.";
      break;
    case 14:
      echo "\nCannot predict now.";
      break;
    case 15:
      echo "\nConcentrate and ask again.";
      break;
    case 16: 
      echo "\nDon't count on it.";
      break;
    case 17:
      echo "\nMy reply is no.";
      break;
    case 18:
      echo "\nMy sources say no.";
      break;
    case 19:
      echo "\nOutlook not so good.";
      break;
    case 20:
      echo "\nVery doubtful.";
      break;
  }
}

magic8Ball();

