<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\CompanyKeyPersonnel;
use App\Models\CompanyContactDetail;
use App\Models\CompanyForeignCollaboration;
use App\Models\CompanyProductDetails;

class Company extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $hidden = [
        'password'
    ];


    protected $fillable = [
    
        'token', 
    ];


    public function key_personnels(){
        return $this->hasOne(CompanyKeyPersonnel::class);
    }


    public function contact_details(){

         return $this->hasOne(CompanyContactDetail::class);
       
    }

    public function product_details(){
        return $this->hasOne(CompanyProductDetails::class);
    }

    public function foreign_collaboration(){
        return $this->hasOne(CompanyForeignCollaboration::class);
    }

    
}
