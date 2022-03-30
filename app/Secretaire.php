<?php

 namespace App;

use Illuminate\Database\Eloquent\Model;


class Secretaire extends Model {
	
    protected $primaryKey = 'idsec';
    protected $fillable = [
	'idsec',
	'nomsec',
	'prenomsec',
	'emailsec',
	'telsec',
	];
}