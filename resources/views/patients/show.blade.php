<x-layout>
   <style>
       /* Updated main container styling */
       #main {
           background-color: #f8f9fa; /* Lighter background color */
           box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Softer shadow */
           margin: 10px auto; /* Increased margin for better spacing */
           max-width: 1000px; /* Slightly wider max width for larger screens */
           padding: 30px; /* Added vertical padding */
           text-align: left; /* Align text to the left for better readability */
       }
                  /* Form group styling */
      .form-group.row {
           margin-bottom: 15px; /* Spacing between form groups */
       }

       /* Input fields and select boxes */
      .form-control {
           border-radius: 5px; /* Rounded corners */
           transition: border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out; /* Smooth transitions */
       }

       /* Button styling */
       button[type="submit"],.btn.btn-secondary {
           font-weight: bold; /* Bold text for buttons */
           padding: 10px 20px; /* More padding for easier clicking */
           border-radius: 5px; /* Rounded corners */
           cursor: pointer; /* Pointer cursor on hover */
           transition: background-color 0.3s ease; /* Background color transition */
       }

       button[type="submit"]:hover,.btn.btn-secondary:hover {
           background-color: #007bff; /* Blue background on hover */
           color: white; /* White text on hover */
       }

       /* Error message styling */
      .invalid-feedback {
           display: inline-block; /* Make error messages visible */
           color: red; /* Red text for errors */
       }
   </style>
   <div id="main">
       <form method="POST" action="">
           @csrf
           <div class="form-group row">
               <label for="last_name">{{ __('Nom de famille') }}</label>

               <div class="col-md-6">
                   <input id="last_name" type="text" class="form-control" name="last_name" value="{{$patient->last_name}}" required>
               </div>
           </div>

           <div class="form-group row">
               <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('Prénom') }}</label>

               <div class="col-md-6">
                   <input id="first_name" type="text" class="form-control" name="first_name" value="{{$patient->first_name}}" required>
               </div>
           </div>
           <div class="form-group row">
               <label for="DDN" class="col-md-4 col-form-label text-md-right">Date de Naissance</label>
               <div class="col-md-6">
                   <input id="DDN" type="date" class="form-control" value="{{$patient->DDN}}" name="DDN" onchange="calculateAge(this.value)">
                   @error('DDN')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
               </div>
           </div>
           <div class="form-group row">
               <label for="age" class="col-md-4 col-form-label text-md-right">Âge</label>
               <div class="col-md-6">
                   <input id="age" type="text"  class="form-control"  value="{{$patient->age}}" name="age">
               </div>
           </div>
           <div class="form-group row">
               <label for="CIN" class="col-md-4 col-form-label text-md-right">{{ __('CIN') }}</label>

               <div class="col-md-6">
                   <input id="CIN" type="text" class="form-control" name="CIN" value="{{$patient->CIN}}" required>
               </div>
           </div>
           <div class="form-group row">
               <label for="CIV" class="col-md-4 col-form-label text-md-right">{{ __('Civilité') }}</label>
           
               <div class="col-md-6">
                   <select id="CIV" class="form-control" name="CIV" required>
                       <option value="{{$patient->CIV}}" {{ $patient->CIV == 'M'? 'selected' : '' }}>M</option>
                       <option value="{{$patient->CIV}}" {{ $patient->CIV == 'Mme'? 'selected' : '' }}>Mme</option>
                       <option value="{{$patient->CIV}}" {{ $patient->CIV == 'Mlle'? 'selected' : '' }}>Mlle</option>
                       <option value="M">M</option>
                       <option value="Mme">Mme</option>
                       <option value="Mlle">Mlle</option>
                   </select>
               </div>
           </div>
           <div class="form-group row">
               <label for="referent" class="col-md-4 col-form-label text-md-right">{{ __('Médecin Référent') }}</label>
               <div class="col-md-6">
                   <input id="referent" type="text" class="form-control" name="referent" value="{{$patient->referent}}" required>
               </div>
           </div>
       </form>
   </div>
</x-layout>




