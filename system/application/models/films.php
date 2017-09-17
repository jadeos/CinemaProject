<?php
/**
 * Created by PhpStorm.
 * User: jade
 * Date: 29/10/2015
 * Time: 17:37
 */
class films extends Model {

        function get_film(){
            $query = $this->db->get('films');
            return $query->result();




        }



    function add_film($film){
        $this->db->insert('films',$film);
        return;

    }
    function delete_film(){
        $this->db->where('id',$this->url->segment(3));
        $this->db->delete('films');

    }

    function update_film($film){
            $this->db->where('id',2);
            $this->db->update('films',$film);
    }





}