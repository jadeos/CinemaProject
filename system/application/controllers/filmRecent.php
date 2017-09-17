<?php
// system/application/controllers/filmRecent.php

class filmRecent extends Controller
{

    function index()
    {

        $film = array();

        if ($query = $this->films->get_film()) {
            $film['film'] = $query;

        }
        $this->load->view('newfilm', $film);
    }

}