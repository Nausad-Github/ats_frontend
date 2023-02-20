<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Career;

class careerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $career = Career::where('id', 1)->first();
        return response()->json([
            'code' => 200,
            'message' => 'Success',
            'data' => $career
        ]);
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
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $career = [
                'primary_language' => $request->primary_language,
                'career_url' => $request->career_url,
                'site_title' => $request->site_title,
                'meta_title' => $request->meta_title,
                'banner_title' => $request->banner_title,
                'banner_description' => $request->banner_description
            ];

            Career::find($id)->update($career);
            return response()->json([
                'code' => 200,
                'message' => 'Basic Information Updated Successfully...',
                'data' => $career
            ]);
        } catch (\Throwable $th) {
            return ($th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
