@props(['patients', 'file'])
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    </head>
    <style>
  .table-bordered th,
  .table-bordered td {
      border: 1px solid #e2e2e4;
  }
  .table {
      width: 85.7%;
      position :fixed;
      margin-bottom: 1rem;
      background-color: #fff;
      border-collapse: collapse;
      margin: 10px auto;
      max-width: 1700px;
      padding: 0;
      padding-left:0;
      padding-top:0;
      text-align: center;
      margin-left : 170px;
      z-index: 100;
  }
  .table th,
  .table td {
      padding: .75rem;
      vertical-align: top;
      border-top: 1px solid #dee2e6;
  }
    </style>
<table class="table table-striped table-bordered  margin-left: 150 px;">
    <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Sample Type</th>
            <th>Organe</th>
            <th>Referant</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
       @foreach ($patients as $patient)
            <tr>
              <td>{{$loop->iteration}}</td>
                <td>{{$patient->first_name}}</td>
                <td>{{$patient->last_name}}</td>
                <td>{{$patient->sample_type}}</td>
                <td>{{$patient->organe}}</td>
                <td>{{$patient->referent}}</td>
                <td style="text-align: center;">
                <a href="/patients/{{$patient->id}}/edit" class="Edit" title="Modifier" data-toggle="tooltip"><i class="fas fa-pencil-alt fa-lg" style="color: green;"></i></a>
                {{-- <a href="/files/{{$patient->id}}/edit" class="Edit" title="Modifier file " data-toggle="tooltip"><i class="fas fa-pencil-alt fa-lg" style="color: rgb(128, 0, 107);"></i></a> --}}

                <a href="/patients/{{$patient->id}}" class="show" title="Afficher" data-toggle="tooltip"><i class="fas fa-eye fa-lg" style="color: rgb(17, 0, 255);"></i></a> 
                <a href="{{ route('Patient.destroy',  ['id' => $patient->id])  }}" class="delete"
                    title="Delete" data-toggle="tooltip">
                    <i id="trash" class="fa fa-trash" style="color: rgb(255, 47, 0);"></i>
                </a>
            </tr>
    </tbody>
    @endforeach
</table>
</html>
