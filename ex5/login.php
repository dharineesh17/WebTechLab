<!DOCTYPE html>
<html>
<head>
    <title>Login form</title>
</head>
<body>

<center><h1>Welcome to Bioinformatics Quiz</h1></center>
<form method="POST" action="usercheck.php">
    <table align="center">   
        <tr>
            <th align="right">
                Username:
            </th>
            <td>
                <input type = "text" name = "user" placeholder = "regno">
            </td>
        <tr>
            <th align="right">
                Password: 
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
                <input type=submit name=submit value="Log in">
            </td>
        </tr>
    </table>
</form>
</body>
</html>