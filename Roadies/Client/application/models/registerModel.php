<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class registerModel extends CI_Model{
   public function __construct(){
      parent::__construct();
      $this->load->database();
   }
   public function duplicate_data($username="",$email="",$aadhaar="",$cpan_no=""){
      $this->db->select('*');
      $this->db->where('UserName',$username);
      $this->db->or_where('Email',$email);
      $this->db->or_where('Adhaar_no',$aadhaar);
      $this->db->or_where('Pan_card',$cpan_no);
      $result = $this->db->get('customer_master');
      return $result->result();
   }
   public function tduplicate_data($username="",$email="",$Company_email="",$aadhaar="",$cpan_no=""){
      $this->db->select('*');
      $this->db->where('UserName',$username);
      $this->db->or_where('Email',$email);
      $this->db->or_where('Company_email',$Company_email);
      $this->db->or_where('Addhar_no',$aadhaar);
      $this->db->or_where('Pan_no',$cpan_no);
      $result = $this->db->get('transporter_master');
      return $result->result();
   }
   public function checkLoger($params){
      $this->db->select('*');      
      if($params['password'] == ""){
         $this->db->where('UserName',$params['userId']);            
      }else{
         $this->db->where('UserName',$params['userId']);
         $this->db->where('Password',$params['password']);
      }  
      if($params['type'] == "customer"){
         $result = $this->db->get('customer_master');
      }elseif($params['type'] == "transporter"){
         $result = $this->db->get('transporter_master');
      }elseif($params['type'] == "partner"){
         $result = $this->db->get();
      }
      return $result->result_array();
   }

   
}
?>