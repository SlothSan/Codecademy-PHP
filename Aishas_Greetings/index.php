<?php

require_once 'utilities.php';

// Add your code here!
function makeGreetingCard($sender, $recipient, $template) {
    sanitizeFileName($card_name = "$sender-$recipient.txt");
    $template_content = file_get_contents("$template.txt");
    fopen($card_name, 'w');
    fwrite($card_name, "Dear $recipient,
  \n $template_content \n
  Sincerly, \n
  $sender");
    return $card_name;
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sender = $_POST['sender'];
    $recipient = $_POST['recipient'];
    $template = $_POST['template'];
    $card_name = makeGreetingCard($sender, $recipient, $template);
    header("Location: $card_name");
    exit;
}

?>

<h1>Create a Greeting Card</h1>

<form method="post">
    <label for="sender">Sender Name</label>
    <input type="text" name="sender">

    <label for="sender">Recipient Name</label>
    <input type="text" name="recipient">

    <label>Template</label>
    <select name="template">
        <option value="birthday.txt">Birthday</option>
        <option value="thank_you.txt">Thank You</option>
    </select>

    <button>Create Card</button>
</form>