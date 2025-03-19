<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QueryForm;
use Illuminate\Support\Facades\Mail;
use App\Mail\QueryFormMail;

class QueryFormController extends Controller
{


    /**
     * Display a listing of the QueryForms.
     */
    public function index()
    {
        $QueryForms = QueryForm::all(); // Sabhi queries fetch karo
        return view('admin.client-query', compact('QueryForms')); // View ko data pass karo
    }

    /**
     * Store a newly created QueryForm in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:query_form',
            'company_name' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:20',
            'web_url' => 'nullable|url',
            'your_msg' => 'nullable|string',
            'preffered_option' => 'nullable|string',
            'budget' => 'nullable|string',
            'goals' => 'nullable|string',
            'fb_link' => 'nullable|url',
            'insta_link' => 'nullable|url',
            'category' => 'nullable|string',
            'Requirement' => 'nullable|string',
            'existing_tool' => 'nullable|string',
            'language' => 'nullable|string',
            'form_type' => 'nullable|string',
        ]);

       
        $queryData = $request->all();
        $QueryForm = QueryForm::create($queryData);
    
        // ✅ Email to User
        Mail::to($queryData['email'])->send(new QueryFormMail($queryData));
    
        // ✅ Email to Admin
        Mail::to('kumshubham25@gmail.com')->send(new QueryFormMail($queryData));

        return redirect('/thank-you');
    }

    /**
     * Display the specified QueryForm.
     */
    public function show($id)
    {
        $QueryForm = QueryForm::findOrFail($id);
        return response()->json($QueryForm);
    }

    /**
     * Update the specified QueryForm in storage.
     */
    public function update(Request $request, $id)
    {
        $QueryForm = QueryForm::findOrFail($id);

        $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|unique:query_form,email,' . $id,
            'company_name' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:20',
            'web_url' => 'nullable|url',
            'your_msg' => 'nullable|string',
            'preffered_option' => 'nullable|string',
            'budget' => 'nullable|string',
            'goals' => 'nullable|string',
            'fb_link' => 'nullable|url',
            'insta_link' => 'nullable|url',
            'category' => 'nullable|string',
            'Requirement' => 'nullable|string',
            'existing_tool' => 'nullable|string',
        ]);

        $QueryForm->update($request->all());

        return response()->json(['message' => 'Query updated successfully', 'QueryForm' => $QueryForm]);
    }

    /**
     * Remove the specified QueryForm from storage.
     */
    public function destroy($id)
    {
        $QueryForm = QueryForm::findOrFail($id);
        $QueryForm->delete();

        return response()->json(['message' => 'Query deleted successfully']);
    }

    
    public function markQuery(Request $request)
    {
        $query = QueryForm::find($request->id);
        if ($query) {
            $query->is_marked = $request->status;
            $query->save();
            return response()->json(['message' => 'Query Marked Successfully!']);
        }
        return response()->json(['message' => 'Query Not Found!'], 404);
    }

    // ✅ Submit Remarks (Auto Save on Blur)
    public function submitRemarks(Request $request)
    {
        $query = QueryForm::find($request->id);
        if ($query) {
            $query->remarks = $request->remarks;
            $query->save();
            return response()->json(['message' => 'Remarks Updated Successfully!']);
        }
        return response()->json(['message' => 'Query Not Found!'], 404);
    }
}
