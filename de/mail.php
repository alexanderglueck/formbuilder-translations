<?php

return [
    'welcome' => [
        'subject' => 'Willkommen',
        'greeting' => 'Willkommen!',
        'message' => 'Vielen Dank dass Sie sich für :name entschieden haben.

Kontaktieren Sie uns, wenn Sie Hilfe benötigen.',
        'closing' => 'Mit freundlichen Grüßen, :name'
    ],

    'account' => [
        'email' => [
            'updated' => [
                'subject' => 'E-Mail-Adresse aktualisiert',
                'greeting' => 'E-Mail-Adresse aktualisiert!',
                'message' => "Wir melden uns bei Ihnen, um Ihnen mitzuteilen, dass Ihre E-Mail-Adresse sich geändert hat.",
                'closing' => 'Mit freundlichen Grüßen, :name'
            ]
        ],

        'password' => [
            'updated' => [
                'subject' => 'Passwort aktualisiert',
                'greeting' => 'Passwort aktualisiert!',
                'message' => "Wir melden uns bei Ihnen, um Ihnen mitzuteilen, dass Ihr Passwort sich geändert hat.",
                'closing' => 'Mit freundlichen Grüßen, :name'
            ]
        ],

        'two_factor_authentication' => [
            'enabled' => [
                'subject' => 'Zwei-Faktor-Authentifizierung aktiviert',
                'greeting' => 'Zwei-Faktor-Authentifizierung aktiviert!',
                'message' => "Wir melden uns bei Ihnen, um Ihnen mitzuteilen, dass die Zwei-Faktor-Authentifizierung aktiviert wurde.",
                'closing' => 'Mit freundlichen Grüßen, :name'
            ],
            'disabled' => [
                'subject' => 'Zwei-Faktor-Authentifizierung deaktiviert',
                'greeting' => 'Zwei-Faktor-Authentifizierung deaktiviert!',
                'message' => "Wir melden uns bei Ihnen, um Ihnen mitzuteilen, dass die Zwei-Faktor-Authentifizierung deaktiviert wurde.",
                'closing' => 'Mit freundlichen Grüßen, :name'
            ]
        ]
    ],

    'auth' => [
        'activate' => [
            'subject' => 'Bestätigen Sie Ihre E-Mail-Adresse',
            'greeting' => 'Bestätigen Sie Ihre E-Mail-Adresse!',
            'message' => "Bitte bestätigen Sie Ihre E-Mail-Adresse, um Zugriff weitere :name Funktionen zu erhalten.",
            'closing' => 'Mit freundlichen Grüßen, :name',
            'cta' => 'E-Mail-Adresse bestätigen'
        ]
    ],

    'responses' => [
        'received' => [
            'subject' => 'Neue Antwort erhalten',
            'greeting' => 'Neue Antwort erhalten!',
            'message' => 'Sie haben gerade eine neue Antwort in Ihrem ":form" Formular erhalten.',
            'closing' => 'Mit freundlichen Grüßen, :name',
            'cta' => 'Alle Antworten anzeigen'
        ],
        'summary' => [
            'subject' => 'Neue Antworten erhalten',
            'greeting' => 'Neue Antworten erhalten!',
            'message' => "Das haben Sie verpasst:",
            'closing' => 'Mit freundlichen Grüßen, :name',
            'cta' => ':name anzeigen',
            'notifications' => 'Benachrichtigungen',
            'view_response' => 'Antwort anzeigen'
        ]
    ],

    'subscription' => [
        'thank_you' => [
            'subject' => 'Vielen Dank für Ihr Abonnement',
            'greeting' => 'Vielen Dank!',
            'message' => 'Vielen Dank für Ihr Abonnement.

Wir hoffen, Sie sind so glücklich wie wir. ',
            'closing' => 'Mit freundlichen Grüßen, :name'
        ]
    ],

    'layout' => [
        'copyright' => 'Alle Rechte vorbehalten.',
        'subcopy' => "Wenn Sie Probleme beim Klicken des \":actionText\" Buttons haben, kopieren Sie die nachfolgende URL und fügen Sie die URL in die Adresszeile Ihres Browsers ein:"
    ]
];
