<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Booking;
use Auth;

class BookingController extends Controller
{
 public function add(Request $request)
    {
        // Create a new booking

        if (!$request->filled('name') && !is_string($request->name)) {
            return redirect()->back()->with('error', 'Invalid Input for Name');
        }
        if (!$request->filled('email') && !filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            return redirect()->back()->with('error', 'Invalid Input for Email');
        }
        if (!$request->filled('phone') && !is_numeric($request->phone)) {
            return redirect()->back()->with('error', 'Invalid Input for Phone');
        }
        if (!$request->filled('date') && !strtotime($request->date)) {
            return redirect()->back()->with('error', 'Invalid Input for Date');
        }
        if (!$request->filled('time') && !strtotime($request->time)) {
            return redirect()->back()->with('error', 'Invalid Input for Time');
        }
        if (!$request->filled('service_id')) {
            return redirect()->back()->with('error', 'Invalid Input for service');
        }


        if (!$request->filled('message') && !is_string($request->message)) {
            return redirect()->back()->with('error', 'Invalid Input for Message');
        }
        $user_id = Auth::id();
        $booking = new Booking;
        $booking->user_id = $user_id;
        $booking->name = $request->name;
        $booking->email = $request->email;
        $booking->phone_number = $request->phone;
        $booking->date = $request->date;
        $booking->time = $request->time;
        $booking->service_id = $request->service_id ;
        $booking->hotel = $request->filled('hotel');



        $booking->message = $request->message;

        $service = Service::find($request->service_id);
        $booking->total_cost = $service->price;

        if ($request->filled('hotel')) {
            $booking->total_cost += 70.99;
        }

        $booking->save();

        return redirect()->back()->with('success', 'Booking was successfull');
    }
    public function getBookings(Request $request)
    {
        $user_id = Auth::id();
        $bookings = Booking::where('user_id', $user_id)->get();
        return view('bookings', ['bookings' => $bookings]);
    }
}
