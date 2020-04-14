<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductsCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    // Para crearlo es php artisan make:resource nombreCollection
    // No sé pero no sirve sin collection
    public function toArray($request)
    {
        return [
            'data' => $this->collection->transform(function($element) {
                return [
                    'id' => $element->id,
                    'title' => $element->title,
                    'humanPrice' => "$".($element->price / 100),
                    'description' => $element->description,
                    'numberPrice' => $element->price,
                    'image' => $element->image_url
                ];
            })
        ];
    }
}
