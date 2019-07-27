<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <title>How humble are you?</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="assets/css/main.css">
    </head>

    <body>
        <div class="humble-reveal">
            <div class="humble-reveal__content">
                <p class="humble">Well, that's not very humble...</p>
            </div>

            <a href="https://mtcode.co.uk/">
                <img class="logo" src="assets/img/mtcode-logo.svg" alt="MTCode Logo">
            </a>
        </div>

        <div class="humble-question">
            <div class="humble-question__content">
                <h1>How humble are you?</h1>

                <div class="humble-question__buttons">
                    <button onclick="reveal(false);">I'm humble</button>
                    <button onclick="reveal(true);">I'm not humble</button>
                </div>
            </div>
        </div>

        <footer>
            <script type="text/javascript" src="node_modules/bounce.js/bounce.min.js"></script>
            <script type="text/javascript" src="assets/js/main.js"></script>
        </footer>
    </body>
</html>