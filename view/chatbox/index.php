<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot</title>
    <link rel="stylesheet" href="style.css" importance>
    <link rel="shortcut icon" href="https://img.icons8.com/plasticine/100/bot.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <div class="wrapper">
        <div class="title">NanoFood ChatBot</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <img src="./chatbot.png" alt="bot-profile" height="40px" style="border-radius: 50%;">
                </div>
                <div class="msg-header">
                    <p>Hi!</p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Type something here.." required>
                <button id="send-btn">Send</button>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            function sendMessage() {
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');

                // start ajax code
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        $replay = '<div class="bot-inbox inbox"><img src="./chatbot.png" alt="chatbot" height="40px" style="border-radius: 50%;"><div class="msg-header"><p>' + result + '</p></div></div>';
                        $(".form").append($replay);
 
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            }

            $("#send-btn").on("click", function() {
                sendMessage();
            });

            $("#data").on("keypress", function(e) {
                if (e.which === 13) { 
                    sendMessage();
                }
            });
        });
    </script>

</body>

</html>