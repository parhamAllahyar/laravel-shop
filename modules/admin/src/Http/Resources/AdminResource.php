<?php

namespace Admin\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AdminResource extends JsonResource
{
    
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
