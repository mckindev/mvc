<?php 
    class index extends dController{
        public function __construct()
        {
            $data = array();
            parent::__construct();
        }

        public function home()
        {
            $this->load->view('header');

            $homemodel = $this->load->model('homemodel');
            $data['category'] = $homemodel->category();
            $this->load->view('home', $data);
            var_dump($data);

            $this->load->view('footer');
        }
    }
?>