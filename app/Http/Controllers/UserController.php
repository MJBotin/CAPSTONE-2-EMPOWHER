<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends \Illuminate\Routing\Controller
{
    
    public function __construct()
    {
        $this->middleware(['auth']);

        $this->middleware(function ($request, $next) {
            if (!in_array(auth()->user()->user_type, ['admin', 'super admin'])) {
                abort(403, 'Unauthorized action.');
            }
            return $next($request);
        }); 
    }
  
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->paginate(10);
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'last_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'suffix' => 'nullable|string|max:10',
            'birthdate' => 'required|date',
            'place_of_birth' => 'required|string|max:255',
            'gender' => 'required|string|max:50',
            'civil_status' => 'required|string|max:50',
            'citizenship' => 'required|string|max:255',
            'email' => 'nullable|email|unique:users,email',
            'contact_number' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'password' => 'required|string|min:8|confirmed',
            'user_type' => 'required|in:user,admin,super admin',
        ]);

        $validated['password'] = Hash::make($validated['password']);
        $validated['registration_status'] = 'pending'; 

        User::create($validated);

        return redirect()->route('users.index')->with('success', 'User created successfully!');
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'last_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'suffix' => 'nullable|string|max:10',
            'birthdate' => 'required|date',
            'place_of_birth' => 'required|string|max:255',
            'gender' => 'required|string|max:50',
            'civil_status' => 'required|string|max:50',
            'citizenship' => 'required|string|max:255',
            'email' => 'nullable|email|unique:users,email,' . $user->id,
            'contact_number' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $user->id,
            'user_type' => 'required|in:user,admin,super admin',
        ]);

        if ($request->filled('password')) {
            $validated['password'] = Hash::make($request->password);
        }

        $user->update($validated);

        return redirect()->route('users.index')->with('success', 'User updated successfully!');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully!');
    }

    public function restore($id)
    {
        $user = User::withTrashed()->findOrFail($id);
        $user->restore();
        return redirect()->route('users.index')->with('success', 'User restored successfully!');
    }

    public function approve($id)
    {
        $user = User::findOrFail($id);
        $user->update(['registration_status' => 'approved']);
        return redirect()->back()->with('success', 'User registration approved.');
    }

    public function inProgress($id)
    {
        $user = User::findOrFail($id);
        $user->update(['registration_status' => 'in progress']);
        return redirect()->back()->with('info', 'User marked as in progress.');
    }

    public function decline($id)
    {
        $user = User::findOrFail($id);
        $user->update(['registration_status' => 'declined']);
        return redirect()->back()->with('error', 'User registration declined.');
    }

    public function archive($id)
    {
        $user = User::findOrFail($id);
        $user->update(['registration_status' => 'archived']);
        return redirect()->back()->with('warning', 'User archived.');
    }
}
