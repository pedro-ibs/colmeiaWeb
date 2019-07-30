<?php
	function printBtnDev($__id, $__nome, $__des, $_img){
		echo "<div class='row myBorderV myTextC  myMore'>

		<button type='button'  class='mySelect myBorderI col' id='more'>
			<img src='" . $_img  . "' class='myIMG'>
		</button>
		<div class='myPopup'>
			<div class='myCenter'> 
				<div class='myTitle myCenter' style='width: 70%;'>$__nome</div>

				<img src='".$_img."' class='myIMG myCenter'>
				<div class='myCenter myTextC' style='text-align: center;'>
					ID do Dispositivo:".$__id." </br>
					Descrição:".$__des."</br>
				</div>			
			</div>
		</div>
		

		<div class='col'>
			<button type='button' id='conctDevBtn' class='myBtn' value='" . strtolower($__id) . "'> " . strtolower($__nome) . " </button>
			<div>
					" . strtolower($__des) . "
			</div>	
		</div>
		</div>";
	}
?>