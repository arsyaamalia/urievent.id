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
                    <h2>Sign up to Urievent</h2>
                    <div class="auth-connections">
                        <a href="https://accounts.google.com/login" class="link-connect-button">
                            <div class="connect-google">
                                <img src="/icon/google.png" alt="logo google" class="icon-google-logo">
                                <span class="text-connect-google">Sign up with Google</span>
                            </div>
                        </a>
                    </div>
                    <hr class="divider">
                    </hr>
                    <div class="auth-form">
                        <form action="/sign">
                            <div class="form-fields">
                                <fieldset class="group-fieldset">
                                    <div class="grup1">
                                        <label for="nama" class="text-label" id="nama">Name</label>
                                        <input type="text" name="nama" id="nama" tabindex="1" class="text-input" required>
                                    </div>
                                    <div class="grup2">
                                        <label for="username" class="text-label" id="username">Username</label>
                                        <input type="text" name="username" id="username" tabindex="2" class="text-input" required autocapitalize="off">
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <label for="email" class="text-label">Email Address</label>
                                    <input type="email" name="email" id="email" class="text-input" required tabindex="3" autocapitalize="off">
                                </fieldset>
                                <fieldset>
                                    <label for="password" class="text-label">Password</label>
                                    <input type="password" name="password" id="password" class="text-input" required tabindex="4" placeholder="8+ characters">
                                </fieldset>
                                <fieldset class="checkbox">
                                    <input type="checkbox" name="terms" id="terms" class="terms-input" required tabindex="5">
                                    <label for="terms" class="text-terms">
                                        Creating an account means you’re okay with our <a href="index.php" class="privacy">Terms of Service</a>, <a href="index.php" class="privacy">Privacy Policy</a>, and our default <a href="index.php" class="privacy">Notification Settings</a>.
                                    </label>
                                </fieldset>
                            </div>
                            <input id="button-form-create" class="click-button" type="submit" value="Create Account" tabindex="6">
                        </form>
                    </div>
                    <nav class="auth-nav">
                        <p>Already a member? <a href="/sign" class="auth-link">Sign in</a></p>
                    </nav>
                </div>
            </main>
        </section>
    </div>
</body>

</html>