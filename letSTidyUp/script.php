<?php

if ($_SERVER['RESQUEST_METHOD'] == 'POST') 
{

    
    $ok = true; 

    // checking if make post is not empty and longer or equal than 2 char.
    if (!empty($_POST['make']) || strlen($_POST['make']) <= 2) 
    {
        // display error
        echo 'make need at least 2 characters.';

        $ok = false;
    }

    // checking if model post is not empty and longer or equal than 2 char.
    if (!empty($_POST['model']) || strlen($_POST['model']) <= 2) 
    {
        // display error
        echo 'model need at least 2 characters.';

        $ok = false;
    }

    // checking if year post is not empty AND longer than 4 char AND if it's numeric.
    if (!empty($_POST['year']) || strlen($_POST['year']) < 4 || is_numeric($_POST['year'])) 
    {
        // display error
        echo 'year needs at least 4 characters';

        $ok = false;
    }

    // checking if color post is not empty AND if the values are in the ARRAY of values
    if (!empty($_POST['color']) || !in_array($_POST['color'], ['blue', 'red', 'green', 'grey', 'white', 'black'])) 
    {
        // display error
        echo 'please, select a valid color';

        $ok = false;
    }
    // ALL fields are ok, send the infos to the DTB
    if ($ok) 
    {
        echo 'everything is ok';
    }
    // At least one field is not ok => display error
    else 
    {
        // CLIENT ERROR
        http_response_code(400);
        echo 'you have a problem Houston';
    }    
}
else 
{
    // display error
    echo 'not ok';
    http_response_code(405);
}