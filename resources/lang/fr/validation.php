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
        'numeric' => "Le champ :attribute doit être entre :min et :max.",
        'file'    => "Le champ :attribute doit être entre :min et :max kilobytes.",
        'string'  => "Le champ :attribute doit être entre :min et :max caractères.",
        'array'   => "Le champ :attribute doit avoir entre :min et :max éléments.",
    ],
    'boolean'              => "Le champ :attribute doit être vrai ou faux.",
    'confirmed'            => "Le champ :attribute ne correspond pas à sa confirmation.",
    'date'                 => "Le champ :attribute n'est pas une date valide.",
    'date_format'          => "Le champ :attribute ne correspond pas au format : :format.",
    'different'            => "Le champ :attribute et :other doivent être différent.",
    'digits'               => "Le champ :attribute doit être :digits des nombres.",
    'digits_between'       => "Le champ :attribute doit être entre :min et :max.",
    'dimensions'           => "Le champ :attribute possède des dimensions invalides.",
    'distinct'             => "Le champ :attribute a une donnée dupliquée.",
    'email'                => "Le champ :attribute doit être une adresse e-mail valide.",
    'exists'               => "Le champ selectionné :attribute est invalide.",
    'file'                 => "Le champ :attribute doit être un fichier.",
    'filled'               => "Le champ :attribute est requis.",
    'image'                => "Le champ :attribute doit être une image.",
    'in'                   => "Le champ selectionné :attribute est invalide.",
    'in_array'             => "Le champ :attribute n'existe pas dans :other.",
    'integer'              => "Le champ :attribute doit être un chiffre.",
    'ip'                   => "Le champ :attribute doit être une adresse IP valide.",
    'json'                 => "Le champ :attribute doit être un fichier JSON valide.",
    'max'                  => [
        'numeric' => "Le champ :attribute ne doit pas dépasser :max.",
        'file'    => "Le champ :attribute ne doit pas dépasser :max kilobytes.",
        'string'  => "Le champ :attribute ne doit pas dépasser :max caractères.",
        'array'   => "Le champ :attribute ne doit pas contenir plus de :max élèments.",
    ],
    'mimes'                => "Le champ :attribute doit être du type: :values.",
    'mimetypes'            => "Le champ :attribute doit être un fichier de type: :values.",
    'min'                  => [
        'numeric' => "Le champ :attribute doit être au minimum :min.",
        'file'    => "Le champ :attribute doit être au minimum :min kilobytes.",
        'string'  => "Le champ :attribute doit être au minimum :min caractères.",
        'array'   => "Le champ :attribute doit contenir au minimum :min élèments.",
    ],
    'not_in'               => "Le champ :attribute est invalide.",
    'numeric'              => "Le champ :attribute doit être un chiffre.",
    'present'              => "Le champ :attribute est requis.",
    'regex'                => "Le champ :attribute est à un format invalide.",
    'required'             => "Le champ :attribute est requis.",
    'required_if'          => "Le champ :attribute est requis quand :other est à :value.",
    'required_unless'      => "Le champ :attribute est requis sauf si :other est compris dans :values.",
    'required_with'        => "Le champ :attribute est requis quand :values est présent.",
    'required_with_all'    => "Le champ :attribute est requis quand :values est présent.",
    'required_without'     => "Le champ :attribute est requis quand :values n'est pas présent.",
    'required_without_all' => "Le champ :attribute est requis quand aucune valeur :values n'est present.",
    'same'                 => "Le champ :attribute est :other doit être identique.",
    'size'                 => [
        'numeric' => "Le champ :attribute doit être :size.",
        'file'    => "Le champ :attribute doit être :size kilobytes.",
        'string'  => "Le champ :attribute doit être :size caractères.",
        'array'   => "Le champ :attribute doit contenir :size élèments.",
    ],
    'string'               => "Le champ :attribute doit être une chaine de caractères.",
    'timezone'             => "Le champ :attribute doit être une zone valide.",
    'unique'               => "Le champ :attribute est déjà existant.",
    'uploaded'             => "Le champ :attribute n'a pas pu être mis en ligne.",
    'url'                  => "Le champ :attribute le format est invalide.",

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
