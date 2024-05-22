<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
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
     <h2>Temperature Converter</h2>
     <!-- Form for temperature conversion -->
     <form method="post">
        <!-- Input field for temperature -->
        <label for="temperature">Temperature:</label>
        <input type="text" id="temperature" name="temperature" required>
        
        <!-- Dropdown menu for unit selection -->
        <label for="unit">Unit:</label>
        <select id="unit" name="unit">
            <option value="Celsius">Celsius</option>
            <option value="Fahrenheit">Fahrenheit</option>
        </select>

        <!-- Submit button -->
        <button type="submit" class="submit-button">Convert</button>
     </form>
    </div>
    <?php
    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve temperature and unit from the form submission
        $temperature = $_POST['temperature'];
        $unit = $_POST['unit'];
        
        // Function to convert temperature
        function convertTemperature($temperature, $unit) {
            if ($unit === 'Celsius') {
                // Convert Celsius to Fahrenheit
                $converted_temperature = ($temperature * 9/5) + 32;
                return $converted_temperature . "°F";
            } elseif ($unit === 'Fahrenheit') {
                // Convert Fahrenheit to Celsius
                $converted_temperature = ($temperature - 32) * 5/9;
                return $converted_temperature . "°C";
            } else {
                // Display error message for invalid unit
                return "Invalid unit. Please use 'Celsius' or 'Fahrenheit'.";
            }
        }
        
        // Call the conversion function and display the result
        $converted = convertTemperature($temperature, $unit);
        echo "<p>Converted temperature: " . $converted . "</p>";
    }
    ?>
</body>
</html>
