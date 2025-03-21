<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    // Registro de usuario
    public function register(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6', // Contraseña mínima de 6 caracteres
        ], [
            'name.required' => 'El nombre es obligatorio.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.unique' => 'Este correo ya está registrado.',
            'password.required' => 'La contraseña es obligatoria.',
            'password.min' => 'La contraseña debe tener al menos 6 caracteres.',
        ]);

        // Crear usuario
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        // Guardar usuario y redirigir
        $user->save();
        Auth::login($user);
        return redirect(route('privada'));
    }

    public function login(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ], [
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'Debe ser un correo electrónico válido.',
            'password.required' => 'La contraseña es obligatoria.',
        ]);
    
        // Verificar si el correo existe
        $user = User::where('email', $request->email)->first();
    
        if (!$user) {
            return back()->withErrors([
                'email' => 'El correo electrónico no está registrado.',
            ])->withInput();
        }
    
        // Verificar las credenciales
        if (!Auth::attempt($request->only('email', 'password'), $request->has('remember'))) {
            return back()->withErrors([
                'password' => 'La contraseña es incorrecta.',
            ])->withInput();
        }
    
        // Redirigir si las credenciales son correctas
        $request->session()->regenerate();
        return redirect()->intended(route('privada'));
    }
    

    // Logout del usuario
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('home'));
    }
}
