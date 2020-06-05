<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LoginClientKey extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        if (isset($this->key)) {
            if($request->client_ident == $this->client_ident && $request->key == $this->key){
                return [
                    'success' => true,
                ];
            }else{
                return [
                    'success' => false,
                    'error_code' => 'unauthorized',
                ];
            }
        } else {
            return [
                'success' => false,
                'error_code' => 'key_not_found',
            ];
        }
    }
}
