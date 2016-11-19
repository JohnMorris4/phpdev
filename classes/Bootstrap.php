<?php


class Bootstrap {
    private $controller;
    private $action;
    private $request;


    public function __construct($request){
        $this->request = $request;
        if($this->request['controller'] == ""){
            $this->controller = 'home';
        } else {
            $this->controller = $this->request['controller'];
        }
        if($this->request['action'] == ""){
            $this->action = "index";
        } else {
            $this->action = $this->request['action'];
        }


    }
    public function  createController(){
        //check class
        if(class_exists($this->controller)){
            $parents = class_parents($this->controller);
            //check extends
            if(in_array("Controller", $parents)){
                //check to see if the controller is included in the parents
                if(method_exists($this->controller, $this->action)){
                    return new $this->controller($this->action, $this->request);
                } else {
                    //method does not exist
                    echo '<h1>Method does not exist</h1>';
                    return;
                }
            } else {
                //base controller does not exist
                echo '<h1>Base controller not found</h1>';
                return;
            }
        } else {
             //Controller class does not exist
             echo '<h1>Controller Class does not exist</h1>';
             return;
        }
    }
}


?>
