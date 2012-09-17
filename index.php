<?php
	session_start();
?>
<html>
	<head> <title> MCQ Manager </title> </head>
	<body>
		<form method='post' action='#'>
			<fieldset>
				<center>				
					Username: <input type='text' name='uname'><br/>
					Password: <input type='password' name='passwd'><br/>
					Event:    <select name='event'>
							<option value='shellscipting'> Shell Scripting </option>
							<option value='overnightcoding'> Overnight Coding </option>
							<option value='ultimategeek'> Ultimate Geek </option>
						 </select>
					<input type='submit' value='login'><br/>
				</center>
			</fieldset>
		</form>
		<?php
			#ini_set('display_errors',1); 
 			#error_reporting(E_ALL);
			if(isset($_POST['uname']) && isset($_POST['passwd'])&& isset($_POST['event'])) {
				$uname = mysql_escape_string($_POST['uname']);
				$passwd = mysql_escape_string($_POST['passwd']);
				$event = mysql_escape_string($_POST['event']);
				
				$conn = mysql_connect('localhost','root','root');
				mysql_select_db('MCQ',$conn);
				$result = mysql_query("select * from users where uname='".$uname."' and passwd='".SHA1($passwd)."'");
				
				if( mysql_num_rows($result)== 0) {
					echo "Bad Username or Password";
				} else {
					session_start();                       # starts the session
					$_SESSION['uname'] = $uname;
					$_SESSION['event'] = $event; 
				 	header("Location:questions.php");
				}
				mysql_close($conn);
			}
		?>
	<body>
</html>

