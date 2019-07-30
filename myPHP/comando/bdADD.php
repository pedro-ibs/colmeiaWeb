<?php
	if($_POST){
		$idCmd = $_POST["idCmd"];
		$error	 = false;
		
		include "../bdConect/conectBD.php";
		$sql = "SELECT * FROM COMANDO";
		$result = $conn->query($sql);
		
		/* ver see já exixte */
		while($row = $result->fetch_assoc()){
			if($row["ID"] == $idCmd){
				$error = true;
				break;
			}
		}
		if($error === true ){ echo "comando ".$idCmd." já exixte"; }
		else{
			/*add*/ 
			$sql = "INSERT INTO COMANDO(ID, CMD, DESCRICAO) VALUES('".$_POST["idCmd"]."', '". $_POST["cmdName"]."', '". $_POST["cmdDES"]."');";

			if ($conn->query($sql) === TRUE) {
				echo "Comando" .$idCmd.   " Adicionado com Sucesso";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
		$conn->close();
	} else{ echo "erro de formulario"; }
?>