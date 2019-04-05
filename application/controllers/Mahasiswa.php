<?php
class mahasiswa extends CI_Controller
{

    var $API = "";

    function __construct()
    {
        parent::__construct();
        $this->API = "http://pkl.notaxcloth.com/dkwebhost/api/mahasiswa";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    // menampilkan data mahasiswa
    function index()
    {

        $data['content'] = 'mahasiswa/data';
        $data['datamahasiswa'] = json_decode($this->curl->simple_get($this->API . '/mahasiswa'));
        $this->load->view('mahasiswa/list', $data);
    }

    // insert data mahasiswa
    function create()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'nim'       =>  $this->input->post('nim'),
                'nama'      =>  $this->input->post('nama'),
                'prodi' =>  $this->input->post('prodi')
            );
            $insert =  $this->curl->simple_post($this->API . '/mahasiswa', $data, array(CURLOPT_BUFFERSIZE => 10));
            if ($insert) {
                $this->session->set_flashdata('hasil', 'Insert Data Berhasil');
            } else {
                $this->session->set_flashdata('hasil', 'Insert Data Gagal');
            }
            redirect('mahasiswa');
        } else {
            $this->load->view('mahasiswa/create');
        }
    }









    // edit data mahasiswa
    function edit()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'nim'       =>  $this->input->post('nim'),
                'nama'      =>  $this->input->post('nama'),
                'prodi' =>  $this->input->post('prodi')
            );
            $update =  $this->curl->simple_put($this->API . '/mahasiswa', $data, array(CURLOPT_BUFFERSIZE => 10));
            if ($update) {
                $this->session->set_flashdata('hasil', 'Update Data Berhasil');
            } else {
                $this->session->set_flashdata('hasil', 'Update Data Gagal');
            }
            redirect('mahasiswa');
        } else {
            $params = array('nim' =>  $this->uri->segment(3));
            $data['datamahasiswa'] = json_decode($this->curl->simple_get($this->API . '/mahasiswa', $params));

            $this->load->view('mahasiswa/edit', $data);
        }
    }

    // delete data mahasiswa
    function delete($id)
    {
        if (empty($id)) {
            redirect('mahasiswa');
        } else {
            $delete =  $this->curl->simple_delete($this->API . '/mahasiswa', array('nim' => $id), array(CURLOPT_BUFFERSIZE => 10));
            if ($delete) {
                $this->session->set_flashdata('hasil', 'Delete Data Berhasil');
            } else {
                $this->session->set_flashdata('hasil', 'Delete Data Gagal');
            }
            redirect('mahasiswa');
        }
    }
}
