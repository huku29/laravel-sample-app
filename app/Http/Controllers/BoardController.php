<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Board;


class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //memberテーブルからname,telephone,emailを$membersに格納
        $boards=DB::table('boards')
            // ->select('id', 'title', 'body')
            ->select('id','title', 'body')
            ->get();

        //viewを返す(compactでviewに$membersを渡す)
        return view('board/index', compact('boards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('board/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $board=new Board;

        $board->title=$request->input('title');
        $board->body=$request->input('body');

        $board->save();

        return redirect('board/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $board=Board::find($id);

        return view('board/show', compact('board'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $board=Board::find($id);

        return view('board/edit', compact('board'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $board=Board::find($id);

        $board->title=$request->input('title');
        $board->body=$request->input('body');

    //DBに保存
        $board->save();

    //処理が終わったらmember/indexにリダイレクト
        return redirect('board/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $board=Board::find($id);
        $board->delete();
        return redirect('board/index');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $query=DB::table('boards');
        $spaceConversion = mb_convert_kana($search, 's');
        $keyword_array=preg_split('/[\s]+/', $spaceConversion , -1, PREG_SPLIT_NO_EMPTY);

        foreach ($keyword_array as $keyword) {
            $query->where('title', 'like', '%'.$keyword.'%');
            $query->orWhere('body', 'like', '%'.$keyword.'%');
          }
    
        $query->select('id', 'title', 'body');
        $boards=$query->paginate(20);

        return view('board/index', compact('boards'));

    }
}
