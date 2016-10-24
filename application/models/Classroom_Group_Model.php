<?php
    class Classroom_Group_Model extends CI_Model {

        function __construct() {
            parent::__construct();
        }

        function get_classroom_groups(){
            $query = $this->db->query ("SELECT * FROM classroom_group");
            if($query->num_rows() > 0) {
                $ret = $query->result();
            } else {
                $ret = '300';
            }

            return $ret;
        }

        function get_classroom_group($id){
            $query = $this->db->query ("SELECT * FROM classroom_group WHERE id = '{$id}'");
            if($query->num_rows() > 0) {
                $ret = $query->result();
            } else {
                $ret = null;
                //$ret = 'A faci with this ID number does not exist.';
            }

            return $ret;
        }

    }

?>
