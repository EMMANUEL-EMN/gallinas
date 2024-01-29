@extends('layouts.admin')

@section('title','web content')

@section('content')
    <div class="bg-slate-900 text-slate-50 p-3 mt-3 mb-3 rounded-md shadow-md">
        <div class="flex flex-row justify-between mb-2">
            <div class="p-2">
                <h4 class="uppercase font-bold">Web Content</h4>
            </div>
            <div class="p-0">
                <button class="font-bold bg-slate-800 hover:bg-slate-700 focus:outline-none focus:outline-shadow rounded py-2 px-4 uppercase">Add Content</button>
            </div>
        </div>
        <hr>
        <div class="p-0">
            <table class="border border-collapse table-auto w-full">
                <thead>
                    <tr class="border border-slate-400">
                        <th>No.</th>
                        <th>Page</th>
                        <th>Title</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contents as $c)
                        <tr class="border border-slate-400">
                            <td class="border border-slate-400">{{ $loop->iteration }}</td>
                            <td class="border border-slate-400">{{ $c->page }}</td>
                            <td class="border border-slate-400">{{ $c->title1 }}</td>
                            <td class="border border-slate-400">{{ $c->created_at }}</td>
                            <td class="border border-slate-400"></td>
                        </tr>    
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-3 mb-3">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-row flex-wrap justify-between">
                    <div class="p-1">
                        <p>
                            <label for="page_name" class="font-bold text-slate-200">Page</label>
                        </p>
                        <p>
                            <input type="text" name="page" id="page_name" class="block py-2 px-4 rounded-md shadow-sm leading-tight text-slate-900 bg-slate-300 w-80">
                        </p>
                    </div>
                    <div class="p-1">
                        <p>
                            <label for="page_name" class="font-bold text-slate-200">Section</label>
                        </p>
                        <p>
                            <input type="text" name="page" id="page_name" class="block py-2 px-4 rounded-md shadow-sm leading-tight text-slate-900 bg-slate-300 w-80">
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection