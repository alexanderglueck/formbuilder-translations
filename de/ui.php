<?php

return [
    /*
     * Hamburger Menu
     */
    'toggle_navigation' => 'Menü umschalten',

    /*
     * Trial & Grace Period
     */
    'trial_ends_in' => 'Demo endet in :days',
    'grace_period_ends_in' => 'Abo endet in :days',

    'pages' => [
        'welcome' => [
            'title' => 'Willkommen',
            'description' => 'FormBuilder ist der einfachste Weg, um schnell Formulardaten von Ihren Nutzern zu erheben.',
            'fields' => [
                'welcome' => 'Willkommen bei :name'
            ]
        ],

        'features' => [
            'title' => 'Funktionen',
            'description' => 'Übersicht über die wichtigsten Funktionen die von FormBuilder bereitgestellt werden. ',
            'fields' => [
                'content' => "<strong>Sammeln Sie Formulardaten</strong><br>
                        Erstellen Sie ein Formular, in dem Sie Eingabefelder über den einfachen Formular-Builder einfügen. <br>
                        Jedes Eingabefeld erhält eine eindeutige Identifikation. <br>
                        <br>
                        :name bietet Ihnen mehrere Arten Ihre Formulare zu übermitteln.<br>
                        <br>
                        1. Betten Sie Ihr Formular über den Einbettcode auf Ihrer Webseite ein. Ersetzten Sie \"YOUR-DIV\" mit der ID
                        Ihres Wunsch-Divs und Sie sind fertig.<br>
                        <br>
                        2. Etwas komplizierter, dafür leichter anpassbar. Erstellen Sie Ihr eigenes HTML Formular und verwenden Sie
                        den Formularendpunkt und die eindeutige Kennzeichnung der Formularfelder, um Daten direkt aus Ihrem HTML Formular an FormBuilder zu senden.
                        Vergessen Sie nicht darauf, das Sicherheitsfeld einzubauen.<br>
                        <br>
                        3. Für fortgeschrittene Benutzer. Schreiben Sie Ihr eigenes HTML Formular und nutzen Sie FormBuilder als Endpunkt für Ihr AJAX-Formular.<br>
                        <br>
                        Jetzt wo Sie wissen, wie Sie Daten an Ihre Formulare übermitteln können, schauen wir uns an, wie
                        Sie Ihre Daten weiter verarbeiten können.<br>
                        <br>
                        <strong>Integrationen</strong><br>
                        :name verfügt über mehrere Integrationen. <br>
                        Um Integrationen zu aktivieren, müssen Sie nur eine kurze Ersteinrichtung vornehmen.
                        Integrationen können bei einer Formulardetailseite über \"Integrationen verwalten\" aktiviert/deaktiviert werden.<br>
                        <br>
                        Verwenden Sie unsere Trelle Integraiton um automatisch Karten für jede empfangene Antwort zu erstellen. Oder fügen Sie einen weiteren Zeile in ein Google Sheet Dokument ein, durch die Google Sheet Integration.<br>
                        <br>
                        <strong>API</strong><br>
                        :name verfügt über eine API. <br>
                        Mit dem Antworten-Endpunkt können Sie alle Antworten für ein Formular abfragen. Mit der API wäre
                        es sogar möglich, Ihren eigenen Kommentarbereich zu entwickeln. Zeigen Sie bestehende Formulardaten
                        als Kommentare an, und sammeln Sie neue Kommentare über ein Kommentar-Formular. <br>
                        <br>
                        Holen Sie eine Liste aller Ihrer Formulare oder sehen Sie sich Detailinformationen zu einem spezifische
                        Formular an. <br>
                        <br>
                        Die API ist nicht nur dazu da, um Daten zu lesen. Sie können über die API auch Formulare anlegen
                        und aktualisieren. Einfach per HTTP Anfrage von Ihrem Server aus. So könnten Sie zum Beispiel
                        für jeden neuen Blogbeitrag ein neues Formular erstellen.<br>
                        <br>
                        Ihr Nutzer verfügt über einen Admin-API-Schlüssel. Mit diesem API-Schlüssel können Sie jede
                        unserer API Endpunkte verwenden. Zusätzlich bietet :name Pro-Formular API-Schlüssel an.
                        Diese können nur das dazugehörige Formular aktualisieren und Daten dieses Formulars abfragen.
                        Perfekt wenn Sie einer Agentur Zugang zu einem Formular gewähren wollen, ohne den Admin API-Schlüssel
                        aus der Hand geben zu müssen. "
            ]
        ],

        'faq' => [
            'title' => 'Häufig gestellte Fragen (FAQ)',
            'title_short' => 'FAQ',
            'description' => 'Im FormBuilder FAQ finden Sie Antworten auf häufig gestellte Fragen.',
            'fields' => [
                'content' => 'Ihre Frage ist nicht angeführt? <a href=":contact" title="FormBuilder kontaktieren">Kontaktieren Sie uns!</a>'
            ]
        ],

        'documentation' => [
            'title' => 'Dokumentation',
        ],

        'about' => [
            'title' => 'Über FormBuilder',
            'description' => 'FormBuilder wurde 2020 gegründet. FormBuilder ist die perfekte Lösung um schnell und einfach die Gedanken Ihrer Nutzer zu erfassen.',
            'fields' => [
                'title' => 'Über :name',
                'content' => ':name wurde 2020 gegründet und zielt darauf ab, Ihnen die Werkzeuge zu geben, um schnell und einfach die Gedanken Ihrer Nutzer erfassen zu können.'
            ]
        ],

        'contact' => [
            'title' => 'Kontakt',
            'description' => 'Sie haben Fragen? Nehmen Sie mit uns Kontakt auf! Das FormBuilder Team hilft Ihnen gerne.',
            'fields' => [
                'content' => 'Nutzen Sie das nachfolgende Formular, um mit uns in Kontakt zu treten.'
            ]
        ],

        'example' => [
            'title' => 'Beispiele',
            'description' => "Beispiele was mit den Formularen von FormBuilder alles möglich ist.",
            'fields' => [
                'example' => 'Beispiel',
                'use_as_template' => 'Als Template verwenden'
            ]
        ],

        'cookies' => [
            'title' => 'Cookie-Hinweis',
            'description' => "Mögen Sie Cookies? Wir auch. Informieren Sie sich, wie FormBuilder Cookies verwendet.",
            'fields' => [
                'content' => ':name verwendet Cookies um Ihnen Funktionalitäten anzubieten.<br>
                        Diese inkludieren, sind aber nicht limitiert auf, die Anmeldefunktion und Schutz vor Spam.<br>
                        <br>
                        <dl class="row">
                            <dt class="col-sm-4">form_builder_session</dt>
                            <dd class="col-sm-8">Dies ist Ihr Session Cookie. Damit wird ihr Login-Status ermittelt.</dd>
                            <dt class="col-sm-4">visitor</dt>
    <dd class="col-sm-8">Dieses Cookie identifiziert Ihren Browser und hilft damit bei der Vermeidung von Spam.</dd>
                            <dt class="col-sm-4">XSRF-TOKEN</dt>
                            <dd class="col-sm-8">Dieses Cookie hindert andere Webseiten daran, in Ihrem Namen Änderungen durchzuführen.</dd>
                        </dl>',
            ]
        ],

        'gdpr' => [
            'title' => 'DSGVO',
            'description' => "FormBuilder hält sich an die Datenschutzgrundverordnung. Hier finden Sie weitere Informationen über die DSGVO.",
            'fields' => [
                'content' => ':name ist ein europäisches Unternehmen und ist an die Datenschutzgrundverordnung gebunden.<br>
                        Ihre Daten werden sicher innerhalb der EU auf Servern in Deutschland gespeichert.',
            ]
        ],

        'privacy_policy' => [
            'title' => 'Datenschutzbedingungen',
            'description' => "FormBuilder legt besonderen Wert auf Datenschutz. Hier erfahren Sie mehr darüber, wie FormBuilder Ihre Daten schützt..",
            'fields' => [
                'content' => '<strong>:name teilt Ihre Daten nicht mit Dritten. </strong><br>
                        <br>
                        :name verpflichtet sich, Ihre Daten sicher zu halten. <br>
                        Informationen werden nur dann an Dritte weitergegeben, wenn Sie die dazugehörigen Integrationen aktivieren. Die übermittelten Informationen
                        beschränken sich auf die als Antwort erhaltenen Daten. Daten werden nur so lange übermittelt, bis die Integration deaktiviert wird. <br>
                        Ihre persönlichen Daten werden nie an Dritte weitergegeben.<br>
                        <br>
                        <strong>Stripe</strong><br>
                        :name verwendet Stripe als Zahlungsdienstleister. <br>
                        Mit dem Abschluss eines Abonnements werden Ihre persönlichen Daten an <a href="https://stripe.com" target="_blank">Stripe <i class="fas fa-external-link-alt"></i></a>
                        übertragen. Bei den übermittelten Daten handelt es sich um: Vorname, Nachname und E-Mail-Adresse.',
            ]
        ],

        'terms_of_service' => [
            'title' => 'ABG',
            'description' => "Die allgemeinen Geschäftsbedingungen von FormBuilder.",
            'fields' => [
                'content' => 'Mit der Nutzung von :name akzeptieren Sie die allgemeinen Geschäftsbedingungen, <a
                            href=":privacy_policy">die Datenschutzbedingungen</a> und <a href=":cookies">den Cookie-Hinweis</a>.<br>
                        <br>
                        :name übernimmt keine Haftung für eventuelle Schäden, die durch die Nutzung dieser Dienstleistung auftreten könnten.<br>
                        <br>
                        Um :name benutzen zu dürfen, muss man älter als 13 Jahre alt sein. <br>
                        Sie dürfen diese Dienstleistung nicht für illegale Zwecke verwenden.<br>

                        :name nimmt sich das Recht, Ihr Konto jederzeit und ohne Warnung schließen zu dürfen.<br>',
            ]
        ],

        'pricing' => [
            'title' => 'Kosten',
            'description' => 'Übersicht über die verfügbaren FormBuilder Pakete. ',
            'actions' => [
                'select' => 'Auswählen',
            ],
            'plans' => [
                'basic' => [
                    'title' => 'Basic',
                    'description' => 'Das Basispaket ist perfekt für Entwickler, die FormBuilder selbst ausprobieren möchten.',
                ],
                'pro' => [
                    'title' => 'Pro',
                    'description' => 'Das Pro-Paket ist perfekt für Agenturen, die Formulare Ihrer Kunden verwalten möchten.',
                ],
                'enterprise' => [
                    'title' => 'Enterprise',
                    'description' => 'Das Enterprise-Paket ist die perfekte Lösung für Unternehmen, die viele Formulare verwalten möchten.',
                ],
            ],
            'fields' => [
                'month' => 'Monat'
            ]
        ],

        'login' => [
            'title' => 'Anmelden',
            'description' => "Melden Sie sich bei FormBuilder an, um Zugriff auf Ihre Formulare und Antworten zu erhalten.",
            'fields' => [
                'email' => 'E-Mail-Adresse',
                'password' => 'Passwort',
                'remember_me' => 'Angemeldet bleiben',
                'forgot_your_password' => 'Passwort vergessen?'
            ],
            'actions' => [
                'login' => 'Anmelden'
            ]
        ],

        'register' => [
            'title' => 'Registrieren',
            'description' => "Registrieren Sie sich bei FormBuilder, um sofort Ihre eigenen Formulare anzulegen.",
            'fields' => [
                'name' => 'Vor- und Nachname',
                'email' => 'E-Mail-Adresse',
                'password' => 'Passwort',
                'confirm_password' => 'Passwort bestätigen',
                'accept_terms' => 'Ich habe die
                                        <a href=":terms_of_service" target="_blank">AGB</a>,
                                        <a href=":privacy_policy" target="_blank">Datenschutzbedingungen</a>
                                        und den
                                        <a href=":cookies" target="_blank">Cookie-Hinweis</a> gelesen und akzeptiere diese.',
            ],
            'actions' => [
                'register' => 'Registrieren'
            ]
        ],

        'verify' => [
            'title' => 'E-Mail-Adresse bestätigen',
            'description' => "Bestätigen Sie Ihre E-Mail-Adresse um FormBuilder zu nutzen.",
            'fields' => [
                'content' => 'Bestätigen Sie Ihre E-Mail-Adresse um fortzufahren. <br>
                                Wenn Sie keine E-Mail zur Kontobestätigung erhalten haben, ',
            ],
            'flash' => [
                'resent' => 'Ein neuer Bestätigungslink wurde an Ihre E-Mail-Adresse gesendet.'
            ],
            'actions' => [
                'request_another' => 'klicken Sie hier, um eine weitere E-Mail anzufordern.'
            ]
        ],

        'email' => [
            'title' => 'Passwort zurücksetzen',
            'description' => "Setzen Sie Ihr Passwort zurück, um Zugriff auf Ihr Konto zu erhalten.",
            'fields' => [
                'email' => 'E-Mail-Adresse',
            ],
            'actions' => [
                'send_link' => 'Passwort zurücksetzen'
            ]
        ],

        'reset' => [
            'title' => 'Passwort zurücksetzen',
            'description' => "Setzen Sie Ihr Passwort zurück, um Zugang zu Ihrem FormBuilder Konto zu erhalten.",
            'fields' => [
                'email' => 'E-Mail-Adresse',
                'password' => 'Passwort',
                'confirm_password' => 'Passwort bestätigen',
            ],
            'actions' => [
                'reset_password' => 'Passwort zurücksetzen'
            ]
        ],

        'two_factor' => [
            'title' => 'Zwei-Faktor-Authentifizierung',
            'description' => "Geben Sie Ihren Zwei-Faktor-Authentifizierungscode ein, um sich anzumelden.",
            'fields' => [
                'content' => 'Um die Anmeldung abzuschließen, öffnen Sie Ihre Authentifizierungsanwendung und geben Sie den 6-stelligen Code ein.',
                'token' => 'Zwei-Faktor-Authentifizierungscode',
                'remember_browser' => 'Diesen Browser speichern',
            ],
            'errors' => [
                'invalid_or_expired' => 'Der Code ist ungültig oder abgelaufen.'
            ],
            'actions' => [
                'login' => 'Anmelden'
            ]
        ],

        'confirm' => [
            'title' => 'Passwort bestätigen',
            'description' => "Bestätigen Sie Ihr Passwort, um fortzufahren.",
            'fields' => [
                'content' => 'Um die Anmeldung abzuschließen, öffnen Sie Ihre Authentifizierungsanwendung und geben Sie den 6-stelligen Code ein.',
                'password' => 'Passwort',
                'forgot_your_password' => 'Passwort vergessen?'
            ],
            'actions' => [
                'confirm_password' => 'Passwort bestätigen'
            ]
        ],
    ],

    'app' => [
        'sessions' => [
            'title' => 'Sitzungen',
            'fields' => [
                'user_agent' => 'User-Agent',
                'ip' => 'IP-Adresse',
                'last_active' => 'Zuletzt aktiv',
                'current_session' => 'Ihre derzeitige Sitzung',
            ],
            'actions' => [
                'logout' => 'Abmelden',
                'logout_everywhere' => 'Überall abmelden',
            ]
        ],

        'logs' => [
            'title' => 'Protokoll',
            'fields' => [
                'no_logs_available' => 'Keine Protokolleinträge verfügbar.'
            ]
        ],

        'integrations' => [
            'title' => 'Integrationen',
            'fields' => [
                'connected' => 'Verbunden',
                'enabled' => 'Aktiviert',
                'setup_required' => 'Einrichtung erforderlich',
                'integration_setup' => 'Diese Integration ist eingerichtet. <br>
                                Sie können diese Integration jetzt bei Ihren Formularen verwenden.'
            ],
            'actions' => [
                'request_permissions' => ':service Integration einrichten',
                'disable_integration' => 'Integration deaktivieren'
            ],
        ],

        'settings' => [
            'title' => 'Einstellungen',

            'profile' => [
                'title' => 'Profil',
                'fields' => [
                    'name' => 'Name',
                    'email' => 'E-Mail-Adresse',
                ],
                'actions' => [
                    'update' => 'Profil aktualisieren',
                    'resend_verification' => 'E-Mail-Bestätigung erneut senden'
                ]
            ],

            'password' => [
                'title' => 'Passwort',
                'fields' => [
                    'current_password' => 'Derzeitiges Passwort',
                    'new_password' => 'Neues Passwort',
                    'confirm_password' => 'Neues Passwort bestätigen',
                ],
                'actions' => [
                    'update' => 'Passwort aktualisieren'
                ]
            ],

            'two_factor_authentication' => [
                'title' => 'Zwei-Faktor-Authentifizierung',
                'fields' => [
                    'token' => 'Code',
                    'backup_tokens' => 'Backupcodes',
                    'devices' => 'Geräte',
                    'current_browser' => 'Dieser Browser'
                ],
                'actions' => [
                    'disable' => 'Zwei-Faktor-Authentifizierung deaktivieren',
                    'enable' => 'Zwei-Faktor-Authentifizierung aktivieren',
                    'remove_all' => 'Alle gespeicherten Geräte entfernen',
                    'remove' => 'Entfernen'
                ]
            ],

            'api_token' => [
                'title' => 'API-Schlüssel',
                'fields' => [
                    'token' => 'API-Schlüssel',
                ],
                'actions' => [
                    'copy' => 'Kopieren',
                    'generate_api_key' => 'Neuen API-Schlüssel generieren'
                ]
            ],

            'delete' => [
                'title' => 'Konto löschen',
                'fields' => [
                    'current_password' => 'Derzeitiges Passwort',
                    'warning' => 'Diese Aktion beendet Ihr Abonnement.'
                ],
                'actions' => [
                    'delete' => 'Konto löschen'
                ]
            ],

            'invoices' => [
                'title' => 'Rechnungen',
                'fields' => [
                    'date' => 'Datum',
                    'amount' => 'Summe',
                    'download' => 'Herunterladen',
                ]
            ],

            'card' => [
                'title' => 'Karte aktualisieren',
                'fields' => [
                    'content' => 'Diese Kreditkarte wird für zukünftige Zahlungen herangezogen.',
                    'holder_name' => 'Name des Kartenbesitzers',
                    'card_info' => 'Karteninformationen',
                ],
                'actions' => [
                    'update_card' => 'Karte aktualisieren'
                ]
            ],

            'resume' => [
                'title' => 'Abonnement fortsetzen',
                'fields' => [
                    'content' => 'Drücken Sie den Button, um das Abonnement fortzusetzen.'
                ],
                'actions' => [
                    'resume' => 'Abonnement fortsetzen'
                ]
            ],

            'cancel' => [
                'title' => 'Abonnement kündigen',
                'fields' => [
                    'content' => 'Drücken Sie den Button, um das Abonnement zu kündigen.'
                ],
                'actions' => [
                    'cancel' => 'Abonnement kündigen'
                ]
            ],

            'swap' => [
                'title' => 'Abonnement ändern',
                'fields' => [
                    'content' => 'Abonnement ändern.',
                    'current_plan' => 'Aktives Abonnement: <strong>:plan</strong> (€ :price / Monat)',
                    'new_plan' => 'Neues Abonnement',
                    'per_month' => ' / Monat',
                ],
                'actions' => [
                    'swap' => 'Abonnement ändern'
                ]
            ]
        ],

        'subscription' => [
            'title' => 'Abonnement',
            'fields' => [
                'card_info' => 'Karteninformationen',
                'plan' => 'Abo',
                'coupon' => 'Gutscheincode',
                'card_holder_name' => 'Name des Kartenbesitzers'
            ],
            'actions' => [
                'subscribe' => 'Abonnieren'
            ]
        ],

        'dashboard' => [
            'title' => 'Dashboard',
            'fields' => [
                'no_forms' => 'Es sind noch keine Formulare vorhanden.'
            ],
            'actions' => [
                'new_form' => 'Neues Formular',
                'copy_embed_code' => 'Einbettcode kopieren',
                'edit' => 'Bearbeiten',
                'duplicate' => 'Duplizieren',
                'delete' => 'Löschen'
            ]
        ],

        'error' => [
            'title' => 'Ein Fehler ist aufgetreten!',
            'fields' => [
                'powered_by' => 'Bereitgestellt von <a href=":welcome" target="_blank">:name</a>'
            ],
            'actions' => [
                'return_to_form' => 'Zurück zum Formular'
            ]
        ],

        'form_api_token' => [
            'title' => 'API-Schlüssel',
            'fields' => [
                'no_api_tokens' => 'Es sind noch keine API-Schlüssel vorhanden.',
                'api_token' => 'API-Schlüssel',
                'name' => 'Name',
                'created' => 'wurde erstellt'
            ],
            'actions' => [
                'reveal' => 'API-Schlüssel anzeigen',
                'edit' => 'Bearbeiten',
                'delete' => 'Löschen',
                'copy' => 'Kopieren'
            ],

            'create' => [
                'title' => 'API-Schlüssel erstellen',
                'actions' => [
                    'create' => 'Erstellen',
                ]
            ],

            'edit' => [
                'title' => 'API-Schlüssel: :name',
                'actions' => [
                    'update' => 'Aktualisieren',
                ]
            ]
        ],

        'form_page' => [
            'title' => 'Formular Webseite',
            'fields' => [
                'custom_url' => 'Benutzerdefinierte URL',
                'title' => 'Titel',
                'content' => 'Inhalt',
                'outlink' => 'Ausgehender-Link',
                'outlink_name' => 'Ausgehender-Link-Name',

                'visit' => ':outlink ansehen',
                'powered_by' => 'Bereitgestellt von <a href=":welcome" target="_blank">:name</a>'
            ],
            'actions' => [
                'view_using_slug' => 'Über benutzerdefinierte URL ansehen',
                'view' => 'Ansehen',
                'download_qr_slug' => 'QR-Code herunterladen (benutzerdefinierte URL)',
                'download_qr' => 'QR-Code herunterladen',
            ],

            'edit' => [
                'title' => 'Formular Webseite bearbeiten: :name',
                'actions' => [
                    'update' => 'Webseite aktualisieren'
                ]
            ]
        ],

        'form' => [
            'title' => 'Formular: :name',

            'fields' => [
                'name' => 'Name',
                'redirect_to' => 'Weiterleiten nach',
                'notification_recipient' => 'Benachrichtigungsempfänger',
                'honeypot_field_name' => 'Name des Sicherheitsfeldes',
                'allow_multiple_responses' => 'Mehrfachantworten zulassen',
                'data_retention' => 'Dauer der Datenaufbewahrung',
                'recaptcha_site_key' => 'Google reCAPTCHA öffentlicher Schlüssel',
                'recaptcha_secret_key' => 'Google reCAPTCHA geheimer Schlüssel',
                'recaptcha_location' => 'Fordern Sie Ihre Zugangsdaten bei <a href="https://www.google.com/recaptcha/admin/" target="_blank" title="Open Google reCAPTCHA in a new tab">Google reCAPTCHA</a> an.',
                'use_provided_page' => 'Zur Verfügung gestellte Formular-Webseite nutzen',

                'indefinitely' => 'Unbegrenzt',
                '1_week' => '1 Woche',
                '2_weeks' => '2 Wochen',
                '3_weeks' => '3 Wochen',
                '4_weeks' => '4 Wochen',
                '90_days' => '90 Tage',
                '1_year' => '1 Jahr',

                'allowed_domains' => 'Erlaubte Domains',
            ],

            'actions' => [
                'edit' => 'Bearbeiten',
                'duplicate' => 'Duplizieren',
                'delete' => 'Löschen',
            ],

            'embed_code' => [
                'title' => 'Einbettcode',
                'fields' => [
                    'embed_code' => 'Einbettcode'
                ],
                'actions' => [
                    'copy_embed_code' => 'Einbettcode kopieren',
                ]
            ],

            'integrations' => [
                'title' => 'Integrationen',
                'fields' => [
                    'content' => 'Vermissen Sie einige Integrationen?<br>
                                Manche Integrationen benötigen eine Ersteinrichtung bevor sie verwendet werden können.<br>
                                <a href=":integrations">Integrationen einrichten</a>'
                ],
                'actions' => [
                    'manage_integrations' => 'Integrationen verwalten'
                ]
            ],

            'api_tokens' => [
                'title' => 'API-Schlüssel',
                'actions' => [
                    'manage_api_tokens' => 'API-Schlüssel verwalten'
                ]
            ],

            'form_page' => [
                'title' => 'Formular-Webseite',
                'actions' => [
                    'manage_form_page' => 'Formular-Webseite verwalten',
                    'enable' => 'Aktivieren'
                ]
            ],

            'responses' => [
                'title' => 'Antworten',
                'spam_title' => 'Spam-Antworten',

                'fields' => [
                    'no_responses' => 'Noch keine Einträge vorhanden. Versuchen Sie es später eneut.',
                    'created_at' => 'Erstellt'
                ],

                'actions' => [
                    'mark_as_spam' => 'Als Spam markieren',
                    'not_spam' => 'Kein Spam',
                    'delete' => 'Löschen'
                ]
            ],

            'create' => [
                'title' => 'Formular erstellen',
                'actions' => [
                    'create' => 'Formular erstellen'
                ]
            ],

            'edit' => [
                'title' => 'Form bearbeiten: :name',
                'fields' => [
                    'cannot_be_modified' => 'Dieses Formular enthält bereits Antworten und kann daher nicht geändert werden. Formular stattdessen duplizieren?',
                    'not_all_recaptcha_fields' => 'Es wurden nicht alle Google reCAPTCHA Felder ausgefüllt. Es wird keine Validierung durchgeführt.'
                ],
                'actions' => [
                    'update' => 'Form aktualisieren',
                    'duplicate' => 'Duplizieren'
                ]
            ]
        ]
    ],

    'layouts' => [
        'marketing' => [
            'copyright' => '&copy; :year :name. Alle Rechte vorbehalten.',
            'footer' => [
                'company' => 'Unternehmen',
                'support' => 'Support',
                'account' => 'Konto',
                'legal' => 'Rechtliches',
            ]
        ],
        'app' => [
            'fields' => [
                'close' => 'Schließen',
            ],
            'flash' => [
                'copied_to_clipboard' => 'Kopiert!',
                'failed_validation_rules' => 'Die folgenden Fehler sind aufgetreten:'
            ],
            'alerts' => [
                'development_environment' => 'Testumgebung',
                'not_production_ready' => 'FormBuilder befindet sich noch in aktiver Entwicklung und ist noch nicht für produktiven Einsatz geeignet.'
            ],
            'actions' => [
                'new_form' => 'Neues Formular',
                'stop_impersonating' => 'Nachahmen beenden',
                'logout' => 'Abmelden',
            ],
        ]
    ]

];
