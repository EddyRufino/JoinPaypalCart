<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
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
