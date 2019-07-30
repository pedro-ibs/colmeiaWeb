<?php
	if($_POST){
		$id = $_POST["idCmd"];
		$error = true;
		
		include "../bdConect/conectBD.php";
		$sql = "SELECT ID FROM COMANDO";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				if($row["ID"] == $id){
					$sql = "DELETE FROM COMANDO WHERE ID='".$id."';";
	
					if ($conn->query($sql) === TRUE) {
						echo "Comando ".$id." REMOVIDO com Sucesso"."<br>";
					} else {
						echo "Error: " . $sql . "<br>" . $conn->error;
					}

					$error = false;
					break;
				}
			}
			if($error === true ){ echo "Comando ".$id." não exixte"; }
		} else { echo "não exixte Comandos cadastrados"; }
		$conn->close();
	} else{ echo "erro de formulario"; }





?>