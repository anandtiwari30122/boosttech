<!DOCTYPE html>
<html>
<head>
    <title>Delete Element from PHP Array</title>
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
        }
        pre{
            margin-left: 35%;
            font-size: large;
            color: violet;  
            border-style: solid; 
            width: 20%; 
            text-align: center;
        }
        .input{
            margin: 5px;
        }
    </style>
</head>
<body>
<div class="form">
    <h2>Delete Element from PHP Array</h2>
    <form method="post" action="">
        Enter the array elements separated by commas: <input type="text" name="input_array" class="input"><br>
        Enter the value to delete: <input type="text" name="delete_value" class="input"><br>
        <input type="submit" name="submit" value="Delete" class="submit-button">
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input array and delete value from the form
    $inputString = $_POST["input_array"];
    $deleteValue = $_POST["delete_value"];
    
    // Convert the input string to an array
    $array = explode(",", $inputString);
    
    // Remove any whitespace around array elements
    $array = array_map('trim', $array);
    
    // Convert array elements to integers
    $array = array_map('intval', $array);
    
    // Delete the specified value from the array
    $keyToDelete = array_search($deleteValue, $array);
    if ($keyToDelete !== false) {
        unset($array[$keyToDelete]);
    }
    
    // Normalize integer keys
    $array = array_values($array);
    
    // Display the array after deletion and normalization
    echo "<p>Array after deleting $deleteValue and normalization:</p>";
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
?>

</body>
</html>
