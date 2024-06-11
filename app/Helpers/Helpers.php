<?php

use Illuminate\Database\Eloquent\Collection;
use Intervention\Image\Facades\Image;
use Vinkla\Hashids\Facades\Hashids;

if(!function_exists('StoreImages')){
    function StoreImages($image){
     $ext = $image->getClientOriginalExtension();
     $fileName =  time().'.'.$ext;
   Image::make($image)->resize(500,400)->save('images/'. $fileName);
     return $fileName;
     }
    
  if(!function_exists('HashIds')){
    function HashIds($items){
      if($items instanceof Collection || is_array($items)){
        foreach($items as $item){
          $item->hashid = Hashids::connection('jobs')->encode($item->id);
        }
        return $items;
      }
      $items->hashid = Hashids::connection('jobs')->encode($items->id);
      return $items;
      
    }
  }
 }