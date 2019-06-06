<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Registry extends Model
{
   
    protected $fillable = ['first_name','second_name','surename','second_surename',
                        'email','age','phone','cell_phone','flosspainfo','fedorainfo','latansecinfo','coments']; 
}
