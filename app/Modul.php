<?php

 namespace App;

use Illuminate\Database\Eloquent\Model;


class Modul extends Model {
	
    protected $primaryKey = 'nommod';
public $incrementing = false;
    protected $fillable = [
	'nommod',
	'notemod',
	'nbelem',
	];
}