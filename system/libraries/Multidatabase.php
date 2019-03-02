<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CI_Multidatabase {

         public function __construct() {
                 $this->load();
         }

         /**
          * Load the databases and ignore the old ordinary CI loader which only allows one
          */
         public function load() {
                 $CI =& get_instance();

                 $CI->db = $CI->load->database('default', TRUE);
                 $CI->db_akbar = $CI->load->database('db_akbar', TRUE);
         }

         // Add more functions two use commonly.
          public function save(){
          }
}

?>
