<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class adminRelatedController extends Controller
{
    public function index(Request $request)
    {
        $query = User::query();
    
        if ($search = $request->query('search')) {
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%");
            });
        }
    
        if ($role = $request->query('role')) {
            $query->where('role', $role);
        }
    
        $users = $query->paginate(10);
    
        $counts = User::selectRaw('role, count(*) as cnt')
                    ->groupBy('role')
                    ->pluck('cnt','role');
    
        $ownersCount   = $counts->get('owner', 0);
        $vetsCount     = $counts->get('vet', 0);
        $sheltersCount = $counts->get('shelter', 0);
        $adminsCount   = $counts->get('admin', 0);
    
        return view('checkUsers', compact(
            'users','ownersCount','vetsCount','sheltersCount','adminsCount'
        ));
    }    

    public function updateRole(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->role = $request->role;
        $user->save();

        return redirect()->back()->with('success', 'Role updated successfully!');
    }

    public function removeRole($id)
    {
        $user = User::findOrFail($id);
        $user->role = "pending";
        $user->save();

        return redirect()->back()->with('success', 'Role removed successfully!');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('success', 'User deleted successfully!');
    }
    public function countUser()
    {
       
    }
}
