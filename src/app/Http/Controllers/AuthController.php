<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth/register');
    }

    public function login()
    {
        return view('auth/login');
    }

    public function index()
    {
        $contacts = Contact::with('category')->get();
        $categories = Category::all();
        $contacts = Contact::Paginate(7);
        return view('admin', compact('contacts', 'categories'));
    }
}
