<?php

namespace App\Http\Controllers;

use App\Services\PortfolioService;
use Illuminate\View\View;

class PageController extends Controller
{
    public function __construct(
        protected PortfolioService $portfolioService
    ) {}

    public function home(): View
    {
        return view('pages.home', [
            'projects' => $this->portfolioService->getProjects(),
            'experiences' => $this->portfolioService->getExperiences(),
            'owner' => $this->portfolioService->getOwner(),
        ]);
    }
}
