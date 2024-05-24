<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\User;

class UserExistsRule implements Rule
{
    public function passes($attribute, $value)
    {
        return User::where('user_code', $value)->exists();
    }

    public function message()
    {
        return 'El código de usuario no existe.';
    }
}
