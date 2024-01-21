<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionController extends Controller {
	public function create() {
		return view('sessions.create');
	}

	public function store() {
		$attributes = request()->validate([
			'email' => 'required',
			'password' => 'required',
		]);

		if (auth()->attempt($attributes)) {
			return redirect('/')->with('success', 'Welcom Back!');
		}

		throw ValidationException::withMessages([
			'email' => 'your provided credentials could not be verified',
		]);
	}

	public function destroy() {
		auth()->logout();

		return redirect('/')->with('success', 'Goodbye!');
	}
}
