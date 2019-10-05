
  <?php
include 'koneksi.php';


	$username = $_POST['user'];
    $password = $_POST['pass'];

	$login    = $config->query("SELECT * FROM admin where user='$username' and pass='$password'");
	if($login->num_rows > 0){
		$user = mysqli_fetch_array($login);
	    session_start();
	    $_SESSION['id'] = $user['id'];
	    header("location:index.php");
	}else{
        
	    session_start();
        session_unset();
		session_destroy();
		?>
		<script type="text/javascript">
            alert("Usernama atau Password Salah!");window.location.href="login.php";
        </script>
        <?php
	  
	}



 ?>
