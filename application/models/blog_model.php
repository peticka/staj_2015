<?php
class Blog_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    //Gets all entries in the blog table
    public function get_all_entries($per_page=0, $offset=0)
    {
        $this->db->select('blog_title, blog_text, blog_author');
        $this->db->limit($per_page, $offset);
        $query = $this->db->get('blogs');

        if ($query->num_rows() > 0)
        {
            return $query->result();
        } else {
            return array();
        }

    }

    public function get_count(){
        $this->db->select("COUNT(*) as cnt");
        $this->db->from('blogs');
        $count = $this->db->get()->row();
        return $count->cnt;
    }

    //gets a single entry based on its url title
    public function get_entry($blog_title)
    {
        $this->db->select('blog_title, blog_text, blog_author')->where('blog_title', $blog_title);
        $query = $this->db->get('blogs', 1);

        if ($query->num_rows() == 1)
        {
            return $query->row();
        } else {
            return false;
        }
    }
}

/* End of file blog_model.php */
/* Location: ./tumbleupon/models/blog_model.php */
?>