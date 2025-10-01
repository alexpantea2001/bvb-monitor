<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    public function toggleRole(Request $request)
    {
        $user = Auth::user();

        $role = Role::where('name', 'administrator')->first();

        if ($user->roles->contains($role)) {
            $user->roles()->detach($role);
        } else {
            $user->roles()->attach($role);
        }

        return back();
    }
}
