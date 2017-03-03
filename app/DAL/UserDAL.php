<?php

namespace App\DAL;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserDAL
{
	public static function CheckExistUserPhoneNumber($phone_number)
	{
		return DB::table('user as u')
				->where('u.phone_number', '=', $phone_number)
				->count();
	}
}
