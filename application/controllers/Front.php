<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	public function index()
	{
	    $this->load->model('proje_model');
        $data['articles'] = $this->proje_model->getArticle();
        $data['category'] = $this->proje_model->getCategory();
        $data['news'] = $this->proje_model->getNews();
        $data['slider'] = $this->proje_model->getSlider();

		$this->load->view('frontend/home',$data,);
	}

	public function __construct()
    {
        parent::__construct();
    }
}

