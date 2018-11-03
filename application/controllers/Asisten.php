<?php

class Asisten extends CI_Controller {
    public function __construct() 
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');  
        $this->load->model("asisten_model");  
    }

    public function index()
	{
        $data['title'] = "Login";
        $this->load->view('templates/header', $data);
        $this->load->view('login');
        $this->load->view('templates/footer');
	}

    public function ceklogin()
    {
        if(isset($_POST['login'])){
            $user = $this->input->post('user',true);
            $pass = $this->input->post('pwd',true);
            $cek =  $this->asisten_model->proseslogin($user,$pass);
            $hasil = count($cek);
            if($hasil > 0){
                $p_login = $this->db->get_where('tb_user',array('username' => $user, 'password => $pass'))->row();
                if($p_login->level == 'admin'){
                  redirect('asisten/v_beranda');  
                }
                elseif($p_login->level == 'asisten'){
                    redirect('asisten/v_home');
                }
            }else
            {
                $data1['title'] = "Login";
                $data['error'] ="Invalid Username or Password";
                $this->load->view('templates/header', $data1);
                $this->load->view('login', $data);
                $this->load->view('templates/footer');

            }                       
        }
    }
    
    
    public function v_beranda()
    {
        $data['title'] = "Beranda | Admin";
        $this->load->view('templates/header-admin', $data);
        $this->load->view('user/v_beranda');
        $this->load->view('templates/footer');
    }
    
    public function v_home()
    {
        $data['title'] = "Beranda | Penerimaan Asisten";
        $this->load->view('templates/header-user', $data);
        $this->load->view('user/v_home');
        $this->load->view('templates/footer');
    }

    public function v_nilai_asisten()
    {
        $data1['title'] = "Nilai Asisten | Penerimaan Asisten";
        $data   = array();
        $data   = $this->asisten_model->get_nilai_asisten();  
        $data   = array('result' => $data);
        $this->load->view('templates/header-admin', $data1);        
        $this->load->view('admin/v_nilai_asisten', $data);
        $this->load->view('templates/footer'); 
    }
   
    public function v_data_asisten()
    {
        $data1['title'] = "Data Calon Asisten | Penerimaan Asisten";
        $data   = array();
        $this->load->model('asisten_model');
        $this->load->helper('url');
        $data = $this->asisten_model->get_data_asisten();
        if ($data > 0){  
        $data = array('result' => $data);
        }
        $this->load->view('templates/header-admin', $data1);
        $this->load->view('admin/v_data_asisten', $data);
        $this->load->view('templates/footer');  
    }

    public function edit_data_asisten()
    {
        $data['title'] = " Update Nilai Asisten | Penerimaan Asisten";
        $this->asisten_model->update_data_asisten();

        redirect('asisten/v_data_asisten');
    }

    public function form_nilai_asisten()
    {
		$data['title'] = "Form Nilai Asisten | Penerimaan Asisten";
		$ass = $this->asisten_model->get_data_asisten();
		$ass = array('ass' => $ass);
        $action = $this->input->post('tambahnilai');
        if($action == 'Tambah')
        {
            $this->load->view('templates/header');
            $this->load->view('admin/form_nilai_asisten',$ass);
            $this->load->view('templates/footer');
        }    
    }

    public function form_data_asisten()
    {
        $data['title'] = "Form Nilai Asisten | Penerimaan Asisten";
        $action = $this->input->post('tambahdata');
        if($action == 'Tambah')
        {
            $this->load->view('templates/header', $data);
            $this->load->view('admin/form_data_asisten');
            $this->load->view('templates/footer');
        } 
    }

    public function v_kriteria()
    {
        $data1['title'] = "Kriteria | Admin";
        $data   = array();
        $data = $this->asisten_model->get_kriteria();   
        $data = array('result' => $data);
        $this->load->view('templates/header-admin', $data1);
        $this->load->view('admin/v_kriteria', $data);
        $this->load->view('templates/footer');   
    }

    public function insert_data_asisten()
    {
        
        $this->form_validation->set_rules("nama", "Nama", 'required|alpha');
        $this->form_validation->set_rules("npm", "NPM", 'required|alpha_numeric');
        $this->form_validation->set_rules("jurusan", "Jurusan", 'required|alpha');
        $this->form_validation->set_rules("ipk", "IPK", 'required|numeric');

        if($this->form_validation->run()==TRUE)
        {
            //true
            
            $data = array(
                "nama"          =>$this->input->post("nama"),
                "npm"           =>$this->input->post("npm"),
                "jurusan"       =>$this->input->post("jurusan"),
                "ipk"           =>$this->input->post("ipk")
            );
            $this->db->set($data);
            $this->asisten_model->insert_data_asisten($data);
            
            redirect(site_url("asisten/v_data_asisten"));
        }
        else
        {
            //false
            $this->v_data_asisten();
        }
    }
    public function delete_data_asisten()
    {
        $this->load->model("asisten_model");
        $id = $this->uri->segment(3);
        
        
        if ($id)
        {
            $this->asisten_model->delete_data_asisten($id);
            redirect('asisten/v_data_asisten');
            
        }
        else{
            redirect('asisten/v_data_asisten');
        }
    }

    public function update_data_asisten()
    {
        $id = $this->uri->segment(3);
        $data['asisten'] = $this->asisten_model->ambil_data_asisten($id);
        $this->load->view('templates/header-admin');
        $this->load->view('admin/edit_data_asisten', $data);
        $this->load->view('templates/footer');
    }

    public function insert_nilai_asisten()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("asisten", "Nama Asisten", 'required');
        $this->form_validation->set_rules("bahasainggris", "Bahasa Inggris", 'required|numeric');
        $this->form_validation->set_rules("psikologi", "Psikologi", 'required|numeric');
        $this->form_validation->set_rules("prak1", "Praktikum 1", 'required|numeric');
        $this->form_validation->set_rules("prak2", "Praktikum 2", 'required|numeric');

        if($this->form_validation->run()==FALSE)
        {
            //true
            $this->load->model("asisten_model");
            $data = array(
				"id_alternatif" 	=>$this->input->post("asisten"),
                "b_inggris"         =>$this->input->post("b_inggris"),
                "psikologi"         =>$this->input->post("psikologi"),
                "prak_1"            =>$this->input->post("prak_1"),
                "prak_2"            =>$this->input->post("prak_2")
            );
            $this->db->set($data);
            $this->asisten_model->insert_nilai_asisten($data);
            redirect(site_url("asisten/v_nilai_asisten"));
        }
        else
        {
            //false
        }
    }

    public function delete_nilai_asisten()
    {
        
        $id = $this->uri->segment(3);
       
        
        if ($id)
        {
            $this->asisten_model->delete_nilai_asisten($id);
            redirect('asisten/v_nilai_asisten');
            
        }
        else{
            redirect('asisten/v_nilai_asisten');
        }
    }

    public function update_nilai_asisten()
    {
        $this->load->model("asisten_model");
        $id = $this->uri->segment(3);
        $data['asisten'] = $this->asisten_model->ambil_nilai_asisten($id);
        $this->load->view('templates/header');
        $this->load->view('admin/edit_nilai_asisten', $data);
        $this->load->view('templates/footer');
    }

    public function edit_nilai_asisten()
    {
        $this->load->model("asisten_model");
        $id = $this->uri->segment(3);
        $this->asisten_model->update_nilai_asisten($data, $id);
        redirect('asisten/v_nilai_asisten');
    }
    
    public function v_hasil_perhitungan()
    {
        $data1['title'] = "Hasil Perhitungan";
        $data = array();
        $data['result'] = $this->asisten_model->get_tabel_evaluasi();        
        $data['nilaimax'] =  $this->asisten_model->getMax();
        $data['matkul'] = $this->asisten_model->nilai();
        
        foreach ($data['matkul'] as $key => $val)
        {
		foreach($data['nilaimax'] as $keys => $value)
		{
			$nilai = $data['matkul'][$key];
			$normalisasi = $data['nilaimax'][$keys];
			$data['matkul'][$key]['nilai_inggris'] = round($nilai['b_inggris'] / $normalisasi['b_inggris'] ,2, PHP_ROUND_HALF_EVEN);
			$data['matkul'][$key]['nilai_psikologi'] = round($nilai['psikologi'] / $normalisasi['psikologi'] ,2, PHP_ROUND_HALF_EVEN);
			$data['matkul'][$key]['nilai_prak1'] = round($nilai['prak_1'] / $normalisasi['prak_1'], 2, PHP_ROUND_HALF_EVEN);
			$data['matkul'][$key]['nilai_prak2'] = round($nilai['prak_2'] / $normalisasi['prak_2'], 2, PHP_ROUND_HALF_EVEN);
			
		}

        }
        $this->load->view('templates/header-user', $data1);
        $this->load->view('user/v_hasil_perhitungan', $data);
        $this->load->view('templates/footer');
        
    }
    
    public function v_ranking()
    {
        $data1['title'] = "Ranking";
	    $data['kriteria'] = $this->asisten_model->get_kriteria();
        $data['nilaimax'] = $this->asisten_model->getMax();
        $data['matkul']   = $this->asisten_model->nilai();
        
        foreach ($data['matkul'] as $key => $val)
        {
		foreach($data['nilaimax'] as $keys => $value)
		{
			foreach($data['kriteria'] as $index => $nilai)
			{
			
				$nilai = $data['matkul'][$key];
				$normalisasi = $data['nilaimax'][$keys];
				$data['matkul'][$key]['nilai_inggris'] = round($nilai['b_inggris'] / $normalisasi['b_inggris'] ,2, PHP_ROUND_HALF_EVEN);
				$data['matkul'][$key]['nilai_psikologi'] = round($nilai['psikologi'] / $normalisasi['psikologi'] ,2, PHP_ROUND_HALF_EVEN);
				$data['matkul'][$key]['nilai_prak1'] = round($nilai['prak_1'] / $normalisasi['prak_1'], 2, PHP_ROUND_HALF_EVEN);
				$data['matkul'][$key]['nilai_prak2'] = round($nilai['prak_2'] / $normalisasi['prak_2'], 2, PHP_ROUND_HALF_EVEN);

				$inggris = $data['matkul'][$key]['nilai_inggris'];
				$psik = $data['matkul'][$key]['nilai_psikologi'];
				$prak_1 = $data['matkul'][$key]['nilai_prak1'];
				$prak_2 = $data['matkul'][$key]['nilai_prak2'];

				$data['matkul'][$key]['nilai_inggris'] = $inggris * $data['kriteria'][0]['bobot'];
				$data['matkul'][$key]['nilai_psikologi'] = $psik * $data['kriteria'][1]['bobot'];
				$data['matkul'][$key]['nilai_prak1'] = $prak_1 * $data['kriteria'][2]['bobot'];
				$data['matkul'][$key]['nilai_prak2'] = $prak_2 * $data['kriteria'][3]['bobot'];

				$krit1 = $data['matkul'][$key]['nilai_inggris'];
				$krit2 = $data['matkul'][$key]['nilai_psikologi'];
				$krit3 = $data['matkul'][$key]['nilai_prak1'];
				$krit4 = $data['matkul'][$key]['nilai_prak2'];
				

				$data['matkul'][$key]['hasil'] = $krit1+$krit2+$krit3+$krit4;
				
				
			
			}		
		}

        }
        
	
	    $data['akhir']= $this->array_msort($data['matkul'], array('hasil'=>SORT_DESC));

        $this->load->view('templates/header-user',$data1);
        $this->load->view('user/v_ranking',$data);
        $this->load->view('templates/footer');
    }
    
    function array_msort($array, $cols)
	{
	    $colarr = array();
	    foreach ($cols as $col => $order) {
		$colarr[$col] = array();
		foreach ($array as $k => $row) { $colarr[$col]['_'.$k] = strtolower($row[$col]); }
	    }
	    $eval = 'array_multisort(';
	    foreach ($cols as $col => $order) {
		$eval .= '$colarr[\''.$col.'\'],'.$order.',';
	    }
	    $eval = substr($eval,0,-1).');';
	    eval($eval);
	    $ret = array();
	    foreach ($colarr as $col => $arr) {
		foreach ($arr as $k => $v) {
		    $k = substr($k,1);
		    if (!isset($ret[$k])) $ret[$k] = $array[$k];
		    $ret[$k][$col] = $array[$k][$col];
		  }
	    }
	    return $ret;

	}

    

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }

	
		        

}
    
