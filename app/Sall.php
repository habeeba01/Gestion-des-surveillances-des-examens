<?php

 namespace App;

use Illuminate\Database\Eloquent\Model;


class Sall extends Model {
	
    protected $primaryKey = 'numsalle';
    protected $fillable = [
	'numsalle',
	'capacite',
	'type',
	'nbsurv',
	];
}