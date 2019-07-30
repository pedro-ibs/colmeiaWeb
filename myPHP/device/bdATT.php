<?php


if($_POST){
	$name = $_POST["devNome"];
	$id	= $_POST["devID"];
	$newID	= $_POST["NdevID"];
	$des	= $_POST["devDES"];
	$img	= $_POST["devIMG"];
	$error = true;
	
	include "../bdConect/conectBD.php";
	$sql = "SELECT * FROM DEVICE";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()){
			if($row["ID"] == $id){

				if($newID == null){
					$newID = $row["ID"];
				}

				if($name == null){
					$name = $row["NOME"];
				}

				if($des == null){
					$des = $row["DESCRICAO"];
				}

				if($img == null){
					$img = $row["IMG"];
				}

				$sql = "UPDATE DEVICE SET ID='".$newID."', NOME='".$name."', IMG='".$img."', DESCRICAO='".$des."'  WHERE ID='".$id."';";

				if ($conn->query($sql) === TRUE) {
				    echo "Atualização de ".$newID." bem sucedida";
				} else {
				    echo "Error updating record: " . $conn->error;
				}

				$error = false;
				break;
			}
		}
		if($error === true ){ echo "Dispositivo ".$id." não exixte"; }
	} else { echo "não exixte dispositivos cadastrados"; }
	$conn->close();
} else{ echo "erro de formulario"; }


?>