<?php

 namespace App;

use Illuminate\Database\Eloquent\Model;


class Module extends Model {
	
    protected $primaryKey = 'id';
public $incrementing = false;
    protected $fillable = [
	'nommod',
	'notemod',
	'nbelem',
	'nomdep_',
	];
}