<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use League\CommonMark\CommonMarkConverter;

class IdeaController extends Controller
{
    public function index(){
        return view('welcome');
    }

// => is the array key-value operator in PHP.
// -> is the object operator in PHP. It is used to call a method or access a property on an object.

    public function generateIdeas(Request $request){

        $validated = $request->validate([
            'niche'=>['required','string','max:30'],
        ]);
        $niche = $validated['niche'];
        $prompt = "Give me 10 viral Instagram content ideas for the niche: {$niche}. Keep it engaging. Directly give the ideas no need for other things like Here are you ideas, etc. Keep the answers well formatted with little descriptions under a bold heading of each idea.";
        
        // We use the messages format with role and content because it's the standard for chat-based AI models (like GPT, DeepSeek) that mimic conversations. The model responds with a choices array, and the actual reply is in choices[0].message.content. This structure comes from OpenAI's Chat Completion API and is followed by most modern LLM APIs.
        $data = [
            'model' => 'mistralai/mistral-small-3.2-24b-instruct:free',
            'messages' => [
                ['role' => 'user', 'content' => $prompt],
            ],
        ];
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('OPENROUTER_API_KEY'),
            'HTTP-Referer' => 'http://localhost:8000',
            'X-Title' => 'Niche Idea Generator'
        ])->post('https://openrouter.ai/api/v1/chat/completions', $data); // we send $data which is our request to the model in POST call. It returns $response.

        $rawMarkdown = $response['choices'][0]['message']['content'] ?? 'No Ideas Generated'; // there is a standard OpenAI type response each API returns. We are accessing the 0th choice (in case there have been multiple outputs returned by API) and displaying the content of the message.

        // Convert Markdown to HTML
        $converter = new CommonMarkConverter();
        $htmlOutput = $converter->convertToHtml($rawMarkdown);

        // $output = null;
        // # I was manually feeding here the content to be displayed per niche.
        // $nicheIdeas = [
        //     'fitness' => ['10-Minute Bodyweight Workout','Meal Plan for Muscle Gain','Instagram Reels on Fitness Hacks', 'Home Workout eBook'],
        //     'health' => ['Mental Health Tips', 'Daily Wellness', 'Healthy Eating'],
        //     'tech' => ['AI Trends', 'Gadget Reviews', 'Tech News Updates'], 
        // ];
        // $nicheKey = strtolower($niche);
        // $output = $nicheIdeas[$nicheKey] ?? null; // “Take the user input, make it lowercase, and try to find it in my idea list. If not found, just return nothing (null).”
        // return view('welcome', ['niche' => $niche]); // I am returning the variable named niche from the welcome file. in the welcome file also there is some code snippet to view a certain message which is passed to this view method.
        
        return view('welcome', ['niche' => $niche, 'output' => $htmlOutput]);
        
        // # This is used for debugging.
        // dd($response -> json()); 
    }
}
