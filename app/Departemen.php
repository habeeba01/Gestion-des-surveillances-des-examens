<?php

 namespace App;

use Illuminate\Database\Eloquent\Model;


class Departemen extends Model {
	
    protected $primaryKey = 'nomdep';
public $incrementing = false;
    protected $fillable = [
	'nomdep',
	'description',
	];
}