<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClientKey extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $key = \App\ClientKey::find($this->key);
        if (isset($key->key)) {
            if (!$key->used) {
                $key->used = true;
                $key->save();
                return [
                    'key' => $key->key,
                    'owner' => $key->user_id,
                ];
            }else{
                return [
                    'error_code' => 'key_already_used',
                ];
            }
        } else {
            return [
                'error_code' => 'key_not_found',
            ];
        }
    }
}
