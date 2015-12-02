<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Insert_ctrl extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('insert_model');
    }

    public function index() {

        $config = array();

        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        $this->form_validation->set_rules('btitle', 'Title', 'required|xss_clean|is_unique[blogs.blog_title]');

        $this->form_validation->set_rules('btext', 'Text', 'required');

        $this->form_validation->set_rules('bauthor', 'Author', 'required|min_length[5]|max_length[15]');

        $this->form_validation->set_rules('bdate', 'Date', 'required');
        $this->load->view("site_header");
        $this->load->view("site_nav");

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('insert_view');
            $this->load->view("site_footer");
        } else {
            $data = array(
                'blog_title' => $this->input->post('btitle'),
                'blog_text' => $this->input->post('btext'),
                'blog_author' => $this->input->post('bauthor'),
                'blog_date' => $this->input->post('bdate')
            );
            $this->insert_model->form_insert($data);
            $data['message'] = 'Blog Post Inserted Successfully';

            $this->load->view('insert_view', $data);

        }
    }

}

?>
    </div>
