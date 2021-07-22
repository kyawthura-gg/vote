<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Idea;
use App\Models\Status;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShowIdeasTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function list_of_ideas_show_on_main_page()
    {
        $firstCategory = Category::factory()->create(['name' => 'Category 1']);
        $secondCategory = Category::factory()->create(['name' => 'Category 2']);

        $statusOpen = Status::factory()->create(['name' => 'Open', 'classes' => 'bg-gray-200']);
        $statusConsidering = Status::factory()->create(['name' => 'Considering', 'classes' => 'bg-purple text-white']);

        $ideaOne = Idea::factory()->create([
            'title' => 'first idea',
            'category_id' => $firstCategory->id,
            'status_id' => $statusOpen->id,
            'description' => 'first description'
        ]);

        $ideaTwo = Idea::factory()->create([
            'title' => 'second idea',
            'category_id' => $secondCategory->id,
            'status_id' => $statusConsidering->id,
            'description' => 'second description'
        ]);
        $response = $this->get(route('idea.index'));

        $response->assertSuccessful();
        $response->assertSee($ideaOne->title);
        $response->assertSee($ideaOne->description);
        $response->assertSee($firstCategory->name);
        $response->assertSee($statusOpen->name);

        $response->assertSee($ideaTwo->title);
        $response->assertSee($ideaTwo->description);
        $response->assertSee($secondCategory->name);
        $response->assertSee($statusConsidering->name);
    }

    /** @test */
    public function clicked_idea_shows_on_show_page()
    {
        $category = Category::factory()->create(['name' => 'Category 1']);
        $statusOpen = Status::factory()->create(['name' => 'Open', 'classes' => 'bg-gray-200']);

        $idea = Idea::factory()->create([
            'title' => 'first idea',
            'category_id' => $category->id,
            'status_id' => $statusOpen->id,
            'description' => 'first description'
        ]);

        $response = $this->get(route('idea.show', $idea));

        $response->assertSuccessful();
        $response->assertSee($idea->title);
        $response->assertSee($idea->description);
        $response->assertSee($category->name);
        $response->assertSee($statusOpen->name);
    }
}
