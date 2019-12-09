<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\GuideInvoiceModel AS MDB;

class GuideInvoiceController extends Controller
{
    protected $cValidator = [
        'name' => 'required|max:175',
        'email' => 'required',

        'file1' => 'mimes:jpeg,jpg,png|max:1000',
    ];

    protected $cValidatorMsg = [
        'name.required' => 'กรุณากรอกชื่อ',
        'name.max' => 'ชื่อต้องไม่เกิน 175 ตัวอักษร',

        'email.required' => 'กรุณากรออีเมล์',

        // 'file1.required' => 'กรุณาใส่รูปภาพ',
        'file1.mimes' => 'ชนิดของไฟล์ต้องเป็น .jpeg, .jpg, .png เท่านั้น',
        'file1.max' => 'รับขนาดไฟล์สูงสุดที่จะอัปโหลดคือ 2MB',
    ];

    // get data all 
    public function index(MDB $db, Request $request)
    {
        $res = $db->find($request);
        $res['items'] = $this->ui->item('GuideInvoiceDataTable')->init($res['data'], $res['options']);

        $res['code'] = 200;
        $res['info'] = 'Contacts results successfully';
        $res['message'] = 'The request has succeeded.';
        
        return response()
            ->json($res, 200)
            ->header('Content-Type', 'application/json');
    }
}
