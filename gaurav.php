<table width="1200px" border="1px" cellspacing="0px">
<?php
	$a= 0;
	for($col= 0;$col< 8; $col++){
	    echo "<tr>";
		$a= $col;
		for($row= 0;$row< 8; $row++){
			if($a%2 ==0){
				echo "<td height=90px width=110px bgcolor=black></td>";
				$a++;
			}
            else{
				echo "<td height=90px width=110px bgcolor=white> </td>";
				$a++;
            }

		}
    	
	}
	echo"</tr>";
?>