<html>
	<head> <title> Verification </title> </head>
	<body>
	<?php
		session_start();
		if(isset($_SESSION['uname']) && isset($_SESSION['event'])) {
			$uname = $_SESSION['uname'];
			$event = $_SESSION['event'];
			$conn = mysql_connect('localhost','root','root');
			mysql_select_db('MCQ',$conn);
			$result = mysql_query("select * from $event",$conn);
			$mark = 0;
			while($row = mysql_fetch_assoc($result)) {
				if($_POST['q'.(string)$row['id']] == $row['answer'])
					$mark++;
			}
			mysql_query("insert into $event"."_attend values('$uname',$mark)");
		}
	?>
	</body>
</html>

