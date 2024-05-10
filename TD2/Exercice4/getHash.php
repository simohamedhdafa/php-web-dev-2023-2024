<?php

$login_password = array(
    "leprof" => "retrouveMoi",
    "batman" => "quiZ55*s",
    "junia"  => "20242025",
    "hidaya" => "200606"
);

$password = "200606";
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

echo "Password is:", $password, "\n";
echo "Hashed Password is: ", $hashed_password, "\n\n";
    
if (password_verify($password, $hashed_password)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}