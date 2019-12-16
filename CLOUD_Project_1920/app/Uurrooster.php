<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uurrooster extends Model{

    public function klas() {
        return $this->belongsTo(
	   'App\Klas');
    }
}
