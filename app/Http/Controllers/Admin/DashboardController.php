<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Transporter;
use App\Models\Client;
use App\Models\Vehicle;
use App\Models\Location;
use App\Models\Challan;
use App\Models\Diesel;

use Mail;
use App\Mail\TestMail;


class DashboardController extends Controller
{
    private $viewFolder = 'admin/dashboard/';
    public function index()
    {
        $total_user=User::where('status',1)->where('deleted_at',NULL)->count();
       

        return view($this->viewFolder.'dashboard',compact('total_user'));
    }

    public function sendMail()
    {
        $mail = 'swapan.kanrar143@gmail.com';
        $mailData = array('name' => 'swapan kanrar', 'email' => 'swapan.kanrar143@gmail.com');
        Mail::to($mail)->send(new TestMail($mailData));

    }

}
