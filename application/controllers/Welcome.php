<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/
	 * 	- or -
	 * 		http://example.com/welcome/index
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function index() {
	    $result = '';
	    foreach ($this->Categories->all() as $category) {
	        $result .= $this->parser->parse('category-home',$category, true);
	    }
	    $this->data['content'] = $result;
	    $this->render();
	}

}
