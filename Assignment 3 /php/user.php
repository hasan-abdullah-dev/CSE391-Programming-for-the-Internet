<!DOCTYPE html>
<?php
    session_start();
    if(!($_SESSION['login'] == true && $_SESSION['name'] != '')){
        header("Location: ../index.php");
    }
    require_once('connect.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="../js/main.js"></script>
    <link rel="shortcut icon" href="../img/shortcut icon.jpg">
</head>
<body >

    <div class="container" style="background-color: white; width: 100%;">
        <p style="color: black ; font-size: 30px; text-align: center ">  Welcome to Car Repair Shop <?php echo $_SESSION['name']?></p>
        <form method="post">
            <input style="margin-left: 0; height: 50px; width: 80px; background-color: black; color: white;" type="submit" name="lout" value="Log out">
        </form>
    </div>
    <?php
        // on clicking Log-Out
        if(isset($_POST['lout'])){
            session_unset();
            session_destroy();
            session_write_close();
            header("Location: ../index.php");
        }
    ?>
    <!-- Default Value -->
    <?php
        $sm1t1 = $sm1t2 = $sm1t3 = $sm1t4 = "Wait....";
        $sm2t1 = $sm2t2 = $sm2t3 = $sm2t4 = "Loading...";
        $sm3t1 = $sm3t2 = $sm3t3 = $sm3t4 = "Wait...";
        $sm4t1 = $sm4t2 = $sm4t3 = $sm4t4 = "Loading...";
        $sm5t1 = $sm5t2 = $sm5t3 = $sm5t4 = "Click Load Btn";
        if(isset($_POST['load'])){
            $_SESSION['dt'] = $_POST['date'];
            $date = $_POST['date'];
            $sql = "SELECT * FROM sm1 WHERE date = '$date'";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $sm1t1 = $row['u1'];
                    $sm1t2 = $row['u2'];
                    $sm1t3 = $row['u3'];
                    $sm1t4 = $row['u4'];
                }
            }
            else{
                $sql = "INSERT INTO sm1 (date, u1, u2, u3, u4) VALUES ('$date', '0', '0', '0', '0')";
                $result = $conn->query($sql);
                $sql = "SELECT * FROM sm1 WHERE date = '$date'";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        $sm1t1 = $row['u1'];
                        $sm1t2 = $row['u2'];
                        $sm1t3 = $row['u3'];
                        $sm1t4 = $row['u4'];
                    }
                }
            }
            $sql = "SELECT * FROM sm2 WHERE date = '$date'";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $sm2t1 = $row['u1'];
                    $sm2t2 = $row['u2'];
                    $sm2t3 = $row['u3'];
                    $sm2t4 = $row['u4'];
                }
            }
            else{
                $sql = "INSERT INTO sm2 (date, u1, u2, u3, u4) VALUES ('$date', '0', '0', '0', '0')";
                $result = $conn->query($sql);
                $sql = "SELECT * FROM sm2 WHERE date = '$date'";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        $sm2t1 = $row['u1'];
                        $sm2t2 = $row['u2'];
                        $sm2t3 = $row['u3'];
                        $sm2t4 = $row['u4'];
                    }
                }
            }
            $sql = "SELECT * FROM sm3 WHERE date = '$date'";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $sm3t1 = $row['u1'];
                    $sm3t2 = $row['u2'];
                    $sm3t3 = $row['u3'];
                    $sm3t4 = $row['u4'];
                }
            }
            else{
                $sql = "INSERT INTO sm3 (date, u1, u2, u3, u4) VALUES ('$date', '0', '0', '0', '0')";
                $result = $conn->query($sql);
                $sql = "SELECT * FROM sm3 WHERE date = '$date'";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        $sm3t1 = $row['u1'];
                        $sm3t2 = $row['u2'];
                        $sm3t3 = $row['u3'];
                        $sm3t4 = $row['u4'];
                    }
                }
            }
            $sql = "SELECT * FROM sm4 WHERE date = '$date'";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $sm4t1 = $row['u1'];
                    $sm4t2 = $row['u2'];
                    $sm4t3 = $row['u3'];
                    $sm4t4 = $row['u4'];
                }
            }
            else{
                $sql = "INSERT INTO sm4 (date, u1, u2, u3, u4) VALUES ('$date', '0', '0', '0', '0')";
                $result = $conn->query($sql);
                $sql = "SELECT * FROM sm4 WHERE date = '$date'";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        $sm4t1 = $row['u1'];
                        $sm4t2 = $row['u2'];
                        $sm4t3 = $row['u3'];
                        $sm4t4 = $row['u4'];
                    }
                }
            }
            $sql = "SELECT * FROM sm5 WHERE date = '$date'";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $sm5t1 = $row['u1'];
                    $sm5t2 = $row['u2'];
                    $sm5t3 = $row['u3'];
                    $sm5t4 = $row['u4'];
                }
            }
            else{
                $sql = "INSERT INTO sm5 (date, u1, u2, u3, u4) VALUES ('$date', '0', '0', '0', '0')";
                $result = $conn->query($sql);
                $sql = "SELECT * FROM sm5 WHERE date = '$date'";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        $sm5t1 = $row['u1'];
                        $sm5t2 = $row['u2'];
                        $sm5t3 = $row['u3'];
                        $sm5t4 = $row['u4'];
                    }
                }
            }
        }
    ?>
    <div class="container" style="width: 900px">
        <form method="post" action="/car/php/user.php">
            <input style="background-color: #EDEAE9" type="date" name="date" value="">
            <input id="btn1" class="btn" type="submit" name="load" value="load">
        </form>
        <script>window.onload = $('#btn1').click();</script>
        <form method="post">
        <table style="width:100%">
            <tr>
                
                
                <th>Name</th>
                <th>Discription</th>
                <th>8:00 - 10:00 am.</th>
                <th>11:00 - 12.00 pm.</th>
                <th>2:00 - 4:00 pm.</th>
                <th>6:00 - 8:00 pm.</th>
            </tr>
            <tr>
                
                <td>Md. Ali Hasani</td>
                <td> skilled professional with a strong understanding of automotive systems</td>
                <td><input id="idsm1t1" class="btn01" name="sm1t1" style="color: black" type="submit" value="<?php echo $sm1t1;?>"></td>
                <td><input id="idsm1t2" class="btn01" name="sm1t2" style="color: black" type="submit" value="<?php echo $sm1t2;?>"></td>
                <td><input id="idsm1t3" class="btn01" name="sm1t3" style="color: black" type="submit" value="<?php echo $sm1t3;?>"></td>
                <td><input id="idsm1t4" class="btn01" name="sm1t4" style="color: black" type="submit" value="<?php echo $sm1t4;?>"></td>
            </tr>
            <tr>
                
                <td>Mohammad Rana</td>
                <td> skilled professional with a strong understanding of automotive systems</td>
                <td><input id="idsm2t1" class="btn01" name="sm2t1" style="color: black" type="submit" value="<?php echo $sm2t1;?>"></td>
                <td><input id="idsm2t2" class="btn01" name="sm2t2" style="color: black" type="submit" value="<?php echo $sm2t2;?>"></td>
                <td><input id="idsm2t3" class="btn01" name="sm2t3" style="color: black" type="submit" value="<?php echo $sm2t3;?>"></td>
                <td><input id="idsm2t4" class="btn01" name="sm2t4" style="color: black" type="submit" value="<?php echo $sm2t4;?>"></td>
            </tr>
            <tr>
                
                <td>Md. Jahid Hasan</td>
                <td> skilled professional with a strong understanding of automotive systems</td>
                <td><input id="idsm3t1" class="btn01" name="sm3t1" style="color: black" type="submit" value="<?php echo $sm3t1;?>"></td>
                <td><input id="idsm3t2" class="btn01" name="sm3t2" style="color: black" type="submit" value="<?php echo $sm3t2;?>"></td>
                <td><input id="idsm3t3" class="btn01" name="sm3t3" style="color: black" type="submit" value="<?php echo $sm3t3;?>"></td>
                <td><input id="idsm3t4" class="btn01" name="sm3t4" style="color: black" type="submit" value="<?php echo $sm3t4;?>"></td>
            </tr>
            <tr>
               
                <td>Md. Farhan Islam</td>
                <td> skilled professional with a strong understanding of automotive systems</td>
                <td><input id="idsm4t1" class="btn01" name="sm4t1" style="color: black" type="submit" value="<?php echo $sm4t1;?>"></td>
                <td><input id="idsm4t2" class="btn01" name="sm4t2" style="color: black" type="submit" value="<?php echo $sm4t2;?>"></td>
                <td><input id="idsm4t3" class="btn01" name="sm4t3" style="color: black" type="submit" value="<?php echo $sm4t3;?>"></td>
                <td><input id="idsm4t4" class="btn01" name="sm4t4" style="color: black" type="submit" value="<?php echo $sm4t4;?>"></td>
            </tr>
            <tr>
                
                <td>Abdullah Al Mamun</td>
                <td> skilled professional with a strong understanding of automotive systems</td>
                <td><input id="idsm5t1" class="btn01" name="sm5t1" style="color: black" type="submit" value="<?php echo $sm5t1;?>"></td>
                <td><input id="idsm5t2" class="btn01" name="sm5t2" style="color: black" type="submit" value="<?php echo $sm5t2;?>"></td>
                <td><input id="idsm5t3" class="btn01" name="sm5t3" style="color: black" type="submit" value="<?php echo $sm5t3;?>"></td>
                <td><input id="idsm5t4" class="btn01" name="sm5t4" style="color: black" type="submit" value="<?php echo $sm5t4;?>"></td>
            </tr>
            <script>fnc("<?php echo $_SESSION['name'] ?>", "<?php echo $_SESSION['email'] ?>");</script>
        </table>
        </form>
    </div>

    <?php
        if(isset($_POST['sm1t1'])) { 
            $date = $_SESSION['dt'];
            $email = $_SESSION['email'];
            $sql = "UPDATE sm1 SET u1 = '$email' WHERE date = '$date'";
            $result = $conn->query($sql);
        }
        if(isset($_POST['sm1t2'])) { 
            $date = $_SESSION['dt'];
            $email = $_SESSION['email'];
            $sql = "UPDATE sm1 SET u2 = '$email' WHERE date = '$date'";
            $result = $conn->query($sql);
        }
        if(isset($_POST['sm1t3'])) { 
            $date = $_SESSION['dt'];
            $email = $_SESSION['email'];
            $sql = "UPDATE sm1 SET u3 = '$email'  WHERE date = '$date'";
            $result = $conn->query($sql);
        }
        if(isset($_POST['sm1t4'])) { 
            $date = $_SESSION['dt'];
            $email = $_SESSION['email'];
            $sql = "UPDATE sm1 SET u4 = '$email'  WHERE date = '$date'";
            $result = $conn->query($sql);
        }

        if(isset($_POST['sm2t1'])) { 
            $date = $_SESSION['dt'];
            $email = $_SESSION['email'];
            $sql = "UPDATE sm2 SET u1 = '$email'  WHERE date = '$date'";
            $result = $conn->query($sql);
        }
        if(isset($_POST['sm2t2'])) { 
            $date = $_SESSION['dt'];
            $email = $_SESSION['email'];
            $sql = "UPDATE sm2 SET u2 = '$email'  WHERE date = '$date'";
            $result = $conn->query($sql);
        }
        if(isset($_POST['sm2t3'])) { 
            $date = $_SESSION['dt'];
            $email = $_SESSION['email'];
            $sql = "UPDATE sm2 SET u3 = '$email'  WHERE date = '$date'";
            $result = $conn->query($sql);
        }
        if(isset($_POST['sm2t4'])) { 
            $date = $_SESSION['dt'];
            $email = $_SESSION['email'];
            $sql = "UPDATE sm2 SET u4 = '$email'  WHERE date = '$date'";
            $result = $conn->query($sql);
        }

        if(isset($_POST['sm3t1'])) { 
            $date = $_SESSION['dt'];
            $email = $_SESSION['email'];
            $sql = "UPDATE sm3 SET u1 = '$email'  WHERE date = '$date'";
            $result = $conn->query($sql);
        }
        if(isset($_POST['sm3t2'])) { 
            $date = $_SESSION['dt'];
            $email = $_SESSION['email'];
            $sql = "UPDATE sm3 SET u2 = '$email'  WHERE date = '$date'";
            $result = $conn->query($sql);
        }
        if(isset($_POST['sm3t3'])) { 
            $date = $_SESSION['dt'];
            $email = $_SESSION['email'];
            $sql = "UPDATE sm3 SET u3 = '$email'  WHERE date = '$date'";
            $result = $conn->query($sql);
        }
        if(isset($_POST['sm3t4'])) { 
            $date = $_SESSION['dt'];
            $email = $_SESSION['email'];
            $sql = "UPDATE sm3 SET u4 = '$email'  WHERE date = '$date'";
            $result = $conn->query($sql);
        }
        //-----------------------------
        if(isset($_POST['sm4t1'])) { 
            $date = $_SESSION['dt'];
            $email = $_SESSION['email'];
            $sql = "UPDATE sm4 SET u1 = '$email'  WHERE date = '$date'";
            $result = $conn->query($sql);
        }
        if(isset($_POST['sm4t2'])) { 
            $date = $_SESSION['dt'];
            $email = $_SESSION['email'];
            $sql = "UPDATE sm4 SET u2 = '$email'  WHERE date = '$date'";
            $result = $conn->query($sql);
        }
        if(isset($_POST['sm4t3'])) { 
            $date = $_SESSION['dt'];
            $email = $_SESSION['email'];
            $sql = "UPDATE sm4 SET u3 = '$email'  WHERE date = '$date'";
            $result = $conn->query($sql);
        }
        if(isset($_POST['sm4t4'])) { 
            $date = $_SESSION['dt'];
            $email = $_SESSION['email'];
            $sql = "UPDATE sm4 SET u4 = '$email'  WHERE date = '$date'";
            $result = $conn->query($sql);
        }

        if(isset($_POST['sm5t1'])) { 
            $date = $_SESSION['dt'];
            $email = $_SESSION['email'];
            $sql = "UPDATE sm5 SET u1 = '$email'  WHERE date = '$date'";
            $result = $conn->query($sql);
        }
        if(isset($_POST['sm5t2'])) { 
            $date = $_SESSION['dt'];
            $email = $_SESSION['email'];
            $sql = "UPDATE sm5 SET u2 = '$email'  WHERE date = '$date'";
            $result = $conn->query($sql);
        }
        if(isset($_POST['sm5t3'])) { 
            $date = $_SESSION['dt'];
            $email = $_SESSION['email'];
            $sql = "UPDATE sm5 SET u3 = '$email'  WHERE date = '$date'";
            $result = $conn->query($sql);
        }
        if(isset($_POST['sm5t4'])) { 
            $date = $_SESSION['dt'];
            $email = $_SESSION['email'];
            $sql = "UPDATE sm5 SET u4 = '$email'  WHERE date = '$date'";
            $result = $conn->query($sql);
        }

        $conn->close();
    ?>
</body>
</html>