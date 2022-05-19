<?php 

if(!function_exists('get_formatted_date')){
    function get_formatted_date($date, $format){
        $formatted_date = date($format, strtotime($date));
        return $formatted_date;
        
    }
}

?>