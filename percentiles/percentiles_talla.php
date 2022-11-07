<?php
//header('Content-Type: application/pdf'); 
use setasign\Fpdi\Fpdi;

session_start();
if (isset($_SESSION['percentiles'])) {

    include '../conexion_i.php';
    $id_doctor=$_SESSION['id_usuario'];
    $id_pac_get=$_SESSION['id_pac_get'];
    $query_pac0 = "SELECT peso, talla, edad FROM historial_clinico where id_doctor=$id_doctor and id_Paciente=$id_pac_get and activo=1";
    $resultado_pac1 = $conexion->query($query_pac0);

    //$VariablePercentila[] = 0;
    $i = 0;
    while($row_pac1 = $resultado_pac1->fetch_assoc())
    {
        if ( $row_pac1['talla']<> "" && $row_pac1['edad'] <> "" ){ 
          $VariablePercentila[$i] = [$row_pac1['talla'], $row_pac1['edad']];
          $i = $i + 1;
       }
    }


    $query_c = "SELECT MAX(id) as id FROM historial_clinico where id_doctor=$id_doctor and id_paciente=$id_pac_get and activo=1";
    $resultado_c = $conexion->query($query_c);
    while($row_c = $resultado_c->fetch_assoc())

    {
      $id=$row_c['id'];

    }
      $query_c2 = "SELECT peso, talla, edad FROM historial_clinico where id=$id";
      $resultado_c2 = $conexion->query($query_c2);
      while($row_c2 = $resultado_c2->fetch_assoc())
      {
        $PESO=$row_c2['peso'];
        $TALLA=$row_c['talla'];
        $FORMATO=$row_c['edad'];
      }

  $_SESSION['percentiles']['TipoPercentil'] = 1;
  $_SESSION['percentiles']['Peso'] = $PESO;
  $_SESSION['percentiles']['Talla'] = $TALLA;
  $_SESSION['percentiles']['Arreglo'] = $VariablePercentila;
  $Nombre = $_SESSION['percentiles']["Nombre"];
  $Fuente = $_SESSION['percentiles']["Fuente"];
  $FechaConsulta = $_SESSION['percentiles']['FechaConsulta'];
  $Sexo = $_SESSION ['percentiles']["Sexo"];
  $Peso = $_SESSION ['percentiles']["Peso"];
  $Talla = $_SESSION ['percentiles']["Talla"];
  $Edad = $_SESSION ['percentiles']["Edad"];
  $TipoPercentil = $_SESSION['percentiles']["TipoPercentil"];
  $Arreglo = $_SESSION['percentiles']["Arreglo"];
 

  //require ('fpdf181/fpdf.php');
  require_once('setasign/Fpdi/autoload.php');
  include_once ('fpdf181/fpdf.php');

  $fpdf = new FPDF();
  $fpdi = new Fpdi();

  $fpdi->AddPage('LANDSCAPE, LETTER');
  $fpdi->SetFont('Courier','B',12);
  $fpdi->Text( 30, 15, "Paciente: " . $Nombre);
  $fpdi->Text( 196, 15, "Fecha ultima consulta: " . $FechaConsulta );


  //Inicializa variable plantilla    
  if ($TipoPercentil == 1){
      $Plantilla ='img/' . 'estaturaparaedad/';  
      
        //Complementa Ruta de plantilla
        if ($Fuente == 1){

            if ($Sexo ==1){
               $Plantilla = $Plantilla . 'cht_lfa_ninos_p_0_2.pdf';  //Niño de 0 a 2 años
            } else 
               if ($Sexo ==2){
                  $Plantilla = $Plantilla . 'cht_lfa_ninas_p_0_2.pdf';  //Niña de 0 a 2 años
               }   
        } else
          if ($Fuente ==2){
             if ($Sexo ==1){
               $Plantilla = $Plantilla . 'cht_hfa_ninos_p_2_5.pdf';  //Niño de 2 a 5
             } else 
               if ($Sexo ==2){
                  $Plantilla = $Plantilla . 'cht_hfa_ninas_p_2_5.pdf';  //Niña de 2 a 5 años
              }
         }     

  } else
     if ($TipoPercentil == 2){
        $Plantilla ='img/' . 'pesoparalaedad/'; 
          //Complementa Ruta de plantilla
          if ($Fuente == 1){
              if ($Sexo ==1){
                 $Plantilla = $Plantilla . 'cht_wfa_ninos_p_0_2.pdf';  //Niño de 0 a 2 años
              } else 
                 if ($Sexo ==2){
                    $Plantilla = $Plantilla . 'cht_wfa_ninas_p_0_2.pdf';  //Niña de 0 a 2 años
                 }   
          } else
            if ($Fuente ==2){
               if ($Sexo ==1){
                 $Plantilla = $Plantilla . 'cht_wfa_ninos_p_2_5.pdf';  //Niño de 2 a 5
               } else 
                 if ($Sexo ==2){
                    $Plantilla = $Plantilla . 'cht_wfa_ninas_p_2_5.pdf';  //Niña de 2 a 5 años
                }
           }     
    }

  $fpdi->setSourceFile($Plantilla);
  $pageId = $fpdi->importPage(1);
  $fpdi->useTemplate($pageId, 0, 0, 300);

  
// DIBUJA PUNTOS
      
  if ($TipoPercentil == 1){ 
      $fpdi->Text( 30, 20, "Edad: ". $Edad ." meses");
      $fpdi->Text( 196, 20, "Talla: " . $Talla . " cm");

        if ($Fuente == 1){

          $fpdi->SetFont('Courier','',20);  //Fuente para punto

           $x = 48;
           $y = 186;

           //Base x = 45cm (incrementa en 5), y 0 meses (Incrementa en 1)
           
           for($i = 0; $i < count($Arreglo); $i++){
            $xx = $Arreglo[$i][1];
            $yy = $Arreglo[$i][0];
            
            $yyy = $yy - 45;
            if ($yyy > 0 ){ 
               $yyy = $y - (($yyy/5) * 13.44); 
               $xxx = $x+($xx * 8.7); 
               $fpdi->Text( $xxx, $yyy, ".");
            }   

           }

              
        } else
          if ($Fuente ==2){
           /*$fpdi->Text( 48.5, 186, "."); //BASE
           $fpdi->Text( 54.13, 186, "."); // x+5.63 por mes
           $fpdi->Text( 48.5, 183, "."); // y-3por  cm  */

           $fpdi->SetFont('Courier','',20);  //Fuente para punto

           $x = 48.5;
           $y = 186;

           if ($Sexo ==1){
              for($i = 0; $i < count($Arreglo); $i++){
                  $xx = $Arreglo[$i][1];
                  $yy = $Arreglo[$i][0];
                  
                  $yyy = $yy - 80;
                  $xxx = $xx - 24;

                  if ($yyy > 0 && $xxx > 0){ 
                       $yyy = $y - ($yyy * 3.35); 
                       $xxx = $x+($xxx * 5.8); 
                       $fpdi->Text( $xxx, $yyy, ".");
                  }  
               }        

              } else 
                 if ($Sexo ==2){
                     for($i = 0; $i < count($Arreglo); $i++){
                      $xx = $Arreglo[$i][1];
                      $yy = $Arreglo[$i][0];
                      
                      $yyy = $yy - 78;
                      $xxx = $xx - 24;
                      if ($yyy > 0 && $xxx > 0){ 
                           $yyy = $y - ($yyy * 3.35); 
                           $xxx = $x+($xxx * 5.8); 
                           $fpdi->Text( $xxx, $yyy, ".");
                      } 
                    }  
                 }   
         }     

  } else
     if ($TipoPercentil == 2){
       $fpdi->Text( 30, 20, "Peso: ". $Peso ." kg");
       $fpdi->Text( 196, 20, "Edad: " . $Edad . " meses");

        $x = 48.5;
        $y = 186;
        
          if ($Fuente == 1){

           /* $fpdi->Text( 48.5, 186, "."); //BASE
           $fpdi->Text( 57.2, 186, "."); // x 8.75 por cada mes
           $fpdi->Text( 48.5, 184.52, "."); // y 1.77 por cada .2 kg
*/
              if ($Sexo ==1){
                for($i = 0; $i < count($Arreglo); $i++){
                      $xx = $Arreglo[$i][1];
                      $yy = $Arreglo[$i][0];
                      
                      $yyy = $yy - 1.4;
                      $xxx = $xx - 0;
                      if ($yyy > 0 && $xxx > 0){ 
                           $yyy = $y - (($yyy/0.2) * 1.77); 
                           $xxx = $x+($xxx * 8.75); 
                           $fpdi->Text( $xxx, $yyy, ".");
                      } 
                }   
              } else 
                 if ($Sexo ==2){
                   for($i = 0; $i < count($Arreglo); $i++){
                      $xx = $Arreglo[$i][1];
                      $yy = $Arreglo[$i][0];
                      
                      $yyy = $yy - 1.4;
                      $xxx = $xx - 0;
                      if ($yyy > 0 && $xxx > 0){ 
                           $yyy = $y - (($yyy/0.2) * 1.9); 
                           $xxx = $x+($xxx * 8.75); 
                           $fpdi->Text( $xxx, $yyy, ".");
                      } 
                }   
                 }   
          } else
            if ($Fuente ==2){
              /*$fpdi->Text( 48.5, 186, "."); //BASE
              $fpdi->Text( 54.2, 186, "."); // x 5.7 por cada mes
              $fpdi->Text( 48.5, 184.70, "."); // y 1.3 por cada kg*/
               if ($Sexo ==1){
                  for($i = 0; $i < count($Arreglo); $i++){
                      $xx = $Arreglo[$i][1];
                      $yy = $Arreglo[$i][0];
                      
                      $yyy = $yy - 8.4;
                      $xxx = $xx - 24;
                      if ($yyy > 0 && $xxx > 0){ 
                           $yyy = $y - (($yyy/0.2) * 1.66); 
                           $xxx = $x+($xxx * 5.84); 
                           $fpdi->Text( $xxx, $yyy, ".");
                      } 
                   }   
               } else 
                 if ($Sexo ==2){
                     for($i = 0; $i < count($Arreglo); $i++){
                       $xx = $Arreglo[$i][1];
                       $yy = $Arreglo[$i][0];
                      
                       $yyy = $yy - 8.4;
                       $xxx = $xx - 24;
                       if ($yyy > 0 && $xxx > 0){ 
                           $yyy = $y - (($yyy/0.2) * 1.56); 
                           $xxx = $x+($xxx * 5.84); 
                           $fpdi->Text( $xxx, $yyy, ".");
                      } 
                   } 
                     
                }
           }     
    }



/* 
  if ($TipoPercentil == 1){ 
    $fpdi->Text( 30, 20, "Edad: ". $Edad ." meses");
    $fpdi->Text( 196, 20, "Talla: " . $Talla . " cm");

    $fpdi->SetFont('Courier','',20);  //Fuente para punto
 */   
     
/*
    $x = 48;
    $y = 186;



  } else
    if($TipoPercentil == 2){
       $fpdi->Text( 30, 20, "Peso: ". $Peso ." kg");
       $fpdi->Text( 196, 20, "Edad: " . $Edad . " meses");

    }

  */
 
 

 /* $fpdi->Text( 48, 186, "."); //BASE
  $fpdi->Text( 56, 186, "."); // x+8 por mes
  $fpdi->Text( 48, 173, "."); // y-13 por mes*/


//$fpdi->Text( 72, 160, "Aqui va 60:2");
  $fpdi->SetTitle("Percentila.pdf");
  $fpdi->OutPut();     
  
}
?>