<!DOCTYPE html>
<html>

<head>
    <title>Cadastrar e Listar Eventos</title>
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

    <!-- Lista de Eventos -->
    <?php
    // Incluir código PHP para listar eventos
    include 'db_connect.php';

    // Processar formulário de cadastro
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $data_evento = $_POST['data_evento'];
        $localizacao = $_POST['localizacao'];
        
        // Query para inserir novo evento
        $sql = "INSERT INTO eventos (titulo, descricao, data_evento, localizacao) 
                VALUES ('$titulo', '$descricao', '$data_evento', '$localizacao')";
        
        if ($conn->query($sql) === TRUE) {
            echo "<p>Evento cadastrado com sucesso!</p>";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    }

    // Query para selecionar todos os eventos
    $sql = "SELECT * FROM eventos";
    $result = $conn->query($sql);

    // Verifica se há resultados e exibe os eventos
    if ($result->num_rows > 0) {
        echo "<h2>Lista de Eventos</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Título</th><th>Descrição</th><th>Data do Evento</th><th>Localização</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row['titulo']."</td>";
            echo "<td>".$row['descricao']."</td>";
            echo "<td>".$row['data_evento']."</td>";
            echo "<td>".$row['localizacao']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Nenhum evento cadastrado ainda.</p>";
    }

    // Fechando conexão
    $conn->close();
    ?>
</body>

</html>
