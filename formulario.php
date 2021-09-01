<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <h1 class="header__h1">FORMULARIO CAPTURA DE NUMERO</h1>
    </header>
    <main class="main">
       <section class="section-unica">
        <form action="receptor.php" method="post" class="section-unica section-unica__form">
            <label for="num" class="section-unica__form__label">CANTIDAD DE ELEMENTOS</label>
            <input type="text" name="num" id="num" class="section-unica__form__input">
            <input type="submit" value="Generar Arreglo" class="section-unica__form__submit">            
        </form>
       </section>

    </main>
</body>
</html>