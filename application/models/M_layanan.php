<?php



class M_layanan extends CI_Model

{

    private $table = 'materi';



    public function layanan($id = '')

    {

        $this->db->select('*')

            ->from($this->table);



        if ($id) {

            $this->db->where('id_materi', $id);

        }

        return $this->db->get();

    }
	// public function get_published($limit = null, $offset = null)
	// {
	// 	if (!$limit && $offset) {
	// 		$query = $this->db
	// 			->get_where($this->table, ['dibaca_materi' => 'FALSE']);
	// 	} else {
	// 		$query =  $this->db
	// 			->get_where($this->table, ['dibaca_materi' => 'FALSE'], $limit, $offset);
	// 	}
	// 	return $query->result();
	// }



    public function insert($data = array())

    {

        return $this->db->insert($this->table, $data);

    }



    public function delete($id)

    {

        $this->db->where('id_materi', $id);

        return $this->db->delete($this->table);

    }



    public function update($id, $data = array())

    {

        $this->db->set($data);

        $this->db->where('id_materi', $id);

        return $this->db->update($this->table);

    }

}

