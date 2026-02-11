<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login — DayOne</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="login">

    <div class="login-card">
        <h2>☀️ Bem-vindo ao DayOne</h2>
        <p>Como podemos te chamar?</p>

        <input id="nome" placeholder="Seu nome">
        <button onclick="login()">Entrar</button>
    </div>

<script>
function login() {
    const nome = document.getElementById('nome').value;

    if (!nome) {
        alert("Digite seu nome 🙂");
        return;
    }

    localStorage.setItem('dayone_user', nome);
    window.location.href = 'index.php';
}
</script>

</body>
</html>
