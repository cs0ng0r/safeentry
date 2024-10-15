<?php
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validateLogin($email, $password) {
    return validateEmail($email) && !empty($password);
}

function validateRegistration($email, $password, $confirmPassword) {
    return validateEmail($email) && $password === $confirmPassword && strlen($password) >= 6;
}
