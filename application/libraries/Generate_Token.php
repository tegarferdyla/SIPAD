<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Generate_Token extends CI_Model
{
  function get_token($panjang){
    $token = array(
    range(1,9),
    range('a','z'),
    range('A','Z')
  );
  $karakter = array();
  foreach($token as $key=>$val){
    foreach($val as $k=>$v){
      $karakter[] = $v;
    }
  }
  $token = null;
  for($i=1; $i<=$panjang; $i++){
   // mengambil array secara acak
    $token .= $karakter[rand($i, count($karakter) - 1)];
  }
  return $token;
  }
  function token_customer(){
    $token_customer = get_token(50);
    return $token_customer;
  }
  // panjang 15 karakter
  // echo get_token(15);
  // echo '<hr />';
  // panjang 50 karakter
  // echo get_token(50);
}