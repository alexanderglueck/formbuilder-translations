<?php

return [
    'welcome' => [
        'subject' => 'Welcome',
        'greeting' => 'Welcome!',
        'message' => 'Thanks for signing up to :name.

Please let us know if there is anything we can help you with.',
        'closing' => 'Thanks,<br>:name'
    ],

    'account' => [
        'email' => [
            'updated' => [
                'subject' => 'E-Mail Address updated',
                'greeting' => 'E-Mail Address updated!',
                'message' => "We're just letting you know that your email was updated.",
                'closing' => 'Thanks,<br>:name'
            ]
        ],

        'password' => [
            'updated' => [
                'subject' => 'Password updated',
                'greeting' => 'Password updated!',
                'message' => "We're just letting you know that your password was updated.",
                'closing' => 'Thanks,<br>:name'
            ]
        ],

        'two_factor_authentication' => [
            'enabled' => [
                'subject' => 'Two-factor authentication enabled',
                'greeting' => 'Two-factor authentication enabled!',
                'message' => "We're just letting you know that two factor authentication was added to your account.",
                'closing' => 'Thanks,<br>:name'
            ],
            'disabled' => [
                'subject' => 'Two-factor authentication disabled',
                'greeting' => 'Two-factor authentication disabled!',
                'message' => "We're just letting you know that two factor authentication was removed from your account.",
                'closing' => 'Thanks,<br>:name'
            ]
        ]
    ],

    'auth' => [
        'activate' => [
            'subject' => 'Please activate your account',
            'greeting' => 'Please activate your account!',
            'message' => "Please activate your e-mail address to get access to all :name features.",
            'closing' => 'Thanks,<br>:name',
            'cta' => 'Activate'
        ]
    ],

    'responses' => [
        'received' => [
            'subject' => 'New response received',
            'greeting' => 'New response received!',
            'message' => 'You just received a new response on your ":form" form.',
            'closing' => 'Thanks,<br>:name',
            'cta' => 'View all responses'
        ],
        'summary' => [
            'subject' => 'New response received',
            'greeting' => 'New response received!',
            'message' => "Here's what you missed:",
            'closing' => 'Thanks,<br>:name',
            'cta' => 'Visit :name',
            'notifications' => 'Notifications',
            'view_response' => 'View response'
        ]
    ],

    'subscription' => [
        'thank_you' => [
            'subject' => 'Thank you for subscribing',
            'greeting' => 'Thank you!',
            'message' => 'Thank you for becoming a subscriber.

We hope you are as happy as we are. ',
            'closing' => 'Thanks,<br>:name'
        ]
    ]
];
