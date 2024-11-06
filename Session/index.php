<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de Preguntas y Respuestas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Juego de Preguntas y Respuestas</h1>
        <?php
        session_start();
        include('questions.php');

        // Inicializar el juego
        if (!isset($_SESSION['current_question'])) {
            $_SESSION['current_question'] = 0;
            $_SESSION['score'] = 0;
        }

        // Procesar la respuesta del usuario
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $selected_answer = $_POST['answer'];
            $current_question = $_SESSION['current_question'];
            
            if ($selected_answer == $questions[$current_question]['correct']) {
                $_SESSION['score']++;
                echo "<p class='correct'>¡Correcto!</p>";
            } else {
                echo "<p class='incorrect'>Incorrecto. La respuesta correcta es: " . $questions[$current_question]['answers'][$questions[$current_question]['correct']] . "</p>";
            }

            $_SESSION['current_question']++;
        }

        // Mostrar la siguiente pregunta
        if ($_SESSION['current_question'] < count($questions)) {
            $current_question = $_SESSION['current_question'];
            $question = $questions[$current_question];

            echo "<p>" . $question['question'] . "</p>";
            echo "<form method='post'>";
            foreach ($question['answers'] as $key => $answer) {
                echo "<label><input type='radio' name='answer' value='$key' required> $answer</label><br>";
            }
            echo "<button type='submit'>Enviar</button>";
            echo "</form>";
        } else {
            echo "<p>¡Juego terminado! Tu puntuación es: " . $_SESSION['score'] . " de " . count($questions) . ".</p>";
            session_destroy();
            echo "<a href='index.php'>Jugar de nuevo</a>";
        }
        ?>
    </div>
</body>
</html>
