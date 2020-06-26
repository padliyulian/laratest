<?php

namespace App\Repositories;

use App\Models\Employee;
use App\Repositories\Interfaces\EmployeeInterface;

class EmployeeRepository implements EmployeeInterface
{
    public function employeeAdd($request)
    {
        $employee = new Employee;
        $employee->nama = $request->nama;
        $employee->ktp = $request->ktp;        
        $employee->email = $request->email;

        if ($request->has('alamat')){
            $employee->alamat = $request->alamat;
        }
        if ($request->has('phone')){
            $employee->phone = $request->phone;
        }

        if ($employee->save()) {
            return $employee;
        }
    }
}