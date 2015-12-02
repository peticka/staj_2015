<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blog extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    //the home page of the blog
    public function index($offset=0)
    {
        $this->load->model('Blog_model', 'blogs');

        $config = array();
        $config['base_url']= site_url('/blog/index/');
        $config['total_rows']=$this->blogs->get_count();
        $config['per_page']=3;

        //$config['num_links']=1;
        $this->pagination->initialize($config);
        $this->load->view('site_nav');
        $this->load->view('site_header');
        $entries['query'] = $this->blogs->get_all_entries($config['per_page'], $offset);
        $this->load->view('blog/index', $entries);
        $this->load->view('site_footer');
    }



    //For an individual entry, the url title is used to grab
    //the entry
    public function entry($blog_title = "")
    {
        $this->load->helper('url');

        if($blog_title){
            $this->load->view('site_header');
            $this->load->view('site_nav');
            $this->load->model('Blog_model', 'blogs');

            $entry_data['post'] = $this->blogs->get_entry(urldecode($blog_title));

            if(!$entry_data['post']){
                redirect('blog', 'location');
            } else {
                $this->load->view('/blog/entry', $entry_data);
            }
        } else {
            redirect('/blog', 'location');
        }
    }
}

/* End of file blog.php */
/* Location: ./system/tumbleupon/controllers/blog.php */