<?php

namespace App\Http\Controllers;

use App\Support\CourseFileRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;

class SiteController extends Controller
{
    public function home(): View
    {
        return view('site.home');
    }

    public function about(): View
    {
        return view('site.about');
    }

    public function courses(): View
    {
        return view('site.courses');
    }

    public function contact(): View
    {
        return view('site.contact');
    }

    public function course(string $slug, CourseFileRepository $courses): View
    {
        $course = $courses->find($slug);
        abort_if($course === null, 404);

        $course['detail_image_url'] = $this->assetUrlFromLegacyPath($course['image']);
        $course['highlight_items'] = $this->splitLines($course['highlights']);
        $course['learning_outcome_items'] = $this->splitLines($course['learning_outcomes']);
        $course['target_audience_items'] = $this->splitLines($course['target_audience']);
        $course['career_items'] = $this->splitLines($course['careers']);

        return view('site.course', [
            'course' => $course,
        ]);
    }

    private function splitLines(?string $value): array
    {
        $lines = preg_split('/\R+/', trim((string) $value)) ?: [];

        return array_values(array_filter(array_map('trim', $lines)));
    }

    private function assetUrlFromLegacyPath(?string $path): ?string
    {
        $path = trim((string) $path);

        if ($path === '') {
            return null;
        }

        if (Str::startsWith($path, ['http://', 'https://'])) {
            return $path;
        }

        $normalized = preg_replace('#^(\.\./)+#', '', $path) ?: $path;

        return asset(ltrim($normalized, '/'));
    }
}
