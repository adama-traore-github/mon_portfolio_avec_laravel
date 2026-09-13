<?php

namespace App\Services;

class PortfolioService
{
    /**
     * Get all structured projects data.
     */
    public function getProjects(): array
    {
        return config('portfolio.projects', []);
    }

    /**
     * Get all professional experiences data.
     */
    public function getExperiences(): array
    {
        return config('portfolio.experiences', []);
    }

    /**
     * Get owner details.
     */
    public function getOwner(): array
    {
        return config('portfolio.owner', []);
    }
}
