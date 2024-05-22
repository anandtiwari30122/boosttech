<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duplicate Array Checker</title>
</head>
<body>
    <h2>Duplicate Array Checker</h2>
    <form method="post">
        <label for="inputArray">Enter array elements (comma-separated):</label>
        <input type="text" id="inputArray" name="inputArray" required>
        <button type="submit">Check</button>
    </form>

    <?php
    // Function to check for duplicates in an array
    function findDuplicates($array) {
        $uniqueElements = array_unique($array); // Remove duplicates
        $duplicates = array_diff_assoc($array, $uniqueElements); // Find the differences
        return array_unique($duplicates); // Remove duplicates in duplicates
    }

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the input array from the form and explode it into an array
        $inputArray = explode(",", $_POST['inputArray']);
        
        // Check for duplicates in the input array
        $duplicateValues = findDuplicates($inputArray);

        // Display the result
        if (empty($duplicateValues)) {
            echo "<p>No duplicates found in the array.</p>";
        } else {
            echo "<p>Duplicate(s) found in the array: " . implode(", ", $duplicateValues) . "</p>";
        }
    }
    ?>
</body>
</html>
