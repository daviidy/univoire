<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Image;
use PDF;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * When user wants to see jobs.
     *
     * @return \Illuminate\Http\Response
     */
    public function seeJobs()
    {
        if (Auth::check()) {
            return view('jobs.default.index');
        }
        else {
            return redirect('home');
        }
    }

    /**
     * When user wants to download his informations.
     *
     * @return \Illuminate\Http\Response
     */
    public function downloadInfos()
    {
        if (Auth::check()) {
            $data = [
                'username' => Auth::user()->name,
                'image' => Auth::user()->image,
                'birth_city' => Auth::user()->birth_city,

            ];

            PDF::setOptions(['dpi' => 150, 'defaultFont' => 'helvetica']);
            $pdf = PDF::loadView('pdf.certificate', $data);
            $pdf->setPaper('A4', 'portrait');
            return $pdf->download('extrait_de_naissance.pdf');
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        if (Auth::check()) {
            return view('users.default.show', ['user' => $user,]);
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if (Auth::check()) {
            return view('users.default.edit', ['user' => $user,]);
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if (Auth::check()) {
            $user->update($request->all());
            if ($request->hasFile('cover_image') ) {
                $image = $request->file('cover_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->save(storage_path('app/public/images/users/covers/'.$filename));
                $user->cover_image = $filename;
                $user->save();
            }
            return redirect('/users/'.$user->id.'/edit')->with('status', 'Votre profil a été modifié avec succès');
        }
        else {
            return redirect('home');
        }
    }

    //upload avatar with ajax
    public function uploadAvatar(Request $req)
    {
              $user = User::find($req->id_user);
              $user->update($req->all());

                $image = $req->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->save(storage_path('app/public/images/users/'.$filename));
                $user->image = $filename;
                $user->save();


          return response()->json($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
