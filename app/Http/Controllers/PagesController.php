<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = Pages::all();
        return view('web_content.pages', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $pages = new Pages();
            $pages->page = $request->page;
            $pages->save();
            return redirect()->route('pages.home')
            ->with('success','Page successfully added');
        } catch (\Throwable $th) {
            return redirect()
            ->route('pages.home')
            ->with('error','Page not successfully added');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $page = Pages::findOrFail($id);
            return view('web_content.pages_edit',compact('page'));
        } catch (\Throwable $th) {
            return redirect()
            ->route('pages.home')
            ->with('error','Page not found please try again');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $page = Pages::findOrFail($id);
            $page->page = $request->page;
            $page->save();
            return redirect()
            ->route('pages.home')
            ->with('success','Page successfully updated');
        } catch (\Throwable $th) {
            return redirect()
            ->route('pages.home')
            ->with('error','Page not updated please try again');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $page = Pages::findOrFail($id);
            $page->delete();
            return redirect()
            ->route('pages.home')
            ->with('success','Page successfully deleted');
        } catch (\Throwable $th) {
            return redirect()
            ->route('pages.home')
            ->with('error','Page not deleted please try again');
        }
    }
}
