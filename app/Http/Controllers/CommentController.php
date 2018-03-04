<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Auth;
use App\Repositories\CommentRepository;

class CommentController extends Controller
{
    private $commentRepository;
    
        public function __construct(CommentRepository $commentRepository)
        {
            $this->middleware('auth');
            $this->commentRepository = $commentRepository;
        }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::all();
        
        return view('products.show', compact('comments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                // $validator = Validator::make($request->all(), [
        //     'comment' => 'required | max:12 | min:3',
        //     'user_id'=> Auth::user()->id,
        // ]);

        // $validator->validate();

        Comment::create([
            'comment' => $request->input('comment'),  
            'user_id' => Auth::user()->id, 
            'product_id' => $request->input('product_id')    
            ]);
        return redirect('/');

        dd(\App\Auth::user()->id);

        $products = ProductInfo::all();
        
        
        return view('products.show', compact('productInfo', 'products'));
    }

}
