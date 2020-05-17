<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminCreate(Request $request)
    {

    }

    public function adminUpdate(Request $request)
    {
        $data = $request->only(
            [
                "email",
                "first_name",
                "last_name",
                "phone",
                "status",
                "is_active",
                "role_id",
                "picture",
                "birthday",
            ]
        );
    }

    public function adminIndex()
    {
        $admins = Admin::with('role')->paginate(12);
        return view('pages.adminsIndex', compact('admins'));
    }

    public function adminShow($id)
    {
        return $admin = Admin::find($id);
    }

    public function adminDelete($id)
    {
        return $admin = Admin::find($id);

    }
}
