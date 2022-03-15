@extends('layouts.dashboard')
@section('content')
    <div class="container w-full mx-auto pt-20">
        <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">
            <table class="table-fixed">
                <thead>
                <tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Editer</th>
                    <th>Supprimer</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->firstname}}</td>
                        <td>{{$user->lastname}}</td>
                        <td>{{$user->email}}</td>
                        <td><button class="bg-blue-600">editer</button> </td>
                        <td><button class="bg-red-600">supprimer</button> </td>
                    </tr>
                @endforeach()
                </tbody>
            </table>
        </div>
    </div>
@endsection
