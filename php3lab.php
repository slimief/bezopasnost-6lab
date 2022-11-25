<?php
    session_start();
    
    include('connect.php');

    if (isset($_POST['login1'])) {
    $username = $_POST['username'];
    $password = md5(trim($_POST['password']));
    $query = "SELECT login, password FROM `users` WHERE login= '$username' AND password = '$password'";
    $sql = mysqli_query($mysqli, $query);
    if (mysqli_num_rows($sql) == 1)
    {
        
    $_SESSION['da'] = $username;
    $new_url = 'nextphp3lab.php';
    header('Location: '.$new_url);
    
    }
    else{
    echo("Неверные данные");
    }
    }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body {
    text-align: center;
    width: 800px;
}
label {
    display: inline-block;
    text-align: center;
    font-size: 25px;
    width: 70px;
    height: 10px;
    font-family: 'Times New Roman';
}
input {
    border: 2px solid black;
    font-size: 25px;
    font-family: 'Times New Roman';
    width:300px;
    height: 50px;
    margin-left:10px;
}
form {
    margin: 25px auto;
    padding: 20px;
    border: 3px solid black;
    width: 500px;
    background: white;
}
div.form-element {
    margin-top: 20px;
    margin-bottom: 20px;
}
button {
    padding: 10px;
    font-size: 25px;
    font-family: 'Times New Roman';
    font-weight: 100;
    background: white;
    color: black;
}

.btn {
    display: inline-block; 
    background: #8C959D; 
    color: #fff; 
    padding: 1rem 1.5rem; 
    text-decoration: none; 
    border-radius: 3px; 
   }
</style>

<body>
    </form>
    <form method="post" action="">
    <label>Логин</label>
    <input type="text" name="username" pattern="[a-zA-Z0-9]+" />
    <label>Пароль</label>
    <input type="password" name="password" />
    <button type="submit" name="login1" value="login1">Авторизация</button>
    <a href="rega.php" class="btn">Переход по ссылке</a>
    </form>

    
</body>

</html>