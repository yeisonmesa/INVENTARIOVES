<?PHP 

require 'vendor/autoload.php';

require 'conexion.php ';

use PhpOffice\PhpSpreadsheet\IOFactory;
// use PhpOffice\PhpSpreadsheet\Cell\Coordinate;



$nombreArchivo= 'inventary.csv' ;

$documento =  IOFactory::load($nombreArchivo);

$totalHojas =$documento-> getSheetCount();


// for($indiceHoja= 0; $indiceHoja < $totalHojas ;$indiceHoja++){

    $hojaActual = $documento->getSheet(0);
    $numerofilas = $hojaActual->getHighestDataRow();

    $letra =$hojaActual->getHighestColumn();

    for($indiceFila =1; $indiceFila<=$numerofilas;$indiceFila++){

       



        // $numeroletra=Coordinate ::columnIndexFromString('A');
        $valorA =$hojaActual->getCellByColumnAndRow(1, $indiceFila);
        $valorB =$hojaActual->getCellByColumnAndRow(2, $indiceFila);
        $valorC =$hojaActual->getCellByColumnAndRow(3, $indiceFila);
        $valorD =$hojaActual->getCellByColumnAndRow(4, $indiceFila);
        $valorE =$hojaActual->getCellByColumnAndRow(5, $indiceFila);
        $valorF =$hojaActual->getCellByColumnAndRow(6, $indiceFila);
        $valorG =$hojaActual->getCellByColumnAndRow(7, $indiceFila);
        $valorH =$hojaActual->getCellByColumnAndRow(8, $indiceFila);
        $valorI =$hojaActual->getCellByColumnAndRow(9, $indiceFila);
        $valorJ =$hojaActual->getCellByColumnAndRow(10, $indiceFila);
        $valorK =$hojaActual->getCellByColumnAndRow(11, $indiceFila);
        $valorL =$hojaActual->getCellByColumnAndRow(12, $indiceFila);
        $valorM =$hojaActual->getCellByColumnAndRow(13, $indiceFila);
        $valorN =$hojaActual->getCellByColumnAndRow(14, $indiceFila);
        $valorO =$hojaActual->getCellByColumnAndRow(15, $indiceFila);
        $valorP =$hojaActual->getCellByColumnAndRow(16, $indiceFila);
        $valorQ =$hojaActual->getCellByColumnAndRow(17, $indiceFila);
        $valorR =$hojaActual->getCellByColumnAndRow(18, $indiceFila);
        $valorS =$hojaActual->getCellByColumnAndRow(19, $indiceFila);
        $valorT =$hojaActual->getCellByColumnAndRow(20, $indiceFila);
        $valorU =$hojaActual->getCellByColumnAndRow(21, $indiceFila);
        $valorV =$hojaActual->getCellByColumnAndRow(22, $indiceFila);

$sql= "INSERT INTO inventory (code_activo,NOMBRE,POSITION,Deparment,COMPUTER,MARCA
                    ,MODELO_REFERENCIA,SERIALES,PROCESSOR,Email,CONTRASEÑA
                    ,PIN,NOMBRE_EQUIPO,comment,CAMBIO,RAM,HARD_DRIVE
                    ,SERIAL_CARGADOR,NUMERO_PARTE_CARGADOR,PROVEEDOR,FECHA_COMPRA,COSTO_EQUIPO) 
 VALUES ('$valorA','$valorB','$valorC','$valorD' ,'$valorE','$valorF' 
 ,'$valorG' ,'$valorH' ,'$valorI' ,'$valorJ' ,'$valorK' ,'$valorL' 
  ,'$valorM' ,'$valorN' ,'$valorO' ,'$valorP' ,'$valorQ' ,'$valorR'
    ,'$valorS' ,'$valorT' ,'$valorU','$valorV' ) ";
       
        $mysqli->query($sql);


        echo $valorA.''. $valorB.''.$valorC.''.$valorD.''.$valorE.''.$valorF.''.$valorG.
        ''.$valorH.''.$valorI.''.$valorJ.''.$valorK.$valorL.''.$valorM.''.$valorN.''.$valorO. ''
        .$valorP.''.$valorQ.''.$valorR .$valorS.''.$valorT.''.$valorU.''.$valorV. '<br/>';


    }

    if ($sql) {
        

        echo '<script> alert("datos subidos sin herrores a margen ")</script>';
    }
    else {
        echo "error al subir datos";
    }

    // echo "carga completa";



?>