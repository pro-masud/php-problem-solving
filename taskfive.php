<?php 

$colors = ["red", "green", "blue", "yellow", "purple"];


// Check if the color "green" exists in the `colors` array and print the result

if(in_array("green", $colors)){
    echo "Green Color Is a Exists in Color Array";
}else{
    echo "Green Color Is Not Exists in Color Array";
}

// Remove the color "blue" from the `colors` arra
unset($colors['2']);
// || new solve here 

echo "\n";
print_r($colors);
echo "\n";

// print_r($colors);

// Add the color "orange" to the beginning of the `colors` array.
array_unshift($colors, "orange");

print_r($colors);