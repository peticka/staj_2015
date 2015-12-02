<?php
/*
 * File Name: user_model.php
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_model extends CI_Model
{
    function __construct()
    {
        //Call the Model constructor
        parent::__construct();
    }

    //fetch all user records
    function get_user_list()
    {
        $query = $this->db->get('user_login');
        return $query->result();
    }
}
?>