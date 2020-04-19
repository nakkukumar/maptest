<?php

namespace Maptest\Model;

 class Post
 {
     public $state_id;
     public $state;
     public $latitude;
     public $longitude;

     public function exchangeArray($data)
     {
         $this->state_id     = (!empty($data['state_id'])) ? $data['state_id'] : null;
         $this->state  = (!empty($data['state'])) ? $data['state'] : null;
         $this->latitude  = (!empty($data['latitude'])) ? $data['latitude'] : null;
         $this->longitude  = (!empty($data['longitude'])) ? $data['longitude'] : null;
     }
	 public function getLatLong()
     {
         return ['lat'=>$this->latitude,'long'=>$this->longitude];
          
     }
 }