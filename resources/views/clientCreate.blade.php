@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">


                <form action="{{ route('client.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Имя клиента</label>
                        <input type="text" class="form-control" @error('name') is-invalid @enderror id="name" name="name"
                            placeholder="Имя клиента" value="{{ old('name') }}">

                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="exampleFormControlInput1"
                            placeholder="name@example.com"  value="{{ old('email') }}">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Добавить клиента</button>
                </form>


            </div>
        </div>
    </div>
@endsection
