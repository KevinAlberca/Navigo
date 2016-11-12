<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => "Le champ :attribute doit être accepté.",
    'active_url'           => "Le champ :attribute n'est pas une URL valide.",
    'after'                => "Le champ :attribute doit être après :date.",
    'alpha'                => "Le champ :attribute doit uniquement contenir des lettres.",
    'alpha_dash'           => "Le champ :attribute doit contenir uniquement des lettres, nombres et tirets.",
    'alpha_num'            => "Le champ :attribute doit contenir des lettres et des nombres.",
    'array'                => "Le champ :attribute doit être un tableau.",
    'before'               => "Le champ :attribute doit être avant :date.",
    'between'              => [
        'numeric' => "Le champ :attribute must be between :min and :max.",
        'file'    => "Le champ :attribute must be between :min and :max kilobytes.",
        'string'  => "Le champ :attribute must be between :min and :max characters.",
        'array'   => "Le champ :attribute must have between :min and :max items.",
    ],
    'boolean'              => "Le champ :attribute field must be true or false.",
    'confirmed'            => "Le champ :attribute confirmation does not match.",
    'date'                 => "Le champ :attribute is not a valid date.",
    'date_format'          => "Le champ :attribute does not match the format :format.",
    'different'            => "Le champ :attribute and :other must be different.",
    'digits'               => "Le champ :attribute must be :digits digits.",
    'digits_between'       => "Le champ :attribute must be between :min and :max digits.",
    'dimensions'           => "Le champ :attribute has invalid image dimensions.",
    'distinct'             => "Le champ :attribute field has a duplicate value.",
    'email'                => "Le champ :attribute must be a valid email address.",
    'exists'               => "The selected :attribute is invalid.",
    'file'                 => "Le champ :attribute must be a file.",
    'filled'               => "Le champ :attribute field is required.",
    'image'                => "Le champ :attribute must be an image.",
    'in'                   => "The selected :attribute is invalid.",
    'in_array'             => "Le champ :attribute field does not exist in :other.",
    'integer'              => "Le champ :attribute must be an integer.",
    'ip'                   => "Le champ :attribute must be a valid IP address.",
    'json'                 => "Le champ :attribute must be a valid JSON string.",
    'max'                  => [
        'numeric' => "Le champ :attribute may not be greater than :max.",
        'file'    => "Le champ :attribute may not be greater than :max kilobytes.",
        'string'  => "Le champ :attribute may not be greater than :max characters.",
        'array'   => "Le champ :attribute may not have more than :max items.",
    ],
    'mimes'                => "Le champ :attribute must be a file of type: :values.",
    'mimetypes'            => "Le champ :attribute must be a file of type: :values.",
    'min'                  => [
        'numeric' => "Le champ :attribute must be at least :min.",
        'file'    => "Le champ :attribute must be at least :min kilobytes.",
        'string'  => "Le champ :attribute must be at least :min characters.",
        'array'   => "Le champ :attribute must have at least :min items.",
    ],
    'not_in'               => "The selected :attribute is invalid.",
    'numeric'              => "Le champ :attribute must be a number.",
    'present'              => "Le champ :attribute field must be present.",
    'regex'                => "Le champ :attribute format is invalid.",
    'required'             => "Le champ :attribute field is required.",
    'required_if'          => "Le champ :attribute field is required when :other is :value.",
    'required_unless'      => "Le champ :attribute field is required unless :other is in :values.",
    'required_with'        => "Le champ :attribute field is required when :values is present.",
    'required_with_all'    => "Le champ :attribute field is required when :values is present.",
    'required_without'     => "Le champ :attribute field is required when :values is not present.",
    'required_without_all' => "Le champ :attribute field is required when none of :values are present.",
    'same'                 => "Le champ :attribute and :other must match.",
    'size'                 => [
        'numeric' => "Le champ :attribute must be :size.",
        'file'    => "Le champ :attribute must be :size kilobytes.",
        'string'  => "Le champ :attribute must be :size characters.",
        'array'   => "Le champ :attribute must contain :size items.",
    ],
    'string'               => "Le champ :attribute doit être une chaine de caractères.",
    'timezone'             => "Le champ :attribute must be a valid zone.",
    'unique'               => "Le champ :attribute has already been taken.",
    'uploaded'             => "Le champ :attribute failed to upload.",
    'url'                  => "Le champ :attribute format is invalid.",

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => "custom-message",
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
