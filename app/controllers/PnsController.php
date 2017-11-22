<?php
use Phalcon\Mvc\Model\Criteria;

class PnsController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
    	$data_pns = Pns::find();
    	$this->view->data_pns = $data_pns;
    }

    public function editAction(){
    	$data_pns = Pns::findFirst($id);

    	$this->view->id=$data_pns->id;
    	$this->view->nip=$data_pns->nip;
    	$this->view->nama=$data_pns->nama;
    	$this->view->email=$data_pns->email;
    	$this->view->pwd=$data_pns->pwd;
    }

    public function updateAction(){
    	 $id = $this->request->getpost('id');
    	 $data_pns = Pns::findFirstById($id);
    	 $save  = $data_pns->save($this->request->getpost(),array('nip','nama','email','pwd'));
		 
		 $pesan = ($save) ? "sukses" : "gagal";
		 echo $pesan;
    }

    public function delAction($id){
    	//$id = $this->request->getpost('id');
    	$data_pns = Pns::findFirstById($id);
    	$del = $data_pns->delete();
    	//$pesan = ($del) ? "sukses" : "gagal";
    	
    	return $this->response->redirect('pns');
    }

    public function cariAction(){
    	if ($this->request->ispost()){
    		$selek = Criteria::fromInput($this->di,"Pns",$this->request->getpost());
    		$this->persistent->searchParams = $selek->getParams();
    	}

    	$param = array();
    	if ($this->persistent->searchParams){
    		$param = $this->persistent->searchParams;
    	}

    	$data_pns = Pns::find($param);
    	$this->view->datacari=$data_pns;
    }
}

