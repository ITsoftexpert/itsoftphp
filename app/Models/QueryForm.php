<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QueryForm extends Model
{
    //
    protected $table = 'query_form';

    protected $fillable = [
        'name',
        'email',
        'company_name',
        'phone_number',
        'web_url',
        'your_msg',
        'preffered_option',
        'budget',
        'goals',
        'fb_link',
        'insta_link',
        'category',
        'Requirement',
        'existing_tool',
        'language',
        'form_type'
    ];
}
