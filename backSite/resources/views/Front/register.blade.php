<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <section class="authentification">
        <div class="container">
            <div class="auth-content">
                <div class="auth-img">
                    <img src="auth.jpg" alt="Authentification">
                </div>
                <div class="auth-form">
                   
                    <form action="{{ route("registerStore") }}" method="POST" class="form1">
                        @csrf
                        
                        <h1>Inscription</h1>
                        <div class="input-form">
                            <label for="name">Nom Complet</label>
                            <input type="text" id="name" name="name">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="input-form">
                            <label for="username">Username</label>
                            <input type="text" id="username" name="username">
                            @error('username')
                            {{ $message }}
                        @enderror
                        </div>
                        <div class="input-form">
                            <label for="psw1">Mot de passe</label>
                            <input type="password" id="psw1" name="password">
                            @error('password')
                            {{ $message }}
                        @enderror
                        </div>
                        <div class="text">
                            <p>Vous avez dejà un compte? <span><a href="{{ route("login") }}" class="login">Connexion</a></span></p>
                        </div>
                        <div class="btns-auth">
                            <button type="submit">Inscription</button>
                        </div>
                        
                    </form>
                    
                </div>
            </div>
        </div>
    </section>
    <script src="script.js"></script>
</body>
</html>