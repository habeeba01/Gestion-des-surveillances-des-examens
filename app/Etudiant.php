<?php

 namespace App;

use Illuminate\Database\Eloquent\Model;


class Etudiant extends Model {
	
    protected $primaryKey = 'cne';
public $incrementing = false;
    protected $fillable = [
	'cne',
	'ni',
	'nomet',
	'prenomet',
	'emailet',
	'nomdep',
	'password',
	];
}