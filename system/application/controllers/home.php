<?php
class Home extends Controller
{

	public function index()
	{
		$reviews = array();
		$this->db->limit(1);
		if($query = $this->reviewm->get_review())
		{

			$reviews['reviews']= $query;
		}

		$this->load->view('home',$reviews);
	}
	public function add()
	{
		$reviews = array(
			'id'=>$this->db->insert_id(),
			'description' => $this->input->post('description'),





		);

		$this->db->set('date', 'NOW()',false );
		$this->reviewm->add_review($reviews);
		$this->load->view('home', $reviews);


	}
	public function delete(){
		$this->reviewm->delete_review();
		$this->index();

	}
}


