<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
</head>

<body class="bg-dark">
    <div class="container">
        <h1 class="text-white bg-dark text-center my-5">CRUD PHP</h1>
        <button class="btn btn-primary my-5">
            <a href="user.php" class="text-light" style="text-decoration: none;">Adicionar usuário</a>
        </button>

        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Senha</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>


                <?php

                $sql = "Select * from `crud`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $password = $row['password'];
                        echo '<tr>
            <th scope="row">' . $id . '</th>
            <td>' . $name . '</td>
            <td>' . $email . '</td>
            <td>' . $mobile . '</td>
            <td>' . $password . '</td>

            <td>
                <button class="btn btn-primary"><a class="text-light" href="update.php?updateid='.$id.'">Update</a></button>
                <button class="btn btn-danger"><a class="text-light" href="delete.php?deleteid='.$id.'">Delete</a></button>
            </td>
          </tr>';
                    }
                }

                ?>


            </tbody>
        </table>
    </div>
</body>

</html>