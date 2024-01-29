@extends('layouts.admin')

@section('title', 'web pages')

@section('content')
    <div class="bg-slate-900 text-slate-50 p-3 mb-3 mt-3 shadow-md rounded-md">
        <div class="flex flex-row justify-between p-2">
            <div class="p-2">
                <h4 class="uppercase font-bold">Web Pages</h4>
            </div>
            <div class="p-0">
                <button class="bg-slate-800 text-slate-50 hover:bg-slate-700 font-bold py-2 px-4 rounded focus:outline-none focus:outline-shadow" id="add_page_btn">ADD PAGE</button>
            </div>
        </div>
        <hr>
        @if (session()->has('success'))
            <div class="bg-green-500 text-slate-50 w-full p-3 rounded-md mt-2 mb-2" id="success">
                {{ session('success') }}
            </div>
        @endif
        @if (session()->has('error'))
            <div class="p-3 bg-red-300 text-red-900 rounded-md mt-2 mb-2" id="error">
                {{ session('error') }}
            </div>
        @endif
        <div class="pt-3" id="page_list">
            <table class="table-auto border-collapse border-slate-500 w-full">
                <thead>
                    <tr class="border-slate-500 border bg-slate-800">
                        <th class="border-slate-500">No.</th>
                        <th class="border-slate-500">Page</th>
                        <th class="border-slate-500">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pages as $p)
                        <tr class="border-slate-500 border">
                            <td class="border border-slate-500">{{ $loop->iteration }}</td>
                            <td class="border border-slate-500">{{ $p->page }}</td>
                            <td class="border border-slate-500 p-1">
                                <div class="p-0">
                                    <div class="flex flex-row flex-wrap justify-between">
                                        <a href="{{  route('pages.edit',$p->id) }}">
                                            <button class="bg-slate-800 py-2 px-4 rounded hover:bg-slate-700">
                                                <i class="fa fa-edit text-green-500"></i>
                                            </button>
                                        </a>
                                        <a href="{{  route('pages.delete',$p->id) }}"  onclick="event.preventDefault();
                                            document.getElementById('page_delete_form').submit();">
                                            <button class="bg-slate-800 py-2 px-4 rounded hover:bg-slate-700" id="page_delete_btn">
                                                <i class="fa fa-trash text-red-600"></i>
                                            </button>
                                        </a>
                                        <form action="{{  route('pages.delete',$p->id) }}" method="POST" enctype="multipart/form-data" id="page_delete_form" class="hidden">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="p-0" id="add_page_form">
            <form action="{{ route('pages.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <p>
                    <label for="page_name" class="font-bold text-slate-200">Page Name</label>
                </p>
                <p>
                    <input type="text" name="page" id="page_name" class="block py-2 px-4 rounded-md shadow-sm leading-tight text-slate-900 bg-slate-300">
                </p>
                <p class="mt-3 mb-3">
                    <button class="bg-slate-800 text-slate-50 font-bold py-2 px-4 rounded hover:bg-slate-700 focus:outline-none focus:outline-shadow">ADD</button>
                </p>
            </form>
        </div>
    </div>
@endsection