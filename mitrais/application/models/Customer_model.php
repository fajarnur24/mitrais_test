<?php 

class Customer_model extends CI_model {
 
    public function tambahDataCustomer()
    {
                $api_url = "http://localhost/mitrais_test/api/api/insert";
            
                $dob = $this->input->post('years').'-'.$this->input->post('month').'-'.$this->input->post('day');
                $form_data = array(
                    'first_name'        =>  $this->input->post('first_name'),
                    'last_name'         =>  $this->input->post('last_name'),
                    'phone'         =>  $this->input->post('phone'),
                    'gender'         =>  $this->input->post('gender'),
                    'dob'         =>  $dob,
                    'email'         =>  $this->input->post('email')
                );

                // echo $dob;
                $client = curl_init($api_url);

                curl_setopt($client, CURLOPT_POST, true);

                curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

                curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

                $response = curl_exec($client);

                curl_close($client);

                // echo $response;
                
       
    }

   
}