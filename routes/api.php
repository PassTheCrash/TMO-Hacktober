<?php

use App\Events\SessionTranscriptionReceived;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post("/session/{sessionId}/transcription", function(Request $req) {
    $options = array(
        'cluster' => 'us2',
        'useTLS' => true
    );
    $pusher = new Pusher\Pusher(
        '50e58c5d5b112270f798',
        'e3badd5acd4287cf66dc',
        '633217',
        $options
    );

    $pusher->trigger($req->sessionId, 'transcription', $req->getContent());




//    return event(new SessionTranscriptionReceived($req->sessionId, $req->getContent()));
});

Route::post("/session/{sessionId}/keywords", function(Request $req) {
    return response();
});

Route::post("/session/{sessionId}/sentiment", function(Request $req) {
    return response();
});
