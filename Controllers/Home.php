<?php
 

 class Home extends Controllers{

    public function __construct(){
        parent::__construct();
    }

    public function home(){
       // echo "Mensaje desde el controlador";
       //se envia la clase y la vista 
       $data['page_id']=1;
       $data['tag_page']= "Home";
       $data['page_title']= "Pagina principal";
       $data['page_name']= "home";
       $data['page_content']= "Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa 
                                illo voluptatibus obcaecati fugit aperiam tempore atque, 
                                iusto dolorem esse eius, officiis voluptates perferendis qui! 
                                Suscipit, ab. Doloremque nemo nobis quae?";

       $this->views->getView($this,"home", $data);
    }

    public function insert(){
       $data= $this->model->setUser( "Maria", 20);
       $data= $this->model->setUser( "Milena", 30);
       print_r($data);
    }

    public function verUsuario($id){
      $data = $this->model->getUser($id);
      print_r($data);
    }

    public function actualizar(){
       $data=$this->model->updateUser(1,"roberto",20);
       print_r($data);

    }

    public function verUsuarios(){
      $data = $this->model->getUsers();
      print_r($data);
    }

    public function eliminarUsuario($id){

      $data = $this->model->delUser($id);
      print_r($data);
    }
 }

?> 