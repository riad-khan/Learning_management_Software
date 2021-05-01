<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\User\ClassComment;
use App\Models\User\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class ClassCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $comments = ClassComment::where('class_id',  $id)->get();
        // dd($comments);
        // $class_id =$id;
        // $user_class_comments = Cache::remember('user_class_comments', 22 * 60, function () {
        //     $comments = ClassComment::where('class_id',  $this->class_id)->get();
        //     return $comments;
        // });
        
        return response()->json($comments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,  $id)
    {
        $comment = new ClassComment();
        $comment->class_id = $id;
        $comment->user_id = Auth::user()->id;
        $comment->comment = $request->comment;
        $comment->save();

        return response()->json($comment);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User\ClassComment  $classComment
     * @return \Illuminate\Http\Response
     */
    public function show(ClassComment $classComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User\ClassComment  $classComment
     * @return \Illuminate\Http\Response
     */
    public function edit(ClassComment $classComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User\ClassComment  $classComment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClassComment $classComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User\ClassComment  $classComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClassComment $classComment)
    {
        //
    }
}
