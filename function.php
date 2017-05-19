<?php


/* $baseurl = "http://salon.rexbd.net/"; */

$baseurl = "http://localhost/papaye";
 
	
error_reporting(E_ALL);



$dbname = "cafe";
$dbhost = "localhost";
$dbuser = "cafe";
$dbpass = "cafe";



function connectdb()
{
    global $dbname, $dbuser, $dbhost, $dbpass;
    $conms = @mysqli_connect($dbhost,$dbuser,$dbpass); //connect mysql
    if(!$conms) return false;
    $condb = @mysql_select_db($dbname);
    if(!$condb) return false;
    return true;
}



function dbconnect()
{
	global $pdo;

	try {
		$pdo = new PDO('mysql:host=localhost;dbname=cafe', 'cafe', 'cafe');
	} catch (PDOException $e) {
		die('MySQL connection fail! ' . $e->getMessage());
	}
}





function insert_new_user($username, $password)
{
	# checking username is already taken
	if (username_exists($username))
		return false;

	# insert new user info
	global $pdo;
	$stmt = $pdo->prepare('
		INSERT INTO users
		(username, password)
		values (:username, :password)');

	$stmt->execute( array(':username' => $username, ':password' => md5($password)) );

	if ($pdo->lastInsertId())
		return true;
	else
		return false;
}

function username_exists($username)
{
	global $pdo;
	
	$stmt = $pdo->prepare('
		SELECT id
		FROM users
		WHERE username = :username
		LIMIT 1');

	$stmt->execute( array('username' => $username) );
	return $stmt->fetchColumn();
}

function attempt($username, $password)
{
	global $pdo;
	
	$stmt = $pdo->prepare('
		SELECT id, username
		FROM users
		WHERE username = :username AND password = :password
		LIMIT 1');

	$stmt->execute(array(':username' => $username, 'password' => md5($password)));

	if ($data = $stmt->fetch( PDO::FETCH_OBJ )) {
		# set session
		$_SESSION['username'] = $data->username;
		return true;
	} else {
		return false;
	}
}

function is_user()
{
	if (isset($_SESSION['username']))
		return true;
}

function redirect($url)
{
	header('Location: ' .$url);
	exit;
}

function valid_username($str){
	return preg_match('/^[a-z0-9_-]{3,16}$/', $str);
}

function valid_password($str){
	return preg_match('/^[a-z0-9_-]{6,18}$/', $str);
}



function servicesab($iidd){
	
$data = mysql_fetch_array(mysql_query("SELECT name, price, btext FROM tests WHERE id='".$iidd."'"));
 echo "

 <div class=\"col-sm-12 col-md-3\">
 <div class=\"service-card\">
 <div class=\"row\">
 <div class=\"col-sm-12\">
 <h5>$data[0]</h5>
 </div>
 </div>

 <div class=\"row\">
 <div class=\"service-card__description col-sm-12\">$data[2] <br/><br/></div>
 </div> </div> </div> ";

	
	
}




?>