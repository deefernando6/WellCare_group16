<?php
class Orders extends Controller{

    public function __construct(){
        $this->orderModel=$this->model('Order');
        
    }
    public function uploadPrescription(){
        $data=0;
        $this->view('UploadPrescription', $data);

    }

    public function makeOrder(){

        if( $_SESSION==NULL){
            
            $_SESSION['active'] = false;
            $_SESSION['cart']=array();}
       
        $this->view('MakeOrder','footer');
       
  
        
    }
    public function getmaincategories(){
        header('Content-Type: application/json');
		echo json_encode($this->orderModel->getmaincategories());

        
  
      }
      
    
    public function getsubcategories(){
       
       
        $obj = file_get_contents('php://input');
        $json = json_decode($obj);
        header('Content-Type: application/json');
		echo json_encode($this->orderModel->getsubcategories($json->id));
        
  
      }

    public function goToCart(){
        $data=0;
        $this->view('Cart', $data);

    }
    public function getmedicines(){
       
       
        $obj = file_get_contents('php://input');
        $json = json_decode($obj);
        header('Content-Type: application/json');
		echo json_encode($this->orderModel->getmedicines($json->id));
        
  
      }
      


}



    