<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inteligência Artificial</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="titulo">
            <h1>Top 10 Jogos</h1>
            <h2>Descubra os melhores jogos por gênero</h2>
        </div>
        <div>
            <span class="material-symbols-outlined icone-gamepad">gamepad</span>
        </div>
    </header>
    <nav>
        <div class="container-card">
            <a href="?card=RPG" class="card">
                <span class="material-symbols-outlined icone">swords</span>
                <span class="p-card">RPG</span>
            </a>

            <a href="?card=Aventura" class="card">
                <span class="material-symbols-outlined icone">explore</span>
                <span class="p-card">Aventura</span>
            </a>

            <a href="?card=Acao" class="card">
                <span class="material-symbols-outlined icone">bolt</span>
                <span class="p-card">Ação</span>
            </a>

            <a href="?card=Estrategia" class="card">
                <span class="material-symbols-outlined icone">strategy</span>
                <span class="p-card">Estratégia</span>
            </a>

            <a href="?card=Puzzle" class="card">
                <span class="material-symbols-outlined icone">extension</span>
                <span class="p-card">Puzzle</span>
            </a>

            <a href="?card=Multiplayer" class="card">
                <span class="material-symbols-outlined icone">groups</span>
                <span class="p-card">Multiplayer</span>
            </a>

            <a href="?card=Esportes" class="card">
                <span class="material-symbols-outlined icone">sports_soccer</span>
                <span class="p-card">Esportes</span>
            </a>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer><p>Footer</p></footer>
</body>
</html>