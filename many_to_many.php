<?php

	public function roles()
	{
		return $this->belongsToMany('App\Role')->withTimestamps();
	}

?>
