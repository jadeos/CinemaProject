<?php
/**
 * Created by PhpStorm.
 * User: jade
 * Date: 09/11/2015
 * Time: 09:43
 */
class reviewm extends Model {

    function get_review(){
        $query = $this->db->get('reviews');
        return $query->result();

    }

    function add_review($reviews){
        $this->db->insert('reviews',$reviews);
        return $reviews;

    }
    function delete_review(){
        $this->db->where('id',$this->url->segment(3));
        $this->db->delete('reviews');

    }

    function update_film($reviews){
        $this->db->where('id',2);
        $this->db->update('reviews',$reviews);
    }

}