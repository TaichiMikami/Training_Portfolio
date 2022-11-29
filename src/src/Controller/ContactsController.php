<?php
declare(strict_types=1);

namespace App\Controller;

use App\Controller\AppController;
// use App\Form\ContactForm;

class ContactsController extends AppController
{
    
    public function index()
    {
        
    }

    public function confirm()
    {
        if($this->request->is("post")){
            $postdata = $this->request->getData();
			$this->set('postdata', $postdata);
		}else{
			$this->set('postdata',[]);
		}
    }

    public function send()
    {
        $postdata = $this->request->getData();
        $this->set('postdata', $postdata);
        $this->render("result");
    }

}

?>