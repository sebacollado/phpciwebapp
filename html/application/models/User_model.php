<?php
class User_model extends CI_Model {

    function get_user_1($email){
        $query = "SELECT * FROM user WHERE email = '" . $email . "'";
        
        $rows = $this->db->query($query)->result();
        return $rows;
        //print_r($rows);
    }

    function get_user_2($email){
        $query = $this->db->get_where('user', array('email' => $email));
        $rows = $query->result();
        print_r($rows);
    }
}
?>

