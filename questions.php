<html>
	<head> <title> Questions </title> 
	<style type='text/css'>
		.questions {
			width:500px;
		}
	</style>	
	
	<body>
		<?php
			session_start();
			if(isset($_SESSION['uname']) && isset($_SESSION['event'])) {
				
				$uname = $_SESSION['uname'];
				$event = $_SESSION['event'];
				$event_attend = $_SESSION['event']."_attend";
								
				$conn = mysql_connect('localhost','root','root');
				mysql_select_db('MCQ',$conn);
				$result = mysql_query("select * from $event_attend where uname='$uname'",$conn);
				if(mysql_num_rows($result) != 0) {
					echo "<h3 align='center'> You have already attanded the examination</h3> ";
					echo "<center><a href='logout.php'> Logout </a></center>";
				} else {
					echo " <h3 align='center'><font color='green'>$event</font> -- Multiple Choice Question </h1>";
					echo " <h2 align=center>Each question carries 1 mark , no negative marks</h2>";
					$result = mysql_query("select * from $event ");
					echo "<center><b>";				
					echo "<form method=post action=verify.php>";				
					$colorcounter=0;				
					$color = array('#8467d7','#56a5ec','#659ec7','#4863a0');				
					while($row = mysql_fetch_assoc($result)) {
						$id = $row['id'];
						$question = $row['question'];
						$choises = explode("|",$row['choises']);
						$colorcounter = ($colorcounter+1)%4;
						echo "<div class=questions style='background-color:$color[$colorcounter]'>";
						echo "$id)".$question."<br/>";
						echo " a .".$choises[0]."<br/>";
 						echo " b .".$choises[1]."<br/>";
						echo " c .".$choises[2]."<br/>";
						echo " d .".$choises[3]."<br/>";
						echo "<select name=q$id style='width:80px'>";
							echo "<option value='a'>  a </option>
							<option value='b'>  b </option>
							<option value ='c'> c </option>
							<option value='d'> d </option>
						</select>";			
						echo "</div>";				
					}
					echo "<input type=submit value=submit>";
					echo "</form>";				
					echo "</b></center>";			
				}
			
			}		
		?>
	</body>
</html>

