<?php

namespace App\Http\Controllers\Frontend\Customer;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile()
    {
        $user = Auth::guard('customer')->user();
        $address = Address::getAddressByCustId($user->id);
        $data = [
            'custId' => $user->id,
            'address' => $address
        ];
        return view('frontend.profile.my_profile', compact('data'));
    }
    public function saveAddress(Request $request)
    {
        $address = new Address($request->all());
        $address->save();

        return redirect()->route('customer.profile', $customer)->with('success', 'Address saved successfully!');
    }
}
