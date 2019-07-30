<?php
	function printBtnCmd($__ID, $__cmd, $__des){
		echo "<button type='button' id='rumCMDbtn' class='myBtn' value='" . strtolower($__ID) . "'> " . strtolower($__cmd) . "  </button>
		<div class='myBorderI myTextC myDex'>
			" . strtolower($__des)  . "
		</div>"; 
	}
?>