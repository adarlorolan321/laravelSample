@extends('layouts.admin')

@section('navTitle')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Tamtech</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Employee</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Add Employee</h6>
</nav>
@endsection
@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-4 ml-5 mt-5"> <a href="{{route('employee.create')}}" class="btn btn-sm btn-success">add</a></div>
      
        
            <div class="container-fluid py-4">
                <div class="row">
                  
                        <div class="card mb-4">
                            <div class="card-header pb-0">
                                <h6>Position</h6>
                            </div>
                            <div class="card-body px-0 pt-0 pb-2">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">#</th>
                                                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7 ps-2">First Name</th>
                                                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7 ps-2">Birth Date</th>
                                                <th class="text-center text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">Age</th>
                                                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Sex</th>
                                                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7 ps-2">Address</th>
                                                <th class="text-center text-uppercase text-center text-center text-secondary text-xxs font-weight-bolder opacity-7">Employed Date</th>
                                                <th class="text-center text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">Department</th>
                                                <th class="text-center text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">Position</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($employees as $employee)
                                                
                                            
                                            <tr>
                                                <td class="text-center">
                                                    {{$employee->id}}
                                                </td>
                                                <td class="text-center">
                                                    {{ucfirst($employee->firstname)}} {{ucfirst($employee->middlename)}} {{ucfirst($employee->lastname)}}
                                                </td>
                                                
                                                <td class="text-center">
                                                    {{$employee->birthdate}}
                                                </td>
                                                <td class="text-center">
                                                    {{$employee->age}}
                                                </td>
                                                <td class="text-center">
                                                   {{$employee->sex}}
                                                </td>
                                                <td class="text-center">
                                                    {{$employee->address}}
                                                </td>
                                                <td class="text-center">
                                                    {{$employee->employedDate}}
                                                </td>
                                               
                                                <td class="text-center">
                                                {{$employee->department->department_name}}
                                                </td>
                                                <td class="text-center">
                                                    {{$employee->position->position_name}}
                                                </td>
                                                <td class="align-middle text-center text-sm d-inline-flex ">
                                                    <a href="{{route('employee.edit',$employee->id)}}" class="btn btn-sm bg-gradient-success">Edit</a>
                                                    <span class=""></span>
                                                    <form action="m-0" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-sm bg-gradient-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                   
                </div>
            </div>
      
       
    </div>
</div>
@endsection