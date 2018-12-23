<?php 
class Auth  extends Controller {
    public function __construct() {

    }
    public function contact() {

        // checking for post request
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            //process form data
            // sanitize data 
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
             $data = [
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'message' => trim($_POST['message']),
                'name__error' => "",
                'email__error' => "",
                'message__error' => ""
            ];
            // validate an email
            if(empty($data['email'])) {
                $data['email__error'] = "Please Enter Your Email";
            }
            // validate name

            if(empty($data['name'])) {
                $data['name__error'] = "Enter Your Name, Don't Be Shy";
            }

            // validate message field

            if(empty($data['message'])) {
                $data['message__error'] = "Don't Be Shy, Express Your Self";
            } else if(strlen($data['message']) < 15) {
                $data['message__error'] = " Your Message is too short, add a little bit more.";
            }

            if(empty($data['name__error']) && empty($data['email__error']) && empty($data['message__error'])) {
                // after validation 

                die("SUCCESSFULLY MAILED ME");
            } else {
                $this->view('auth/contact', $data);
            }
        } else {
            $data = [
                'name' => "",
                'email' => "",
                'message' => "",
                'name__error' => "",
                'email__error' => "",
                'message__error' => ""
            ];
            $this->view('auth/contact', $data);
        }
    }
}