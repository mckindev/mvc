<?php 
    class Load
    {
        public function __construct()
        {
            
        }

        public function view($filename)
        {
            include 'app/views/'.$filename.'.php';
        }
        
        public function model($filename)
        {
            include 'app/models/'.$filename.'.php';
            return new $filename();
        }
    }
?>