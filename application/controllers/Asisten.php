<?php

class Asisten extends CI_Controller {
    public function __construct() 
    {
        parent::__construct();  
    
    }

    public function index()
	{
		$this->load->view('login');
	}

    public function ceklogin()
    {
        if(isset($_POST['login'])){
            $user = $this->input->post('user',true);
            $pass = $this->input->post('pwd',true);
            $cek = $this->asisten_model->proseslogin($user,$pass);
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
            redirect(base_url());      
            }                       
        }
    }
    
    
    public function v_beranda()
    {
        $this->load->view('v_beranda');
    }
    
    public function v_home()
    {
        $this->load->view('v_home');
    }

    public function v_nilai_asisten()
    {
        $data   = array();
        $this->load->model('asisten_model');
        $this->load->helper('url');
        $data= $this->asisten_model->get_nilai_asisten();  
	   $data = array('result' => $data);        
	   $this->load->view('v_nilai_asisten', $data); 
    }
   
    public function v_data_asisten()
    {
        $data   = array();
        $this->load->model('asisten_model');
        $this->load->helper('url');
        $data = $this->asisten_model->get_data_asisten();  
        $data = array('result' => $data);
        $this->load->view('v_data_asisten', $data);  
    }

    public function edit_data_asisten()
    {
        $this->load->model("asisten_model");

        // print_r($data);
        $this->asisten_model->update_data_asisten();

        redirect('asisten/v_data_asisten');
    }

    public function form_nilai_asisten()
    {
		$this->load->model('asisten_model');
		$ass = $this->asisten_model->get_data_asisten();
		$ass = array('ass' => $ass);
        $action = $this->input->post('tambahnilai');
        if($action == 'Tambah')
        {
            $this->load->view('form_nilai_asisten',$ass);
        }    
    }

    public function form_data_asisten()
    {
        $action = $this->input->post('tambahdata');
        if($action == 'Tambah')
        {
            $this->load->view('form_data_asisten');
        } 
    }

    public function v_kriteria()
    {
        $data   = array();
        $this->load->model('asisten_model');
        $this->load->helper('url');
        $data = $this->asisten_model->get_kriteria();   
	$data = array('result' => $data);
        $this->load->view('v_kriteria', $data);   
    }

    public function insert_data_asisten()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("nama", "Nama", 'required|alpha');
        $this->form_validation->set_rules("npm", "NPM", 'required|alpha_numeric');
        $this->form_validation->set_rules("jurusan", "Jurusan", 'required|alpha');
        $this->form_validation->set_rules("ipk", "IPK", 'required|numeric');

        if($this->form_validation->run()==TRUE)
        {
            //true
            $this->load->model("asisten_model");
            $data = array(
                "nama"          =>$this->input->post("nama"),
                "npm"           =>$this->input->post("npm"),
                "jurusan"       =>$this->input->post("jurusan"),
                "ipk"           =>$this->input->post("ipk")
            );
            $this->db->set($data);
            $this->asisten_model->insert_data_asisten();
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
        // var_dump ($id);
        
        if ($id)
        {
            $this->asisten_model->delete_data_asisten($id);
            redirect('asisten/v_data_asisten');
            // $this->load->view('v_data_asisten', $data);
        }
        else{
            redirect('asisten/v_data_asisten');
        }
    }

    public function update_data_asisten()
    {
        $this->load->model("asisten_model");
        $id = $this->uri->segment(3);
        $data['asisten'] = $this->asisten_model->ambil_data_asisten($id);
        //print_r($data['asisten']);
        $this->load->view('edit_data_asisten', $data);
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
            $this->asisten_model->insert_nilai_asisten();
            redirect(site_url("asisten/v_nilai_asisten"));
        }
        else
        {
            //false
        }
    }

    public function delete_nilai_asisten()
    {
        $this->load->model("asisten_model");
        $id = $this->uri->segment(3);
        // var_dump ($id);
        
        if ($id)
        {
            $this->asisten_model->delete_nilai_asisten($id);
            redirect('asisten/v_nilai_asisten');
            // $this->load->view('v_data_asisten', $data);
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
        //print_r($data['asisten']);
        $this->load->view('edit_nilai_asisten', $data);
    }

    public function edit_nilai_asisten()
    {
        $this->load->model("asisten_model");

        $id = $this->uri->segment(3);
        // print_r($data);
        $this->asisten_model->update_nilai_asisten($data, $id);

        redirect('asisten/v_nilai_asisten');
    }
    
    public function v_hasil_perhitungan()
    {
        $data = array();
        $this->load->model('asisten_model');
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
        
        $this->load->view('v_hasil_perhitungan', $data);
    }
    
    public function v_ranking()
    {
        $this->load->model('asisten_model');
	$data['kriteria'] = $this->asisten_model->get_kriteria();
        $data['nilaimax'] =  $this->asisten_model->getMax();
        $data['matkul'] = $this->asisten_model->nilai();
        
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

        $this->load->view('v_ranking',$data);
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
    
