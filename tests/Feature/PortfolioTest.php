<?php

namespace Tests\Feature;

use Tests\TestCase;

class PortfolioTest extends TestCase
{
    public function test_home_page_displays_auto_recap_project(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Auto-Recap');
        $response->assertSee('Python / Gemini / Whisper / FFmpeg');
        $response->assertSee('IA & Pipeline Vidéo');
    }
}
