<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="chat-container">
        <div class="chat-header">
            <h2>Chatbot</h2>
        </div>
        <div class="chat-box" id="chat-box">
            <div class="message bot-message">¡Hola! Soy tu asistente virtual. ¿En qué puedo ayudarte?</div>
        </div>
        <div class="chat-input">
            <input type="text" id="user-input" placeholder="Escribe tu mensaje..." />
            <button onclick="sendMessage()">Enviar</button>
        </div>
    </div>

    <script>
        function sendMessage() {
            const input = document.getElementById('user-input');
            const message = input.value.trim();
            if (message) {
                addMessage('user-message', message);
                input.value = '';
                // Simulación de respuesta del chatbot
                setTimeout(() => {
                    addMessage('bot-message', 'Esto es una respuesta automática.');
                }, 1000);
                // Llamada AJAX a api_consumer.php
                const xhr = new XMLHttpRequest();
                xhr.open('POST', 'api_consumer.php', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        const response = xhr.responseText;
                        addMessage('bot-message', response);
                    }
                };
                xhr.send('message=' + encodeURIComponent(message));
            }
        }

        function addMessage(type, message) {
            const chatBox = document.getElementById('chat-box');
            const messageElement = document.createElement('div');
            console.log(message);
            messageElement.className = `message ${type}`;
            messageElement.textContent = message;
            chatBox.appendChild(messageElement);
            chatBox.scrollTop = chatBox.scrollHeight;
        }
    </script>
</body>
</html>