<?php
// Create an associative array of countries and capitals
$countries = array(
    "India" => "New Delhi",
    "USA" => "Washington, D.C.",
    "Japan" => "Tokyo",
    "France" => "Paris",
    "Australia" => "Canberra"
);

//  Value (Capital city) to search
$capitalToSearch = "Tokyo";

//  Use array_search() to find the country
$country = array_search($capitalToSearch, $countries);

// Display result
if ($country !== false) {
    echo "The capital city <b>$capitalToSearch</b> belongs to <b>$country</b>.";
} else {
    echo " The capital city <b>$capitalToSearch</b> was not found in the array.";
}
?>
