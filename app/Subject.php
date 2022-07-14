<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
       'person_id' => 'required|exists:___(12)___',
       'name' => 'required|___(13)___',
   );

   public function getData()
   {
       return $this->id . ': ' . $this->name;
   }
}
