<?php
 $con=@mysql_connect('localhost','root','');
  $sql=@mysql_select_db('my_doctor',$con);

   if($sql){
			
				echo "";
				}
				else{
					echo mysql_error();
					}

?>