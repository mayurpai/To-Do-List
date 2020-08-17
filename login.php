<?php
ob_start();
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Log-In Page</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <style>
    display-flex {
  display: flex;
  display: -webkit-flex; }
input:-webkit-autofill {
  box-shadow: 0 0 0 30px transparent inset;
  -moz-box-shadow: 0 0 0 30px transparent inset;
  -webkit-box-shadow: 0 0 0 30px transparent inset;
  -o-box-shadow: 0 0 0 30px transparent inset;
  -ms-box-shadow: 0 0 0 30px transparent inset;
  background-color: transparent !important; }
p {
  margin-bottom: 32px;
  margin-top: 0px;
  font-weight: 400; }
    h2 {
  line-height: 1.2;
  margin: 0;
  padding: 0;
  padding-bottom: 20px;
  font-weight: bold;
  padding-left: 0px;
  color: rgb(113, 255, 47, 1);
  font-family: 'Poppins';
  font-size: 36px;
  margin-bottom: 10px; }
.clear {
  clear: both; }
body {
  font-size: 14px;
  line-height: 1.8;
  color: #fff;
  font-weight: 600;
  font-family: 'Century Gothic';
  margin: 0px;
  background-repeat: no-repeat;
  background-size: cover;
  background-position:  center;
  overflow: hidden; }
.main {
  position: relative; }
  .container {
  margin-top: 0px;
  margin-bottom: 0px;
  width: auto;
  padding-bottom: 100px;
  padding-top: 50px;
  height: auto; 
  padding-left: 455px;  
  background-image: url('images/1.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  overflow: hidden;
  
 }

.signup-content {
    width:  700px;
    height: 700px;
    padding-top: 200px;
    background-position: center;
   }

  .clear {
  clear: both; }

.signup-form {
  padding: 54px 80px 36px 55px;
  enable-background: inherit;
  background-image: url('images/bg.jpg');
  background-size: cover;
  border-radius: 15px 15px 15px 15px;
  background-position:center;
  opacity: 1;

}
.form-group {
  margin-bottom: 23px; }
input {
  border: none;
  box-sizing: border-box;
  border-bottom: 1px solid #000;
  background: transparent;
  width: 100%;
  display: block;
  color: rgb(113, 255, 47, 1);
  font-weight: bold;
  font-family: 'Poppins';
  font-size: 14px;
  padding: 3px 3px; }
  input::-webkit-input-placeholder {
    font-weight: 400;
    color: #fff; }
  input::-moz-placeholder {
    font-weight: 400;
    color: #fff; }
  input:-ms-input-placeholder {
    font-weight: 400;
    color: #fff; }
  input:-moz-placeholder {
    font-weight: 400;
    color: #fff; }
  input:focus {
    font-weight: bold; }
    .form-submit {
  width: auto;
  display: inline-block;
  border: none;
  background: #fff;
  color: #b18757;
  padding: 10px;
  height: 50px;
  margin-right: 25px; }
  .form-submit:hover {
    background-color: #e6e6e6; }
.submit {
  width: 130px;
  border-radius: 25px;
  -moz-border-radius: 25px;
  -webkit-border-radius: 25px;
  -o-border-radius: 25px;
  -ms-border-radius: 25px;
  text-transform: uppercase;
  font-size: 13px;
  cursor: pointer; }
.submit-link {
    font-weight: bold;
  border: 2px solid #fff;
  text-decoration: none;
  display: inline-block;
  vertical-align: middle;
  padding: 12px 0;
  text-align: center;
  color: rgb(113, 255, 47, 1); }
  .submit-link:hover {
    background:rgb(113, 255, 47, 1);
    color: #000; }
@media screen and (max-width: 992px) {
  .container {
    width: calc( 100% - 30px);
    max-width: 100%;
    margin: 0 auto; }
  .signup-content {
    width: 100%; } }
@media screen and (max-width: 480px) {
  .submit {
    width: 100%; }
  .form-submit {
    margin-bottom: 20px;
    margin-right: 0px; }
  .signup-form {
    padding: 54px 30px 36px 30px; } }
  a{
  text-decoration:none;
  color: #fff;
  }
  a:hover{
  text-decoration:none;
  color: #fff;
  }
    </style>
<div class="main">
        <div class="container">
            <div class="signup-content">
                <form method="POST" id="signup-form" class="signup-form">
                    <h2>Log-In Form </h2>
                    <div class="form-group">
                        <input type="text" class="form-input" name="username" id="username" placeholder="Username / Email" required/>
                    </div>
					<div class="form-group">
                        <input type="password" class="form-input" name="password" id="password" placeholder="Password" required/>
                    </div>
					
                    <div class="form-group">
                      <input type="submit" name="submit" id="submit" class="form-submit submit" value="LOG IN"/>
                      <a href="reg.php" class="submit-link submit">SIGN UP</a>
                  </div>
                    
                    <br>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
			if(isset($_POST['submit']))
			{
				@$username=$_POST['username'];
				@$password=$_POST['password'];
				$query = "select * from users where username='$username' and password='$password' ";
				//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
				{
					if(mysqli_num_rows($query_run)>0)
					{
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					
					$_SESSION['username'] = $username;
					$_SESSION['password'] = $password;
					header( "Location: index.php");
					}
					else
					{
						echo '<script type="text/javascript">alert("No such User exists/ Invalid Password")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Database Error")</script>';
				}
			}
			else
			{
			}
		?>


</body>
</html>
