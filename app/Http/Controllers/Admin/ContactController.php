<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('admin.contact_management.index');
    }
    public function getPermissions()
    {
        return response()->json(['data' => Contact::all()]);
    }
    
    public function delete($id)
    {
        $contact_details = Contact::find($id);

        if (!$contact_details) {
            return response()->json(['error' => 'Something went wrong. Please try again.'], 404);
        }

        $contact_details->delete();
        return response()->json(['success' => 'contact deleted successfully!']);
    }
}
