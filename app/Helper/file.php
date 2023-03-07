<?php
namespace App\Helper;

use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

Trait File
{   


    public function file() 
    {
try{
       
        $randomId       =   rand(1000,9000);
        
        return $randomId;
     }
      catch (\Exception $e) {
         return $e->getMessage();
      }

    }
}