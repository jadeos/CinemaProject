<?php

/**
 * Created by PhpStorm.
 * User: jade
 * Date: 22/11/2015
 * Time: 16:59
 */
class AdminView extends Controller
{
    function index(){

        $this->load->view('adminpage');
    }
}