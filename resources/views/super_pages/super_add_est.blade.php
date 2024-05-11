@extends('super_template')

@section('content')
<p class="mt-1 mb-5 text-4xl font-light">{{ $edit ? 'Edit' : 'Add' }} Establishment</p>
<form class="max-w-sm" action="{{ $edit ? url('/update_record') : url('/add_est') }}" method="post" enctype="multipart/form-data" role="form" >
    @csrf

    <input type="hidden" name="est_id" value="{{ $edit ? $item->est_id : '' }}"/>
    <div class="mb-5">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter {{ $edit ? 'new' : '' }} establishment name</label>
        <input name="est_name" value="{{ $edit ? $item->est_name : '' }}" type="text" id="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Type here..." required />
    </div>
    <div class="mb-5">
        <label for="file_input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Add {{ $edit ? 'new' : '' }} establishment logo</label>
        <input name="est_image" type="file" accept=".jpg,.jpeg,.png,.svg,.gif,.jfif" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" required />
        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG, JPEG, JFIF, or GIF.</p>
    </div>

    @if(Session::has('username_taken'))
        <div>
            <label for="username-error" class="block mb-2 text-sm font-medium text-red-700 dark:text-red-500">Enter {{ $edit ? 'new' : '' }} username</label>
            <input name="est_username" value="{{ $edit ? $item->est_username : '' }}" type="text" id="username-error" class="bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500" placeholder="Type here...">
            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> Username already taken!</p>
        </div>
    @else
        <div class="mb-5">
            <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter {{ $edit ? 'new' : '' }} email</label>
            <input name="est_username" value="{{ $edit ? $item->est_username : '' }}" type="text" id="username" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Type here..." required />
        </div>
    @endif


    @if(Session::has('password_match'))
        <div class="mb-5">
            <label for="password" class="block mb-2 text-sm font-medium text-red-700 dark:text-red-500">Enter {{ $edit ? 'new' : '' }} password</label>
            <input name="est_password1" type="password" id="password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
        </div>
        <p class="mt-2 text-sm text-red-600 dark:text-red-500 mb-2"><span class="font-medium">Oops!</span> Passwords do not match!</p>
        <div class="mb-5">
            <label for="repeat-password" class="block mb-2 text-sm font-medium text-red-700 dark:text-red-500">Repeat {{ $edit ? 'new' : '' }} password</label>
            <input name="est_password2" type="password" id="repeat-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
        </div>
    @else
    <div class="mb-5">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter {{ $edit ? 'new' : '' }} password</label>
        <input name="est_password1" type="password" id="password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
    </div>
    <div class="mb-5">
        <label for="repeat-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Repeat {{ $edit ? 'new' : '' }} password</label>
        <input name="est_password2" type="password" id="repeat-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
    </div>
    @endif
  
    @if(Session::has('Success'))
    <p class="mt-2 text-green-600 dark:text-green-500 mb-5 text-lg italic font-light"><span class="font-medium">{{ Session::get('Success') }}</span> </p>
    @endif
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register new account</button>


</form>

@endsection