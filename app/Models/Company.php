<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\CompanyKeyPersonnel;
use App\Models\CompanyContactDetail;
use App\Models\CompanyForeignContactDetail;
use App\Models\CompanyProductDetail;

class Company extends Authenticatable
{
    use HasFactory, Notifiable;

    public function key_personnels(){
        return $this->hasOne(CompanyKeyPersonnel::class);
    }


    public function contact_details(){

        return $this->hasOne(CompanyContactDetail::class);

    }

}
