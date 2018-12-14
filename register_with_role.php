<?php

	protected function create(array $data)
	{

		$user_data = new User;
		$user_data->login = $data['login'];
		$user_data->email = $data['email'];
		$user_data->password = Hash::make($data['password']);
		$user_data->save();

		$inserted_id = $user_data->id;

		$user = User::find($inserted_id);
		$user->roles()->attach(2);

		return $user_data;

	}

?>