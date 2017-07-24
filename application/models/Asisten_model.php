<?php

class Asisten_model extends CI_Model {
    
    public function proseslogin($user,$pass)
    {
        $this->db->where('username',$user);
        $this->db->where('password',$pass);
        return $this->db->get('tb_user')->row();
    }

    public function get_kriteria() 
    {
        $this->db->select('*');
        $this->db->from('tb_kriteria');
        $query = $this->db->get();
        return $result = $query->result_array();
    }

    public function get_data_asisten()
    {
        $this->db->select('*');
        $this->db->from('tb_alternatif');
        $query = $this->db->get();
        return $result = $query->result_array();  
    }

    public function get_nilai_asisten()
    {
        $this->db->select('*');
        $this->db->from('tb_nilai');
        $query = $this->db->get();
        return $query->result_array();   
  
    }

    
    public function insert_data_asisten($data)
    {
        $this->db->insert("tb_alternatif", $data);
    }

    public function insert_nilai_asisten($data)
    {
        $this->db->insert("tb_nilai", $data);
    }

    public function delete_data_asisten($id)
    {
        $this->db->where("id_alternatif", $id);
        $this->db->delete("tb_alternatif");
        return true;
    }

    public function ambil_data_asisten($id)
    {
        $this->db->select('*');
        $this->db->from('tb_alternatif');
        $this->db->where('id_alternatif', $id);
        $query = $this->db->get();

        if($query->num_rows() > 0)
        {
            return $query->result_array();
        }
        else 
        { 
            return NULL;
        }
        // var_dump($data);
        // return $data;
    }
    public function update_data_asisten()
    {
		$id = $this->input->post('id');
		$data = array(
            'nama' => $this->input->post('nama'),
            'npm' => $this->input->post('npm'),
            'jurusan' => $this->input->post('jurusan'),
            'ipk' => $this->input->post('ipk')
        );
       $this->db->update('tb_alternatif',$data,array('id_alternatif' => $id));
    }

    public function delete_nilai_asisten($id)
    {
        $this->db->where("id_nilai", $id);
        $this->db->delete("tb_nilai"); 
        return TRUE;
    }

    public function ambil_nilai_asisten($id)
    {
        $this->db->select('*');
        $this->db->from('tb_nilai');
        $this->db->where('id_nilai', $id);
        $query = $this->db->get();

        if($query->num_rows() > 0)
        {
            return $query->result_array();
        }
        else 
        { 
            return NULL;
        }
    }

    public function update_nilai_asisten($data,$id)
    {
	$nilai = $this->input->post('id_nilai');
	$data = array(
            'b_inggris' => $this->input->post('b_inggris'),
            'psikologi' => $this->input->post('psikologi'),
            'prak_1' => $this->input->post('prak_1'),
            'prak_2' => $this->input->post('prak_2')
        );
	$this->db->update('tb_nilai',$data,array('id_nilai' => $nilai));
        return $update;
    }
    
    public function get_tabel_evaluasi()
    {
        $this->db->select('*');
        $this->db->from('tb_alternatif');
        $this->db->join('tb_nilai', 'tb_alternatif.id_alternatif = tb_nilai.id_alternatif');
        $query = $this->db->get();
        return $query->result();
    }

    public function nilai()
    {
        $this->db->select('*');
        $this->db->from('tb_nilai');
	$this->db->join('tb_alternatif', 'tb_alternatif.id_alternatif = tb_nilai.id_alternatif');
        $query = $this->db->get();
        return $query->result_array();
  
    }
    
    public function getMax()
    {

        $this->db->select_max('b_inggris');
        $this->db->select_max('psikologi');
        $this->db->select_max('prak_1');
        $this->db->select_max('prak_2');
        $nilai = $this->db->get('tb_nilai')->result_array();

        
	return $nilai;
        
}
    
        
}
    
    
    



    

