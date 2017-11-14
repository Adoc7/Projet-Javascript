

// $("document").ready(function() {
    $("#id_liste2")
        .change(function () {
            var str = "";
            $("#id_liste2 option:selected").each(function () {
                str += $(this).text() + " ";
            });
            $("#change").text(str);
        })
        .change();
// }







function generation_liste2(id_lire,id_ecrire) {

        <!-- Fonction pour le second menu deroulant liéé au choix dans le premier -->
        var liste2="";
        // var toto = valeur.Vehicle_Description;

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

            case 'CI' : var tab = new Array ('A1','A2','A3','A4');; break;

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

    $(function(){

        $('#veh').on('click',function() {
//  ajax permet de relier plusieurs types de fichiers contrairement à getJSON
            $.ajax({
                dataType:'json',
                url:'TAXCALC.json',
                type:'get',
                success:function(data){
                    $.each(data,function(key,valeur){
                        $('#toto').append('<br><br><b><u>'
                            +'Vehicule:'+'</u>'+' '
                            +valeur.Vehicle_Description+ '</b><br><u></p>'
                        )
                            var toto = valeur.Vehicle_Description;
                        return(toto);

                    });
                },
                error:function(){
                    $('#toto').html('ERROR');
                }
            });
        });
    });




$("#id_liste2")
    .change(function () {

        var str = "";
        $.ajax({
            dataType:'json',
            url:'TAXCALC.json',
            type:'get',
            success:function(data) {
                $.each(data, function (key, valeur) {
                    $('#toto').append('<p>'
                        + valeur.Vehicle_Description + '</p>'
                    )


                    $("#toto option:selected").each(function () {
                        str += $(this).text() + " ";
                    });
                    $("#change2").text(str);

                })
                    .change();
            },
            error:function(){
                $('#toto').html('ERROR');
            }
        });
    });





