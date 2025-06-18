<?php
  if($_SERVER["REQUEST_METHOD"] === "POST") {
    if(isset($_POST["userName"])) {
        $name = $_POST["userName"];
        echo $name;
    }
  };
  echo"<br>";
  if($_SERVER["REQUEST_METHOD"] === "POST") {
    if(isset($_POST["userCategoria"])) {
        $categoria = $_POST["userCategoria"];
        echo $categoria;
    }
  };
  echo "<br>";
  if($_SERVER["REQUEST_METHOD"] === "POST") {
    if(isset($_POST["userPreco"])) {
        $preco = $_POST["userPreco"];
        echo $preco;
    }
  };
  echo "<br>";
  if($_SERVER["REQUEST_METHOD"] === "POST") {
    if(isset($_POST["userEstoque"])) {
        $estoque = $_POST["userEstoque"];
        echo $estoque;
    }
  };
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="POST">
        <label for="">
            <p>Nome do Produto</p>
        </label>
        <input type="nome" id="userName" name="userName" placeholder="Banana">

        <label for="">
            <p>Categoria do Produto</p>
        </label>
        <input type="text" id="userCategoria" name="userCategoria" placeholder="Frutas">

        <label for="">
            <p>Preço do Produto</p>
        </label>
        <input type="text" id="userPreco" name="userPreco" placeholder="$50,00">

        <label for="">
            <p>Quantidade no Estoque do Produto</p>
        </label>
        <input type="text" id="userEstoque" name="userEstoque" placeholder="200">
        <br>
        <br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
