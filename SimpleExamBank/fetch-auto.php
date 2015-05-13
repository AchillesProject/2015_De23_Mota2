<?php 
 
if (!empty($_GET['hard'])&&!empty($_GET['normal']&&empty($_GET['easy'])
{
    $hard = $mysqli->real_escape_string($_GET['hard']);
    $normal = $mysqli->real_escape_string($_GET['normal']);
    $easy = $mysqli->real_escape_string($_GET['easy']);
    

    if(--something--)
    {
        echo "true";  //good var
    }
    else
    {
        echo "false"; //invalid var
    }
}
else
{
    echo "false"; //invalid post var
}
 
?>