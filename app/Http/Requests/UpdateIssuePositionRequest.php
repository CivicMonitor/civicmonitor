<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateIssuePositionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id' => 'required|integer|exits:issue_positions',
            'issue_id' => 'integer|exits:issues',
            'candidate_id' => 'integer|exits:candidates',
            'title' => 'string|max:225',
            'body' => "text",
            'audio' => 'mimes:mp3',
            'sources' => "json",

        ];
    }
}
