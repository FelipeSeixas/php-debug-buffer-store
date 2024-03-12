<?php
// Start the buffer scope, it will store on memory, instead show in browser
ob_start();

$prices = array(5.95, 3.00, 12.50);
$totalPrice = 0;
$tax_rate = 1.08; // tax of 8%

foreach ($prices as $price) {
    echo "Before: $totalPrice";
    $totalPrice += $price * $tax_rate;
    echo "After: $totalPrice";
}

// $output variable would store the buffer contents
$output = ob_get_contents(); 

// Return the permission to show in browser. The buffer scope was stop
ob_end_clean();

// Show in server log
error_log($output);

?>