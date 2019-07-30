<?php
	if($_POST){
		$id		= $_POST["idCmd"];
		$newID		= $_POST["newIdCmd"];
		$cmdName	= $_POST["cmdName"];
		$des		= $_POST["cmdDES"];
		$error		= true;
		
		include "../bdConect/conectBD.php";
		$sql = "SELECT * FROM COMANDO";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				if($row["ID"] == $id){
	
					if($newID == null){
						$newID = $row["ID"];
					}
	
					if($cmdName == null){
						$cmdName = $row["CMD"];
					}
	
					if($des == null){
						$des = $row["DESCRICAO"];
					}
	
					$sql = "UPDATE COMANDO SET ID='".$newID."', CMD='".$cmdName."', DESCRICAO='".$des."'  WHERE ID='".$id."';";
	
					if ($conn->query($sql) === TRUE) {
					    echo "Atualização de ".$newID." bem sucedida";
					} else {
					    echo "Error updating record: " . $conn->error;
					}
	
					$error = false;
					break;
				}
			}
			if($error === true ){ echo "comando ".$id." não exixte"; }
		} else { echo "não exixte comandos cadastrados"; }
		$conn->close();
	} else{ echo "erro de formulario"; }


	
?>