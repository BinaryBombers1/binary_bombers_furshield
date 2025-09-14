<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    // Admin dashboard
    public function dashboard() {
        $admins = User::admin()->get();
        $pendingUsers = User::pending()->get();

        return view('admin.dashboard', compact('admins', 'pendingUsers'));
    }

    // Approve pending user
    public function approve($id) {
        $user = User::findOrFail($id);
        $user->role = $user->temprole;
        $user->save();

        return redirect()->back()->with('message', 'User approved successfully!');
    }

    // Remove pending user
    public function remove($id) {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('message', 'User removed successfully!');
    }
}

