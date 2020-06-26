<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\EmployeeInterface;
use App\Http\Requests\Employee as EmployeeRequest;

class EmployeeController extends Controller
{
    private $employee;

    public function __construct(EmployeeInterface $employee)
    {
        $this->employee = $employee;
    }

    public function store(EmployeeRequest $request)
    {
        try {
            $employee = $this->employee->employeeAdd($request);
            return redirect()->back()->withSuccess('Add data success');
        } catch (\DomainException $e) {
            return redirect()->back()->withError($e->getMessage());
        }
    }
}
