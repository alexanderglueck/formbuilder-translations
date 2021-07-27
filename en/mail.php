<?php

return [
    'welcome' => [
        'subject' => 'Welcome',
        'greeting' => 'Welcome!',
        'message' => 'Thanks for signing up to :name.

Please let us know if there is anything we can help you with.',
        'closing' => 'Thanks, :name'
    ],

    'account' => [
        'email' => [
            'updated' => [
                'subject' => 'E-Mail Address updated',
                'greeting' => 'E-Mail Address updated!',
                'message' => "We're just letting you know that your email was updated.",
                'closing' => 'Thanks, :name'
            ]
        ],

        'password' => [
            'updated' => [
                'subject' => 'Password updated',
                'greeting' => 'Password updated!',
                'message' => "We're just letting you know that your password was updated.",
                'closing' => 'Thanks, :name'
            ]
        ],

        'two_factor_authentication' => [
            'enabled' => [
                'subject' => 'Two-factor authentication enabled',
                'greeting' => 'Two-factor authentication enabled!',
                'message' => "We're just letting you know that two factor authentication was added to your account.",
                'closing' => 'Thanks, :name'
            ],
            'disabled' => [
                'subject' => 'Two-factor authentication disabled',
                'greeting' => 'Two-factor authentication disabled!',
                'message' => "We're just letting you know that two factor authentication was removed from your account.",
                'closing' => 'Thanks, :name'
            ]
        ]
    ],

    'auth' => [
        'activate' => [
            'subject' => 'Verify E-Mail Address',
            'greeting' => 'Verify E-Mail Address!',
            'message' => "Please verify your e-mail address to get access to all :name features.",
            'closing' => "Thanks, :name",
            'cta' => 'Verify E-Mail Address'
        ]
    ],

    'responses' => [
        'received' => [
            'subject' => 'New response received',
            'greeting' => 'New response received!',
            'message' => 'You just received a new response on your ":form" form.',
            'closing' => 'Thanks, :name',
            'cta' => 'View all responses'
        ],
        'summary' => [
            'subject' => 'New response received',
            'greeting' => 'New response received!',
            'message' => "Here's what you missed:",
            'closing' => 'Thanks, :name',
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
            'closing' => 'Thanks, :name'
        ]
    ],

    'layout' => [
        'copyright' => 'All Rights reserved.',
        'subcopy' => "If you're having trouble clicking the \":actionText\" button, copy and paste the URL below into your web browser:"
    ]
];
