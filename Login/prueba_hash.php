<?php
// https://www.sitepoint.com/hashing-passwords-php-5-5-password-hashing-api/
/*
pass - qwerty
hash - $2y$10$eF0eWvm6oRakhSb7i5UhdO9pSJMIe0FecdnNwgdHkp4
pass - eustakio
hash - $2y$10$tI0T6w6XBoYbqHmg61okUO2DqxfDHTGeFeLrKyrFVVr
*/
$pass = 'asdfg';
$hash = password_hash($pass, PASSWORD_DEFAULT);
//$hash = '$2y$10$EOo9BoSxLqwZfAwPRoZ2buBo8EQmtgfraheD3oqzD9qD7okwidAs6';
echo $hash . "<br>";
if (password_verify($pass, $hash)) {
    // Success!
    echo "Success!";
}
else {
    // Invalid credentials
    echo "Error!";
}