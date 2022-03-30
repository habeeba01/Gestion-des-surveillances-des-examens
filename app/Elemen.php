<?php

 namespace App;

use Illuminate\Database\Eloquent\Model;


class Elemen extends Model {
	
    
    protected $fillable = [
	'nomelem',
	'coeff',
	'noteelem',
	'nommod',
	'idens',
	];
}