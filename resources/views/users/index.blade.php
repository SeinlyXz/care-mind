@extends('layout.app')
@section('content')
    
<div class="flex h-screen items-center justify-center">
    <div class="relative overflow-x-auto rounded-2xl">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-md text-gray-700 uppercase bg-gray-100">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        E-Mail
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $user->id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $user->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->email }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
