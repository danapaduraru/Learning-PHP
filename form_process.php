<?php 
if(isset($_POST['submit'])) {
    
    $min = 6;
    $names = array("Dana","Samid","Jane","Tom");
    $username = $_POST['name'];
    $passwd = $_POST['passwd'];
    
    if(strlen($passwd) < $min) {
        echo "Password needs to have at least 6 characters.";
    }
    
    if(!in_array($name,$names)) {
        echo "There is no user with this name";
    }
    else
        echo "Welcome!";
}
?>