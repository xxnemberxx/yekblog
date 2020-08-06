<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Contact extends Model
{
    public function contactCount(){
        // Contact tablosundaki id sütunun toplam satır sayısını çeker
        return  $this->pluck('id')->count();
    }

    public function getAllContact(){
        return $this->all();
    }

    
}
