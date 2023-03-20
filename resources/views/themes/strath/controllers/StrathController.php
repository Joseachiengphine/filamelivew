<?php

namespace Themes\strath\controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class StrathController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index(): Application|Factory|View
    {
        return view(setting('theme_path').'.pages.home');
    }
}
