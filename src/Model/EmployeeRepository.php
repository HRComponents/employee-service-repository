<?php

/**
 * The MIT License
 *
 * Copyright (c) 2016, Coding Matters, Inc. (Gab Amba <gamba@gabbydgab.com>)
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace Employee\Model;

class EmployeeRepository
{
    private $employees = [
        [
            'employee_id'   => '001',
            'first_name'    => 'Gab',
            'middle_name'   => '',
            'last_name'     => 'Amba',
            'position'      => 'IT Chairman',
            'department'    => 'IT Department'
        ],
        [
            'employee_id'   => '002',
            'first_name'    => 'Gab',
            'middle_name'   => '',
            'last_name'     => 'Amba',
            'position'      => 'IT Assistant Chairman',
            'department'    => 'IT Department'
        ],
        [
            'employee_id'   => '003',
            'first_name'    => 'Gab',
            'middle_name'   => '',
            'last_name'     => 'Amba',
            'position'      => 'CS Chairman',
            'department'    => 'CS Department'
        ],
        [
            'employee_id'   => '004',
            'first_name'    => 'Gab',
            'middle_name'   => '',
            'last_name'     => 'Amba',
            'position'      => 'CS Assistant Chairman',
            'department'    => 'CS Department'
        ],
    ];
    
    public function fetchAll()
    {
        return $this->employees;
    }
    
    public function fetchByLastName($last_name = null)
    {
        if (is_null($last_name)) {
            return $this->fetchAll();
        }
        
        $list = [];
        foreach ($this->employees as $employee) {
            if ($last_name === $employee['last_name']) {
                $list[] = $employee;
            }
        }
        
        return $list;
    }
    
    public function fetchAllByDepartment($department = null)
    {
        $list = [];
        foreach ($this->employees as $employee) {
            if ($department === $employee['department']) {
                $list[] = $employee;
            }
        }
        
        return $list;
    }
}
