<?php
/**
 * Created by PhpStorm.
 * User: Apollo Asiimwe
 * Date: 12/23/2016
 * Time: 4:09 AM
 */


if (!defined('BASEPATH')) exit('No direct script access allowed');

class ContactsController extends CI_Controller
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
        $this->load->model('Setups_model');
    }

    public function index()
    {
        $pageName = array('page_name' => 'Search Contact');
        $this->session->set_userdata($pageName);
        $data = '';
        $this->load->view('header');
        $this->load->view('left_nav_menu', $data);
        $this->load->view('Contact/contacts_search_view', $data);
        $this->load->view('footer');
        $this->load->view('footer_close_tags');

    }

    public function create()
    {
        $pageName = array('page_name' => 'Create Contact');
        $this->session->set_userdata($pageName);
        $data['country'] = $this->Setups_model->get_country();

        $this->load->view('header');
        $this->load->view('left_nav_menu', $data);
        $this->load->view('Contact/contacts_create_view', $data);
        $this->load->view('footer');
        $this->load->view('footer_close_tags');

    }

    public function create_processor()
    {
        $pageName = array('page_name' => 'Create Contact');
        $this->session->set_userdata($pageName);
        $data['country'] = $this->Setups_model->get_country();
        //set validation rules

        $this->form_validation->set_rules('names', 'Names', 'trim|required|callback_alpha_only_space');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|min_length[6]');
        $this->form_validation->set_rules('organisation', 'Organisation', 'trim|callback_alpha_only_space');
        $this->form_validation->set_rules('address', 'Address', 'trim|min_length[3]');
        $this->form_validation->set_rules('street1', 'Street 1', 'trim|min_length[3]');
        $this->form_validation->set_rules('street2', 'Street 2', 'trim|min_length[3]');
        $this->form_validation->set_rules('street3', 'Street 3', 'trim|min_length[3]');
        $this->form_validation->set_rules('city', 'City', 'trim|min_length[3]');
        $this->form_validation->set_rules('state_province', 'State/Province', 'trim|min_length[3]');
        $this->form_validation->set_rules('postcode', 'Postcode', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('country', 'Country', 'callback_combo_check');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required|max_length[10]');
        $this->form_validation->set_rules('fax', 'Fax', 'trim');
        $this->form_validation->set_rules('created_after', 'Created After', 'trim');
        $this->form_validation->set_rules('created_before', 'Created Before', 'trim');


        if ($this->form_validation->run() == FALSE) {
            //fail validation
            $this->load->view('header');
            $this->load->view('left_nav_menu', $data);
            $this->load->view('Contact/contacts_create_view', $data);
            $this->load->view('footer');
            $this->load->view('footer_close_tags');
        } else {
            //pass validation
            $s = substr(str_shuffle(str_repeat(defaultRandomStringArray, 6)), 0, 6);
            $data = array(
                'names' => $this->input->post('names'),
                'id_code' => $this->input->post('id_code'),
                'email' => $this->input->post('email'),
                'organisation' => $this->input->post('organisation'),
                'address' => $this->input->post('address'),
                'street1' => $this->input->post('street1'),
                'street2' => $this->input->post('street2'),
                'street3' => $this->input->post('street3'),
                'city' => $this->input->post('city'),
                'state_province' => $this->input->post('state_province'),
                'post_code' => $this->input->post('postcode'),
                'country' => $this->input->post('country'),
                'phone' => $this->input->post('phone'),
                'fax' => $this->input->post('fax'),
                'created_after' => @date('Y-m-d', @strtotime($this->input->post('created_after'))),
                'created_before' => @date('Y-m-d', @strtotime($this->input->post('created_before'))),
                'date_created' => date('Y-m-d h:i:s'),
                'date_last_modified' => date('Y-m-d h:i:s'),
                'display' => 'No'
            );

            //insert the form data into database
            $this->db->insert('tbl_contacts', $data);

            //display success message
            $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">New Contact Captured successfully</div>');
            redirect('ContactsController/create');
        }
    }

    public function activate()
    {
        $pageName = array('page_name' => 'Activate Contact');
        $this->session->set_userdata($pageName);
        $data = '';
        $this->load->view('header');
        $this->load->view('left_nav_menu', $data);
        $this->load->view('Contact/contacts_activate_view', $data);
        $this->load->view('footer');
        $this->load->view('footer_close_tags');

    }

    public function deactivate()
    {
        $pageName = array('page_name' => 'Deactivate Contact');
        $this->session->set_userdata($pageName);
        $data = '';
        $this->load->view('header');
        $this->load->view('left_nav_menu', $data);
        $this->load->view('Contact/contacts_inactivate_view', $data);
        $this->load->view('footer');
        $this->load->view('footer_close_tags');

    }


    //custom validation function for dropdown input
    public function combo_check($str)
    {
        if ($str == '-SELECT-') {
            $this->form_validation->set_message('combo_check', 'Valid %s Name is required');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    //custom validation function to accept only alpha and space input
    public function alpha_only_space($str)
    {
        if (!preg_match("/^([-a-z ])+$/i", $str)) {
            $this->form_validation->set_message('alpha_only_space', 'The %s field must contain only alphabets or spaces');
            return FALSE;
        } else {
            return TRUE;
        }
    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/EppMainController.php */
