<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LifeHackController extends Controller
{
    private $hacks = [
        ["id" => 1, "category" => "study", "tip" => "Use the Pomodoro technique: 25 minutes study, 5 minutes break."],
        ["id" => 2, "category" => "coding", "tip" => "Break problems into smaller functions before writing code."],
        ["id" => 3, "category" => "productivity", "tip" => "Turn off notifications while coding to stay focused."],
        ["id" => 4, "category" => "career", "tip" => "Contribute to open-source projects to build experience."],
        ["id" => 5, "category" => "study", "tip" => "Summarize complex topics in your own words—it sticks better."],
        ["id" => 6, "category" => "coding", "tip" => "Read error messages carefully; they often point to the solution."],
    ];

    // Get all hacks
    public function getAll()
    {
        return response()->json($this->hacks);
    }

    // Get random hack
    public function getRandom()
    {
        return response()->json($this->hacks[array_rand($this->hacks)]);
    }

    // Get hack by ID
    public function getById($id)
    {
        $hack = collect($this->hacks)->firstWhere('id', (int)$id);

        if (!$hack) {
            return response()->json(["message" => "No hack found for id: $id"], 404);
        }

        return response()->json($hack);
    }
}