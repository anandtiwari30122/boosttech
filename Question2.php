<!DOCTYPE html>
<html>
<head>
    <title>Array Operations</title>
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
        p{
            margin-left: 35%;
        }
    </style>
</head>
<body>
<div class="form">
    <h2>Array Operations</h2>
    <form method="post" action="">
    Enter integers separated by commas: <input type="text" name="input_array"><br>
    <input type="submit" name="submit" value="Perform Operations" class="submit-button">
    </form>
</div>

<?php
function findMaxMin($arr) {
    $max = $arr[0];
    $min = $arr[0];
    
    foreach ($arr as $num) {
        if ($num > $max) {
            $max = $num;
        }
        if ($num < $min) {
            $min = $num;
        }
    }
    
    return array("max" => $max, "min" => $min);
}

function sortArrayAscending($arr) {
    sort($arr);
    return $arr;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputString = $_POST["input_array"];
    $inputArray = explode(",", $inputString); // Convert input string to array
    
    // Remove any whitespace around array elements
    $inputArray = array_map('trim', $inputArray);
    
    // Convert array elements to integers
    $inputArray = array_map('intval', $inputArray);
    
    // Find maximum and minimum elements
    $result = findMaxMin($inputArray);
    echo "<p>Maximum element: " . $result['max'] . "</p>";
    echo "<p>Minimum element: " . $result['min'] . "</p>";
    
    // Sort array in ascending order
    $sortedArray = sortArrayAscending($inputArray);
    echo "<p>Sorted array: " . implode(", ", $sortedArray) . "</p>";
}
?>

</body>
</html>
