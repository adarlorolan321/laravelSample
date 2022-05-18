@extends('layouts.admin')
@section('navTitle')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Position</a></li>
    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Edit Position</li>
  </ol>
  <h6 class="font-weight-bolder mb-0">EditPosition</h6>
</nav>
@endsection
@section('content')

<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="container-fluid py-4">
        <div class="row">
          <div class="card mb-4">
            <div class="card-header pb-5">
              <h6 class="mt-4">Edit Position</h6>
            </div>
            <div class="card-body px-0 pt-5 pb-5 mb-5">
              <form action="{{route('position.update',$position->id)}}" method="post">
                  @method('PUT')
                @csrf
                <input type="text" name="position_name" value="{{$position->position_name}}" class="form-control">
                <div class="">
                  <button type="submit" class="justify-content-end btn btn-sm btn-success mt-2">Add</button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
 
  </div>
</div>


@endsection