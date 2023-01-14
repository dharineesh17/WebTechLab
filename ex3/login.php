<!DOCTYPE html>
<head>
    <title>Login form</title>
    <style>
        .tb{
            
            background-color: burlywood;
        }
        body{
            background-color: rgba(8, 10, 146, 0.959);
            margin-top: 9%;
            margin-bottom: 9%;
        }
        td{
            background-color: cornflowerblue;
        }
        
        
    </style>
</head>
<body>
<form method="POST" action="usercheck.php">
        <table border=1 align="center"  class="tb">
            <tr>
                <td align="center">
                    <br>
                    <br>
                    <br>
                    <center>
                        <img src="https://webstream.sastra.edu/sastrapwi/images/sastra_logo_1.gif" width="70%">
                    </center>
                    <br>
                    <hr>
                    SASTRA DEEMED UNIVERSITY<br>
                    Tirumalaisamudram<br>                    
                    Thanjavur - 613401<br>
                    Tamilnadu, India 
                </td>
                <td align="center">
                    <h3>eVarsity</h3>
                    <h3>ERP for education</h3> 
                    <br>
                    <hr>
                    <h3>Enter the user id and password to login</h3>
                    
                    <table>
                        <tr>
                            <th align="right">
                                Your ID:
                            </th>
                            <td>
                                <input type = "text" name = "userid" placeholder = "user id">
                            </td>
                        </tr>
                        <tr>
                            <th align="right">
                                Your Password: 
                            </th>
                            <td>
                                <input type=password name="pwd" placeholder = 'password'>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2" align = "center">
                                <?php

                                echo "<style>
                                h4{
                                    background-color : red;
                                }
                                </style>";

                                if (isset($_GET['value']))
                                {
                                    echo "<h4>Invalide user id or password </h4>";
                                }
                                
                                ?>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2" align="center">
                                <input type=submit value="Log in">
                            </td>
                        </tr>
                        
                    </table>     
                </td>        
            </tr> 
        </table>
    </form>
</body>
</html>