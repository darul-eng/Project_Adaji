<?php

class BarangAdmin_model extends CI_Model
{
    public function getAll()
    {
        $query = $this->db->get('barang');
        return $query->result_array();
    }
    public function getById($id)
    {
        $query = $this->db->get_where('barang', ['id_barang' => $id]);
        return $query->result_array();
    }
    public function destroy($id)
    {
        $this->db->where('id_barang', $id);
        $this->db->delete('barang');
    }
}
