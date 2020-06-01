<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RegisterClientKey extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        if (isset($this->key) && isset($request->client_ident)) {
            $key = \App\ClientKey::find($this->key);
            if (!$key->used) {
                $key->used = true;
                $key->client_ident = $request->client_ident;
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
