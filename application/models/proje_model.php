<?php

class proje_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
            $this->load->database();
    }

    public function getArticle(){
        $query = $this->db->get('articles');
        return $query->result_array();
    }

    public function getCategory(){
        $query = $this->db->get('category');
        return $query->result_array();
    }

    public function getNews(){
        $query = $this->db->get('news');
        return $query->result_array();
    }

    public function getSlider(){
        $query = $this->db->get('slider');
        return $query->result_array();
    }

}
