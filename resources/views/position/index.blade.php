@extends('layouts.admin')

@section('navTitle')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Position</li>
  </ol>
  <h6 class="font-weight-bolder mb-0">Position</h6>
</nav>
@endsection
@section('content')

<div class="container">
  <div class="row">
    <div class="col-6">
      <div class="container-fluid py-4">
        <div class="row">
          <div class="card mb-4">
            <div class="card-header pb-5">
              <h6 class="mt-4">Enter Position</h6>
            </div>
            <div class="card-body px-0 pt-5 pb-5 mb-5">
              <form action="{{route('position.store')}}" method="post">
                @csrf
                <input type="text" name="position_name" class="form-control">
                <div class="">
                  <button type="submit" class="justify-content-end btn btn-sm btn-success mt-2">Add</button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6">


      <div class="container-fluid py-4">
        <div class="row">
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header pb-0">
                <h6>Position</h6>
              </div>
              <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Position Name</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($positions as $position )


                      <tr>

                        <td>
                          <p class="text-xs font-weight-bold mb-0">{{$position->id}}</p>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">{{$position->position_name}}</p>
                          <p class="text-xs text-secondary mb-0">Organization</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <a href="{{route('position.edit',$position->id)}}" class="btn btn-sm bg-gradient-success">Edit</a>
                          <form action="{{route('position.destroy',$position->id)}}" method="post">
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
  </div>
</div>


@endsection