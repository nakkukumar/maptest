<?php

namespace Maptest\Model;

 use Zend\Db\TableGateway\TableGateway;
 use Zend\Db\TableGateway\TableGatewayInterface;

 class PostTable
 {
     protected $tableGateway;
	public function __construct(TableGatewayInterface $tableGateway)
	 {
		 $this->tableGateway = $tableGateway;
	 }

     public function fetchAll()
     {
         $resultSet = $this->tableGateway->select();
         return $resultSet;
     }

      
 }