<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class UsersImport implements ToModel, WithValidation
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        if ($row['2'] == 'admin') {
            $kind = '0';
        } else {
            $kind = '1';
        }
        //dd($role);
        $data = User::create([
            "name" => $row['0'],
            "email" => $row['2'],
            "address" => $row['3'],
            "password" => Hash::make($row['4']),
            "role" => $kind,
        ]);
        //User::create($data);
    }
    public function rules(): array
    {
        return [
            '0' => 'required',
            '1' => 'required',
            '2' => 'required|unique:users,email',
            '3' => 'required',
            '4' => 'required',

        ];
    }
    public function customValidationMessages()
    {
        return [
            '0.required' => 'This name  is empty.',
            '1.required' => 'This role  is empty.',
            '2.unique' => 'This email is already exit',
            '2.required' => 'This email  is empty.',
            '3.required' => 'This addres  is empty.',
            '4.required' => 'This password  is empty.',
        ];
    }
}
