<?php

<?php
$connection_string = "
  host = ec2-34-225-103-117.compute-1.amazonaws.com
  port = 5432
  dbname = dcg72tr1l83dd3
  user = eophfavabkrorx
  password = cada536917ba323da06136f1b0fd36d8eeae9fee194a8d611e249fd04c60fa78

";
$dbconn = pg_connect(connection_string);
if(isset($_POST['username'])){
	$username = $_POST['username'];
}
if(isset($_POST['password'])){
	$password= $_POST['password'];
}


