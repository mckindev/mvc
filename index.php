<?php 
        include 'system/libs/dController.php';
        include 'system/libs/Load.php';
        include 'system/libs/Database.php';
        include 'system/libs/dModel.php';
        include 'app/controllers/index.php';

        $index = new index();
        $index->home();

    ?>