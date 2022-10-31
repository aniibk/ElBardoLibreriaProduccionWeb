<?php

function ver($array){
    $mostrar = print_r('<pre>');
    $mostrar .= print_r($array);
    $mostrar .= print_r('</pre>');
    return $mostrar;
}

function Activo($item_de_menu)
    {
        $url = !empty($_GET['url']) ? $_GET['url'] : 'home';
        $arrayUrl = explode('/', $url);
        $item = $arrayUrl[0];
      echo $item_de_menu == $item ? 'active' : '';
    }

function cortar_palabras($texto, $limite, $break=' ', $pad='...'){
	if(strlen($texto) <= $limite)
		return $texto;
	$quiebre = strpos($texto, $break, $limite);
	if( $quiebre != false){
		if($quiebre < (strlen($texto) - 1)){
			$texto = substr($texto, 0, $quiebre).$pad;
		}
	}
	return $texto;
}

function estrellas($valor){
    $estrellas = "";
    for ($i=0; $i < $valor ; $i++) { 
        $estrellas = $estrellas . '&#9733; ';
        
    }
    switch ($valor) {
        case 5:
            $estrellas = $estrellas;
            break;
        case 4:
            $estrellas .= '&#9734; ';
            break;
        case 3:
            $estrellas .= '&#9734; ' . '&#9734; ';
            break;
        case 2:
            $estrellas .= '&#9734; ' . '&#9734; ' . '&#9734; ';
            break;
        case 1:
            $estrellas .= '&#9734; ' . '&#9734; ' . '&#9734; ' . '&#9734; ';
            break;

        default:
            $estrellas .= '&#9734; ' . '&#9734; ' . '&#9734; ' . '&#9734; ' .'&#9734;';
            break;
    }    
   
    return $estrellas;
}



function muestraEstrellas($array, $indice, $producto_buscado){

    $suma = 0;
    $contador = 0;
    foreach ($array as $item_array) {
        if ($item_array[$indice] == $producto_buscado){
            $suma = $suma + $item_array['valoracion'];
            $contador++;
        }
    }
    $promedio="";
    if($suma>0){
        $promedio = round($suma / $contador);
    }else{
        $promedio = 0;
    }
    $estrellas = "";
    for ($i=0; $i < $promedio ; $i++) { 
        $estrellas = $estrellas . '&#9733; ';
        
    }
        
    switch ($promedio) {
        case 4:
            $estrellas = $estrellas . '&#9734; ';
            break;
        case 3:
            $estrellas = $estrellas . '&#9734; ' . '&#9734; ';
            break;
        case 2:
            $estrellas = $estrellas . '&#9734; ' . '&#9734; ' . '&#9734; ';
            break;
        case 1:
            $estrellas = $estrellas . '&#9734; ' . '&#9734; ' . '&#9734; ' . '&#9734; ';
            break;

        default:
            # code...
            break;
    }    
   
    return $estrellas;
}



function getRealIP()
{

    if (isset($_SERVER["HTTP_CLIENT_IP"]))
    {
        return $_SERVER["HTTP_CLIENT_IP"];
    }
    elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
    {
        return $_SERVER["HTTP_X_FORWARDED_FOR"];
    }
    elseif (isset($_SERVER["HTTP_X_FORWARDED"]))
    {
        return $_SERVER["HTTP_X_FORWARDED"];
    }
    elseif (isset($_SERVER["HTTP_FORWARDED_FOR"]))
    {
        return $_SERVER["HTTP_FORWARDED_FOR"];
    }
    elseif (isset($_SERVER["HTTP_FORWARDED"]))
    {
        return $_SERVER["HTTP_FORWARDED"];
    }
    else
    {
        return $_SERVER["REMOTE_ADDR"];
    }

}





function muestrarCampoDinamicoComentario($array){
    //ver($array);
    foreach ($array as $keys => $values) {
        $arrayOpciones = explode('|',$values['opciones']);
        
            switch ($values['tipo']) {
                case 'select':
                    echo '<br><label for="'. $values['id'].'">'. ucfirst($values['nombre']).'</label>';
                    echo '<select class="custom-select mb-3" name="seleccion['. $values['id'].']">';
                    
                    foreach ($arrayOpciones as $key => $value) {
                        ver($value);
                        echo '<option value="'.$value.'"><span>'.ucfirst($value).'</span></option>';
                    }
                    echo '</select>';
                    break;
                case 'radio':
                    echo '<br><label for="'. $values['nombre'].'">'. ucfirst($values['nombre']).'</label>';
                    foreach ($arrayOpciones as $key => $value) {
                       echo '<br><span class="ml-3 mr-2">'.ucfirst($value).'</span><input type="radio" value="'.$value.'" name="radio['. $values['id'].']">';
                    }

                    break;
                case 'checkbox':
                    echo '<br><label class="mt-2"for="'. $values['nombre'].'">'. ucfirst($values['nombre']).'</label><br>';
                    $i = 1;
                    foreach ($arrayOpciones as $key => $value) {
                        
                        echo '<input class="ml-3 mr-2" name="cbox['. $values['id'].'][]" type="checkbox" value="'.ucfirst($value).'"> <label for="cbox'.$i.'">'.ucfirst($value).'</label><br>';
                        $i++;
                     }
                    break;
                case 'textarea':
                    echo '<br><label class="mt-2" for="message-text" class="col-form-label">'. ucfirst($values['nombre']).'</label>';
                    echo '<textarea class="form-control" name="textarea['. $values['id'].']" id="message-text" required></textarea>';
                    break;
                default:
                    
                    break;
            }

        
    }

}

//agregar stringClean 21/76