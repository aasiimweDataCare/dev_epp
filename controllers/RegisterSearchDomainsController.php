<?php
/**
 * Created by PhpStorm.
 * User: Apollo Asiimwe
 * Date: 12/23/2016
 * Time: 4:09 AM
 */


if (!defined('BASEPATH')) exit('No direct script access allowed');

class RegisterSearchDomainsController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->library('form_validation');
        $this->load->library('email');
        $this->load->library('pagination');
        $this->load->library('whois');
    }


    public function index()
    {
        $pageName = array('page_name' => 'Search Domains');
        $this->session->set_userdata($pageName);
        $data='';
        $this->load->view('header');
        $this->load->view('left_nav_menu', $data);
        $this->load->view('Register/register_search_domain_view', $data);
        $this->load->view('footer');
        $this->load->view('footer_close_tags');

    }




}

/* End of file welcome.php */
/* Location: ./application/controllers/EppMainController.php */
