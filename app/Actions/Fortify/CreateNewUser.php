<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'nama_lengkap' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'nomor_telepon' => [
                'required',
                'string',
                'max:13',
                Rule::unique(User::class),
            ],
            'id_peranan' => ['required', 'numeric', 'max:11'],
            'password' => $this->passwordRules(),
        ])->validate();

        return User::create([
            'nama_lengkap' => $input['name'],
            'email' => $input['email'],
            'nomor_telepon' => $input['number'],
            'id_peranan' => $input['id'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
