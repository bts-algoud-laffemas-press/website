@extends('layouts.dashboard')
@section('content')
    <div class="container w-full mx-auto pt-20">
        <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">
            <form method="post" action="{{route('dashboard.user.store')}}">

                <div class="mb-6">
                    <label for="firstname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Prénom</label>
                    <input type="text" id="firstname" name="firstname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" >
                    @error('firstname')
                    <span class="text-red-500" >
                                                <strong>{{ $message }}</strong>
                                            </span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="lastname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nom</label>
                    <input type="text" id="lastname" name="lastname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" >
                    @error('lastname')
                    <span class="text-red-500" >
                                                <strong>{{ $message }}</strong>
                                            </span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Vôtres email</label>
                    <input type="text" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" >
                    @error('email')
                    <span class="text-red-500" >
                                                <strong>{{ $message }}</strong>
                                            </span>
                    @enderror
                </div>
                <select name="roles" id="status" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                    @foreach(\App\Enums\UserRoles::cases() as $userRoles)
                        <option value="{{ $userRoles->value }}" >
                            {{$userRoles->name}}
                        </option>
                    @endforeach
                </select>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                @csrf
            </form>
        </div>
    </div>
@endsection
