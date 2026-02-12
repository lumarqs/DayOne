<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>DayOne</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="intro">
    
<script>
if (!localStorage.getItem('dayone_user')) {
    window.location.href = 'login.php';
}
</script>


<div class="intro-card">
    <div class="sun"></div>

    <h1>DayOne</h1>
    <p>Um guia inteligente para seus primeiros passos na empresa</p>

    <div class="intro-buttons">
        <a href="primeiro-dia.php" 
   class="btn primary"
   onclick="localStorage.setItem('dayone_mode','primeiro-dia')">
   🌅 Hoje é meu primeiro dia
</a>

<a href="em-andamento.php" 
   class="btn secondary"
   onclick="localStorage.setItem('dayone_mode','em-andamento')">
   🚀 Já estou na empresa há alguns dias
</a>

    </div>
</div>
<script>
if (!localStorage.getItem('dayone_start')) {
    localStorage.setItem('dayone_start', Date.now());
}


</script>

</body>
</html>
