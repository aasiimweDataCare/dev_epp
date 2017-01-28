<?php
/**
 * Created by PhpStorm.
 * User: Apollo Asiimwe
 * Date: 12/23/2016
 * Time: 4:09 AM
 */


if (!defined('BASEPATH')) exit('No direct script access allowed');

class AccountViewClientController extends CI_Controller
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
        $pageName = array('page_name' => 'Summary');
        $this->session->set_userdata($pageName);
        $data = '';
        $this->load->view('header');
        $this->load->view('left_nav_menu', $data);
        $this->load->view('AccountsViewClient/summary_view', $data);
        $this->load->view('footer');
        $this->load->view('footer_close_tags');

    }


    public function manageLogins()
    {
        $pageName = array('page_name' => 'Manage Logins');
        $this->session->set_userdata($pageName);
        $data = '';
        $this->load->view('header');
        $this->load->view('left_nav_menu', $data);
        $this->load->view('AccountsViewClient/manage_logins_view', $data);
        $this->load->view('footer');
        $this->load->view('footer_close_tags');

    }

    public function pricingAndPolicy()
    {
        $pageName = array('page_name' => 'Pricing And Policy');
        $this->session->set_userdata($pageName);
        $data = '';
        $this->load->view('header');
        $this->load->view('left_nav_menu', $data);
        $this->load->view('AccountsViewClient/pricing_and_policy_view', $data);
        $this->load->view('footer');
        $this->load->view('footer_close_tags');

    }

    public function proFomaInvoice()
    {
        $pageName = array('page_name' => 'Pro-Foma Invoice');
        $this->session->set_userdata($pageName);
        $data = '';
        $this->load->view('header');
        $this->load->view('left_nav_menu', $data);
        $this->load->view('AccountsViewClient/pro_foma_invoice_view', $data);
        $this->load->view('footer');
        $this->load->view('footer_close_tags');

    }

    public function viewPricing()
    {
        $pageName = array('page_name' => 'View Pricing');
        $this->session->set_userdata($pageName);
        $data = '';
        $this->load->view('header');
        $this->load->view('left_nav_menu', $data);
        $this->load->view('AccountsViewClient/view_pricing_view', $data);
        $this->load->view('footer');
        $this->load->view('footer_close_tags');

    }

    public function creditStatement()
    {
        $pageName = array('page_name' => 'Credit Statement');
        $this->session->set_userdata($pageName);
        $data = '';
        $this->load->view('header');
        $this->load->view('left_nav_menu', $data);
        $this->load->view('AccountsViewClient/credit_statement_view', $data);
        $this->load->view('footer');
        $this->load->view('footer_close_tags');

    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/EppMainController.php */
