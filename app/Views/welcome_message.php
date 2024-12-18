<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulador Credito</title>
    <link rel="stylesheet" href="public\styles.css">
    <link href="https://db.onlinewebfonts.com/c/0450396b414f0478dac5d011b8b45237?family=Prelo-SemiBold" rel="stylesheet"> <!--IMportar tipografia de la pagina-->
    <link href="https://db.onlinewebfonts.com/c/952bab25f6798d6bb1937d67e9bee4dd?family=Sans" rel="stylesheet">
    <link href="https://db.onlinewebfonts.com/c/a528135e72e31a1446c037e6920254f7?family=Prelo-Book" rel="stylesheet">
</head>

<body class="body">
    <div class="container">
        <div class="box">
            <span _ngcontent-nvy-c24="" class="typography-body"> Ingresa el monto a invertir </span>
            <input class="inputCant" name="inputAmount" placeholder="$0,00" type="text" pattern="[0-9]*" inputmode="numeric">
            <span class="tipoSub">Podrás invertir entre $ 500 y $ 100,000,000</span>
            <span class="typoTit2"> Selecciona el tipo de plazo </span>

            <div class="plazos">
                <button id="boton">Meses</button><button id="boton">Dias</button>
            </div>
            <span class="typoTit2"> Elige el plazo en meses de tu inversión </span>
            <div class="meses">
                <button id="boton">12</button>
                <button id="boton">9</button>
                <button id="boton">6</button>
                <button id="boton">Otro Plazo</button>
            </div>

            <button class="Invertir">Invertir ahora</button>
        </div>

</body>

</html>