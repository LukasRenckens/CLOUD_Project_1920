<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Klas extends Model
{
    public function uurrooster() {
        return $this->hasOne(
	'App\Uurrooster');
    }
}
