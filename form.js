// $('#marques').on('change', function () {
//     selectModel();
// });
//
// $('#models').on('change', function () {
//     calc();
// });
//
//
// //on affiche les models dans un deusieme menu deroulant
//
// function selectModel(){
//     var vh_make = $("#marques").val();
//     $("#models").html("<option>Models</option>");
//
//     $.getJSON('vehicules.json', function(data) {
//         $.each(data,  function (index, x) {         //on parcours le json des vehicules
//             if(x.Vehicle_Make === vh_make){         //si la value du select = value json
//                 $("#models").append('<option value="'+ x.Vehicle_Model +'">' + x.Vehicle_Description + '</option>');        //on affiche les données qui corespondent
//             }
//         })
//     })
// }