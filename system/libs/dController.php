<?php 
    class dController
    {
        protected $load = array();
        public function __construct()
        {
            $this->load = new Load();
        }
    }
?>