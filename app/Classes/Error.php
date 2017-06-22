<?php namespace App\Classes;


	class Error 
	{
        public $error;
        public $message;

        public function __construct($error,$message)
		{
			$this->error = $error;
            $this->message = $message;
		}
    }

?>