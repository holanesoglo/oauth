<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

// use Socialite; // <-- ne pas oublier

class SocialiteController extends Controller
{
    // Les tableaux des providers autorisés
    protected $providers = ["google", "github", "facebook", "linkedin-openid"];

    //  La vue pour les liens vers les providers
    public function loginRegister () {
    	return view("socialite.login-register");
    }

    // redirection vers le provider
    public function redirect (Request $request) {
        // dd($request->provider);

        $provider = $request->provider;
        // dd($request->provider);
        // On vérifie si le provider est autorisé
        if (in_array($provider, $this->providers)) {
            return Socialite::driver($provider)->redirect(); // On redirige vers le provider
        }
    }

    // Callback du provider
    public function callback (Request $request) {

        $provider = $request->provider;

        if (in_array($provider, $this->providers)) {

        	// Les informations provenant du provider
            $data = Socialite::driver($request->provider)->user();
            // dd($data);
            # Social login - register
            $email = $data->getEmail(); // L'adresse email
            if ($this->providers=="github") {
                # code...
                $name = $data->getNickname(); // le nom
            }else {
                $name = $data->getName(); // le nom
            }
            // dd($name);

            # 1. On récupère l'utilisateur à partir de l'adresse email
            $user = User::where("email", $email)->first();

            # 2. Si l'utilisateur existe
            if (isset($user)) {

                // Mise à jour des informations de l'utilisateur
                $user->name = $name;
                $user->save();

            // # 3. Si l'utilisateur n'existe pas, on l'enregistre
            } else {

                // Enregistrement de l'utilisateur
                $user = User::create([
                    'name' => $name,
                    'email' => $email,
                    'password' => bcrypt("emilie") // On attribue un mot de passe
                ]);
            }

            # 4. On connecte l'utilisateur
            Auth::login($user);

            # 5. On redirige l'utilisateur vers /home
            if (Auth::check()) return redirect(route('dashboard'));

         }
        //  abort(404);
    }
}
