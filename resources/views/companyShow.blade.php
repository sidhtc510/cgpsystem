@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name of Clients</th>
                    <th scope="col">E-Mail</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>

                  {{-- @dd($data) --}}
<h3>Список клиентов компании <strong> {{$data->title}}</strong></h3>
                    @foreach ($data->clients as $data)
                    <tr>
                        <th scope="row">{{$data->id}}</th>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>
                          <div class="btnDelete btn">
                            <form action="{{ route('client.destroy', $data->id) }}" method="post"
                                class="float-left">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Удалить \'{{ $data->name }} \' ?' )">
                                    <i class="bi bi-trash3"></i>
                                </button>
                            </form>
                        </div>
                        </td>
                      </tr>
                    @endforeach
                  
                  
                </tbody>
              </table>

            
        </div>
    </div>
</div>
@endsection
