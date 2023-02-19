<?php

    namespace App\Models;

    class Listing {
        public static function all() {
           return [
            [
                'id' => 1,
                'title' => 'hello world',
                'author' => 'ice verse'
            ],
            [
                'id' => 2,
                'title' => 'hello me',
                'author' => 'beniazza haytam'
            ],
        ];
        }

        public static function find($id) {
            $listings = self::all();

            foreach($listings as $listing) {
                if($listing['id'] == $id) {
                    return $listing;
                }
            }
        }
    }