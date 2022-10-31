<?php

class ApiModelo extends Sql{
    public function __construct(){
       parent::__construct();
    }
    
    
    public function obtenerLibros(){
        $query_values= $_POST;
        
        $extra_query = " WHERE activo = 1 and eliminado = 0 ORDER by destacado DESC";
        $query_order = null;

        if($query_values){
            $extra_query = " WHERE activo = 1 and eliminado = 0";
            $order =  [];
            if(isset($query_values['order'])){
                $order = $query_values['order'];
                $query_order = " ORDER BY nombre {$order[0]}"; 
                unset($query_values['order']);
            }
           
            if(count($query_values) == 0 && $query_order){
                $extra_query .= "";
            } else {
                $extra_query .= " AND ";
            }
            
            $values = [];
            $queries = [];
            $order = "";
            
            foreach ($query_values as $field_name => $fieldValue){
                
                foreach($fieldValue as $value){
                    $values[$field_name][] = " {$field_name} = '{$value}'";
                }
            }
                       
            foreach ($values as $field_name => $field_values)
            {
                $queries[$field_name] = "(".implode(" OR ", $field_values).")";
            }

            $extra_query.= " ".implode(" AND ", $queries);  
        
        }
        
        if($query_order){
            $extra_query.=$query_order;

        }
        
        $consulta = "SELECT * FROM libros".$extra_query;
        
        $libros = $this -> seleccionarTodos($consulta);

        foreach ($libros as $key => $value) {
            $string  = cortar_palabras($value['descripcion'],70);
            $libros[$key]['descripcion'] = $string;
           
        }
        echo json_encode($libros);
        return $libros;
    }
    
    
  

}

?>
