<?php
session_start();
    if(isset($_POST['nombre']) && isset($_POST['cc'])) {
        WriteWordTest($_POST['nombre'], $_POST['cc']);
    } else {
        echo "error";
    }


function WriteWordTest($client_full_name, $client_document) {
    $template_file_name = 'template.docx';
    
    $rand_no = rand(111111, 999999);
    $filename = "results_" . $rand_no . ".docx";

    $folder = "results_";
    $full_path = $folder . '/' . $filename;

    try {
        if(!file_exists($folder)) {
            mkdir($folder);
        }

        copy($template_file_name, $full_path);

        $zip_val = new ZipArchive;

        if($zip_val->open($full_path) == true) {
            $key_file_name = 'word/document.xml';
            $message = $zip_val->getFromName($key_file_name);

            $timestamp  = date('d-M-Y H:i:s');

            $message = str_replace("{{client_full_name}}", $client_full_name, $message);
            $message = str_replace("{{test}}", "Esta es una prueba, funciona.", $message);
            $message = str_replace("{{client_document}}", $client_document, $message);

            $zip_val->addFromString($key_file_name, $message);
            $zip_val->close();
        }
    } catch (Exception $exc) {
        $error_message = "Error creando el documento";
        var_dump($exc);
    }
    ConvertToPDF();
    // header("Location: /docs/results_/".$filename);
}



function ConvertToPDF() {
    $ultima_linea = system('sh /libreoffice/convert.sh', $retval);
    echo '
    <hr />Ultima linea de la salida: ' . $ultima_linea . '
    <hr />Valor de retorno: ' . $retval;
}
?>