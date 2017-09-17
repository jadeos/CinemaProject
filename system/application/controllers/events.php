<?php
/**
 * Created by PhpStorm.
 * User: jade
 * Date: 17/11/2015
 * Time: 13:39
 */
class events extends Controller{
    function index(){



        if($query = $this->films->get_film())
        {
            $film['film']=$query;

        }
        $this->load->view('upcomingevents',$film);
    }


}