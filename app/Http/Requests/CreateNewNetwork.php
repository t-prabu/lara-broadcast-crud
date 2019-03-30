<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateNewNetwork extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'name' => ['required', 'unique:networks,name,' . $this->network],
            'network_id' => ['required', 'numeric', 'digits_between:3,3', 'unique:networks,network_id,' . $this->network ],
        ];
    }
}
