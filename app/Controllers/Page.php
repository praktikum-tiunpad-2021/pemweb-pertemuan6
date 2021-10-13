<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        return view('pages/about');
    }

    public function contact()
    {
        return view('pages/contact');
    }

    public function faqs()
    {
        return view('pages/faqs');
    }

    public function forms()
    {
        return view('pages/forms');
    }

    public function results()
    {
        $data = $this->request->getPost();
        return view('pages/results', $data);
    }
}
