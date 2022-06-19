<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urievent | Sign In</title>
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
                    <h2>Sign in to UriEvent</h2>
                    <div class="auth-connections">
                        <a href="https://accounts.google.com/login" class="link-connect-button">
                            <div class="connect-google">
                                <img src="/icon/google.png" alt="logo google" class="icon-google-logo">
                                <span class="text-connect-google">Sign in with Google</span>
                            </div>
                        </a>
                    </div>
                    <hr class="divider">
                    </hr>
                    <div class="auth-form">
                        <?php if(session()->getFlashdata('msg')):?>
                            <div class="alert alert-warning">
                                <?= session()->getFlashdata('msg') ?>
                            </div>
                        <?php endif;?>
                        <form action="/sign/signIn" method="POST">
                            <div class="form-fields">
                                <fieldset>
                                    <label for="username-email" class="text-label">Username or Email Address</label>
                                    <input type="text" name="user_email" id="username-email" class="text-input" tabindex="1" autocapitalize="off" required>
                                </fieldset>
                                <fieldset>
                                    <label for="password" class="text-label">
                                        Password
                                        <a href="/sign/resetPass" class="forgot-pass">Forgot password?</a>
                                    </label>
                                    <input type="password" name="password" id="password" class="text-input" tabindex="2" required>
                                </fieldset>
                            </div>
                            <input id="button-form-sub" class="click-button" type="submit" value="Sign In" tabindex="3">
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