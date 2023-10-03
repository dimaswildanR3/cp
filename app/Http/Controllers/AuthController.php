<?php

namespace App\Http\Controllers;

use App\Mail\lupapasword;
use Illuminate\Support\Facades\Mail;
use App\User;
use App\Login;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        // return view('auths.login');
        if (auth()->user()) {
            if (auth()->user()->role == 'admin') {
                return redirect('/dashboard')->with('warning', 'Maaf tindakan anda tidak dibenarkan, tidak usah macem-macem lah !');
            } else if (auth()->user()->role == 'Siswa') {
                return redirect()->back()->with('warning', 'Maaf tindakan anda tidak dibenarkan, tidak usah macem-macem lah !');
            } else if (auth()->user()->role == 'PetugasAdministrasiKeuangan') {
                return redirect('/dashboard')->with('warning', 'Maaf tindakan anda tidak dibenarkan, tidak usah macem-macem lah !');
            } else if (auth()->user()->role == 'PetugasAdministrasiSurat') {
                return redirect('/dashboard')->with('warning', 'Maaf tindakan anda tidak dibenarkan, tidak usah macem-macem lah !');
            } else if (auth()->user()->role == 'PetugasPerpus') {
                return redirect('/dashboard')->with('warning', 'Maaf tindakan anda tidak dibenarkan, tidak usah macem-macem lah !');
            }
        }
        return view('auths.login');
    }
    public function loginn()
    {
        // return view('auths.login');
        if (auth()->user()) {
            if (auth()->user()->role == 'admin') {
                return redirect('/dashboard')->with('warning', 'Maaf tindakan anda tidak dibenarkan, tidak usah macem-macem lah !');
            } else if (auth()->user()->role == 'Siswa') {
                return redirect()->back()->with('warning', 'Maaf tindakan anda tidak dibenarkan, tidak usah macem-macem lah !');
            } else if (auth()->user()->role == 'PetugasAdministrasiKeuangan') {
                return redirect('/dashboard')->with('warning', 'Maaf tindakan anda tidak dibenarkan, tidak usah macem-macem lah !');
            } else if (auth()->user()->role == 'PetugasAdministrasiSurat') {
                return redirect('/dashboard')->with('warning', 'Maaf tindakan anda tidak dibenarkan, tidak usah macem-macem lah !');
            } else if (auth()->user()->role == 'PetugasPerpus') {
                return redirect('/dashboard')->with('warning', 'Maaf tindakan anda tidak dibenarkan, tidak usah macem-macem lah !');
            }
        }
        return view('auths.forgot-password');
    }
    public function daftar()
    {
        // return view('auths.login');
      
        return view('auths.register');
    }
    public function pendaftaran(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users|email',
            // 'password' => 'required|min:8',
        ], [
            'name.required' => 'Nama harus diisi.',
            'name.unique' => 'Nama sudah digunakan.',
            'name.min' => 'Nama harus memiliki setidaknya :min karakter.',
            'email.required' => 'Email harus diisi.',
            'email.unique' => 'Email sudah digunakan.',
            'email.email' => 'Email harus berformat valid.',
            'password.required' => 'kepo harus diisi',
            'password.min' => 'Password harus memiliki setidaknya :min karakter.',
        ]);

            $user = User::create([
                'email' => $request->email,
                'name' => $request->name,
                'jeniskelamin' => $request->jeniskelamin,
                'ttl' => $request->ttl,
                'asal' => $request->asal,
                'nomer' => $request->nomer,
                'kampus' => $request->kampus,
                'jurusan' => $request->jurusan,
                'semester' => $request->semester,
                'role' => 'user',
                'password' => Hash::make($request->input('password')),
                // 'password' =>  $request->password,
            ]);           
            // dd($user);

        return redirect()->route('login')->with('sukses', 'Data pengguna berhasil ditambahkan');
    }

    public function postlogin(Request $request)
    {
        $cre = $request->only('email', 'password');
        if (Auth::attempt($cre)) {
            //mengambil data siswa login
            $siswalogin = $request->input('email');
            $pisah_email = explode("@", $siswalogin);
            $nisn = $pisah_email[0];
            // $id_pesdik = \App\Pesdik::where('nisn', $nisn)->get();
            // $id_pesdik_login = $id_pesdik->first();

            // //data untuk ditampilkan ke dashboard
            // $data_login = \App\Login::orderByRaw('created_at DESC')->limit(25)->get();
            $data_admin = \App\User::where('role', "admin")->get();
            // $data_petugas = \App\Tendik::all();
            // $data_pengumuman = \App\Pengumuman::orderByRaw('created_at DESC')->limit(5)->get();

            //Riwayat Login
            $email = $request->input('email');
            // $id_pengguna = \App\User::select('name')->where('email', $email)->get();
            // $pengguna_login = $id_pengguna->first();

            // $login = new Login();
            // $login->name   = $pengguna_login->name;
            // $login->email   = $email;
            // $login->save();
            //EndRiwayat Login

            return view('/dashboard', compact('data_admin'));
        }
        return redirect()->back()->with('error', 'Email atau Password salah!');
    }
    public function postemail(Request $request)
    {
        $cre = $request->only('email');
        if (Auth::attempt($cre)) {
            //mengambil data siswa login
            $siswalogin = $request->input('email');
            $pisah_email = explode("@", $siswalogin);
            $nisn = $pisah_email[0];
            // $id_pesdik = \App\Pesdik::where('nisn', $nisn)->get();
            // $id_pesdik_login = $id_pesdik->first();

            // //data untuk ditampilkan ke dashboard
            // $data_login = \App\Login::orderByRaw('created_at DESC')->limit(25)->get();
            $data_admin = \App\User::where('role', "admin")->get();
            // $data_petugas = \App\Tendik::all();
            // $data_pengumuman = \App\Pengumuman::orderByRaw('created_at DESC')->limit(5)->get();

            //Riwayat Login
            $email = $request->input('email');
            // $id_pengguna = \App\User::select('name')->where('email', $email)->get();
            // $pengguna_login = $id_pengguna->first();

            // $login = new Login();
            // $login->name   = $pengguna_login->name;
            // $login->email   = $email;
            // $login->save();
            //EndRiwayat Login

            return view('/forgot-password', compact('data_admin'));
        }
        return redirect()->back()->with('error', 'Email atau Password salah!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/index');
    }

    public function gantipassword($id)
    {
        $data_pengguna = User::findorfail($id);
        return view('auths.gantipassword', compact('data_pengguna'));
    }

    public function simpanpassword(Request $request, $id)
    {
        $pengguna = User::findorfail($id);
        $password_baru = $request->input('password_baru');
        $konfirmasi_password_baru = $request->input('konfirmasi_password_baru');
        if ($password_baru == $konfirmasi_password_baru) {
            $data_pengguna = [
                'name' => $pengguna->name,
                'email' => $pengguna->email,
                'password' => Hash::make($request->input('password_baru')),
                'role' => $pengguna->role,
            ];
            $pengguna->update($data_pengguna);

            return redirect('/login')->with('sukses', 'Password anda telah diperbarui.');
        }
        return redirect()->back()->with('error', 'Harap Masukkan Konfirmasi Password Dengan Benar !!');
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:users|min:5',
            'email' => 'required|unique:users|email',
        ]);

        $pengguna = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->input('password')),
            'role' => $request->role,
        ]);

        return redirect()->route('pengguna.index')->with('sukses', 'Data administrator berhasil ditambahkan');
    }


    public function redirectToGoogle()
    {
        return Socialite::driver('google')->stateless()->redirect();
    }

    public function handleGoogleCallback()
    {
        
        try {
            $user = Socialite::driver('google')->stateless()->user();
            // dd($user);
        } catch (\Exception $e) {
            return redirect('/login')->with('error','Try after some time');
        }
            $existingUser = User::where('email', $user->email)->first();


        // $existingUser = User::where('email', $user->email)->first();

        if ($existingUser) {
            // Pengguna sudah terdaftar, login atau redirect ke halaman yang sesuai
            auth()->login($existingUser); // Misalnya, login langsung
            $data_admin = \App\User::where('role', 'user')->get();
            session(['data_admin' => $data_admin]);
            return redirect('/index');
        } else {
            // Pengguna baru, simpan informasi pengguna ke database
            $newUser = new User();
            $newUser->name = $user->name;
            $newUser->email = $user->email;
            $newUser->role = 'user';
            $newUser->save();
    
            // Login pengguna baru dan arahkan ke halaman dashboard
            auth()->login($newUser);
            // $data_admin = \App\User::where('role', "admin")->get();
            return redirect('/index');
        }
    }


    public function prosesKirimEmail(Request $request)
{
    $inputEmail = $request->input('email');
    $user = User::where('email', $inputEmail)->first();
    // $hallo=$user->email;
    // dd($hallo);
    if ($user) {
        session(['email_sebelumnya' => $user->email]);

        Mail::to($user->email)->send(new lupapasword($user));
        return redirect()->route('email');
    } else {
        return redirect()->back()->with('error', 'Email tidak ditemukan.');
    }
}

public function tampilan()
{
   
    $emailSebelumnya = session('email_sebelumnya');
// dd($emailSebelumnya);
        return view('auths.email', compact('emailSebelumnya'));
  
}

public function kirimUlang(Request $request)
{
    $inputEmail = $request->input('email');
    $user = User::where('email', $inputEmail)->first();
    // $hallo=$user->email;
    // dd($hallo);
    if ($user) {    
        Mail::to($inputEmail)->send(new lupapasword($user));
        return redirect()->back()->with('sukses', 'Email telah dikirimkan');
    } else {
        return redirect()->back()->with('error', 'Email tidak ditemukan.');
    }
}

}