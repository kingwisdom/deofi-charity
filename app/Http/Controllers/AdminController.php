<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Event;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function gallery()
    {
        $galleries = Gallery::orderBy('created_at', 'desc')->get();
        return view("admin.galleries", compact("galleries"));
    }
    public function events()
    {
        $event = Event::orderBy('created_at', 'desc')->get();
        return view("admin.events", compact("event"));
    }
    public function post_gallery(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $title = $request->title;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . 'glr.' . $image->extension();
            $image->move(public_path('images'), $imageName);

            // Save the title and image path to the database
            $model = new Gallery();
            $model->title = $title;

            $model->image = 'images/' . $imageName;
            $model->save();

            return redirect(route('galleries'))->with('status', 'Your Post has been sent successfully!');
        }

        return response()->json(['message' => 'Image upload failed'], 400);

    }
    public function create_gallery()
    {
        return view("admin.create_gallery");
    }

    public function create_event()
    {
        return view("admin.create_event");
    }
    public function post_event(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $title = $request->title;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . 'event.' . $image->extension();
            $image->move(public_path('images'), $imageName);

            // Save the title and image path to the database
            $model = new Event();
            $model->title = $title;
            $model->description = $request->description;
            $model->slug = \Str::slug($request->title);
            ;
            $model->image = 'images/' . $imageName;
            $model->save();

            return redirect(route('events'))->with('status', 'Your Post has been sent successfully!');
        }

        return response()->json(['message' => 'Data refuse to save'], 400);

    }

    public function deleteGallery($id)
    {
        try {
            $model = Gallery::find($id);
            $model->delete();
            return redirect(route('galleries'))->with('status', 'Your Image has been deleted successfully!');
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()], 500);
        }
    }

    public function deleteEvent($id)
    {
        try {
            $model = Event::find($id);
            $model->delete();
            return redirect(route('events'))->with('status', 'Your Event has been deleted successfully!');
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()], 500);
        }
    }
}
