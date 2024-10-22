<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$choice = $_POST['menu_choice'];

switch ($choice) {

case 1:

echo "You chose Pizza. The price is $15.";

break;

case 2:

echo "You chose Burger. The price is $10.";

break;

case 3:

echo "You chose Salad. The price is $8.";

break;

case 4:

echo "You chose Sandwich. The price is $7.";

break;

case 5:

echo "Thank you for visiting! Goodbye!";

break;

default:

echo "Invalid choice. Please select a valid menu item.";

}

}

?>