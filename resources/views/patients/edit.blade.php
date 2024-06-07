<x-layout>
    <div id="main3">
        <form method="POST" action="{{ route('patients.update', $patient->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="last_name">{{ __('Last Name') }}</label>

                <div class="col-md-6">
                    <input id="last_name" type="text" class="form-control" name="last_name" value="{{$patient->last_name}}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>
                <div class="col-md-6">
                    <input id="first_name" type="text" class="form-control" name="first_name" value="{{$patient->first_name}}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="DDN" class="col-md-4 col-form-label text-md-right">Date of Birth</label>
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
                <label for="age" class="col-md-4 col-form-label text-md-right">Age</label>
                <div class="col-md-6">
                    <input id="age" type="text"  class="form-control" name="age" value="{{$patient->age}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="CIN" class="col-md-4 col-form-label text-md-right">{{ __('CIN') }}</label>
                <div class="col-md-6">
                    <input id="CIN" type="text" class="form-control" name="CIN" value="{{$patient->CIN}}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="CIV" class="col-md-4 col-form-label text-md-right">{{ __('Civility') }}</label>
                <div class="col-md-6">
                    <select id="CIV" class="form-control" name="CIV" required>
                        <!-- Pre-select the option that matches $patient->CIV -->
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
                <label for="sample_type" class="col-md-4 col-form-label text-md-right">{{ __('Sample type') }}</label>                <div class="col-md-6">
                    <input id="sample_type" type="text" class="form-control" name="sample_type" value="{{$patient->sample_type}}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="organe" class="col-md-4 col-form-label text-md-right">{{ __('Organe') }}</label>
                <div class="col-md-6">
                    <input id="organe" type="text" class="form-control" name="organe" value="{{$patient->organe}}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="referent" class="col-md-4 col-form-label text-md-right">{{ __('Referent') }}</label>
                <div class="col-md-6">
                    <input id="referent" type="text" class="form-control" name="referent" value="{{$patient->referent}}" required>
                </div>
            </div>
            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit">
                        {{ __('Update') }}
                        </a>
                    </button>
                    <a href="/" class="btn btn-secondary">
                        {{ __('Cancel') }}
                    </a>          
                </div>
            </div>
        </form>
    </div>
</x-layout>




