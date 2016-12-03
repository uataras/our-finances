<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migrate extends CI_Controller {

    public function index($index)
    {
        $this->load->library('migration');

        if ( !$this->migration->version($index) ){
            show_error($this->migration->error_string());
        }else{
            echo 'migrated <strong>#' . $index . '</strong>';
        }
    }
}