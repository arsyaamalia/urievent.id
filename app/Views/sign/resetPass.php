<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="main-container">
        <section class="auth-sidebar">
            <div class="auth-sidebar-content">
                <div class="logo">
                    <a href="index.php" class="urievent">UriEvent</a>
                </div>
                <h1>Great minds discuss ideas;<br>average minds discuss events;<br>small minds discuss people.</h1>
            </div>
        </section>
        <section class="content">
            <main>
                <div class="auth-content">
                    <div class="back"><a href="/sign" class="auth-link">＜ Back</a></div>
                    <h2>Forgot Password?</h2>
                    <div class="pass-instructions">
                        <p>Enter the email address you used when you joined and we’ll send you instructions to reset your password.</p>
                        <br>
                        <p>For security reasons, we do NOT store your password. So rest assured that we will never send your password via email.</p>
                    </div>
                    <div class="auth-form">
                        <form action="/sign">
                            <div class="form-fields">
                                <fieldset>
                                    <label for="reset" class="text-label">Email Address</label>
                                    <input type="email" name="reset" id="reset" class="text-input" tabindex="1" autocapitalize="off" required>
                                </fieldset>
                            </div>
                            <input id="button-form-reset" class="click-button2" type="submit" value="Send Reset Instructions" tabindex="2">
                        </form>
                    </div>
                    <nav class="auth-nav">
                        <p>Not a member? <a href="/sign/signUp" class="auth-link">Sign up now</a></p>
                    </nav>
                </div>
            </main>
        </section>
    </div>
</body>

</html>