<html>

<head>
        <title>Login From</title>
</head>
<body>
<form action="" METHOD="POST" NAME="input">
            Email <input type="text" name="Email"><br>
            Password <input type="password" name="password"><br>
            <input type="submit" name="Input" value="LOGIN">
            </FORM>
    </body>
</html>

<?php
if (isset($_POST['Input'])) {
    if ($_POST["Email"]=="alby"&& $_POST["password"]=="321"){
    echo "Login Berhasil";
}   else {
echo "LOGIN GAGAL";
}
}