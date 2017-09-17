<?php


 class film extends Controller
 {

     function index()
     {

         $film = array();

         if ($query = $this->films->get_film()) {
             $film['film'] = $query;

         }
         $this->load->view('listings', $film);
     }

     function film_search()
     {
         $title=null;
         $film = array($title => $this->input->post('search'));
         $this->db->where('title', $film[$title]);

         $this->db->limit(1);

         if ($query = $this->films->get_film()) {
             $film['film'] = $query;

         }

         $this->load->view('text', $film);


     }
 }



