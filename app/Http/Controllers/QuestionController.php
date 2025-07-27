<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Topic;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function searchByTopic(Request $request)
    {
        $request->validate([
            'topic' => 'required|string'
        ]);

        $keyword = $request->input('topic');

        $topics = Topic::where('path', 'LIKE', "%{$keyword}%")->pluck('id');

        if ($topics->isEmpty()) {
            return response()->json(['message' => 'No matching topics found'], 404);
        }

        $questions = Question::with('topic')
            ->whereIn('topic_id', $topics)
            ->get();

        return response()->json([
            'topic_keyword:' => $keyword,
            'questions_found:' => $questions->count(),
            'questions:' => $questions
        ]);
    }
}
