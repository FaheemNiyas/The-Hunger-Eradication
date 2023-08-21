<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Suggestion;
use Illuminate\Http\Request;

class SuggestionController extends Controller
{
    public function update(Request $request)
    {
        $suggestion = Suggestion::findById($request->post_id);

        $user_ids = json_decode($suggestion->user_id);

        $arrays = ['Clothes' => $suggestion->Clothes, 'Shelter' => $suggestion->Shelter, 'Other' => $suggestion->Other];

        $num = 1;
        foreach ($arrays as $array) {
            if ($num != $array) {
                $arrays[$request->item] += $num;
            }
        }
        $request->merge($arrays);
        $arr = [];

        foreach ($user_ids as $key => $value) {
            $arr += [$key => $value];
            $arr += [$request->item => $request->user_id];
        }

        $suggestion->user_id = json_encode($arr);
        $suggestion->Clothes = $request->Clothes;
        $suggestion->Shelter = $request->Shelter;
        $suggestion->Other = $request->Other;
        $suggestion->save();
    }
}
