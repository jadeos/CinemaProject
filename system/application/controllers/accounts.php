<?php
// system/application/controllers/filmRecent.php

class Accounts extends Controller
{
    public function index()
    {
        $booking = array();

        if ($query = $this->bookingm->get_booking()) {

            $booking['bookingm'] = $query;
        }
        $this->load->view('accounts', $booking);
    }

    public function add()
    {
        $this->load->helper('date');

        $booking = array(
            'id' => $this->db->insert_id(),
            'username' => $this->input->post('username'),
            'loyaltypoints'=>"40"


        );

        $this->db->set('date', 'NOW()', false);
        $this->bookingm->add_booking($booking);

        $this->load->view('booking', $booking);


    }

    public function delete()
    {
        $this->bookingm->delete_booking();
        $this->index();

    }

}