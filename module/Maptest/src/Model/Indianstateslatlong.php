<?php

namespace Maptest\Model;

 class Indianstateslatlong
 {
     public $city_id;
     public $city_name;
     public $state;
     public $latitude;
     public $longitude;

     public function exchangeArray($data)
     {
         $this->city_id     = (!empty($data['city_id'])) ? $data['city_id'] : null;
         $this->city_name = (!empty($data['city_name'])) ? $data['city_name'] : null;
         $this->state  = (!empty($data['state'])) ? $data['state'] : null;
         $this->latitude  = (!empty($data['latitude'])) ? $data['latitude'] : null;
         $this->longitude  = (!empty($data['longitude'])) ? $data['longitude'] : null;
     }
	 public function getLatLong()
     {
         return ['lat'=>$this->latitude,'long'=>$this->longitude];
          
     }
 }