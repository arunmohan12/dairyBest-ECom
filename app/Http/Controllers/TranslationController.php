<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TranslationController extends Controller
{
    public function getTranslations(Request $request)
{
    try {

        $lang = $request->input('lang', session('lang', 'en'));

    $translations = DB::table('languages')->pluck("{$lang}_value", 'keys');


    return response()->json($translations);
    } catch (\Exception $e) {
        return response()->json([
            'error' => 'Failed to load translations.',
            'message' => $e->getMessage()
        ], 500);
    }
}
}
