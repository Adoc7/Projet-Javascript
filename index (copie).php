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
            <option value="0">-- choisissez --</option>
            <option value="AR">Alfa Romeo</option>
            <option value="AU">Audi</option>

            <option value="BM">BMW</option>

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
        <div id="id_liste2"><!-- la va etre ecrite la deuxieme liste --></div>
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

    <script>

        function generation_liste2(id_lire,id_ecrire) {

            <!-- Fonction pour le second menu deroulant liéé au choix dans le premier -->
            var liste2="";

            //on commence par effacer eventuellement la deuxieme liste au cas ou elle serait affichée, si on reclique sur choisissez
            document.getElementById(id_ecrire).innerHTML="";
            //on lit le choix dans liste 1
            var choix_vehicule=document.getElementById(id_lire).value;
            // var tablength = tab.length; // longueur du tableau //la tu rentre la longueur du tableau avant même de l'avoir défini puisque c'est plus bas que tu le fait

            switch (choix_vehicule) {
                //on peut tout mettre dans le switch case
                //il faut les ' de part et d'autre des 0  voiture velo etc..
                case '0' : return; break;<!-- si pas de choix retourne rien -->
                <!-- autre choix possible -->

                case 'AR' : var tab = new Array ('Transporter','Caddy','Golf'); break;
                case 'AU' : var tab = new Array ('A1','A2','A3','A4'); break;

                case 'CI' : var tab = new Array (toto); break;

                case 'DI' : var tab = new Array ('Transporter','Caddy','Golf'); break;
                case 'DS' : var tab = new Array ('Transporter','Caddy','Golf'); break;

                case 'FI' : var tab = new Array ('Transporter','Caddy','Golf'); break;
                case 'FO' : var tab = new Array ('Ka','Mustang','Sierra'); break;

                case 'HO' : var tab = new Array ('Transporter','Caddy','Golf'); break;
                case 'HY' : var tab = new Array ('Transporter','Caddy','Golf'); break;
                case 'IV' : var tab = new Array ('Transporter','Caddy','Golf'); break;

                case 'JA' : var tab = new Array ('Transporter','Caddy','Golf'); break;
                case 'JE' : var tab = new Array ('Transporter','Caddy','Golf'); break;

                case 'KI' : var tab = new Array ('Transporter','Caddy','Golf'); break;

                case 'M2' : var tab = new Array ('Transporter','Caddy','Golf'); break;
                case 'MA' : var tab = new Array ('Transporter','Caddy','Golf'); break;
                case 'ME' : var tab = new Array ('Class A','Class E','Class G'); break;
                case 'MF' : var tab = new Array ('Transporter','Caddy','Golf'); break;

                case 'NI' : var tab = new Array ('Transporter','Caddy','Golf'); break;

                case 'OP' : var tab = new Array ('Transporter','Caddy','Golf'); break;

                case 'PE' : var tab = new Array ('Transporter','Caddy','Golf'); break;
                case 'PR' : var tab = new Array ('Transporter','Caddy','Golf'); break;

                case 'RE' : var tab = new Array ('Transporter','Caddy','Golf'); break;

                case 'SE' : var tab = new Array ('Transporter','Caddy','Golf'); break;
                case 'SK' : var tab = new Array ('Transporter','Caddy','Golf'); break;
                case 'SM' : var tab = new Array ('Transporter','Caddy','Golf'); break;
                case 'SZ' : var tab = new Array ('Transporter','Caddy','Golf'); break;

                case 'TE' : var tab = new Array ('Transporter','Caddy','Golf'); break;
                case 'TO' : var tab = new Array ('Transporter','Caddy','Golf'); break;

                case 'VO' : var tab = new Array ('Transporter','Caddy','Golf'); break;
                case 'VW' : var tab = new Array ('Transporter','Caddy','Golf'); break;
            }

            //generation de la deuxieme liste
            liste2 += '<select name="type">';
            for (j=0;j<tab.length;j++) { //il te manquait le point entre tab et length, de plus tu as mis deux fois la variable i ?? c'est une possible source d'erreurs
                liste2 += '<option value="'+tab[j]+'">'+tab[j]+'</option>';
            }
            liste2 += '</select>';
            //ecriture de la deuxieme liste dans le div la page
            document.getElementById(id_ecrire).innerHTML=liste2;

        }

    </script>


    <script  type="text/javascript">


        $('#veh').on('click', function(){
            $.getJSON('TAXCALC.json',function(data){
                $.each(data,function(index,valeur){


//                        alert (toto);

                    $('#toto').append('<p><br><br><b><u>'
                        +'Vehicule:'+'</u>'+' '
                        +valeur.Vehicle_Make+ '</b><br><u></p>'
                    )
                    var toto = valeur.Vehicle_Description;
                    return(toto);

//                            +'Model :'+'</u>'+' '
//                            +valeur.Vehicle_Model+ '</b><br><u>'
//
//                            +'Description :'+'</u>'+' '
//                            +valeur.Vehicle_Description+ '</b><br><u>'
//
//                            +'Prix :'+'</u>'+' '
//                            +valeur.Vehicle_Price_including_VAT+ '</b><br><u>'
//
//                            +'Genre :'+'</u>'+' '
//                            +valeur.Vehicle_Kind+ '</b><br><u>'
//
//                            +'CO2 :'+'</u>'+' '
//                            +valeur.Vehicle_CO2+ '</b><br><u>'
//
//                            +'Motorisation :'+'</u>'+' '
//                            +valeur.Fuel_Type+ '</b><br><u>'
//
//                            +'Poids Max :'+'</u>'+' '
//                            +valeur.Maximum_Weight+ '</b><br><u>'

                    ;
                });
            });
        });
//        </script>

    <ul id="toto"><span>Les voitures</span></ul>

</body>
</html>
