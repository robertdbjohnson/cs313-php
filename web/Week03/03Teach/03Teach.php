<?php
​
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$continents = htmlspecialchars($_POST["continent[]"]);
​
​
echo "Your name is $name" . "<br>" 
echo "Your email is" <a href="mailto: $email."></a>
​
​
$major = htmlspecialchars($_POST["major"]);
$comment = htmlspecialchars($_POST["text"])
​
echo "Your major is $major" . "<br>" . "Comments $comment" . "br>";
​
?>