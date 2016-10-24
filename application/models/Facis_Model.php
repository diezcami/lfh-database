<?php
    class Facis_Model extends CI_Model {

        function __construct() {
            parent::__construct();
        }

        /*
        function add_faci ($id_number, $first_name, $last_name, $pin) {
            $this->db->query( "INSERT INTO facilitator (id_number, first_name, last_name, pin, balance) VALUES ( '{$id_number}', '{$first_name}', '{$last_name}', '{$pin}', 0 )");
            return "Ok";
        }*/

        function get_facis(){
            $query = $this->db->query ("SELECT * FROM facilitator");
            if($query->num_rows() > 0) {
                $ret = $query->result();
            } else {
                $ret = '300';
            }

            return $ret;
        }

        function get_faci($id_number){
            $query = $this->db->query ("SELECT * FROM facilitator WHERE id_number = '{$id_number}'");
            if($query->num_rows() > 0) {
                $ret = $query->result();
            } else {
                $ret = null;
                //$ret = 'A faci with this ID number does not exist.';
            }

            return $ret;
        }

        /*
        function update_faci($id, $firstname, $lastname, $pin, $balance){
            $this->db->query( "UPDATE faci SET balance = '{$balance}', pin = '{$pin}', first_name = '{$firstname}', last_name = '{$lastname}' WHERE id_number = '{$id}'");
        } */
    }

?>
