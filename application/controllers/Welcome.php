<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	private $dataset = [];

	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
	}

 
	public function index(){

		$this->load->view('home');
	}

	public function records(){

			$total_record_count = count($this->db->get('airplane_models')->result_array());

			$order_type = $_POST['order'][0]['dir'];

			$order_column = '';


			if($_POST['order'][0]['column']==='1'){

				$order_column = 'model_id';

			}

			if($_POST['order'][0]['column']==='2'){

				$order_column = 'manufacturer';

			}


			if($_POST['order'][0]['column']==='3'){

				$order_column = 'model';

			}

			if($_POST['order'][0]['column']==='0'){

				$order_column = 'model_id';

			}

			if(isset($_POST['search']['value']) && $_POST['search']['value']!==''){


				if(strlen($_POST['search']['value']) > 0){

			

				$data = $this->db->like('manufacturer',$this->input->post('search',TRUE)['value'])->or_like('model',$this->input->post('search',TRUE)['value'])->order_by($order_column, $order_type)->get('airplane_models',  $this->input->post('length',TRUE),$this->input->post('start',TRUE))->result_array();

				}

				else{


		

				$data = $this->db->order_by($order_column, $order_type)->get('airplane_models',  (int)$this->input->post('length',TRUE),(int)$this->input->post('start',TRUE))->result_array();


				}

				foreach($data as $cols){

					array_push($this->dataset, 
							[
							'record_id'=>$cols['model_id'],
							'manufacturer_name'=>$cols['manufacturer'],
							'manufacturer_model'=>$cols['model'],
							'responsive_col'=>''
							]
					);
				}


			 
			 	$response = [
					'data'=>$this->dataset,
					'draw' => intval($this->input->post('draw',TRUE)),
					'recordsTotal' => 	$total_record_count,
	                'recordsFiltered' => sizeof($this->dataset),
	                'exec'=>2,
	                'order_type'=>$order_type,
	                'order_column'=>$order_column

					];

			}else{


				

				$data = $this->db->order_by($order_column, $order_type)->get('airplane_models', (int)$this->input->post('length',TRUE),(int)$this->input->post('start',TRUE))->result_array();


				foreach($data as $cols){

					array_push($this->dataset, 
							[

							'record_id'=>$cols['model_id'],
							'manufacturer_name'=>$cols['manufacturer'],
							'manufacturer_model'=>$cols['model'],
							'responsive_col'=>''
							]
					);
				}

				$response = [
					'data'=>$this->dataset,
					'draw' => intval($this->input->post('draw',TRUE)),
					'recordsTotal' => 	$total_record_count,
	                'recordsFiltered' => $total_record_count,
	                'exec'=>1,
	                'order_type'=>$order_type,
	                'order_column'=>$order_column
					];

			}

			echo json_encode($response);

	}
}
