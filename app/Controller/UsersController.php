<?php
class UsersController extends AppController {
    
    public function admin_index(){
        $this->User->recursive = 0;
    }
    
}
