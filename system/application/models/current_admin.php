<?php
class Current_Admin {

    private static $admin;

    private function __construct() {}

    public static function admin() {

        if(!isset(self::$admin)) {

            $CI =& get_instance();
            $CI->load->library('session');

            if (!$user_id = $CI->session->userdata('user_id')) {
                return FALSE;
            }

            if (!$u = Doctrine::getTable('Admin')->find($user_id)) {
                return FALSE;
            }

            self::$admin = $u;
        }

        return self::$admin;
    }


    public static function adminLogin($username, $password) {

        // get User object by username
        if ($u = Doctrine::getTable('Admin')->findOneByUsername($username)) {


            // to get the mutated version of the input password
            $u_input = new Admin();
            $u_input->password = $password;

            // password match
            if ($u->password == $u_input->password) {
                unset($u_input);

                $CI =& get_instance();
                $CI->load->library('session');
                $CI->session->set_userdata('user_id',$u->id);
                self::$admin = $u;

                return TRUE;
            }

            unset($u_input);
        }

        // login failed
        return FALSE;

    }


    public function __clone() {
        trigger_error('Clone is not allowed.', E_USER_ERROR);
    }

}
