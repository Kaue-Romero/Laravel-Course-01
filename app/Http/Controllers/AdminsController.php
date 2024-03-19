<?php

namespace App\Http\Controllers;

use App\Models\Admins;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    public function createAdmin(Request $request)
    {
        $admin = new Admins();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = bcrypt($request->password);
        $admin->save();
        return response()->json(['status' => 'success', 'message' => 'Admin created successfully']);
    }
}
