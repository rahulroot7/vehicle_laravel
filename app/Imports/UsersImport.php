<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\Importable;
use Illuminate\Support\Facades\Hash;

class UsersImport implements ToModel, WithHeadingRow, WithValidation
{
    use Importable;

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'name'          => $row['user_name'],
            'email'         => $row['email_id'],
            'password'      => Hash::make($row['password']),
            'phone'         => $row['mob_no'],
            'full_name'     => $row['full_name'],
            'father_name'   => $row['father_name'],
            'aadhar_number' => $row['aaahar_no'],
            'address'       => $row['address'],
            'area'          => $row['area'],
            'role'          => 3,
        ]);
    }

    /**
    * Define the validation rules.
    *
    * @return array
    */
    public function rules(): array
    {
        return [
            'user_name' => 'required',
            'email_id'  => 'required|email|unique:users,email',
            'password'  => 'required',
            'mob_no'    => 'required', // Assuming phone is optional
            'full_name' => 'nullable',
            'father_name' => 'nullable',
            'aadhar_no' => 'nullable|digits:12', // Assuming aadhar number should be 12 digits
            'address'   => 'nullable',
            'area'      => 'nullable',
        ];
    }

    /**
    * Custom validation messages.
    *
    * @return array
    */
    public function customValidationMessages()
    {
        return [
            'user_name.required' => 'The user name field is required.',
            'email_id.required'  => 'The email field is required.',
            'email_id.email'     => 'The email must be a valid email address.',
            'email_id.unique'    => 'The email has already been taken.',
            'password.required'  => 'The password field is required.',
        ];
    }
}
