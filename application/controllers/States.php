<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class States extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('sql_model');
    } 

    /*
     * Listing of customer_request_registration
     */
    function index()
    {
        $statesList = $this->sql_model->getTableAllDataOrder("states","id","DESC");
         $rec=array(
            'statesList' => $statesList,
        );
        $data['jsonObj'] = @json_encode($rec);
        $data['_view'] = 'states/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new customer_request_registration
     */
    function add()
    {   
        $this->load->library('form_validation');

        $this->form_validation->set_rules('state_name','State Name','required|max_length[50]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'state_name' => $this->input->post('state_name'),
            );
            
            $customer_request_registration_id = $this->sql_model->storeItems("states",$params);
            redirect('states/index');
        }
        else
        {            
            $data['_view'] = 'states/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a customer_request_registration
     */
    function edit($id)
    {   
        // check if the customer_request_registration exists before trying to edit it
        $states = $this->sql_model->getTableRowDataOrder("states",array("id"=>$id),"id","DESC");
        $data['states'] =  $states;  
        if(@sizeOf($states) > 0)
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('state_name','State Name','required|max_length[50]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'state_name' => $this->input->post('state_name'),
                );

                $this->sql_model->updateItems("states",$params,array("id"=>$id));            
                redirect('states/index');
            }
            else
            {
                $data['_view'] = 'states/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The states you are trying to edit does not exist.');
    } 

    /*
     * Deleting customer_request_registration
     */
    function remove($id)
    {
        $states = $this->sql_model->getTableRowDataOrder("states",array("id"=>$id),"id","DESC");

        // check if the customer_request_registration exists before trying to delete it
        if(@sizeOf($states) > 0)
        {
            $this->sql_model->deleteItemsById("states",array("id"=>$id));
            redirect('states/index');
        }
        else
            show_error('The customer_request_registration you are trying to delete does not exist.');
    }
    function view($id)
    {
        $locationsList = $this->sql_model->getTableRowDataOrder("sub_locations",array("state_id"=>$id),"id","DESC");
         $rec=array(
            'locationsList' => $locationsList,
            'id' => $id,
        );
        $data['jsonObj'] = @json_encode($rec);
        $data['_view'] = 'states/locations';
        $this->load->view('layouts/main',$data);
    }
    function locationadd($id)
    {   
        $this->load->library('form_validation');
         $data['id'] = $id;
        $this->form_validation->set_rules('location_name','City Name','required|max_length[50]');
        
        if($this->form_validation->run())     
        {   
            $params = array(
                'state_id' => $id,
                'location_name' => $this->input->post('location_name'),
            );
            
            $customer_request_registration_id = $this->sql_model->storeItems("sub_locations",$params);
            redirect('states/view/'.$id);
        }
        else
        {            
            $data['_view'] = 'states/locationadd';
            $this->load->view('layouts/main',$data);
        }
    } 
    function editLocation($rowId,$id)
    {   
        // check if the customer_request_registration exists before trying to edit it
        $locations = $this->sql_model->getTableRowDataOrder("sub_locations",array("id"=>$rowId),"id","DESC");
        $data['locations'] =  $locations;  
        $data['rowId'] =  $rowId;  
        $data['id'] =  $id;  
        if(@sizeOf($locations) > 0)
        {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('location_name','Location Name','required|max_length[50]');
        
            if($this->form_validation->run())     
            {   
                $params = array(
                    'location_name' => $this->input->post('location_name'),
                );

                $this->sql_model->updateItems("sub_locations",$params,array("id"=>$rowId));            
                redirect('states/view/'.$id);
            }
            else
            {
                $data['_view'] = 'states/edit-location';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The states you are trying to edit does not exist.');
    } 
    function removeLocation($rowId,$id)
    {
        $locations = $this->sql_model->getTableRowDataOrder("sub_locations",array("id"=>$rowId),"id","DESC");

        // check if the customer_request_registration exists before trying to delete it
        if(@sizeOf($locations) > 0)
        {
            $this->sql_model->deleteItemsById("sub_locations",array("id"=>$rowId));
             redirect('states/view/'.$id);
        }
        else
            show_error('The customer_request_registration you are trying to delete does not exist.');
    }
}
