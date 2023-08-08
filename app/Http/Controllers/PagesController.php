<?php

namespace App\Http\Controllers;

use App\Http\Traits\BX;

// Trait

class PagesController extends Controller
{
    use BX;

//     public function index()
//     {
//         $result = $this->call('crm.lead.list', [
//             'filter' => [
// //                '>DATE_CREATE' => '2019-10-01T00:00:00',
// //                '<DATE_CREATE' => '2019-10-31T23:59:59'
//             ],
//             'select' => [
//                 'ID',
//                 'DATE_CREATE'
//             ]
//         ]); // Call trait method
//         dd($result);
//     }
}
