<?php 
        class homemodel extends dModel
        {
            public function __construct()
            {
                parent::__construct();
            }

            public function category()
            {
                $sql = 'SELECT * FROM product';
                $query = $this->db->query($sql);
                $result = $query->fetchAll();
                return $result;


            }
        }
?>