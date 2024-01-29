@extends('layouts.admin')

@section('title','edit web page')

@section('content')
    <div class="p-0 mb-3 mt-3">
        <a href="{{ route('pages.home') }}">
            <button class="relative bg-slate-700 text-slate-50 py-2 px-4 rounded hover:bg-slate-600 font-bold" id="pages_action_btn">
                BACK
            </button>
        </a>
    </div>
    <div class="bg-slate-900 p-3 mt-3 mb-3 rounded-md shadow-md">
        <div class="pt-3 pb-3 text-slate-50">
            <h4 class="uppercase font-bold">Edit Page</h4>
            <hr>
            <div class="mb-2 mt-3">
                <form action="{{ route('pages.update',$page->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <p>
                        <label for="page_name" class="font-bold text-slate-200">Page Name</label>
                    </p>
                    <p>
                        <input type="text" value="{{ $page->page }}" name="page" id="page_name" class="block py-2 px-4 rounded-md shadow-sm leading-tight text-slate-900 bg-slate-300">
                    </p>
                    <p class="mt-3 mb-3">
                        <button class="bg-slate-800 text-slate-50 font-bold py-2 px-4 rounded focus:outline-none uppercase focus:outline-shadow hover:bg-slate-700">Update</button>
                    </p>
                </form>
            </div>
        </div>
    </div>
@endsection