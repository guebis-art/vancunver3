<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="sortcut icon" href="blue.jpg" />;
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatBot Vancouver</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="chatbox">
            <div class="header">
                <h4>Vancouver Infraestrura </h4>
                <br>
                <p>No que podemos ajudar você hoje? </p>
            </div>
            <div class="body" id="chatbody">
                <div class="scroller"></div>
            </div>
            <form class="chat" method="POST" autocomplete="off">
                <div>
                    <input type="text" name="chat" id="chat" placeholder="Mensagem...">
                </div>
                <div>
                    <input type="submit" value="Enviar" id="btn">
                </div>
            </form>
        </div>
    </div>
    <script src="app.js"></script>
</body>
</html>