<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class FavoritesController extends Controller
{
    /**
     * 投稿をお気に入り登録するアクション。
     *
     */
    public function store($id)
    {
        // 認証済みユーザ（閲覧者）が、 idの投稿をお気に入り登録する
        \Auth::user()->favorite($id);
        // 前のURLへリダイレクトさせる
        return back();
    }

    /**
     * 投稿をお気に入り解除するアクション。
     *
     */
    public function destroy($id)
    {
        // 認証済みユーザ（閲覧者）が、 idの投稿をお気に入り登録解除する
        \Auth::user()->unfavorite($id);
        // 前のURLへリダイレクトさせる
        return back();
    }
}
