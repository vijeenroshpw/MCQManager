<html>
	<head> <title> Questions </title> 
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
	 
		<style type='text/css'>
			.questions {
				width:500px;
			}
		</style>	
	</head>
	<body>
		<?php
			session_start();
			if(isset($_GET['update'])) {
				if($_GET['update'] > $_SESSION['time']) {
					$_SESSION['time'] = $_GET['update'];
				}
				exit();
			}

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
					if(! isset($_SESSION['time']))
						$_SESSION['time'] = 0;
					$maxtime = 10;              //set for one minute
					echo " <h3 align='center'><font color='green'>$event</font> -- Multiple Choice Question </h1>";
					echo " <h2 align=center>Each question carries 1 mark , no negative marks</h2>";
					echo "<div id=timedisp align=center style='font-color:green'> </div>";
					$result = mysql_query("select * from $event ");
					echo "<center><b>";				
					echo "<form method=post action=verify.php id='answerform'>";				
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
					echo "<script type=text/javascript>
							var timer = $_SESSION[time];
							function inc_timer() {
								timer++;
								document.getElementById('timedisp').innerHTML = timer;			
								if(timer >= $maxtime) {
									alert(' Time is UP ');
									document.getElementById('answerform').submit();
								}
							}
							setInterval(inc_timer,1000);
							function update_time() {
								$.ajax({url:'questions.php?update='+timer.toString(),success:function(){}});
							}
							setInterval(update_time,2000);

						</script>";	
				}
			
			}		
		?>
	</body>
</html>

