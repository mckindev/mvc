<?php 
    class dModel
    {
        protected $db = array();
        public function __construct()
        {
            $this->db = new Database();
        }
    }
?>