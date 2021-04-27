<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    /*Exercise 4: *When the user visits "/main", have this request be handled 
     * by the index method in the Main controller.  
     * Have it simply say "I am Main Class!". */
	public function index()
	{
		//$this->load->view('welcome_message');
		echo 'I am in Main Class!';
	}

    /**Exercise 5: When the user visits "/" (e.g. localhost/), 
     * have this request be handled by the index 
     * method in the Main controller, echoing "I am Main Class!". */
	
    /* same as above code working due to base_url = 
    http://localhost/MVC/official/*/

    /*Exercise 6: *When the usr visits "/main/danger", 
     * have this request be handled by a method called 
     * 'danger' in the Main controller.  
     * Have it simply redirect back to "/main" */

     public function danger(){
         header('location: main');
     }

	
	/*Exercise 1: 
	When the user visits "/main/hello", 
	have the request be handled by hello method 
	in the class called 'Main' (in the controller folder).  
	Have this method simply echo "Hello World!"
	*/

	public function hello()
	{
		echo 'Hello World!';
	}
    /*Exercise 2: When the user visits "/main/say/hi", have say method 
    in the Main class (in the controller folder) handle this request.  
    Have this method simply echo "HI". */

    public function say($hi){
        $hi = 'hi';
        echo $hi;
    }

    /*Exercise 3: When the user visits "/main/say_anything/___", whatever was in ___, 
    have this be simply be echoed.  For example, if the user visit 
    "/main/say_anything/awesome", the http response should simply be 
    "AWESOME" all in capital.*/

    public function say_anything($sayit){
        echo ucwords($sayit);
    }

    public function world(){
        $this->load->view('places');
    }

    public function ninjas($num){
       $data['num'] = $num;
       $this->load->view('ninja_x',$data);
       print_r($data);
    }


}
