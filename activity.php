?php
$response = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = strtolower($_POST["message"]);

    if ($message == "hello") {
        $response = "Hi there!";
    } 
    elseif ($message == "how are you") {
        $response = "I'm just a simple PHP chatbot ";
    } 
    elseif ($message == "bye") {
        $response = "Goodbye! Have a nice day!";
    } 
    else {
        $response = "Sorry, I don't understand.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Chatbot</title>
</head>
<body>

<h2>Simple PHP Chatbot</h2>

<form method="post">
    <input type="text" name="message" placeholder="Type a message..." required>
    <button type="submit">Send</button>
</form>

<?php
if ($response != "") {
    echo "<p><strong>Bot:</strong> $response</p>";
}
?>

</body>
</html>
