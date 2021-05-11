<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form action="naviga.php" method="POST">
            <label for="nome">
                Inserire nome
            </label>
            <input type="text" name="nome"autocomplete="off"><br>
<br>
            <label for="Password">
                Inserire la Password
            </label>
            <input type="password" name="Password" autocomplete="off"><br><br>
        <input type="submit" name="Login" value="Login">
        
    </form>
    <br>
    <form action="Homepage.php">
    	<input type="submit" value="Annulla" name="Annulla">
    </form>
</body>
</html>