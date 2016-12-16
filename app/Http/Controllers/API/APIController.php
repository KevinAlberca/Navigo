<?php
/**
 * Created by PhpStorm.
 * User: awh
 * Date: 16/12/2016
 * Time: 01:14
 */

namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;

class APIController extends Controller
{
    public function returnFunctions(){
        $func = [
            [
                'routes' => '/cards/check/{card_id}',
                'method' => 'GET',
                'description' => 'Return boolean to user, if card is active or not',
                'return_type' => 'boolean'
            ],
            [
                'routes' => '/cards/check',
                'method' => 'POST',
                'params' => [
                    'card_number' => 'string - a card id'
                ],
                'description' => 'Return boolean to user, if card is active or not',
                'return_type' => 'boolean'
            ],
        ];

        return response()->json($func, 200);
    }
}