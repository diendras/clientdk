<?php
class Nilai extends CI_Controller
{

    var $API = "";

    function __construct()
    {
        parent::__construct();
        $this->API = "http://pkl.notaxcloth.com/dkwebhost/api/nilai";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    // menampilkan data nilai
    function index()
    {

        $data['content'] = 'nilai/data';
        $data['datanilai'] = json_decode($this->curl->simple_get($this->API . '/nilai'));
        $this->load->view('nilai/list', $data);
    }

    // insert data nilai
    function create()
    {
        if (isset($_POST['submit'])) {
            $data = array(

                'thakd'      =>  $this->input->post('thakd'),
                'nim'       =>  $this->input->post('nim'),
                'kdmk'      =>  $this->input->post('kdmk'),

                'nilai' =>  $this->input->post('nilai')
            );
            $insert =  $this->curl->simple_post($this->API . '/nilai', $data, array(CURLOPT_BUFFERSIZE => 10));
            if ($insert) {
                $this->session->set_flashdata('hasil', 'Insert Data Berhasil');
            } else {
                $this->session->set_flashdata('hasil', 'Insert Data Gagal');
            }
            redirect('nilai');
        } else {
            $this->load->view('nilai/create');
        }
    }









    // edit data nilai
    function edit()
    {
        if (isset($_POST['submit'])) {
            $data = array(

                'thakd'      =>  $this->input->post('thakd'),
                'nim'       =>  $this->input->post('nim'),
                'kdmk'      =>  $this->input->post('kdmk'),
                'nilai' =>  $this->input->post('nilai')
            );
            $update =  $this->curl->simple_put($this->API . '/nilai', $data, array(CURLOPT_BUFFERSIZE => 10));
            if ($update) {
                $this->session->set_flashdata('hasil', 'Update Data Berhasil');
            } else {
                $this->session->set_flashdata('hasil', 'Update Data Gagal');
            }
            redirect('nilai');
        } else {
            $params = array('nim' =>  $this->uri->segment(3));
            $data['datanilai'] = json_decode($this->curl->simple_get($this->API . '/nilai', $params));

            $this->load->view('nilai/edit', $data);
        }
    }

    // delete data nilai
    function delete($id)
    {
        if (empty($id)) {
            redirect('nilai');
        } else {
            $delete =  $this->curl->simple_delete($this->API . '/nilai', array('nim' => $id), array(CURLOPT_BUFFERSIZE => 10));
            if ($delete) {
                $this->session->set_flashdata('hasil', 'Delete Data Berhasil');
            } else {
                $this->session->set_flashdata('hasil', 'Delete Data Gagal');
            }
            redirect('nilai');
        }
    }
}
