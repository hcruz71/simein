jQuery(document).ready( function() {
     
});

$('#btnPercentil').click(function() 
{
    var valores = [
                    [60,2], 

                    [70,7], 

                    [80,12]

                  ];  //estatura para edad <Cm:Meses> 0-2 años
    //var valores = [[85,26], [95,36], [105,48]];  //estatura para edad <Cm:Meses> de 2-5 años
    //var valores = [[5,2], [9,7], [12,12]];  //peso para edad   <Kg:Meses>
    //var valores = [[11,26], [14,36], [18,48]];  //peso para edad   <Kg:Meses>

    var PercentilInfo = {
           Nombre: "Wendy Sotelo Juares",
           Fuente: 2,  // 1= De 0 a 2 años.  ,  2= de 2 a 5 años
           FechaConsulta: "20/Ene/2019",  //Fecha Ultima Consulta
           Sexo: 1,    //1 =Masculino , 2= Femenino
           Peso: 30,   //En kg
           Talla: 70,  //En Cm
           Edad: 30,   //En Meses
           TipoPercentil: 1,  //1= Estatura para edad, 2= Peso para la edad 
           Arreglo: valores

    }; 

    $.ajax({
      url: 'percentilesparams.php',
      type: 'POST',
      dataType: 'json',
      data: PercentilInfo
    })

    .done(function(respdone) {
        console.log(respdone);
        //Imprime Percentil
        location.href = 'http://localhost/percentiles/percentiles.php';
     })
      
    .fail(function(respfail) {
        console.log(respfail);
     })
    
    .always(function() {
        console.log("complete");
 });
});

 


    

