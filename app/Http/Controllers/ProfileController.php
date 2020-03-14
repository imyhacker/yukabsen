<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Show the update profile page.
     *
     * @param  Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit(Request $request)
    {
        return view('adm/userprofiles', [
            'user' => $request->user()
        ]);
    }
    public function update(Request $request)
{
    $request->user()->update(
        $request->all()
    );

    return redirect("admin")->with('User', 'Data Diri Kamu Berhasil Di Edit');
}
}