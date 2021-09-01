<?php
    include 'connect.php';
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $password=$_POST['password'];

        $sql="insert into `crud` (name,email,mobile,password) values('$name','$email','$mobile','$password')";
        $result=mysqli_query($con,$sql);
        if($result){
           // echo "Dados inseridos com sucesso";
            header('location:display.php');
        } else {
            die(mysqli_error($con));
        }
    }
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Projeto CRUD</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" placeholder="Digite seu nome" name="name"  autocomplete="off">
            </div>

            <div class="mb-3">
                <label class="form-label">E-mail</label>
                <input type="email" class="form-control" placeholder="Digite seu e-mail" name="email" autocomplete="off">
            </div>

            <div class="mb-3">
                <label class="form-label">Telefone</label>
                <input type="text" class="form-control" placeholder="Digite seu telefone" name="mobile" autocomplete="off">
            </div>

            <div class="mb-3">
                <label class="form-label">Senha</label>
                <input type="text" class="form-control" placeholder="Digite sua senha" name="password" autocomplete="off">
            </div>


            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>


</body>

</html>