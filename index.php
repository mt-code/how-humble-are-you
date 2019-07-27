<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <title>How humble are you?</title>
        <meta name="description" content="Take this quick test and find out!">
        <meta name="keywords" content="how humble am i,how humble are you,humbleness,humble test">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta property="og:url"                content="https://mtcode.co.uk/fun/how-humble-are-you" />
        <meta property="og:type"               content="website" />
        <meta property="og:title"              content="How humble are you?" />
        <meta property="og:description"        content="Take this quick test and find out." />
        <meta property="og:image"              content="https://mtcode.co.uk/fun/how-humble-are-you/assets/img/sharing-preview.jpg" />

        <link rel="stylesheet" href="assets/css/main.css">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-134622641-3"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-134622641-3');
        </script>
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