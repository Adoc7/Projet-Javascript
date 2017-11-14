<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <link rel="stylesheet" href="style.css" />-->
        <script language="JavaScript" type="text/JavaScript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--    <script src="jquery.js"></script>-->
    <title>JSON</title>
</head>
<body>
<section>

    <h1> Voitures </h1>
    <form name="form1" method="post" action="">
        <select name="vehicule" id="id_liste_vehicule" onchange="generation_liste2('id_liste_vehicule','id_liste2');">
            <option id="opt0" value="0">-- choisissez --</option>
            <option id="opt1" value="AR">Alfa Romeo</option>
            <option id="opt2" value="AU">Audi</option>
            <option id="opt3" value="BM">BMW</option>
            <option value="CI">Citroën</option>
            <option value="DI">Dacia</option>
            <option value="DS">DS</option>
            <option value="FI">Fiat</option>
            <option value="FO">Ford</option>
            <option value="HY">Hyundaï</option>
            <option value="IV">Iveco</option>
            <option value="JA">Jaguar</option>
            <option value="JE">Jeep</option>
            <option value="KI">Kia</option>
            <option value="M2">Mini</option>
            <option value="MA">Mazda</option>
            <option value="ME">Mercedes</option>
            <option value="MF">Fuso Canter</option>
            <option value="NI">Nissan</option>
            <option value="OP">Opel</option>
            <option value="PE">Peugeot</option>
            <option value="PR">Porsche</option>
            <option value="RE">Renault</option>
            <option value="SE">SEAT</option>
            <option value="SK">Skoda</option>
            <option value="SZ">Suzuki</option>
            <option value="TE">Tesia</option>
            <option value="TO">Toyota</option>
            <option value="VW">Volkswagen</option>
            <option value="VO">Volvo</option>
        </select>
        <div id="id_liste2" ><!-- la va etre ecrite la deuxieme liste --></div>
    </form>
    <section class="json">
        <div>
            <input id="veh" type="button" value="Les voitures">
        </div>
    </section>
<!--    <ul id="zone1"><span>Les voitures</span></ul>-->
    <p>
    <span id="zone3"></span>
    </p>

    <p id="change"></p>
    <p id="change2"></p>
    <ul id="toto"><span>Les voitures</span></ul>
    <script  type="text/javascript" src="mon_script.js"></script>
</body>
</html>
