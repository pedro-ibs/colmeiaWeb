<?php
	include "../bdConect/conectBD.php";
	include "../printHtml/printBtnDev.php";

		$dev = $_POST["servNAME"];

		/* listar tudo  */
		$sql = "SELECT * FROM DEVICE";
		$result = $conn->query($sql);

		if($dev != null){
			while($row = $result->fetch_assoc()) {
				if((stristr($row["ID"], $dev) !== false) or (stristr($row["NOME"], $dev) !== false) or  (stristr($row["DESCRICAO"], $dev) !== false)){
					printBtnDev($row["ID"], $row["NOME"],  $row["DESCRICAO"], $row["IMG"]);
				}
			}

		} else {
			while($row = $result->fetch_assoc()) {
				printBtnDev($row["ID"], $row["NOME"],  $row["DESCRICAO"], $row["IMG"]);
			}
		}

	$conn->close();
?>