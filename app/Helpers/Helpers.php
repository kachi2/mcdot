<?php

use Illuminate\Database\Eloquent\Collection;
use Intervention\Image\Facades\Image;
use Nette\Utils\FileInfo;
use Vinkla\Hashids\Facades\Hashids;

if(!function_exists('StoreImages')){
    function StoreImages($image){
     $ext = $image->getClientOriginalExtension();
     $fileName =  time().'.'.$ext;
     Image::make($image)->resize(500,400)->save('images/'. $fileName);
     return $fileName;
     }
  }

if(!function_exists('StorePdf')){

      function StorePdf($pdf){
       $ext = $pdf->getClientOriginalExtension();
       $name = $pdf->getClientOriginalName();
       $file = \pathinfo($name, PATHINFO_FILENAME);
       $fileName = $file.'.'.$ext;
        $pdf->move('files/', $fileName );
      
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

  if(!function_exists('decryptId')){
    function decryptId($hashedId){
      $id = HashIds::connection('jobs')->decode($hashedId)[0];
      return $id;
    }
  }

}