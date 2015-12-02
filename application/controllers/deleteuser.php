<?php
/*
 * File Name: deleteuser.php
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class deleteuser extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        //load the user model
        $this->load->model('user_model');
    }

    //index function
    function index()
    {
        //get the user list

        $this->load->view('site_header');
        $this->load->view('site_nav');
        $data['user_list'] = $this->user_model->get_user_list();
        $this->load->view('delete_user_view', $data);
        $this->load->view('site_footer');
    }

    //delete user record from db
    function delete_user($id)
    {
        //delete user record
        $this->db->where('id', $id);
        $this->db->delete('user_login');
        redirect('deleteuser/index');
    }
}
?>