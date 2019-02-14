<?php  
function cmb_dinamis($name, $table, $field, $pk, $selected=null,$extra=null){
    // kalo dihelper tidak bisa memakai this
    $ci =& get_instance();
    $cmb = "<select name='$name' class='form-control' $extra> ";
    $data = $ci->db->get($table)->result();
    foreach($data as $row){
        $cmb .="<option value='select from'";
        $pilihan = null;
        if($row->$field == $pilihan ) {
        }else{
        $cmb .="<option value='".$row->$pk."'";
        $cmb .=$selected==$row->$pk?'selected':'';
        $cmb .=">".$row->$field."</option>";
        $pilihan = $row->$field ;
        }
        
    }
    $cmb .= "</select>";
    return $cmb;
}



