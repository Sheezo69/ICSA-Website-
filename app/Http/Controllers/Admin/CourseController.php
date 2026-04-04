<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Support\CourseFileRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request $request, CourseFileRepository $courses): View
    {
        $allCourses = $courses->all();
        $search = trim($request->string('search')->toString());

        if ($search !== '') {
            $needle = mb_strtolower($search);
            $allCourses = array_values(array_filter($allCourses, static function (array $course) use ($needle): bool {
                return str_contains(mb_strtolower($course['title']), $needle)
                    || str_contains(mb_strtolower($course['badge']), $needle)
                    || str_contains(mb_strtolower($course['slug']), $needle);
            }));
        }

        return view('admin.courses.index', [
            'courses' => $allCourses,
            'search' => $search,
        ]);
    }

    public function create(): View
    {
        return view('admin.courses.edit', [
            'course' => $this->blankCourse(),
            'isEdit' => false,
        ]);
    }

    public function edit(string $slug, CourseFileRepository $courses): View
    {
        $course = $courses->find($slug);
        abort_if($course === null, 404);

        return view('admin.courses.edit', [
            'course' => $course,
            'isEdit' => true,
        ]);
    }

    public function store(Request $request, CourseFileRepository $courses): RedirectResponse
    {
        $slug = $courses->save($this->validatedCourse($request));

        return redirect()
            ->route('admin.courses.edit', $slug)
            ->with('success', 'Course saved successfully.');
    }

    public function update(Request $request, string $slug, CourseFileRepository $courses): RedirectResponse
    {
        $newSlug = $courses->save($this->validatedCourse($request), $slug);

        return redirect()
            ->route('admin.courses.edit', $newSlug)
            ->with('success', 'Course updated successfully.');
    }

    public function destroy(string $slug, CourseFileRepository $courses): RedirectResponse
    {
        $courses->delete($slug);

        return redirect()->route('admin.courses.index')->with('success', 'Course deleted.');
    }

    private function validatedCourse(Request $request): array
    {
        return $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'badge' => ['nullable', 'string', 'max:100'],
            'duration' => ['nullable', 'string', 'max:100'],
            'certification' => ['nullable', 'string', 'max:100'],
            'diploma_type' => ['nullable', 'string', 'max:100'],
            'description' => ['nullable', 'string', 'max:1000'],
            'image' => ['nullable', 'string', 'max:255'],
            'price' => ['nullable', 'string', 'max:120'],
            'price_note' => ['nullable', 'string', 'max:255'],
            'highlights' => ['nullable', 'string'],
            'overview' => ['nullable', 'string'],
            'learning_outcomes' => ['nullable', 'string'],
            'target_audience' => ['nullable', 'string'],
            'careers' => ['nullable', 'string'],
        ]);
    }

    private function blankCourse(): array
    {
        return [
            'slug' => '',
            'title' => '',
            'badge' => '',
            'duration' => '',
            'certification' => 'Certified',
            'diploma_type' => '',
            'description' => '',
            'image' => '',
            'price' => 'Contact for Price',
            'price_note' => 'Flexible payment options available',
            'highlights' => "Practical classroom approach\nCertificate on completion\nCareer-focused learning\nInstructor-led guidance",
            'overview' => '',
            'learning_outcomes' => '',
            'target_audience' => '',
            'careers' => '',
        ];
    }
}
