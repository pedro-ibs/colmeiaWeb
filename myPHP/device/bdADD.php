<?php


if($_POST){
	$id	= $_POST["devID"];
	$error	= false;
	
	include "../bdConect/conectBD.php";
	$sql = "SELECT * FROM DEVICE";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		/* ver see já exixte */
		while($row = $result->fetch_assoc()){
			if($row["ID"] == $id){
				$error = true;
				break;
			}
		}
		if($error === true ){ echo "Dispositivo ".$id." já exixte"; }
		else{

			/*add*/ 
			$sql = "INSERT INTO DEVICE(ID, NOME, IMG, DESCRICAO) VALUES('".$_POST["devID"]."', '". $_POST["devNome"]."',  '".$_POST["devIMG"]."', '". $_POST["devDES"]."');";

			if ($conn->query($sql) === TRUE) {
				echo "Dispositivo " . $id  . " Adicionado com Sucesso";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
	} else {
		echo "não exixte dispositivos cadastrados\n";
		/*add*/ 
		$sql = "INSERT INTO DEVICE(ID, NOME, IMG, DESCRICAO) VALUES('".$_POST["devID"]."', '". $_POST["devNome"]."',  '".$_POST["devIMG"]."', '". $_POST["devDES"]."');";

		if ($conn->query($sql) === TRUE) {
			echo "Dispositivo " . $id  . " Adicionado com Sucesso";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	$conn->close();
} else{ echo "erro de formulario"; }


?>