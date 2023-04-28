@extends('layout')
@section('content')

<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">All students :
            </h6>
            <a href="{{url('admin/eleves/create')}}" class="btn btn-success btn-sm">Add new student</a>
        </div>
        <div class="card-body">
            @if(Session::has('success'))
            <p class="text-success">{{session('success')}}</p>
            @endif
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>nom</th>
                            <th>prenom</th>
                            <th>date-naissance</th>
                            <th>adresse</th>
                          
                            <th>email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($eleves)
                        @foreach($eleves as $eleve)
                        <tr>
                            <td>{{ $eleve->id }} </td>
                            <td>{{ $eleve->nom }}</td>
                            <td>{{ $eleve->prenom}}</td>
                            <td>{{ $eleve->date_naissance}}</td>
                            <td>{{ $eleve->adresse}}</td>
                            <td>{{ $eleve->email}}</td>
                            <td>
                                <a href="{{url('admin/hotels/'.$eleve->id)}}" class="btn btn-info btn-sm mb-2"><i class="fa fa-eye"></i></a>
                                <a href="{{url('admin/eleve/'.$eleve->id.'/edit')}}" class="btn btn-success btn-sm mb-2"><i class="fa fa-edit"></i></a>
                                <a  href="{{ route('eleves.destroy', $eleve) }}" onClick="confirm('are you sure that you want to delete this student?')" class="btn btn-danger btn-sm mb-2"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection