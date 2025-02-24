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
                   @if (session()->has("success"))
                       <div class="alert-info">
                        {{ session("success") }}
                       </div>
                   @else
                   <div class="alert-danger">
                    {{ session("error") }}
                   </div>
                   @endif
                    <form action="{{ route("loginStore") }}" method="POST" class="form1">
                        @csrf
                        <h1>Connexion</h1>
                        
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
                            <p>Vous n'avez pas de compte? <span><a href="{{ route("register") }}" class="login">Inscription</a></span></p>
                        </div>
                        <div class="btns-auth">
                            <button type="submit">Connexion</button>
                        </div>
                        
                    </form>
                    
                </div>
            </div>
        </div>
    </section>
    <script src="script.js"></script>
</body>
</html>