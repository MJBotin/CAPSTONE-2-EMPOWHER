<?php

namespace App\Http\Controllers;

use App\Models\DocumentRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DocumentRequestController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->hasRole('admin') || $user->hasRole('superadmin')) {
            $requests = DocumentRequest::with('user')->get();
        } else {
            $requests = DocumentRequest::where('created_by', $user->id)->get();
        }

        return view('document_requests.index', compact('requests'));
    }

    public function show($id)
    {
        $request = DocumentRequest::findOrFail($id);

        $user = Auth::user();
        if (!$user->hasRole('admin') && !$user->hasRole('superadmin') && $request->created_by !== $user->id) {
            abort(403, 'Unauthorized');
        }

        return view('document_requests.show', compact('request'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'document_type' => 'required|string|max:255',
            'details' => 'nullable|string',
        ]);

        $validated['created_by'] = Auth::id();
        $validated['status'] = 'pending';

        DocumentRequest::create($validated);

        return redirect()->back()->with('success', 'Document request submitted.');
    }

    public function updateStatus(Request $request, $id)
    {
        $user = Auth::user();

        if (!$user->hasRole('admin') && !$user->hasRole('superadmin')) {
            abort(403, 'Unauthorized');
        }

        $validated = $request->validate([
            'status' => 'required|in:pending,in_progress,completed',
        ]);

        $docRequest = DocumentRequest::findOrFail($id);
        $docRequest->status = $validated['status'];
        $docRequest->save();

        return redirect()->back()->with('success', 'Request status updated.');
    }
}
