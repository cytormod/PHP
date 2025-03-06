<?php

$sensitiveData = "Sahil";
$salt = bin2hex(random_bytes(16)); //Generate Random Salt
$pepper = 'ASecretPepperString';

$dataToHash = $sensitiveData . $salt . $pepper;
$hash = hash("sha256", $dataToHash);

echo "<br>" .$hash;

/*-------------*/

$sensitiveData = "Sahil";

$storedSalt = $salt;
$storedHash = $hash;
$pepper = "ASecretPepperString";

$dataToHash = $sensitiveData . $storedSalt . $pepper;

$verificationHash = hash("sha256", $dataToHash);

if($storedHash === $verificationHash) {
    echo "The data are the same!";
    echo "<br>";
    echo $storedHash;
    echo "<br>";
    echo $verificationHash;
}else {
    echo "The data are not the same!";
}
