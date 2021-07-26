<?php

return [
    'settings' => [
        'profile' => [
            'updated' => 'Profile updated!',
            'not_updated' => 'Profile could not be updated!',
            'not_verified' => 'Your email address has not been verified yet. You can resend the verification email on the profile settings page.'
        ],
        'two_factor_authentication' => [
            'devices' => [
                'deleted' => 'Devices deleted!'
            ],
            'device' => [
                'deleted' => 'Device deleted!'
            ]
        ],
        'session' => [
            'session' => [
                'deleted' => 'Session destroyed!'
            ],
            'sessions' => [
                'deleted' => 'Sessions destroyed!'
            ]
        ],
        'api_token' => [
            'changed' => 'API Token changed!'
        ],
        'user_setting' => [
            'deleted' => 'Profile deleted!',
            'not_deleted' => 'Profile could not be deleted!'
        ],
        'password' => [
            'updated' => 'Password updated!',
            'not_updated' => 'Password could not be updated!'
        ],
        'subscription' => [
            'cancelled' => 'Your subscription has been cancelled.',
            'resumed' => 'Your subscription has been resumed.',
            'subscribed' => 'Thanks for becoming a subscriber!'
        ],
        'card' => [
            'updated' => 'Your card has been updated!'
        ],
        'plan' => [
            'changed' => 'Your plan has been changed!'
        ]
    ],
    'form' => [
        'duplicated' => 'Form duplicated!',
        'created' => 'Form created!',
        'updated' => 'Form updated!',
        'deleted' => 'Form deleted!',
        'not_created' => 'Form not created. There were validation errors.',
        'not_updated' => 'Form not updated. There were validation errors.',

        'api_token' => [
            'created' => 'API Token created!',
            'updated' => 'API Token updated!',
            'deleted' => 'API Token deleted!',
            'validation_failed' => 'API token not created/updated. There were validation errors.'
        ],

        'page' => [
            'updated' => 'Page updated!',
            'enabled' => 'Page enabled!',
            'validation_failed' => 'Page not created/updated. There were validation errors.'
        ],

        'response' => [
            'deleted' => 'Response deleted!',
            'updated' => 'Response updated!'
        ]
    ],
    'integration' => [
        'enabled' => 'Integration enabled!',
        'disabled' => 'Integration disabled!'
    ],
    'auth' => [
        'registered' => 'Thanks for signing up to :name. Check your emails to activate your account.',
        'verified' => 'Thanks for verifying your email address!',
        'expired' => 'Token expired.'
    ]
];
