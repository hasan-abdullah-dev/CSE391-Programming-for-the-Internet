<!DOCTYPE html>
<?php
    session_start();
    require_once('php/connect.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Car Repair Shop</title>
    <link rel="shortcut icon" href="img/shortcut icon.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="js/main.js"></script>
</head>
<body>

        <div class="container log_in">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <h1>Car Repair Shop</h1>
            <input id="0100" onkeyup="fnc_mail('0100', '0101')" type="text" name = "email" placeholder="Email Address" class="field" required="required">
            <p id = "0101" style="color: red"></p>
            <input type="password" name = "pass" placeholder="Password" class="field" required="required">
            <p></p>          
            <input type="submit" name = "submit" value="login" class="btn">
        </form>
        <div class="pass-link">
            <a href="php/reg.php" style="color: black">Don't have an account? <span style="color: Blue">Create New Account</span></a>
        </div>	
    </div>
    </div>
    <?php
        $email = $pass = "";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $email = $_POST["email"];
            $pass = $_POST["pass"];
            $str = $pass;
            for($i = 0; $i < strlen($pass); $i = $i + 1){
                $str = $str . $i;
            }
            $str = $str . $pass;
            $str = sha1($str);
            $sql = "SELECT name, email, pass, type FROM user WHERE email = '$email'";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    if($row['pass'] == $str){
                        $_SESSION['name'] = $row['name'];
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['login'] = true;
                        if($row['type'] == 1){
                            header("Location: php/admin.php");
                        }
                        else{
                            header("Location: php/user.php");
                        }
                    }
                    else{
                        echo "<script type='text/javascript'>alert('Wrong Password!');</script>";
                    }
                }
            }
            else{
                echo "<script type='text/javascript'>alert('No User Found');</script>";
            }
        }
        $conn->close();
    ?>
</body>
</html>
