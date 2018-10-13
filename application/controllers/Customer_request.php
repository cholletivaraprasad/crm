<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Customer_request extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Customer_request_registration_model');
    } 

    /*
     * Listing of customer_request_registration
     */
    function index()
    {
        $data['customer_request_registration'] = $this->Customer_request_registration_model->get_all_customer_request_registration();
        
        $data['_view'] = 'customer_request/index';
        $this->load->view('layouts/customer_main',$data);
    }

    /*
     * Adding a new customer_request_registration
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('name','Name','required|max_length[50]');
		$this->form_validation->set_rules('mobile','Mobile','required|max_length[11]|numeric');
		$this->form_validation->set_rules('email','Email','required|max_length[90]|valid_email');
		$this->form_validation->set_rules('location','Location','required|max_length[100]');
		$this->form_validation->set_rules('plans','Plans','required|max_length[100]');
		$this->form_validation->set_rules('commets','Commets','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'name' => $this->input->post('name'),
				'mobile' => $this->input->post('mobile'),
				'email' => $this->input->post('email'),
				'location' => $this->input->post('location'),
				'plans' => $this->input->post('plans'),
				'commets' => $this->input->post('commets'),
            );
            
            $customer_request_registration_id = $this->Customer_request_registration_model->add_customer_request_registration($params);
            redirect('customer_request/index');
        }
        else
        {            
            $data['_view'] = 'customer_request/index';
            $this->load->view('layouts/customer_main',$data);
        }
    }  

    /*
     * Editing a customer_request_registration
     */
    function edit($id)
    {   
        // check if the customer_request_registration exists before trying to edit it
        $data['customer_request_registration'] = $this->Customer_request_registration_model->get_customer_request_registration($id);
        
        if(isset($data['customer_request_registration']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('name','Name','required|max_length[50]');
			$this->form_validation->set_rules('mobile','Mobile','required|max_length[11]|numeric');
			$this->form_validation->set_rules('email','Email','required|max_length[90]|valid_email');
			$this->form_validation->set_rules('location','Location','required|max_length[100]');
			$this->form_validation->set_rules('plans','Plans','required|max_length[100]');
			$this->form_validation->set_rules('commets','Commets','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'name' => $this->input->post('name'),
					'mobile' => $this->input->post('mobile'),
					'email' => $this->input->post('email'),
					'location' => $this->input->post('location'),
					'plans' => $this->input->post('plans'),
					'commets' => $this->input->post('commets'),
                );

                $this->Customer_request_registration_model->update_customer_request_registration($id,$params);            
                redirect('customer_request_registration/index');
            }
            else
            {
                $data['_view'] = 'customer_request_registration/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The customer_request_registration you are trying to edit does not exist.');
    } 

    /*
     * Deleting customer_request_registration
     */
    function remove($id)
    {
        $customer_request_registration = $this->Customer_request_registration_model->get_customer_request_registration($id);

        // check if the customer_request_registration exists before trying to delete it
        if(isset($customer_request_registration['id']))
        {
            $this->Customer_request_registration_model->delete_customer_request_registration($id);
            redirect('customer_request_registration/index');
        }
        else
            show_error('The customer_request_registration you are trying to delete does not exist.');
    }
    
}
