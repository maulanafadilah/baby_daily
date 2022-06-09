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
            // 'email' => [
            //     'string',
            //     'email',
            //     'max:255',
            //     Rule::unique(User::class),
            // ],
            'nomor_telepon' => [
                'required',
                'string',
                'max:13',
                'min:10',
                Rule::unique(User::class),
            ],
            'id_peranan' => ['required', 'numeric', 'max:11'],
            'password' => $this->passwordRules(),
        ])->validate();

        if ($input['id_peranan'] == 5 || $input['id_peranan'] == 4) {
            return User::create([
                'nama_lengkap' => $input['nama_lengkap'],
                'nomor_telepon' => $input['nomor_telepon'],
                'id_peranan' => $input['id_peranan'],
                'password' => Hash::make($input['password'])
            ]);
        } else {
            return User::create([
                'nama_lengkap' => $input['nama_lengkap'],
                'email' => $input['email'],
                'nomor_telepon' => $input['nomor_telepon'],
                'id_peranan' => 4,
                'password' => Hash::make($input['password'])
            ]);
        }
    }
}
