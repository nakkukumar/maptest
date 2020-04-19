<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Maptest\Controller;
use Maptest\Model\PostTable;
 
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
	 protected $table;
		public function __construct(PostTable $table)
		{
			$this->table = $table;
		}
	 
    public function indexAction()
    { 
		return new ViewModel();
    }
	
	public function indiaMapAction()
    { 
		return new ViewModel();
	}
	
	public function getIndianMapDataAction()
    { 
		$t = $this->table->fetchAll();
		$result = [] ;
		foreach($t as $i=>$a){
			$result[$i]['state_id'] = $a->state_id;
			$result[$i]['state'] = $a->state;
			$result[$i]['latitude'] = $a->latitude;
			$result[$i]['longitude'] = $a->longitude;
			 
		}
		
		echo json_encode($result); die; 
	}
	
	/* public function getIndianstateslatlong()
     {  
         if (!$this->table) {
             $sm = $this->getServiceLocator();
             $this->table = $sm->get('Maptest\Model\IndianstateslatlongTable');
         }
         return $this->table;
     } */
}
