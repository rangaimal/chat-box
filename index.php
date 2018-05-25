<html>
    <head>
        <title>Web Chat</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div id="main" class="main">
            <img src="4.png" class="logo">
            <div id="info" class="main1">

                <h2 >Login Here</h2>

                <form action="login.php" method="post">
                <table>
                    <tr>
                    <td><label style="color:white " ><p><b>User Name:</b></p> </label></td>
                     <td><input type="text" name="uname" placeholder="User Name"> </td>
                    </tr>

                    <tr>
                    <td><label style="color:white"><p><b>Password:</b><p> </label> </td>
                    <td><input type="text" name="pass" placeholder="Password"> </td>
                    </tr>
                  
                </table>

                    <br><button 
                    type="submit" name="submit"><b>Login</b></button>

                    </form> 
                    <form action="newuser.php" method ="post">

                    <button 
                    type="submit" name="submit"><b>signup</b></button>
                   </form>
            
                <!-- end login -->

                    <!-- <form action="signup.php" method="post">
                    <h2>Don't have an account sign up here</h2>
                    
                    <table>
                    <tr>
                    <td><label>User Name:</label></td>
                    <td><input type="text" name="uname" placeholder="UserName"></td>
                    </tr>

                    <tr>
                    <td><label>Email:</label></td>
                    <td><input type="text" name="Email" placeholder="Email"></td>
                    </tr>

                    <tr>
                    <td><label>Password:</label></td>
                    <td><input type="text" name="Password" placeholder="Password"></td>
                    </tr>
                    </table>
                    
                    <button style="background-color: #6495ed; color: white;" 
                    type="submit"><b>signup</b></button>
                    </form> -->


                    
            </div>  
        </div>
    </body>
</html>