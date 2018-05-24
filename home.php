<?php
session_start();
include 'dbh.php';
?>

<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>
    <div id="main">
      <h1 style="background-color:#6495ed; color:white;"><?php
        echo $_SESSION['uname']?>--Online</h1>
        <div class="output">
            <?php $sql = "SELECT * FROM posts";
            $result= $conn->query($sql);
            $rows=$result->num_rows;

            if($result->num_rows > 0){
                //output data of each row
                //for ($i = 0; $i < $rows; $i++) {
                while($row = $result->fetch_array(MYSQLI_ASSOC)){

                   
                //$result->data_seek($i);
                    
echo<<<_END
<div>
    $row[name]:
    $row[msg]
</div>
_END;
                }
            }else{
                echo "0 results";
            }
            $conn->close();
            ?>
        </div>

        <form method="post" action="send.php">
        <textarea name="msg" placeholder="Type to send msessage...."
        class="form-control"></textarea><br>

        <input type="submit" value="send">
        
        </form><br>
        <form action="logout.php">
        <input style="width: 100%; background-color:#6495ed; color:white; 
        font-size:20px;" type="submit" value="Logout">
        </form>

    </div>
</body>
</html>