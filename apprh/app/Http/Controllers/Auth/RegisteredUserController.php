<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use App\Models\LesEmploye;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use App\Models\InfosContratCandidat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Models\CompteurMissionCandidat;
use App\Models\CompteurAvantageCandidat;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string', 'max:255'],
            'adresse' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'societe' => ['required', 'string', 'max:255'],
            'telephone' => ['required', 'integer', 'unique:'.User::class],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
      


        $matricule = Str::random(10);
        $user = User::create([
            'name' => $request->name,
            'prenom'=>$request->prenom,
            'email' => $request->email,
            'admin'=>'Pas Admin',
            'nouveau'=>'oui',
            'contratactive'=>'non',
            'role'=>$request->role,
            'adresse'=>$request->adresse,
            'matricule'=>$matricule,
            'societe'=>$request->societe,
            'telephone'=>$request->telephone,
            'sexe'=>$request->sexe,
            'owner'=>'oui',
            'password' => Hash::make($request->password),
        ]);

      
      

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
