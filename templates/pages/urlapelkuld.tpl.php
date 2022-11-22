<?php
	if(!isset($_POST['nev']) || strlen($_POST['nev']) < 5)
	{
		echo "Hibás név: ".$_POST['nev'];
	}

    else{
        echo "Elküldött név: ".$_POST['nev']."<br>";
    }

	$re = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/';
	if(!isset($_POST['email']) || !preg_match($re,$_POST['email']))
	{
		echo "Hibás email: ".$_POST['email'];
	}

    else{
        echo "Elküldött email: ".$_POST['email']."<br>";
    }

	if(!isset($_POST['szoveg']) || empty($_POST['szoveg']))
	{
		echo "Hibás szöveg: ".$_POST['szoveg'] ;
	}

	else{
        echo "Elküldött szöveg: ".$_POST['szoveg']."<br>";
    }
    
?>