@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

      
          <form action="{{route('company.update', $company->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="company">Company Name</label>
              <input name="title" type="text" class="form-control" id="company" value="{{$company->title}}">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </form>

            
        </div>
    </div>
</div>
@endsection
