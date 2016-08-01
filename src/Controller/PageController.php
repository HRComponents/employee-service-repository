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

namespace Employee\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Employee\Service\EmployeeListService;

class PageController extends AbstractActionController
{
    private $data = [];
    private $masterlist;
    
    public function __construct(EmployeeListService $list)
    {
        $this->masterlist = $list;
    }
    
    public function indexAction()
    {
        $department = $this->params()->fromQuery('dept');
        $last_name  = $this->params()->fromQuery('last_name');        
        
        if (isset($last_name) && !empty($last_name)) {
            $this->data['employees'] = $this->masterlist->fetchByLastName($last_name);
        }
        
        if (isset($department) && !empty($department)) {
            if ('all' !== $department) {
                $this->data['employees'] = $this->masterlist->fetchEmployeesByDepartment($department);
            } else {
                $this->data['employees'] = $this->masterlist->listAllEmployees();
            }
        }
        
        return new ViewModel($this->data);
    }
}
