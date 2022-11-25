<?php
	$dbh = new PDO('mysql:host=localhost;dbname=beadando', 'root', '',
	array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
	$hibas=false;
	$nev="";
	if(!isset($_POST['nev']) || strlen($_POST['nev']) < 5)
	{
		echo "Hibás név: ".$_POST['nev'];
		$hibas=true;
	}

    else{
        echo "Elküldött név: ".$_POST['nev']."<br>";
    }

	$re = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/';
	if(!isset($_POST['email']) || !preg_match($re,$_POST['email']))
	{
		echo "Hibás email: ".$_POST['email'];
		$hibas=true;
	}

    else{
        echo "Elküldött email: ".$_POST['email']."<br>";
    }

	if(!isset($_POST['szoveg']) || empty($_POST['szoveg']))
	{
		echo "Hibás szöveg: ".$_POST['szoveg'] ;
		$hibas=true;
	}

	else{
        echo "Elküldött szöveg: ".$_POST['szoveg']."<br>";
    }
    
	if(!$hibas){
		if(isset($_SESSION['login'])){
			$nev=$_SESSION['csn']." ".$_SESSION['un'];
		}else{
			$nev="Vendég";
		}
		$sqlInsert = "insert into uzenetek( nev, uzenet)
                              values( :nev, :uzenet)";
                $stmt = $dbh->prepare($sqlInsert); 
                $stmt->execute(array(':nev' => $nev,
                                     ':uzenet' => $_POST['szoveg'])); 
                if($count = $stmt->rowCount()) {
                    
                    echo "Sikeres elküldés.";                     
                
                }
                else {
                    echo "Elküldés sikertelen";
                    
                }
	}
?>
