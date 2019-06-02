<?php
class User_model extends CI_Model {

    // Example 1. SQLInjection vulnerable
    function get_user_1($email){
        $query = "SELECT * FROM user WHERE email = '" . $email . "'";
        $rows = $this->db->query($query)->result();
        return $rows;
    }

    // Example 2. SQLInjection secure
    function get_user_2($email){
        $query = "SELECT * FROM user WHERE email = " . $this->db->escape($email);
        $rows = $this->db->query($query)->result();
        return $rows;

        // To create more robust method its recomendable to check number of rows expected
    }

    // Example 3. SQLInjection secure
    function get_user_3($email){
        $sql = "SELECT * FROM user WHERE email = ?";
        $rows = $this->db->query($sql, array($email))->result();
        return $rows;

        // To create more robust method its recomendable to check number of rows expected
    }

    // Example 4 and 5. SQLInjection secure
    function get_user_4($email){
        $this->db->where('email', $email);
        $this->db->from('user');
        $rows = $this->db->get()->result();
        return $rows;

        // To create more robust method its recomendable to check number of rows expected
    }

}
?>

