<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MestoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

    public static $wrap = 'mesto';

    public function toArray($request)
    {
        //return parent::toArray($request);

        return[
            'id'=>$this->resource->id,
            'naziv'=>$this->resource->naziv_mesta
        ];
    }
}
