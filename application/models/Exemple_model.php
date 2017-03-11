<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Exemple_model extends CI_Model {


    public function insert($data) {
        // Inserting into your table
        $this->db->insert('donate', $data);
        // Return the id of inserted row
        return $idOfInsertedData = $this->db->insert_id();
    }

}
