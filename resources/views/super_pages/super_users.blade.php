@extends('super_template')

@section('content') 
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg border border-cyan-700">
        <table class="w-full text-sm text-left rtl:text-right text-gray-600 dark:text-gray-700 ">
            <thead class="text-dark-700 uppercase bg-blue-50 dark:bg-blue-700 dark:text-blue-400">
                <tr>
                    <th scope="col" class="px-16 py-3 text-xl font-normal">
                        Image
                    </th>
                    <th scope="col" class="px-6 py-3 text-xl font-normal">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3 text-xl font-normal">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3 text-xl font-normal">
                        Password
                    </th>
                    <th scope="col" class="px-6 py-3 text-xl font-normal">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
              
            </tbody>
        </table>
    </div>
    @if(Session::has('Success'))
        <p class="mt-2 text-green-600 dark:text-green-500 mb-5 text-lg italic font-light"><span class="font-medium">{{ Session::get('Success') }}</span> </p>
    @endif
    @if(Session::has('Delete'))
        <p class="mt-2 text-red-600 dark:text-red-500 mb-5 text-lg italic font-light"><span class="font-medium">{{ Session::get('Delete') }}</span> </p>
    @endif
@endsection