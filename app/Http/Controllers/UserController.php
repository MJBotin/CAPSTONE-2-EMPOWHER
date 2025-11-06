<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage; 

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
        \Log::info('Store Request Data:', $request->all());
        \Log::info('Store Request Files:', $request->files->all());

        $validated = $request->validate([
            'last_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255', 
            'suffix' => 'nullable|string|max:10',     
            'gender' => 'required|string|max:50',
            'dob' => 'required|date', 
            'civil_status' => 'required|string|max:50',
            'place_of_birth' => 'required|string|max:255',
            'citizenship' => 'nullable|string|max:255', 

            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120', 
            'front_id_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
            'back_id_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',

            'contact_number' => 'required|string|max:20', 
            'email' => 'nullable|email|max:255|unique:users,email', 
            'address' => 'required|string|max:255',

            'username' => 'required|string|max:255|unique:users,username',
            'password' => 'required|string|min:8|confirmed|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*#?&]/',
            'agree' => 'required|accepted', 
            'user_type' => 'nullable|in:user,admin,super admin', 
            'dob.required' => 'The date of birth field is required.',
            'photo.required' => 'A profile photo is required.',
            'photo.image' => 'The profile photo must be an image.',
            'photo.mimes' => 'The profile photo must be a file of type: jpeg, png, jpg, gif.',
            'photo.max' => 'The profile photo may not be greater than 5 megabytes.',
            'front_id_photo.required' => 'The front ID photo is required.',
            'front_id_photo.image' => 'The front ID photo must be an image.',
            'front_id_photo.mimes' => 'The front ID photo must be a file of type: jpeg, png, jpg, gif.',
            'front_id_photo.max' => 'The front ID photo may not be greater than 5 megabytes.',
            'back_id_photo.required' => 'The back ID photo is required.',
            'back_id_photo.image' => 'The back ID photo must be an image.',
            'back_id_photo.mimes' => 'The back ID photo must be a file of type: jpeg, png, jpg, gif.',
            'back_id_photo.max' => 'The back ID photo may not be greater than 5 megabytes.',
            'password.regex' => 'The password must be at least 8 characters long and include an uppercase letter, lowercase letter, number, and special character.',
            'agree.required' => 'You must agree to the Privacy Policy.',
            'agree.accepted' => 'You must agree to the Privacy Policy.',
        ]);

        $validated['profile_photo'] = $request->file('photo')->store('user_photos', 'public');
        $validated['id_front_photo'] = $request->file('front_id_photo')->store('user_ids', 'public');
        $validated['id_back_photo'] = $request->file('back_id_photo')->store('user_ids', 'public');

        $validated['password'] = Hash::make($validated['password']);

        $validated['registration_status'] = 'pending';
        if (!isset($validated['user_type']) || auth()->guest()) { 
            $validated['user_type'] = 'user';
        }

        $validated['birthdate'] = $validated['dob'];
        unset($validated['dob']);


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
        \Log::info('Update Request Data:', $request->all());
        \Log::info('Update Request Files:', $request->files->all());

        $validated = $request->validate([
            'last_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'suffix' => 'nullable|string|max:10',
            'gender' => 'required|string|max:50',
            'dob' => 'required|date',
            'civil_status' => 'required|string|max:50',
            'place_of_birth' => 'required|string|max:255',
            'citizenship' => 'nullable|string|max:255',

            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'front_id_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'back_id_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',

            'contact_number' => 'required|string|max:20',
            'email' => 'nullable|email|max:255|unique:users,email,' . $user->id,
            'address' => 'required|string|max:255',

            'username' => 'required|string|max:255|unique:users,username,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*#?&]/',
            'user_type' => 'required|in:user,admin,super admin', 
        ], [
            'dob.required' => 'The date of birth field is required.',
            'photo.image' => 'The profile photo must be an image.',
            'photo.mimes' => 'The profile photo must be a file of type: jpeg, png, jpg, gif.',
            'photo.max' => 'The profile photo may not be greater than 5 megabytes.',
            'front_id_photo.image' => 'The front ID photo must be an image.',
            'front_id_photo.mimes' => 'The front ID photo must be a file of type: jpeg, png, jpg, gif.',
            'front_id_photo.max' => 'The front ID photo may not be greater than 5 megabytes.',
            'back_id_photo.image' => 'The back ID photo must be an image.',
            'back_id_photo.mimes' => 'The back ID photo must be a file of type: jpeg, png, jpg, gif.',
            'back_id_photo.max' => 'The back ID photo may not be greater than 5 megabytes.',
            'password.regex' => 'The password must be at least 8 characters long and include an uppercase letter, lowercase letter, number, and special character.',
        ]);

        if ($request->hasFile('photo')) {
            if ($user->profile_photo) {
                Storage::disk('public')->delete($user->profile_photo);
            }
            $validated['profile_photo'] = $request->file('photo')->store('user_photos', 'public');
        }

        if ($request->hasFile('front_id_photo')) {
            if ($user->id_front_photo) {
                Storage::disk('public')->delete($user->id_front_photo);
            }
            $validated['id_front_photo'] = $request->file('front_id_photo')->store('user_ids', 'public');
        }

        if ($request->hasFile('back_id_photo')) {
            if ($user->id_back_photo) {
                Storage::disk('public')->delete($user->id_back_photo);
            }
            $validated['id_back_photo'] = $request->file('back_id_photo')->store('user_ids', 'public');
        }

        if ($request->filled('password')) {
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }

        $validated['birthdate'] = $validated['dob'];
        unset($validated['dob']);

        $user->update($validated);

        return redirect()->route('users.index')->with('success', 'User updated successfully!');
    }


    public function destroy(User $user)
    {
        if ($user->profile_photo) {
            Storage::disk('public')->delete($user->profile_photo);
        }
        if ($user->id_front_photo) {
            Storage::disk('public')->delete($user->id_front_photo);
        }
        if ($user->id_back_photo) {
            Storage::disk('public')->delete($user->id_back_photo);
        }

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