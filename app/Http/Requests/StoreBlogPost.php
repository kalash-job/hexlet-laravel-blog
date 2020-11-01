<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = $this->route()->originalParameters();
        $rules = [
            'name' => 'required|unique:articles',
            'body' => 'required|min:300',
        ];
        if ($this->route()->named('articles.update')) {
            $rules['name'] .= ",name, {$id['article']}";
        }
        return $rules;
    }
}
