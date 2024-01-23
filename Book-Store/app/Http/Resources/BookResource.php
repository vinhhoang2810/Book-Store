<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'category_ids'=>$this->category_ids,
            'title'=>$this->title,
            'author' => $this->author,
            'price' =>$this->price,
            'quantity' => $this->quantity,
            'image_path' => $this->image_path
        ];
    }
}
