<?php

 namespace App;

use Illuminate\Database\Eloquent\Model;


class Enseignan extends Model {
	
    protected $primaryKey = 'idens';
    protected $fillable = [
	'idens',
	'nomens',
	'prenomens',
	'emailens',
	'telens',
	];
}