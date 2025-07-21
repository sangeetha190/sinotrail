<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function index()
    {
        return view('admin.order_management.index');
    }
    public function getquote()
    {
        return response()->json(['data' => Quote::all()]);
    }
    public function delete($id)
    {
        $quote_details = Quote::find($id);

        if (!$quote_details) {
            return response()->json(['error' => 'Something went wrong. Please try again.'], 404);
        }

        $quote_details->delete();
        return response()->json(['success' => 'Quote details deleted successfully!']);
    }
}
