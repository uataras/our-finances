<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Cabinet class.
 *
 * @extends CI_Controller
 */
class Cabinet extends CI_Controller
{
    /**
     * Cabinet __construct.
     *
     * @access public
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->library(array('session'));
        $this->load->model('cabinet_model');
    }


    /**
     * index function.
     *
     * @access public
     * @return void
     */
    public function index()
    {
        $data = new stdClass();

        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('user/cabinet/cabinet');
        $this->load->view('footer');
    }
}