<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Calculator</title>
</head>
<body>
<form method="post" align =" center">
    <fieldset>
        <legend>Advanced Calculator</legend>
        Enter num1:
        &nbsp;&nbsp;&nbsp;<input type="number" step="any" name="x" required/><br><br>
        Enter num2 (if applicable):
        <input type="number" step="any" name="y"/><br><br>

        Select operation:
        <input type="submit" name="op" value="+">
        <input type="submit" name="op" value="-">
        <input type="submit" name="op" value="/">
        <input type="submit" name="op" value="*">
        <input type="submit" name="op" value="%">
        <input type="submit" name="op" value="^"> 
        <input type="submit" name="op" value="log"> 
        <input type="submit" name="op" value="sqrt"> <br><br>

        Results: 
        <input type="text" value="<?php if (isset($ans)) { echo $ans; } ?>" readonly>
    </fieldset>   
</form>

<?php
// ensures that the form data is processed only when the form is submitted.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $x = isset($_POST['x']) ? $_POST['x'] : 0;
    $y = isset($_POST['y']) ? $_POST['y'] : 0;
    $op = $_POST['op'];

    // Initialize $ans as an empty variable
    $ans = "";

    // Perform the operations based on the operand selected
    if ($op == "+") {
        // addition calculation
        $ans = $x + $y;
    } elseif ($op == "-") {
        // subtraction calculation
        $ans = $x - $y;
    } elseif ($op == "/") {
        // division calculation
        if ($y != 0) {
            $ans = $x / $y;
        } else {
            $ans = "Cannot divide by zero";
        }
    } elseif ($op == "*") {
        $ans = $x * $y;
         // multiplication calculation

    } elseif ($op == "%") {
        // Percentage calculation
        $ans = ($x / 100) * $y;
    } elseif ($op == "^") {
        // Exponential calculation
        $ans = pow($x, $y);
    } elseif ($op == "log") {
        // Logarithmic calculation (base 10)
        if ($x > 0) {
            $ans = log10($x);
        } else {
            $ans = "Logarithm not defined for non-positive numbers";
        }
    } elseif ($op == "sqrt") {
        // Square root calculation
        if ($x >= 0) {
            $ans = sqrt($x);
        } else {
            $ans = "Square root not defined for negative numbers";
        }
    }

    // Ensure that the result is shown in the form field by setting the $ans value.
    echo "<script>document.querySelector('input[type=text]').value = '$ans';</script>";
}
?>
</body>
</html>
