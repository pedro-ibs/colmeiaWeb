<?php
	include "../bdConect/conectBD.php";
	include "../printHtml/printBtnCmd.php";

		$cmd = $_POST["cmd"];

		/* listar tudo  */
		$sql = "SELECT * FROM COMANDO";
		$result = $conn->query($sql);

		if($cmd != null){
			while($row = $result->fetch_assoc()) {
				if((stristr($row["ID"], $cmd) !== false) or (stristr($row["CMD"], $cmd) !== false) or  (stristr($row["DESCRICAO"], $cmd) !== false)){
					printBtnCmd($row["ID"], $row["CMD"],  $row["DESCRICAO"]);
				}
			}

		} else {
			while($row = $result->fetch_assoc()) {
				printBtnCmd($row["ID"], $row["CMD"],  $row["DESCRICAO"]);
			}
		}

	$conn->close();
?>