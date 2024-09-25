## calculator_webApp
this is a basic web-based application that performs basic arithmetic operations (addition, subtraction, multiplication, division) as well as advanced operations like exponentiation, logarithms, square root, and percentage. 
## Implementation Approach
The frontend consists of a simple HTML form where users input two numbers (when applicable) and select the desired operation via submit buttons.
### Input Fields:
num1: Used to input the first number (required).
num2: Used for the second number (optional for operations like square root and logarithms).
Submit Buttons: Each button corresponds to a different mathematical operation:
 - +, -, *, /: Basic arithmetic operations.
 - %: Calculates the percentage of num1 in relation to num2.
 - ^: Exponentiation (raises num1 to the power of num2).
 - log: Computes the base-10 logarithm of num1.
 - sqrt: Computes the square root of num1.
### Result Display:

A text field displays the result dynamically after form submission.
### Backend Implementation
The backend is written in PHP and is responsible for processing the form submission.
PHP retrieves the submitted values (num1, num2, and the operation), processes the calculation, and outputs the result back into the HTML form.
PHP also ensures proper handling of edge cases such as division by zero, non-positive inputs for logarithms, and negative inputs for square roots.
