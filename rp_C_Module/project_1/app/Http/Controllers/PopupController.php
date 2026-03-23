<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Popup;

class PopupController extends Controller
{
    public function index() {
        $popups = Popup::all();

        return view('popup_management', compact('popups'));
    }

    public function edit($id) {
        $popup = Popup::find($id);

        return view('/popup_edit', compact('popup'));
    }

    public function update($id, Request $request) {
        $data = [
            'title' => $request->title,
            'content' => $request->content,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ];

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('popups/images', 'public');
        }

        Popup::find($id)->update($data);

        return back();
    }

    public function register(Request $request) {
        $image = $request->file('image')->store('popups/images', 'public');

        Popup::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $image,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        return back();
    }

    public function delete($id) {
        Popup::destroy($id);

        return back();
    }
}
