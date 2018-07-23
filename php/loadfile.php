<?php
	require_once ('../vendor/autoload.php');
	include ('../Class/CurlRequest.php');
    use PhpOffice\PhpSpreadsheet\IOFactory;

    $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
    $reader->setReadDataOnly(TRUE);
    $spreadsheet = $reader->load($_FILES['archivo']['tmp_name']);

    $worksheet = $spreadsheet->getActiveSheet();

    $i = 0;
    $arrNumeros = array();
    foreach ($worksheet->getRowIterator() as $row) {
       
        $cellIterator = $row->getCellIterator();
        $cellIterator->setIterateOnlyExistingCells(TRUE); //Esto iterara todas las celdas
                                                           //    incluso si no esta seteada
                                                           // Por default solo las celdas que tienen un valor
                                                           //    seran iteradas
        foreach ($cellIterator as $key => $cell) {
            
                 $arrNumeros[$i] = $cell->getValue();
                 $i++;
        }      

    }

    $smsRequest = new stdClass();
    $smsRequest->remitente = $_POST['fromInput'];
    $smsRequest->msg = $_POST['textInput'];
    $smsRequest->destinatarios = $arrNumeros;
    $smsRequest->fecha = $_POST['fecha'];
    
    $objRequest = new CurlRequest();
    $url = "http://localhost/infobipApi/sms/prueba/";

    $response = $objRequest->sendPost($url,$smsRequest);
    echo $response;

?>