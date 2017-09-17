<?php
/**
 * Created by PhpStorm.
 * User: jade
 * Date: 09/11/2015
 * Time: 09:43
 */
class bookingm extends Model {

    function get_booking(){
        $query = $this->db->get('booking');
        return $query->result();




    }

    function add_booking($booking){
        $this->db->insert('booking',$booking);
        return $booking;

    }
    function delete_booking(){
        $this->db->where('id',$this->url->segment(3));
        $this->db->delete('booking');

    }







}