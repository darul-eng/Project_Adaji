<?php

class TokoAdmin_model extends CI_Model
{
    public function getAll()
    {
        $query = $this->db->get('toko');
        return $query->result_array();
    }
    public function getById($id)
    {
        $query = $this->db->get_where('toko', ['id_toko' => $id]);
        return $query->result_array();
    }
    public function destroy($id)
    {
        $this->db->where('id_toko', $id);
        $this->db->delete('toko');
    }
}
