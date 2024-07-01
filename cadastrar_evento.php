<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $data_evento = $_POST['data_evento'];
    $localizacao = $_POST['localizacao'];
    $sql = "INSERT INTO eventos (titulo, descricao, data_evento, localizacao) 
            VALUES ('$titulo', '$descricao', '$data_evento', '$localizacao')";

    if ($conn->query($sql) === TRUE) {
        echo "Evento cadastrado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Cadastrar Evento</title>
</head>

<body>
    <h2>Cadastrar Novo Evento</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Título: <input type="text" name="titulo"><br>
        Descrição: <textarea name="descricao"></textarea><br>
        Data do Evento: <input type="date" name="data_evento"><br>
        Localização: <input type="text" name="localizacao"><br>
        <input type="submit" value="Cadastrar">
    </form>
</body>

</html>