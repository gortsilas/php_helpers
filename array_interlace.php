<?php    
/**
 * @return array
 */
function array_interlace()
{
    $numargs = func_num_args();

    if ($numargs == 0) {
        return false;
    }

    if ($numargs == 1) {
        return func_get_arg(0);
    }

    $arg_list = func_get_args();

    $total_elements = 0;
    for ($i = 0; $i < $numargs; $i++) {
        if(!is_array($arg_list[$i])) {
            return false;
        }
        $total_elements += count($arg_list[$i]);
    }

    $new_array = [];
    for ($i = 0; $i < $total_elements; $i++) {
        for ($a = 0; $a < $numargs; $a++) {
            if (isset($arg_list[$a][$i])) {
                $new_array[] = $arg_list[$a][$i];
            }
        }
    }

    return $new_array;
}
