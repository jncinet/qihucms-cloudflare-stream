<?php

namespace Qihucms\CloudflareStream\Controllers\Wap;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $uploadUrl = app('cloudflare.stream')->directCreatorUploads();
        return view('cf-stream::index', compact('uploadUrl'));
    }
}
