<?php

return [
    /*
     * Hamburger Menu
     */
    'toggle_navigation' => 'Toggle navigation',

    /*
     * Trial & Grace Period
     */
    'trial_ends_in' => 'Trial ends :days',
    'grace_period_ends_in' => 'Subscription ends :days',

    'pages' => [
        'welcome' => [
            'title' => 'Welcome',
            'description' => 'FormBuilder is the easiest way to quickly collect form submissions from your users.',
            'fields' => [
                'welcome' => 'Welcome to :name'
            ]
        ],

        'features' => [
            'title' => 'Features',
            'description' => 'Overview over some of the key features provided by FormBuilder.',
            'fields' => [
                'content' => "<strong>Collecting responses</strong><br>
                        Create a form by simply adding inputs using the form builder. <br>
                        Every input field gets assigned an unique identifier. <br>
                        <br>
                        :name offers multiple ways of submitting forms.<br>
                        <br>
                        1. Use your forms embed code and place the code somewhere on your webpage. Replace the YOUR-DIV
                        section with the ID of the actual div you want your form to appear in. That's it - you're done.<br>
                        <br>
                        2. Slightly more difficult, but with more freedom. Create your own HTML form and simply use the
                        form endpoint and the input field unique identifiers as input names to submit your information.
                        Don't forget to include a hidden input field with the honeypot.<br>
                        <br>
3. For advanced users. Build your own HTML form and submit the form using ajax.<br>
                        <br>
Now that you know how to get data into your account let's see what you can do with it.<br>
                        <br>
                        <strong>Integrations</strong><br>
                        :name offers multiple integrations. <br>
                        To enable integrations, all you need to do is complete some initial setup process and then you are
                        good to go. Integrations can be added/removed by pressing the \"Manage integrations\" button on your
                        forms detail view.<br>
                        <br>
                        Use our Trello integration to automatically create a card for every response. Or add a new record
                        to a Google Sheets document using the Google Sheets integration. <br>
                        Using the Zapier integration you can use thousands of pre-built integrations to automate your workflow.<br>
                        <br>
                        <strong>API</strong><br>
                        :name also provides you with an API. <br>
                        Use the responses endpoint to fetch all your forms responses. You could even implement your own
                        comment section by fetching and displaying the responses and collecting new responses using your
                        comment form. <br>
                        <br>
                        Get a list of all your forms or view detailed information about a specific form. <br>
                        <br>
                        The API is not limited to only fetching results. Create and update forms with simple HTTP requests
                        right from your server. Automatically create a new form whenever you release a new blog post. <br>
                        <br>
                        Your user has access to your master API key. Using this key you can use every feature our API offers.<br>
                        We also offer per-form API tokens. Those can be used to update a form and fetch responses. Perfect
                        for cases when you want to hand of development of a new feature and don't want the company to have
                        access to all your other forms."
            ]
        ],

        'faq' => [
            'title' => 'Frequently Asked Questions (FAQ)',
            'title_short' => 'FAQ',
            'description' => 'Find answers to frequently asked questions here in the FormBuilder FAQ.',
            'fields' => [
                'content' => 'Your question is not listed here? <a href=":contact" title="Get in touch!">Contact us!</a>'
            ]
        ],

        'documentation' => [
            'title' => 'Documentation',
        ],

        'about' => [
            'title' => 'About',
            'description' => 'FormBuilder was founded in 2020. It is the perfect solution to quickly capture your users thoughts.',
            'fields' => [
                'title' => 'About :name',
                'content' => ':name was founded in 2020 and aims to be among the best form services out there.'
            ]
        ],

        'contact' => [
            'title' => 'Contact',
            'description' => 'Do you have a question? Get in touch! The FormBuilder support is happy to help.',
            'fields' => [
                'content' => 'You can use the form below to get in touch.'
            ]
        ],

        'example' => [
            'title' => 'Examples',
            'description' => "Examples of what's possible with FormBuilder.",
            'fields' => [
                'example' => 'Example',
                'use_as_template' => 'Use as template'
            ]
        ],

        'cookies' => [
            'title' => 'Cookie Notice',
            'description' => "Do you like cookies? We do. Find out how FormBuilder uses cookies.",
            'fields' => [
                'content' => ':name uses cookies to enable features.<br>
                        Those include, but are not limited to, signing in and spam protection.<br>
                        <br>
                        <dl class="row">
                            <dt class="col-sm-4">form_builder_session</dt>
                            <dd class="col-sm-8">This is your session cookie. It is used to check your sign-in status.</dd>
                            <dt class="col-sm-4">visitor</dt>
    <dd class="col-sm-8">This is your unique identifier cookie. It is set to ensure you only submit a form once
        and is used to detect and prevent spam.</dd>
                            <dt class="col-sm-4">XSRF-TOKEN</dt>
                            <dd class="col-sm-8">Prevent malicious websites from submitting forms on your behalf.</dd>
                        </dl>',
            ]
        ],

        'gdpr' => [
            'title' => 'GDPR',
            'description' => "FormBuilder is GDPR compliant. Here you can find more information about the GDPR.",
            'fields' => [
                'content' => ':name operates out of Europe and is therefore bound by GDPR.<br>
                        Your data is securely stored on servers located in Germany.',
            ]
        ],

        'privacy_policy' => [
            'title' => 'Privacy Policy',
            'description' => "FormBuilder values your privacy. Read how FormBuilder protects your data.",
            'fields' => [
                'content' => '<strong>:name does not share your personal information with undisclosed third parties.</strong><br>
                        <br>
                        :name is committed to keeping your data secure. <br>
                        Information is only submitted to third parties if you enable their respective integrations. The information being transmitted
                        is limited to the data received in the forms responses while the integration is active. <br>
                        Your personal information is never sent to undisclosed external services.<br>
                        <br>
                        <strong>Stripe</strong><br>
                        Stripe is the payment service provider used by :name. <br>
                        Your personal information is sent to <a href="https://stripe.com" target="_blank">Stripe <i class="fas fa-external-link-alt"></i></a> in order to comply
                        with local financial laws.',
            ]
        ],

        'terms_of_service' => [
            'title' => 'Terms of Service',
            'description' => "The FormBuilder terms of service.",
            'fields' => [
                'content' => 'Use of our services constitutes you have read and accepted the Terms of Service, <a
                            href=":privacy_policy">Privacy Policy</a> and <a href=":cookies">Cookie Notice</a>.<br>
                        <br>
                        :name is not liable for any damages that may occur by using the offered services.<br>
                        <br>
                        In order to be allowed to use :name you have to be older than 13 years of age.<br>
                        You are not allowed to use this service for any illegal activities.<br>

                        :name reserves itself the right to terminate your account without notice.<br>',
            ]
        ],

        'pricing' => [
            'title' => 'Pricing',
            'description' => 'Overview over the available FormBuilder subscription plans. ',
            'actions' => [
                'select' => 'Select',
            ],
            'plans' => [
                'basic' => [
                    'title' => 'Basic',
                    'description' => 'The basic plan is perfect for developers looking to try out FormBuilder.',
                ],
                'pro' => [
                    'title' => 'Pro',
                    'description' => 'The pro plan is perfect for agencies managing multiple forms for customers.',
                ],
                'enterprise' => [
                    'title' => 'Enterprise',
                    'description' => 'The enterprise plan is the perfect solution for agencies managing many forms.',
                ],
            ],
            'fields' => [
                'month' => 'month'
            ]
        ],

        'login' => [
            'title' => 'Sign in',
            'description' => "Sign in to access your FormBuilder forms and submissions.",
            'fields' => [
                'email' => 'E-Mail Address',
                'password' => 'Password',
                'remember_me' => 'Remember Me',
                'forgot_your_password' => 'Forgot Your Password?'
            ],
            'actions' => [
                'login' => 'Login'
            ]
        ],

        'register' => [
            'title' => 'Sign up',
            'description' => "Sign up for FormBuilder to create your own custom forms.",
            'fields' => [
                'name' => 'Full Name',
                'email' => 'E-Mail Address',
                'password' => 'Password',
                'confirm_password' => 'Confirm Password',
                'accept_terms' => 'I have read and accept the
                                        <a href=":terms_of_service" target="_blank">Terms of
                                            Service</a>,
                                        <a href=":privacy_policy" target="_blank">Privacy Policy</a>
                                        and
                                        <a href=":cookies" target="_blank">Cookie Notice</a>.',
            ],
            'actions' => [
                'register' => 'Sign up'
            ]
        ],

        'verify' => [
            'title' => 'Verify Your E-Mail Address',
            'description' => "Verify your e-mail address to use FormBuilder.",
            'fields' => [
                'content' => 'Before proceeding, please check your email for a verification link. <br>
                                If you did not receive the email, ',
            ],
            'flash' => [
                'resent' => 'A fresh verification link has been sent to your email address.'
            ],
            'actions' => [
                'request_another' => 'click here to request another'
            ]
        ],

        'email' => [
            'title' => 'Reset Password',
            'description' => "Reset your password to regain access to your FormBuilder account.",
            'fields' => [
                'email' => 'E-Mail Address',
            ],
            'actions' => [
                'send_link' => 'Send Password Reset Link'
            ]
        ],

        'reset' => [
            'title' => 'Reset Password',
            'description' => "Reset your password to regain access to your FormBuilder account.",
            'fields' => [
                'email' => 'E-Mail Address',
                'password' => 'Password',
                'confirm_password' => 'Confirm Password',
            ],
            'actions' => [
                'reset_password' => 'Reset Password'
            ]
        ],

        'two_factor' => [
            'title' => 'Two-Factor Authentication',
            'description' => "Enter your two-factor authentication token to sign-in.",
            'fields' => [
                'content' => 'To log in, open up your Authenticator app and issue the 6-digit code.',
                'token' => 'Two-Factor Token',
                'remember_browser' => 'Remember this browser',
            ],
            'errors' => [
                'invalid_or_expired' => 'The Code is invalid or has expired.'
            ],
            'actions' => [
                'login' => 'Sign in'
            ]
        ],

        'confirm' => [
            'title' => 'Confirm Password',
            'description' => "Please confirm your password before continuing.",
            'fields' => [
                'content' => 'To log in, open up your Authenticator app and issue the 6-digit code.',
                'password' => 'Password',
                'forgot_your_password' => 'Forgot Your Password?'
            ],
            'actions' => [
                'confirm_password' => 'Confirm Password'
            ]
        ],
    ],

    'app' => [
        'sessions' => [
            'title' => 'Sessions',
            'fields' => [
                'user_agent' => 'User-Agent',
                'ip' => 'IP',
                'last_active' => 'Last active',
                'current_session' => 'Your current session',
            ],
            'actions' => [
                'logout' => 'Sign out',
                'logout_everywhere' => 'Sign out everywhere',
            ]
        ],

        'logs' => [
            'title' => 'Logs',
            'fields' => [
                'no_logs_available' => 'No logs available'
            ]
        ],

        'integrations' => [
            'title' => 'Integrations',
            'fields' => [
                'connected' => 'Connected',
                'enabled' => 'Enabled',
                'setup_required' => 'Setup required',
                'integration_setup' => 'The integration is set up. <br>
                                You can now enable the integration on your forms.'
            ],
            'actions' => [
                'request_permissions' => 'Request :service permissions',
                'disable_integration' => 'Disable integration'
            ],
        ],

        'settings' => [
            'title' => 'Settings',

            'profile' => [
                'title' => 'Profile',
                'fields' => [
                    'name' => 'Name',
                    'email' => 'E-Mail Address',
                ],
                'actions' => [
                    'update' => 'Update profile',
                    'resend_verification' => 'Resend verification email'
                ]
            ],

            'password' => [
                'title' => 'Password',
                'fields' => [
                    'current_password' => 'Current password',
                    'new_password' => 'New password',
                    'confirm_password' => 'Confirm password',
                ],
                'actions' => [
                    'update' => 'Change password'
                ]
            ],

            'two_factor_authentication' => [
                'title' => 'Two-factor authentication',
                'fields' => [
                    'token' => 'Token',
                    'backup_tokens' => 'Backup tokens',
                    'devices' => 'Devices',
                    'current_browser' => 'Current browser'
                ],
                'actions' => [
                    'disable' => 'Disable two-factor authentication',
                    'enable' => 'Enable two-factor authentication',
                    'remove_all' => 'Remove all remembered devices',
                    'remove' => 'Remove'
                ]
            ],

            'api_token' => [
                'title' => 'API Token',
                'fields' => [
                    'token' => 'API Token',
                ],
                'actions' => [
                    'copy' => 'Copy',
                    'generate_api_key' => 'Change API token'
                ]
            ],

            'delete' => [
                'title' => 'Delete account',
                'fields' => [
                    'current_password' => 'Current password',
                    'warning' => 'This will also cancel your subscription'
                ],
                'actions' => [
                    'delete' => 'Delete account'
                ]
            ],

            'invoices' => [
                'title' => 'Invoices',
                'fields' => [
                    'date' => 'Date',
                    'amount' => 'Amount',
                    'download' => 'Download',
                ]
            ],

            'card' => [
                'title' => 'Update card',
                'fields' => [
                    'content' => 'Your card will be used for future payments.',
                    'holder_name' => 'Card holder name',
                    'card_info' => 'Card information',
                ],
                'actions' => [
                    'update_card' => 'Update card'
                ]
            ],

            'resume' => [
                'title' => 'Resume subscription',
                'fields' => [
                    'content' => 'Confirm to resume your subscription.'
                ],
                'actions' => [
                    'resume' => 'Resume subscription'
                ]
            ],

            'cancel' => [
                'title' => 'Cancel subscription',
                'fields' => [
                    'content' => 'Confirm to cancel your subscription'
                ],
                'actions' => [
                    'cancel' => 'Cancel subscription'
                ]
            ],

            'swap' => [
                'title' => 'Change plan',
                'fields' => [
                    'content' => 'Swap your plan.',
                    'current_plan' => 'Current plan: <strong>:plan</strong> (€ :price / month)',
                    'new_plan' => 'New plan',
                    'per_month' => ' / month',
                ],
                'actions' => [
                    'swap' => 'Change plan'
                ]
            ]
        ],

        'subscription' => [
            'title' => 'Subscription',
            'fields' => [
                'card_info' => 'Card information',
                'plan' => 'Plan',
                'coupon' => 'Coupon',
                'card_holder_name' => 'Card holder name'
            ],
            'actions' => [
                'subscribe' => 'Subscribe'
            ]
        ],

        'dashboard' => [
            'title' => 'Dashboard',
            'fields' => [
                'no_forms' => 'You do not have any forms.'
            ],
            'actions' => [
                'new_form' => 'New form',
                'copy_embed_code' => 'Copy embed code',
                'edit' => 'Edit',
                'duplicate' => 'Duplicate',
                'delete' => 'Delete'
            ]
        ],

        'error' => [
            'title' => 'An error occurred',
            'fields' => [
                'powered_by' => 'Powered by <a href=":welcome" target="_blank">:name</a>'
            ],
            'actions' => [
                'return_to_form' => 'Return to the form'
            ]
        ],

        'form_api_token' => [
            'title' => 'API Tokens',
            'fields' => [
                'no_api_tokens' => 'No api tokens yet.',
                'api_token' => 'API token',
                'name' => 'Name',
                'created' => 'created'
            ],
            'actions' => [
                'reveal' => 'Reveal API token',
                'edit' => 'Edit',
                'delete' => 'Delete',
                'copy' => 'Copy'
            ],

            'create' => [
                'title' => 'Create API token',
                'actions' => [
                    'create' => 'Create',
                ]
            ],

            'edit' => [
                'title' => 'Edit API token: :name',
                'actions' => [
                    'update' => 'Update',
                ]
            ]
        ],

        'form_page' => [
            'title' => 'Form page',
            'fields' => [
                'custom_url' => 'Custom URL',
                'title' => 'Title',
                'content' => 'Content',
                'outlink' => 'Outlink',
                'outlink_name' => 'Outline name',

                'visit' => 'Visit :outlink',
                'powered_by' => 'Powered by <a href=":welcome" target="_blank">:name</a>'
            ],
            'actions' => [
                'view_using_slug' => 'View using slug url',
                'view' => 'View',
                'download_qr_slug' => 'Download QR (custom url)',
                'download_qr' => 'Download QR',
            ],

            'edit' => [
                'title' => 'Edit form page: :name',
                'actions' => [
                    'update' => 'Update page'
                ]
            ]
        ],

        'form' => [
            'title' => 'Form: :name',

            'fields' => [
                'name' => 'Name',
                'redirect_to' => 'Redirect to',
                'notification_recipient' => 'Notification recipient',
                'honeypot_field_name' => 'Honeypot field name',
                'allow_multiple_responses' => 'Allow multiple responses',
                'data_retention' => 'Data retention',
                'recaptcha_site_key' => 'Google reCAPTCHA Site Key',
                'recaptcha_secret_key' => 'Google reCAPTCHA Secret Key',
                'recaptcha_location' => 'Get your credentials at <a href="https://www.google.com/recaptcha/admin/" target="_blank" title="Open Google reCAPTCHA in a new tab">Google reCAPTCHA</a>.',
                'use_provided_page' => 'Use provided page',

                'indefinitely' => 'Indefinitely',
                '1_week' => '1 week',
                '2_weeks' => '2 weeks',
                '3_weeks' => '3 weeks',
                '4_weeks' => '4 weeks',
                '90_days' => '90 days',
                '1_year' => '1 year',

                'allowed_domains' => 'Allowed domains',
            ],

            'actions' => [
                'edit' => 'Edit',
                'duplicate' => 'Duplicate',
                'delete' => 'Delete',
            ],

            'embed_code' => [
                'title' => 'Embed code',
                'fields' => [
                    'embed_code' => 'Embed code'
                ],
                'actions' => [
                    'copy_embed_code' => 'Copy embed code',
                ]
            ],

            'integrations' => [
                'title' => 'Integrations',
                'fields' => [
                    'content' => 'Missing some integrations?<br>
                                Some integrations require authorization before they can be used.<br>
                                <a href=":integrations">Authorize integrations</a>'
                ],
                'actions' => [
                    'manage_integrations' => 'Manage integrations'
                ]
            ],

            'api_tokens' => [
                'title' => 'API Tokens',
                'actions' => [
                    'manage_api_tokens' => 'Manage API tokens'
                ]
            ],

            'form_page' => [
                'title' => 'Form page',
                'actions' => [
                    'manage_form_page' => 'Manage form page',
                    'enable' => 'Enable'
                ]
            ],

            'responses' => [
                'title' => 'Responses',
                'spam_title' => 'Spam responses',

                'fields' => [
                    'no_responses' => 'No entries yet. Check back later.',
                    'created_at' => 'Created at'
                ],

                'actions' => [
                    'mark_as_spam' => 'Mark as spam',
                    'not_spam' => 'Not spam',
                    'delete' => 'Delete'
                ]
            ],

            'create' => [
                'title' => 'Create form',
                'actions' => [
                    'create' => 'Create form'
                ]
            ],

            'edit' => [
                'title' => 'Edit form: :name',
                'fields' => [
                    'cannot_be_modified' => 'This form contains responses and cannot be modified. Would you like to duplicate it instead?',
                    'not_all_recaptcha_fields' => 'Not all Google reCAPTCHA fields are filled. No validation will be performed.'
                ],
                'actions' => [
                    'update' => 'Update form',
                    'duplicate' => 'Duplicate'
                ]
            ]
        ]
    ],

    'layouts' => [
        'marketing' => [
            'copyright' => '&copy; :year :name. All rights reserved.',
            'footer' => [
                'company' => 'Company',
                'support' => 'Support',
                'account' => 'Account',
                'legal' => 'Legal',
            ]
        ],
        'app' => [
            'fields' => [
                'close' => 'Close',
            ],
            'flash' => [
                'copied_to_clipboard' => 'Copied to clipboard!',
                'failed_validation_rules' => 'The following validation rules failed:'
            ],
            'alerts' => [
                'development_environment' => 'Development environment',
                'not_production_ready' => 'FormBuilder is still in active development and not production ready.'
            ],
            'actions' => [
                'new_form' => 'New form',
                'stop_impersonating' => 'Stop impersonating',
                'logout' => 'Sign out',
            ],
        ]
    ]

];
