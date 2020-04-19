<?php

namespace Maptest\Model;

 use Zend\Db\TableGateway\TableGateway;

 class IndianstateslatlongTable
 {
     protected $tableGateway;

     public function __construct(TableGateway $tableGateway)
     {
         $this->tableGateway = $tableGateway;
     }

     public function fetchAll()
     {
         $resultSet = $this->tableGateway->select();
         return $resultSet;
     }

     public function getIndianstateslatlong($city_id)
     {
         $city_id  = (int) $city_id;
         $rowset = $this->tableGateway->select(array('city_id' => $city_id));
         $row = $rowset->current();
         if (!$row) {
             throw new \Exception("Could not find row $city_id");
         }
         return $row;
     }

     public function saveIndianstateslatlong(Indianstateslatlong $indianstateslatlong)
     {
         $data = array(
             'city_name' => $indianstateslatlong->city_name,
             'state'  => $indianstateslatlong->state,
             'latitude'  => $indianstateslatlong->latitude,
             'longitude'  => $indianstateslatlong->longitude,
         );

         $city_id = (int) $indianstateslatlong->city_id;
         if ($city_id == 0) {
             $this->tableGateway->insert($data);
         } else {
             if ($this->getIndianstateslatlong($city_id)) {
                 $this->tableGateway->update($data, array('city_id' => $city_id));
             } else {
                 throw new \Exception('Indianstateslatlong city_id does not exist');
             }
         }
     }

     public function deleteIndianstateslatlong($city_id)
     {
         $this->tableGateway->delete(array('city_id' => (int) $city_id));
     }
 }