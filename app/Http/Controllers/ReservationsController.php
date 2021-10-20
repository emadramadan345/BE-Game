<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Reservation;

class ReservationsController extends Controller
{
    // for dashboard table-datatable page
    public function browse()
    {
        $res = Reservation::all();
        return view('dashboard.reservations-table', compact('res'));
    }
    // for delete reservation
    public function delete($id_del)
    {
        $del_res = Reservation::where('Reservation_id', $id_del);
        // $ress="select * from Reservation where Reservation_id=id_del ;";
        $del_res->delete();
        return back();
    }

public function AddAppointment(Request $App){
    // return $App->first_name;
    $new_appointment = new Reservation;
    // $new_appointment->first_name = $App->first_name;
    // $new_appointment->last_name = $App->last_name;
    // $new_appointment->email = $App->email;
    // $new_appointment->phone = $App->phone;
    // $new_appointment->start_date = $App->start_date;
    $new_appointment->number_of_devices = $App->number_of_devices;
    $new_appointment->save();

}

}