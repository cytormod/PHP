<?php
// ----------Cookies----------

/**
 * Cookies are a mechanism for storing data in the remote browser and this tracking or identifying return users. You can set specific data to be stored in the browserr, and then retrieve it when the user visits the site again. 
 */

// Set cookie
setcookie('name', 'Sahil', time()+ 86400 *30);

if(isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
}

// ! To Delete the Cookie
setcookie('name', '', time()-86400);