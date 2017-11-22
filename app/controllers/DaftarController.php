<?php

class DaftarController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function simpanAction(){
    	$dft = new Pns();
    	
    	$save = $dft->save($this->request->getpost(),array('nip','nama','email','pwd'));
    	if ($save) {
    		echo "sukses";
    	} else{
    		echo "sorry";
    		foreach ($dft->getMessages() as $er ) {
    			echo $er->getMessages(),"<br />";
    		}
    	}
    	
    }
}

