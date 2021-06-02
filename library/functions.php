<?php 

// Dynamic menu for Car classifications
function buildNavList($classifications) {
    $navList = '<ul>';
    $navList .= "<li><a href='/phpmotors/index.php' title='View the PHP Motors home page'>Home</a></li>";
    foreach ($classifications as $classification) {
        $navList .= "<li><a href='/phpmotors/index.php?action=".urlencode($classification['classificationName'])."' title='View our $classification[classificationName] product line'>$classification[classificationName]</a></li>";
    }
    $navList .= '</ul>';

    return $navList;
}

// Check Email
function checkEmail($clientEmail) {
    $valEmail = filter_var($clientEmail, FILTER_VALIDATE_EMAIL);
    return $valEmail;
}

// Check the password for a minimum of 8 characters,
//  at least one 1 capital letter, at least 1 number and
//  at least 1 special character
function checkPassword($clientPassword) {
    $pattern = '/^(?=.*[[:digit:]])(?=.*[[:punct:]])(?=.*[A-Z])(?=.*[a-z])([^\s]){8,}$/';
    return preg_match($pattern, $clientPassword);
}

// Verify that the price is greater than 0
function checkPrice($invPrice) {
    $pattern = '/^([0-9]*[.])?[0-9]+$/';
    return preg_match($pattern, $invPrice);
}

// Verify that the stock is greater than 0 and integer
function checkStock($invStock) {
    $pattern = '/^\d+$/';
    return preg_match($pattern, $invStock);
}

// Verify that the classificationId entered is a valid classification Id
function checkClassId($classifications, $classificationId) {
    function getId($classification) {
        return $classification["classificationId"];
    }
    $classificationsIds = array_map("getId", $classifications);

    return in_array($classificationId, $classificationsIds);
}