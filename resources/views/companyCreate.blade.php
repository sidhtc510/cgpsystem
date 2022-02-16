@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">


                <form action="{{ route('company.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="company">Company Name</label>
                        <input type="text" class="form-control" @error('title') is-invalid @enderror id="title"
                            name="title" placeholder="Название компании" value="{{ old('title') }}">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Сохранить компанию</button>
                </form>


            </div>
        </div>
    </div>
@endsection
