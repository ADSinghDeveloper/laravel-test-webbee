<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
	public function children(){
		return $this->hasMany(MenuItem::class, 'parent_id', 'id' )->with('children');
	}

	public function parent(){
		return $this->hasOne(MenuItem::class, 'id', 'parent_id' );
	}

}
