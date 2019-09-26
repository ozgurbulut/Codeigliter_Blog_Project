<html>
<head>

</head>
<body>
<center>
    <br>
    <br>

    <form action="<?php echo base_url();?>LoginUser/login" method="post">

        <table align="center">
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="kadi"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="sifre"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Login"></td>
            </tr>
        </table>
    </form>
    <form action="<?php base_url();?>LoginUser/sing" method="post">
        <tr>
            <td>
                <input type="submit" value="Sign in" >
            </td>
        </tr>

    </form></center>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


</center>
</body>
</html>