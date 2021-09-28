<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class FrontendController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function loans()
    {
        return view('layouts.page.loans');
    }

    public function apply()
    {
        return view('layouts.page.apply');
    }

    public function testimonials()
    {
        return view('layouts.page.testimonials');
    }

    public function contact()
    {
        return view('layouts.page.contact');
    }

    public function about()
    {
        return view('layouts.page.about');
    }

    public function applyStore(Request $request)
    {
        dd($request);
        return view('layouts.page.about');
    }

    public function faq()
    {
        return view('layouts.page.faq');
    }

    public function funding()
    {
        return view('layouts.page.funding');
    }

    public function services()
    {
        return view('layouts.page.services');
    }
}
