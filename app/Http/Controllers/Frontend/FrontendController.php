<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddLead;
use App\Mail\AddLeads;
use App\Models\Admin\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
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

    public function applyStore(AddLead $request)
    {
        \Mail::to(config('app.admin_email'))->send(new AddLeads($request->all()));
       $leads= Lead::create($request->validated());
        return redirect('apply');
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
