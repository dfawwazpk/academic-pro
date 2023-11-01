<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function index()
    {
        $dosens = Dosen::all();
        return view('dosens.index', compact('dosens'));
    }

    public function create()
    {
        return view('dosens.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nip' => 'required|unique:dosens|max:255',
            'nama_lengkap' => 'required',
            'email' => 'required|unique:dosens|email|max:255',
            'password' => 'required|min:6',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $dosen = new Dosen;
        $dosen->nip = $request->nip;
        $dosen->nama_lengkap = $request->nama_lengkap;
        $dosen->email = $request->email;
        $dosen->password = bcrypt($request->password);

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            $avatar->storeAs('public/avatars', $filename);
            $dosen->avatar = $filename;
        }

        $dosen->save();

        return redirect()->route('dosens.index')
            ->with('success', 'Dosen created successfully.');
    }

    public function show(Dosen $dosen)
    {
        return view('dosens.show', compact('dosen'));
    }

    public function edit(Dosen $dosen)
    {
        return view('dosens.edit', compact('dosen'));
    }

    public function update(Request $request, Dosen $dosen)
    {
        $validatedData = $request->validate([
            'nip' => 'required|unique:dosens,nip,'.$dosen->id.'|max:255',
            'nama_lengkap' => 'required',
            'email' => 'required|unique:dosens,email,'.$dosen->id.'|email|max:255',
            'password' => 'nullable|min:6',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $dosen->nip = $request->nip;
        $dosen->nama_lengkap = $request->nama_lengkap;
        $dosen->email = $request->email;

        if (!empty($request->password)) {
            $dosen->password = bcrypt($request->password);
        }

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            $avatar->storeAs('public/avatars', $filename);
            $dosen->avatar = $filename;
        }

        $dosen->save();

        return redirect()->route('dosens.index')
            ->with('success', 'Dosen updated successfully.');
    }

    public function destroy(Dosen $dosen)
    {
        $dosen->delete();

        return redirect()->route('dosens.index')
            ->with('success', 'Dosen deleted successfully.');
    }
}
