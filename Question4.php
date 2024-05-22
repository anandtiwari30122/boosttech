<!DOCTYPE html>
<html>
<head>
    <title>Word Counter</title>
    <style>.form{
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
        p{
            margin-left: 35%;
            font-size: x-large;
            color: blue;
        }</style>
</head>
<body>
<div class="form">
<h2>Word Counter</h2>
<form method="post" action="">
    Enter a sentence: <input type="text" name="input_string"><br>
    <input type="submit" name="submit" value="Count Words" class="submit-button">
</form>
</div>
<?php
function countWords($str) {
    // Trim any leading or trailing whitespace
    $str = trim($str);
    
    // If the string is empty, return 0
    if (empty($str)) {
        return 0;
    }
    
    // Split the string into an array of words using whitespace as the delimiter
    $words = preg_split('/\s+/', $str);
    
    // Count the number of words in the array
    $wordCount = count($words);
    
    return $wordCount;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputString = $_POST["input_string"];
    
    // Count the number of words in the input string
    $wordCount = countWords($inputString);
    
    // Display the word count
    echo "<p>Number of words in the sentence: " . $wordCount . "</p>";
}
?>

</body>
</html>
