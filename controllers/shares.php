<?php
class Shares extends Controller{
     protected function Index(){
        $viewmodel = new ShareModel();
        $this->ReturnView($viewmodel->Index(), true);


    }
    protected function add(){
        if(!$_SESSION['is_logged_in']){
            header('Location:'.ROOT_URL.'Shares');
        }
        $viewmodel = new ShareModel();
        $this->ReturnView($viewmodel->add(), true);


    }
}




?>
