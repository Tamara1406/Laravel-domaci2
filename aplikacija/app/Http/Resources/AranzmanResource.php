<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AranzmanResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

    public static $wrap = 'aranzman';

    public function toArray($request)
    {
        //return parent::toArray($request);
        return[
            'id'=> $this->resource->id,
            'naziv'=> $this->resource->naziv,
            'tip_aranzmana'=> new TipAranzmanaResource($this->resource->tip),
            'mesto'=>new MestoResource($this->resource->mesto),
            'user'=> new UserResource($this->resource->user)
        ];
    }
}
