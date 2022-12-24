<?php
class MKomponen008 extends CI_Model
{
    private $table = 'komponen_008';

    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }
    public function add($data_input)
    {
        $this->db->insert($this->table, $data_input);
    }
    public function delete($id_komponen)
    {
        $this->db->delete($this->table, ['id_komponen' => $id_komponen]);
    }
    public function getOne($id_komponen)
    {
        return $this->db->where(['id_komponen' => $id_komponen])->get($this->table)->row_object();
    }
    public function editData($id_komponen, $data_edit)
    {
        $this->db->where(['id_komponen' => $id_komponen])->update($this->table, $data_edit);
    }
}