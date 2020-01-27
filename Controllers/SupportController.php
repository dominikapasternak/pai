<?php

require_once 'AppController.php';
require_once __DIR__.'//..//Models//Post.php';

class BoardController extends AppController {

    public function getLatestPhotos()
    {   
        $post1 = new Post('group1.png', 2, 0);
        $post2 = new Post('group2.png', 45, 0);
        

        $data = [$post1, $post2];
        $this->render('board', ['posts' => $data]);
    }
}