<?php



class Kategori_m extends CI_Model

{
	private $_table = 'kategori_materi';

    public function getAllKategori()

    {

        return $this->db->get('kategori_materi')->result_array();

    }
	
    // public function Layanan($id = '')

    // {

    //     $this->db->select('*')

    //         ->from($this->_table);



    //     if ($id) {

    //         $this->db->where('id_kategori_materi', $id);

    //     }

    //     return $this->db->get();

    // }
	// public function get_published($limit = null, $offset = null)
	// {
	// 	if (!$limit && $offset) {
	// 		$query = $this->db
	// 			->get_where($this->_table, ['status_kategori_materi' => 'FALSE']);
	// 	} else {
	// 		$query =  $this->db
	// 			->get_where($this->_table, ['status_kategori_materi' => 'FALSE'], $limit, $offset);
	// 	}
	// 	return $query->result();
	// }

    public function getKategoriById($id)

    {

        return $this->db->get_where('kategori_materi', ['id_kategori_materi' => $id])->row_array();

    }
	

    public function delete($id)

    {

        $this->db->where('id_kategori_materi', $id);

        $this->db->delete('kategori_materi');

    }

    public function joinKategori($id)

    {

        $this->db->select('*');

        $this->db->from('materi');

        $this->db->join('kategori_materi', 'kategori_materi.id_kategori_materi=materi.kategori');

        $return = $this->db->where('id_materi', $id)->get();

        if ($return->num_rows() > 0) {

            return $return->result();

        } else {

            return false;

        }

    }

}

