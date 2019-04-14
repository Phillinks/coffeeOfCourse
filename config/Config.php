<?php

define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DATA','coffeeofcourse');

function __autoload($Class){
    $dirName = array(
        'controllers',
        'models',
        'views',
        'config'
    );
    foreach ($dirName as $diretorios){
        if(file_exists("{$diretorios}/{$Class}.php")):
            require "{$diretorios}/{$Class}.php";
        endif;    
    }
            
}

