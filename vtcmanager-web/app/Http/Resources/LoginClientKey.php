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
            $key = \App\ClientKey::find($this->key);
            if (!$key->used) {
                $key->used = true;
                $key->save();
                return [
                    'success' => true,
                    'owner' => $key->user_id,
                ];
            }else{
                return [
                    'success' => false,
                    'error_code' => 'key_already_used',
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
