@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="dropdown">
                    <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Menu
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('company.create') }}">Добавить компанию</a></li>
                        <li><a class="dropdown-item" href="{{ route('client.create') }}">Добавить клиента</a></li>
                    </ul>
                </div>


                <h2>Список Компаний</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name of Company</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($companies as $company)
                            <tr>
                                <th scope="row">{{ $company->id }}</th>
                                <td>{{ $company->title }}</td>
                                <td>
                                    <a href="{{ route('company.show', $company->id) }}"
                                        class="
                                        btn btn-info btn-sm float-left mr-1"><i
                                            class="bi bi-eye"></i></a>
                                    <a href="{{ route('company.edit', $company->id) }}"
                                        class="btn btn-warning btn-sm float-left mr-1">
                                        <i class="bi bi-pencil"></i>
                                    </a>

                                    <div class="btnDelete btn">
                                        <form action="{{ route('company.destroy', $company->id) }}" method="post"
                                            class="float-left">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Удалить \'{{ $company->title }} \' ? при удалении компании, так же будут удалены ее клиенты' )">
                                                <i class="bi bi-trash3"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>

                <div class="d-flex justify-content-center">
                    {!! $companies->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
