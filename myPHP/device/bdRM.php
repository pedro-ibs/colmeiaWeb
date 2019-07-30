<?php
	if($_POST){
		$id = $_POST["devID"];
		$error = true;
		
		include "../bdConect/conectBD.php";
		$sql = "SELECT ID FROM DEVICE";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				if($row["ID"] == $id){
					$sql = "DELETE FROM DEVICE WHERE id='".$id."';";
	
					if ($conn->query($sql) === TRUE) {
						echo "Dispositivo ".$id." REMOVIDO com Sucesso"."<br>";
					} else {
						echo "Error: " . $sql . "<br>" . $conn->error;
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