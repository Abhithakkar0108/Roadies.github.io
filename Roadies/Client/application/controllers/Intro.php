<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Intro extends CI_Controller{
    public function __construct(){
        parent::__construct();
        // error_reporting(0);
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('registerModel','Register_Model');
        $this->load->database();
    }

    public function index(){
        $this->template->set('title','Roadies | Home');
        $this->template->load('template','content','layouts/intro');
    }

    public function form($Type = NULL){
        $data['Type'] = NULL;
        if($Type == "Customer"){
            $data['Type'] = "Customer";
        }elseif($Type == "Transporter"){
            $data['Type'] = "Transporter";
        }
        $this->template->set('title','Roadies | registration');
        $this->template->load('template','content','layouts/registration',$data);
    }

    public function duplicate(){
        $username = $this->input->post('c_username');
        $email = $this->input->post('cemail');
        $aadhaar = $this->input->post('caadhaar');
        $cpan_no = $this->input->post('cpan_no');
        $check = $this->Register_Model->duplicate_data($username,$email,$aadhaar,$cpan_no);
        if(count($check) > 0){
            echo "false";
        }else{
            echo "true";
        }
    }

    public function tduplicate(){
        $username = $this->input->post('co_username');
        $email = $this->input->post('temail');
        $Company_email = $this->input->post('co_email');
        $aadhaar = $this->input->post('taadhar');
        $cpan_no = $this->input->post('tpan_no');
        $check = $this->Register_Model->tduplicate_data($username,$email,$Company_email,$aadhaar,$cpan_no);
        if(count($check) > 0){
            echo "false";
        }else{
            echo "true";
        }
    }

    public function saveInfo(){
        $TODO = $this->input->post('todo');
        $data = array();
        if($TODO == "customer"){
            $data = array(
                "FirstName" => $this->input->post("Cfname"),
                "LastName" => $this->input->post("clname"),
                "Contact" => $this->input->post("cmobile_no"),
                "Email" => $this->input->post("cemail"),
                "Pan_card" => $this->input->post("cpan_no"),
                "Address" => $this->input->post("caddress"),
                "Adhaar_no" => $this->input->post("caadhaar"),
                "UserName" => $this->input->post("c_username"),
                "Password" => md5($this->input->post("c_password"))
            );
            $result = $this->db->insert("customer_master",$data);
        }elseif($TODO == "transporter"){
            $data = array(
                "FirstName" => $this->input->post("tfname"),
                "Lastname" => $this->input->post("tlname"),                
                "Addhar_no" => $this->input->post("taadhar"),
                "Pan_no" => $this->input->post("tpan_no"),
                "Contact_no" => $this->input->post("tcontact"),
                "Email" => $this->input->post("temail"),
                "CompanyName" => $this->input->post("coname"),
                "Location" => $this->input->post("C_add"),
                "City" => $this->input->post("city"),
                "State" => $this->input->post("state"),
                "Company_contact" => $this->input->post("co_contact"),
                "GST_no" => $this->input->post("gst"),
                "Company_email" => $this->input->post("co_email"),
                "UserName" => $this->input->post("co_username"),
                "Password" => md5($this->input->post("copassword")),
                "BankName" => $this->input->post("bankn"),
                "AccountHolder" => $this->input->post("A_holder"),
                "Account_no" => $this->input->post("AC"),
                "IFSC" => $this->input->post("ifsc")
            );
            $result = $this->db->insert("transporter_master",$data);
        }
           
        echo $result;    
    }
    public function match(){
        $gst = $this->input->post("gst");
        $pan = $this->input->post("pan_card");
        $pattern = "/".$pan."/i";
        $match = preg_match($pattern,$gst);
        if($match == 1){
            echo "true";
        }else{
            echo "false";
        }
    }
    public function loginload($type){
        $data['type'] = $type;
        $this->template->set('title','Roadies | Login');
        $this->template->load('template','content','layouts/login',$data);
    }
    public function checkLoger(){
        $data = array();
        $data['type'] = $this->input->post('type');
        $data['userId'] = $this->input->post('userId');
        $data['password'] = $this->input->post('password');
        $check = $this->Register_Model->checkLoger($data);
        if(count($check) > 0){
            echo "true";
        }else{
            echo "false";
        }
    }
    public function login(){
        $data['type'] = $this->input->post('type');
        $data['userId'] = $this->input->post('userId');
        $data['password'] = $this->input->post('password');
        $check = $this->Register_Model->checkLoger($data);
        $check = $check[0];
        // echo "<pre>"; print_r($check);die;       
        if($check){
            if(array_key_exists('CId',$check) && $check['CId'] != NULL){
                $usersArray = array(
                    'UserName' => $check['UserName'],
                    'Email' => $check['Email'],
                    'CId' => $check['CId'],
                    'FirstName' => $check['FirstName'],
                    'LastName' => $check['LastName']
                );
            }else{
                $usersArray = array(
                    'UserName' => $check['UserName'],
                    'Email' => $check['Email'],    
                    'TId' => $check['TId'],
                    'FirstName' => $check['FirstName'],
                    'LastName' => $check['LastName']
                );
            }
            $session = $this->session->set_userdata($usersArray);
            $logData=array();
            if(array_key_exists('CId',$check) && $check['CId'] != NULL){
                $logData['TId']= NULL;
                $logData['CId']=$check['CId'];
            }else{
                $logData['TId']=$check['TId'];
                $logData['CId']=NULL;
            }            
            $logData['UserName']=$check['UserName'];
            $logData['LogIP']=$_SERVER['REMOTE_ADDR']?:($_SERVER['HTTP_X_FORWARDED_FOR']?:$_SERVER['HTTP_CLIENT_IP']);
            $logData['LogTime']=date('U');
            $logData['Remark']=NULL;
            if(isset($_SESSION['TId'])!=NULL || isset($_SESSION['CId'])!=NULL){
                $logData['Remark']="LOGIN: - Completed";
            }
            $this->db->insert('logmaster',$logData);
        }else{
            $this->session->unset_userdata($usersArray);
        }
        echo "true";
    }
}
?>