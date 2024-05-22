<!DOCTYPE html>
<html>
<head>
    <title>Palindrome Checker</title>
    <style>
        .form{
            border-style: solid;
            margin-left: 30%;
            margin-top: 20px;
            padding: 20px;
            width: 40%;
            border-radius: 10px;
        }
        h2{
            text-align: center;
           }
        .submit-button {
            background-color: #4CAF50;
            margin-left: 30%;
            margin-top: 10px;
            color: white;
            padding: 10px 20px;
            text-align: center; 
            display: inline-block; 
            font-size: 16px; 
            cursor: pointer; 
            border-radius: 5px; 
        }
        .result-box{
            border-style: solid;
            margin-left: 30%;
            border-radius: 10px;
            margin-top: 20px;
            padding: 20px;
            width: 40%;
            text-decoration: solid;
            font-size: x-large;
        }
    </style>
</head>
<body>
<div class="form">
<h2>Palindrome Checker</h2>
<form method="post" action="">
    Enter a word or phrase: <input type="text" name="input_string"><br>
    <input type="submit" name="submit" value="Check" class="submit-button">
</form>
</div>
<?php
// Function to check if a string is a palindrome
function isPalindrome($str) {
    // Remove non-alphanumeric characters and convert to lowercase
    $cleanedStr = preg_replace('/[^a-zA-Z0-9]/', '', strtolower($str));
    
    // Reverse the string
    $reversedStr = strrev($cleanedStr);
    
    // Check if the original and reversed strings are equal
    return $cleanedStr === $reversedStr;
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input string from the form
    $inputString = $_POST["input_string"];
    
    // Check if the input string is a palindrome
    if (isPalindrome($inputString)) {
        echo '<div class="result-box">"' . $inputString . '" is a palindrome.</div>';
    } else {
        echo '<div class="result-box">"' . $inputString . '" is not a palindrome.</div>';
    }
}
?>

</body>
</html>
