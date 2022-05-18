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
            <div class="col-3"></div>
            <div class="col-6">
                <div class="container-fluid py-4">
                    <div class="row">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h6 class="mt-4">Enter Employee Details</h6>
                            </div>
                            <div class="card-body px-0  pb-2">
                                <form action="{{route('employee.store')}}" method="post">
                                    @csrf
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-4 mb-2">
                                            <label for="">First Name</label>
                                                <input type="text" name="firstname" class="form-control" placeholder="First Name">
                                            </div>
                                            <div class="col-4 mb-3">
                                            <label for="">Middle Name</label>
                                                <input type="text" name="middlename" class="form-control" placeholder="Middle Name">
                                            </div>
                                            <div class="col-4 mb-3">
                                            <label for="">Last Name</label>
                                                <input type="text" name="lastname" class="form-control" placeholder="Last Name">
                                            </div>

                                            <div class="container col-6 mb-3">
                                                <label for="">Birthdate</label>
                                                <input type="date" name="birthdate"  class="form-control" placeholder="Birthday">
                                            </div>

                                            <div class="col-6 mb-3">
                                            <label for="">Age</label>
                                                <input type="number"  name="age" class="form-control" placeholder="Age">
                                            </div>
                                            <div class="col-6 mb-3">
                                            <label for="">Sex</label>
                                                <select name="sex" class="form-select" id="inputGroupSelect01">
                                                    <option selected>Sex...</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>

                                                </select>
                                            </div>
                                            <div class="col-12 mb-3">
                                            <label for="">Address</label>
                                                <input type="text" name="address" class="form-control" placeholder="Address">
                                            </div>
                                            <div class="container col-6 mb-3">
                                            <label for="">Employed Date</label>
                                                <input type="date" name="employedDate"  class="form-control" placeholder="Employed Date"> 
                                            </div>
                                       
                                            <div class="col-6 mb-3">
                                            <label for="">Department</label>
                                                <select name="department_id" class="form-select" id="inputGroupSelect01" >
                                                    <option selected>Department...</option>
                                                    @foreach ($departments as $department)
                                                    <option value="{{$department['id']}}">{{$department['department_name']}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-6 mb-3">
                                            <label for="">Position</label>
                                                <select name="position_id" class="form-select" id="inputGroupSelect01" >
                                                    <option selected>Position...</option>
                                                    @foreach ($positions as $position)
                                                    <option value="{{$position['id']}}">{{$position -> position_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <button type="submit" class="justify-content-end btn btn-sm btn-success mt-2">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">


            


            </div>
        </div>
    </div>


    @endsection