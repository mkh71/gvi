<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\{User, Appointment, DoctorProfile};
use DB;
use Carbon\Carbon;

class DashboardController extends Controller
{

    public function getDashboard() {
        $records = [
            "doctor_count"  =>  User::role("Doctor")->count(),
            "patient_count" => User::role("Patient")->count(),
            "appointment_count" => 10,
            "doctors" => User::role('doctor')
                ->select('users.name', 'users.id', 'users.email')
                ->orderBy('created_at')
                ->limit(5)
                ->get(),
            "patients" => User::role("Patient")
                ->select('users.name', 'users.mobile', 'users.created_at', 'users.id')
                ->orderBy('created_at')
                ->limit(5)
                ->get(),
//            "appointments" => Appointment::select('users.id', 'users.name', 'users.profile_photo', 'appointment.book_on', 'appointment.start_time', 'appointment.end_time', 'appointment.type', 'appointment.status', 'doctors.name as doctor_name', 'doctors.profile_photo as doc_profile_photo','appointment.created_at', 'appointment.doctor_id')
//                ->join('users', 'users.id', 'appointment.patient_id')
//                ->join('users as doctors', 'doctors.id', 'appointment.doctor_id')
//                ->get(),
            "appointments" =>''
        ];
        //return view('admin.dashboard', \compact('records'));
        return view('backend.dashboard', compact('records'));
    }


}
