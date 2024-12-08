<?php
// Numeric input (1-7, where 1 is Monday and 7 is Sunday)
$day_number = 3; // Change this value to test different days

// Using switch statement to determine the day of the week
switch ($day_number) {
    case 1:
        echo "The day is Monday.";
        break;
    case 2:
        echo "The day is Tuesday.";
        break;
    case 3:
        echo "The day is Wednesday.";
        break;
    case 4:
        echo "The day is Thursday.";
        break;
    case 5:
        echo "The day is Friday.";
        break;
    case 6:
        echo "The day is Saturday.";
        break;
    case 7:
        echo "The day is Sunday.";
        break;
    default:
        echo "Invalid input! Please enter a number between 1 and 7.";
        break;
}
?>
