<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebsiteInquiry;
use Illuminate\Support\Facades\Log;

class WebsiteInquiryController extends Controller
{
    /**
     * Create a website inquiry through the contact form
     */
    public function save(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'company_name' => 'required',
            'company_size' => 'required',
            'subject' => 'required',
            'message' => 'required|min:10'
        ]);

        try {
            WebsiteInquiry::create($validated);
            session()->flash('status', 'success');
        } catch (\Throwable $th) {
            Log::error($th);
            session()->flash('status', 'failed');
        }
        return redirect()->to('/#contact');
    }
}
