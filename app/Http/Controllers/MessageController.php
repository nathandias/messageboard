<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Message;

class MessageController extends Controller
{
    public function create (Request $request) {
        $message = new Message();
        $message->title = $request->title;
        $message->content = $request->content;

        $message->save();

        return redirect('/');

    }

    public function view ($id) {
        $message = Message::findOrFail($id);

        //echo $message->title;

        return view('message',[
            'message' => $message
        ]);
    }
}
