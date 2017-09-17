<?php

/**
 * Created by PhpStorm.
 * User: jade
 * Date: 31/10/2015
 * Time: 17:07
 */
class adminfilm extends controller
{

    function index(){

        $film = array();

        if($query = $this->films->get_film())
        {
            $film['film']=$query;

        }
        $this->load->view('addfilm',$film);
    }
    function create(){
        $film = array('title'=> $this->input->post('title'),
            'description'=>$this->input->post('description'),
            'length'=>$this->input->post('length'),
            'agegroup'=>$this->input->post('agegroup'),
            'releasedate'=>$this->input->post('releasedate'),
            'features'=>$this->input->post('features'),
            'date'=>$this->input->post('date'),
            'time'=>$this->input->post('time'),
        );
        $this->films->add_film($film);
        $this->load->view('addfilm',$film);



    }
    function delete(){

        $this->films->delete_film();
        $this->index();
    }
    function update(){


        $film = array('title'=> $this->input->post('title'),
            'description'=>$this->input->post('description'),
            'length'=>$this->input->post('length'),
            'agegroup'=>$this->input->post('agegroup'),
            'releasedate'=>$this->input->post('releasedate'),
            'features'=>$this->input->post('features'),
            'date'=>$this->input->post('date'),
            'time'=>$this->input->post('time'),
        );


        $this->films->update_film($film);
        $this->load->view('updatepage',$film);
    }
    function film_search(){

        $film = array();
        $this->db->where('title','pixels');
        if($query = $this->films->get_film())
        {
            $film['film']=$query;
            $this->db->where('title',$query);

        }
        $this->load->view('text',$film);

    }
    function filmRecent(){
        $film = array();


        if($query = $this->films->get_film())
        {
            $film['film']=$query;

        }
        $this->load->view('newfilm',$film);

    }

}