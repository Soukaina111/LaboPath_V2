<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PatientsController extends Controller
{

   // Show all patients
    public function index()
    {

        //$patients = Patient::all();
        $patients = Patient::latest()->filter(request(['search']))->paginate(5);
        return view('patients.index',compact('patients'));
    }

    // Show edit patient form
    public function edit(Patient $patient)
    {
        $patient = Patient::find($patient->id);
        return view('patients.edit',compact('patient'));
    }

    public function day()
    {
        // Get the start and end of the current day
        $startOfDay = now()->startOfDay();
        $endOfDay = now()->endOfDay();
    
        // Retrieve patients created within the current day
        $patients = Patient::whereBetween('created_at', [$startOfDay, $endOfDay])->paginate(5);
    
        return view('patients.index', compact('patients'));
    }
    

  
    // Update patient
    public function update(Request $request, Patient $patient)
    {
        
        $formFields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'CIN' => 'required',
            'DDN' => 'nullable',
            'age' => 'nullable',
            'CIV' => 'required',
            'referent' => 'required',
        ]);
        
        $patient->update($formFields);

        return redirect('/')->with('message', 'Patient updated successfully');
    }




    // Show single patient
    public function show(Patient $patient)
    {
        return view('patients.show',compact('patient'));

    }
    // Show create patient form
    public function create()
    {
        return view('patients.create');
    }
    

    // Store a new patient
   
    public function store(Request $request)
{
        $formFields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'CIN' => 'required',
            'DDN' => 'nullable',
            'age' => 'nullable',
            'CIV' => 'required',
            'referent' => 'required',
        ]);
        Patient::create($formFields);

        return redirect('/')->with('message', 'Patient added successfully');
   
}




    // update a patient
  
    // delete a patient
    public function destroy($id)
    {
        $patient = Patient::find($id);
        $patient->delete();
        return redirect('/')->with('message', 'Patient deleted successfully');
    }

}
