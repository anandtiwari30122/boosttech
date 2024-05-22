<!DOCTYPE html>
<html>
<head>
    <title>Unique Characters Finder</title>
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
<h2>Unique Characters Finder</h2>
<form method="post" action="">
    Enter a string: <input type="text" name="input_string"><br>
    <input type="submit" name="submit" value="Find Unique Characters" class="submit-button">
</form>
</div>
<?php
function findUniqueCharacters($str) {
    // Convert string to lowercase to make the comparison case-insensitive
    $str = strtolower($str);
    
    // Initialize an empty array to store unique characters
    $uniqueChars = [];
    
    // Loop through each character in the string
    for ($i = 0; $i < strlen($str); $i++) {
        // Check if the current character is already in the uniqueChars array
        if (!in_array($str[$i], $uniqueChars)) {
            // If not, add it to the array
            $uniqueChars[] = $str[$i];
        }
    }
    
    // Convert the array of unique characters back to a string and return it
    return implode("", $uniqueChars);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputString = $_POST["input_string"];
    
    // Find unique characters in the input string
    $uniqueChars = findUniqueCharacters($inputString);
    
    // Display the unique characters
    echo "<p>Unique characters in the string: " . $uniqueChars . "</p>";
}
?>

</body>
</html>
