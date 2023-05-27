<?php

namespace App\Http\Controllers;

use App\Models\Penyakit;
use App\Models\RiwayatPenyakit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class LandingController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();
        $listPenyakit = json_decode($user->penyakit, true);
        // dd($listPenyakit);

        return view('user.dashboard', [
            'title' => 'Dashboard',
            'user' => $user,
            'listPenyakit' => $listPenyakit
        ]);
    }

    public function petunjuk()
    {
        return view('user.petunjuk', [
            'title' => 'Diagnosa'
        ]);
    }



    public function diagnosa()
    {
        $questions = Penyakit::all();

        // dd($questions);

        return view('user.diagnosa', compact('questions'), [
            'title' => 'Diagnosa'
        ]);
    }

    public function printcheckbox(Request $request)
    {
        $user = Auth::user();
        $listGejala = [];
        // dd($request);
        //1
        if ($request->G1 == 'on' || $request->G2 == 'on' || $request->G3 == 'on' || $request->G4 == 'on' || $request->G5 == 'on' || $request->G6 == 'on' || $request->G7 == 'on' || $request->G8 == 'on' || $request->G9 == 'on' || $request->G10 == 'on' || $request->G11 == 'on' || $request->G12 == 'on' || $request->G13 == 'on' || $request->G14 == 'on' || $request->G15 == 'on' || $request->G16 == 'on') {
            // dd("Hipertensi");
            array_push($listGejala, "Gangguan Panik");
        }
        //2
        if ($request->G17 == 'on' || $request->G18 == 'on' || $request->G19 == 'on' || $request->G20 == 'on' || $request->G21 == 'on') {
            // dd("Jantung");
            array_push($listGejala, "Fobia Spesifik");
        }
        //3
        if ($request->G22 == 'on' || $request->G23 == 'on' || $request->G24 == 'on' || $request->G25 == 'on' || $request->G26 == 'on' || $request->G27 == 'on' || $request->G28 == 'on' || $request->G29 == 'on') {
            // dd("Diabetes Melitus");
            array_push($listGejala, "Gangguan Kecemasan Menyeluruh");
        }
        //4
        if ($request->G30 == 'on' || $request->G31 == 'on' || $request->G32 == 'on'  || $request->G33 == 'on' || $request->G34 == 'on' || $request->G35 == 'on') {
            // dd("Hiperkolesterolemia");
            array_push($listGejala, "Fobia Sosial");
        }

        // dd($listGejala);

        User::where('id', $user->id)->update([
            'penyakit' => $listGejala,
        ]);

        RiwayatPenyakit::create([
            'userid' => $user->id,
            'riwayat' => ""
        ]);

        RiwayatPenyakit::where('userid', $user->id)->latest()->first()->update([
            'riwayat' => $listGejala
        ]);

        return redirect('/dashboard');
    }

    public function adminboard()
    {
        $gejala = Penyakit::all();
        return view('admin.admindashboard', compact('gejala'), [
            'title' => 'Admin Dashboard'
        ]);
    }

    public function viewuser()
    {
        $user = User::where('role', '!=', 'admin')->get();
        $riwayatPenyakit = RiwayatPenyakit::all();
        return view('admin.viewuser', compact('user', 'riwayatPenyakit'), [
            'title' => 'View User'
        ]);
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/admin');
    }

    public function edit($id)
    {
        $user = User::find($id);
        $gejala = Penyakit::find($id);
        return view('admin.editdata', compact('gejala'), [
            'title' => 'Edit Gejala'
        ]);
    }

    public function update(Request $request, $id)
    {
        $penyakit = Penyakit::findOrFail($id);
        // $penyakit =  $penyakit->update($request->gejala);
        // dd($request);
        Penyakit::where('id', $id)->update(array('nama' => $request->gejala));
        return redirect('/admin');
    }

    public function root()
    {
        return redirect('/home');
    }
}
