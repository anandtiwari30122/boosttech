<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lowercase Checker</title>
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
      <h2>Lowercase Checker</h2>
      <form method="post">
        <label for="inputString">Enter a string:</label>
        <input type="text" id="inputString" name="inputString" required>
        <button type="submit" class="submit-button">Check</button>
       </form>
    </div>
    <?php
    // Function to check if a string is all lowercase
    function isAllLowercase($inputString) {
        // Check if the string consists of lowercase letters only
        return ctype_lower($inputString);
    }

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the input string from the form
        $inputString = $_POST['inputString'];
        
        // Check if the input string is all lowercase
        $isLowercase = isAllLowercase($inputString);

        // Display the result
        if ($isLowercase) {
            echo "<p>The string '$inputString' is all lowercase.</p>";
        } else {
            echo "<p>The string '$inputString' is not all lowercase.</p>";
        }
    }
    ?>
</body>
</html>
