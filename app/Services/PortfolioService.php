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
     * Get core technical stack.
     */
    public function getCoreStack(): array
    {
        return config('portfolio.core_stack', []);
    }

    /**
     * Get skill categories with items.
     */
    public function getSkillCategories(): array
    {
        return config('portfolio.skill_categories', []);
    }

    /**
     * Get know-hows list.
     */
    public function getKnowhows(): array
    {
        return config('portfolio.knowhows', []);
    }

    /**
     * Get owner details.
     */
    public function getOwner(): array
    {
        return config('portfolio.owner', []);
    }
}
