<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
    
      function __construct(){
       parent::__construct();
        
       $this->load->model('modelapp'); 
       //$this->load->library('pagination');
       $this->load->helper(array('url','text','form')); //load helper url 
   }
	
	public function index()
	{
         $data=array(
            'title'=>'Crud - belajar ci3',
            'active_crud'=>'active',
            'ambil_info'=>$this->modelapp->TampilData('tblinfo'),
        );
        
        $this->load->view('element/header',$data);
		$this->load->view('v_crud');
        $this->load->view('element/footer');
	}
    
    public function tambahdata()
	{
         $data=array(
            'title'=>'Crud - belajar ci3',
            'active_crud'=>'active',
            'kdinfo'=>$this->modelapp->getKodeInfo(),
            
        );
        
        $this->load->view('element/header',$data);
		$this->load->view('v_formcrud');
        $this->load->view('element/footer');
	}
    
    public function prosestambah(){
        
        $data = array (
           
            'kdinfo' => $this->input->post('kdinfo'),
            'tglinfo' => $this->input->post('tglinfo'),
            'judulinfo' => $this->input->post('judulinfo'),
            'isiinfo' => $this->input->post('isiinfo'),
        );
        
        $this->modelapp->insertData('tblinfo',$data); //akses model untuk menyimpan ke database   
       
        if($data >= 1) {
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\">Data Berhasil Ditambahkan </div></div>");
                redirect('crud'); //jika berhasil maka akan ditampilkan view vupload
            }else{

                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\">Gagal Tambah coba lagi !</div></div>");
                redirect('crud'); //jika gagal maka akan ditampilkan form upload
            }
         
                
    }
    
    
    public function editdata(){


            $data = array(
                'title' => 'Edit Crud Blelajar CI' , 
                'active_crud' => 'active',
                'edit_info'=>$this->modelapp->getEditData(),
                
                );
            $this->load->view('element/header',$data);
            $this->load->view('v_formeditcrud');
            $this->load->view('element/footer');

    }

    public function prosesedit(){

        $id['kdinfo'] = $this->input->post('kdinfo');
        $data = array(                
          
          'judulinfo'=>$this->input->post('judulinfo'),
          'isiinfo'=>$this->input->post('isiinfo'),
          'tglinfo'=>$this->input->post('tglinfo'),
                          
        );

        $this->modelapp->updateData('tblinfo',$data,$id); //akses model untuk menyimpan ke database

        if($data >= 1) {
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\">Data Berhasil Diupdate </div></div>");
                redirect('crud'); //jika berhasil maka akan ditampilkan view vupload
            }else{

                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\">Gagal Update coba lagi !</div></div>");
                redirect('crud'); //jika gagal maka akan ditampilkan form upload
            }
    }
    
     public function hapusinfo(){
        
        $id['kdinfo'] = $this->uri->segment(3);
        $this->modelapp->deleteData('tblinfo',$id);

        redirect('crud'); //jika berhasil maka akan ditampilkan view vupload
            
       
    }
    
}
