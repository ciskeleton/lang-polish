<?php

/**
 * System emails language lines.
 *
 * @package     CiSkeleton\Core
 * @subpackage  Language
 * @category    Core
 *
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     MIT
 * @link        https://opensource.org/license/mit
 *
 * SPDX-License-Identifier: MIT
 */

// ====================================================================
// SYSTEM NOTIFICATIONS
// ====================================================================

// ----------------------------------------------------------------
// Update Available
// ----------------------------------------------------------------

$lang['emails_updates_available_subject'] = 'Dostępne aktualizacje systemu';
$lang['emails_updates_available_message'] = <<<EOT
Witaj,

Wykryto nowe aktualizacje systemu dla {site_anchor}.

Aktualizacje te mogą obejmować poprawki bezpieczeństwa, usprawnienia wydajności lub nowe funkcje.
Zalecamy jak najszybsze ich sprawdzenie.

Dostępne aktualizacje można przejrzeć i zarządzać nimi z poziomu panelu administracyjnego:
{link}

Jeśli aktualizacje zostały już przejrzane lub zastosowane, nie są wymagane żadne dalsze działania.

Jest to automatyczna wiadomość systemowa wysłana przez {site_name}.
Prosimy nie odpowiadać na tę wiadomość e-mail.

-- {site_name}
EOT;

// ====================================================================
// USER ACCOUNTS
// ====================================================================

// ----------------------------------------------------------------
// Account Activation Request
// ----------------------------------------------------------------

$lang['emails_account_activation_request_subject'] = 'Aktywacja konta';
$lang['emails_account_activation_request_message'] = <<<EOT
Witaj {name},

Dziękujemy za zarejestrowanie się na {site_anchor}. Twoje konto zostało utworzone i musi zostać aktywowane, zanim będzie można z niego korzystać.

Aby aktywować swoje konto, kliknij w poniższy link lub skopiuj go i wklej w przeglądarce:
{link}

Z wyrazami szacunku,
-- Zespół {site_name}.
EOT;

// ----------------------------------------------------------------
// Resend Account Activation Link
// ----------------------------------------------------------------

$lang['emails_account_activation_resend_subject'] = 'Nowy link aktywacyjny';
$lang['emails_account_activation_resend_message'] = <<<EOT
Witaj {name},

Niedawno poprosiłeś o nowy link aktywacyjny na {site_anchor}, ponieważ Twoje konto nie było aktywne.
Aby aktywować swoje konto, kliknij w poniższy link lub skopiuj go i wklej w przeglądarce:
{link}

Jeśli to nie Ty złożyłeś ten wniosek, nie musisz podejmować żadnych dalszych działań.

To działanie zostało zgłoszone z tego adresu IP: {ip_link}.

Z wyrazami szacunku,
-- Zespół {site_name}.
EOT;

// ----------------------------------------------------------------
// Account Activation Successful
// ----------------------------------------------------------------

$lang['emails_account_activation_success_subject'] = 'Konto aktywowane';
$lang['emails_account_activation_success_message'] = <<<EOT
Witaj {name},

Twoje konto na {site_anchor} zostało pomyślnie aktywowane. Teraz możesz <a href="{login_url}" target="_blank" rel="noopener">zalogować się</a> w dowolnym momencie.

Mamy nadzieję, że będziesz zadowolony z pobytu. Prosimy o przyjęcie naszych serdecznych pozdrowień.

-- Zespół {site_name}.
EOT;

// ----------------------------------------------------------------
// Pending Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_pending_subject'] = 'Konto oczekuje na zatwierdzenie';
$lang['emails_account_approval_pending_message'] = <<<EOT
Witaj {name},

Dziękujemy za dołączenie do nas na {site_anchor}. Twoje konto zostało utworzone, ale wymaga zatwierdzenia przez administratora strony, zanim stanie się aktywne.
Przepraszamy za ten istotny krok, ale jest on niezbędny ze względów bezpieczeństwa.

Otrzymasz wiadomość e-mail z potwierdzeniem, gdy Twoje konto zostanie zatwierdzone.

Mamy nadzieję, że będziesz zadowolony, prosimy o przyjęcie naszych pozdrowień.

-- Zespół {site_name}.
EOT;

// ----------------------------------------------------------------
// Successful Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_success_subject'] = 'Konto zatwierdzone';
$lang['emails_account_approval_success_message'] = <<<EOT
Cześć {name},

Świetna wiadomość! Twoje konto w {site_anchor} zostało właśnie zatwierdzone.

Możesz teraz się zalogować i od razu korzystać ze swojego konta:
{link}

Cieszymy się, że jesteś z nami.

-- Zespół {site_name}.
EOT;

// ----------------------------------------------------------------
// Account Restoration
// ----------------------------------------------------------------

$lang['emails_account_restored_subject'] = 'Konto przywrócone';
$lang['emails_account_restored_message'] = <<<EOT
Witaj {name},

Ta wiadomość potwierdza, że Twoje konto na {site_anchor} zostało pomyślnie przywrócone.

Witamy ponownie i mamy nadzieję, że tym razem będziesz zadowolony z pobytu.

Z wyrazami szacunku,
-- Zespół {site_name}.
EOT;

// ----------------------------------------------------------------
// Welcome Message
// ----------------------------------------------------------------

$lang['emails_account_welcome_subject'] = 'Witamy w {site_name}';
$lang['emails_account_welcome_message'] = <<<EOT
Witaj {name},

Większość stron internetowych wysyła długie sekwencje powitalnych e-maili po rejestracji.

Dobra wiadomość: my nie jesteśmy jak większość.
Chcemy jednak Cię powitać i podziękować za dołączenie do {site_anchor}.

Mamy nadzieję, że pobyt będzie przyjemny. Przyjmij nasze serdeczne pozdrowienia.

-- Zespół {site_name}.
EOT;

// ----------------------------------------------------------------
// Email Change Request
// ----------------------------------------------------------------

$lang['emails_email_change_request_subject'] = 'Prośba o zmianę adresu e-mail';
$lang['emails_email_change_request_message'] = <<<EOT
Witaj {name},

Otrzymujesz tę wiadomość, ponieważ otrzymaliśmy prośbę o zmianę adresu e-mail dla Twojego konta na {site_anchor}.

Aby kontynuować, kliknij poniższy link lub skopiuj go i wklej do przeglądarki:
{link}

Jeśli nie zgłaszałeś prośby o zmianę adresu e-mail, nie musisz podejmować żadnych dalszych działań.

Żądanie zostało zgłoszone z tego adresu IP: {ip_link}.

Pozdrawiamy,
-- Zespół {site_name}.
EOT;

// ----------------------------------------------------------------
// Successful Email Change
// ----------------------------------------------------------------

$lang['emails_email_change_success_subject'] = 'Adres e-mail zmieniony';
$lang['emails_email_change_success_message'] = <<<EOT
Witaj {name},

Ten e-mail potwierdza, że Twój adres e-mail używany na {site_anchor} został pomyślnie zmieniony.

Jeśli to nie Ty wykonałeś tę czynność, skontaktuj się z nami jak najszybciej, aby rozwiązać problem.

Ta czynność została wykonana z tego adresu IP: {ip_link}.

Pozdrawiamy,
-- Zespół {site_name}.
EOT;

// ----------------------------------------------------------------
// Login Alert: Failure
// ----------------------------------------------------------------

$lang['emails_login_alert_failure_subject'] = 'Alert o nieudanym logowaniu';
$lang['emails_login_alert_failure_message'] = <<<EOT
Cześć {name},

Ktoś ostatnio próbował zalogować się do Twojego konta {site_name}, używając nieprawidłowych haseł.

Data serwera: {date}
Urządzenie: {browser}, {platform}
Adres IP: {ip_link}

Jeśli to nie byłeś Ty, nie martw się, próba logowania nie powiodła się.

Jeśli to byłeś Ty i nie pamiętasz swojego hasła, kliknij poniższy link, aby je zresetować:
{reset_link}

Jeśli masz trudności z zalogowaniem się do swojego konta, skontaktuj się z naszym zespołem lub poproś o link do logowania jednym kliknięciem.

-- Zespół {site_name}.
EOT;

// ----------------------------------------------------------------
// Login Alert: Success
// ----------------------------------------------------------------

$lang['emails_login_alert_success_subject'] = 'Powiadomienie o udanym logowaniu';
$lang['emails_login_alert_success_message'] = <<<EOT
Witaj {name},

Wyślemy Ci tę wiadomość e-mail po pomyślnym zalogowaniu się na Twoje konto {site_name}.

Data serwera: {date}
Urządzenie: {browser}, {platform}
Adres IP: {ip_link}

Jeśli to Ty się zalogowałeś, możesz zignorować tę wiadomość.

Jeśli to nie Ty, natychmiast zmień hasło, aby zabezpieczyć swoje konto.

W razie potrzeby skontaktuj się z naszym zespołem wsparcia.

-- Zespół {site_name}
EOT;

// ----------------------------------------------------------------
// One-Click Login Link
// ----------------------------------------------------------------

$lang['emails_login_magic_link_subject'] = 'Szybki link do logowania';
$lang['emails_login_magic_link_message'] = <<<EOT
Witaj {name},

Poprosiłeś o logowanie jednym kliknięciem do swojego konta na {site_anchor}.

Kliknij poniższy link lub skopiuj go i wklej do przeglądarki, aby zalogować się natychmiast:
{link}

Ten link wygaśnie za 15 minut. Jeśli to nie Ty go zamówiłeś, zignoruj tę wiadomość.

Prośba została zgłoszona z tego adresu IP: {ip_link}.

Z wyrazami szacunku,
-- Zespół {site_name}.
EOT;

// ----------------------------------------------------------------
// Login: Two-Factor Authentication Code
// ----------------------------------------------------------------

$lang['emails_login_two_factor_code_subject'] = 'Uwierzytelnianie dwuskładnikowe';
$lang['emails_login_two_factor_code_message'] = <<<EOT
Witaj {name},

Twój kod uwierzytelniania dwuskładnikowego to: <strong>{code}</strong>

Zawsze możesz wyłączyć uwierzytelnianie dwuskładnikowe w ustawieniach swojego konta.

Działanie zostało wykonane z tego adresu IP: {ip_link}.

Z wyrazami szacunku,
-- Zespół {site_name}.
EOT;

// ----------------------------------------------------------------
// Password Change Request
// ----------------------------------------------------------------

$lang['emails_password_change_request_subject'] = 'Prośba o reset hasła';
$lang['emails_password_change_request_message'] = <<<EOT
Witaj {name},

Otrzymujesz tę wiadomość, ponieważ otrzymaliśmy prośbę o zresetowanie hasła do Twojego konta na {site_anchor}.

Kliknij w poniższy link lub skopiuj go i wklej w przeglądarce, jeśli chcesz kontynuować:
{link}

Jeśli nie zgłaszałeś prośby o zresetowanie hasła, nie musisz podejmować żadnych działań.

Prośba została zgłoszona z tego adresu IP: {ip_link}.

Z wyrazami szacunku,
-- Zespół {site_name}.
EOT;

// ----------------------------------------------------------------
// Password Change Successful
// ----------------------------------------------------------------

$lang['emails_password_change_success_subject'] = 'Hasło zmienione pomyślnie';
$lang['emails_password_change_success_message'] = <<<EOT
Witaj {name},

Ta wiadomość e-mail potwierdza, że Twoje hasło na {site_anchor} zostało pomyślnie zmienione. Możesz teraz <a href="{login_url}" target="_blank" rel="noopener">zalogować się</a> używając nowego hasła.

Jeśli to nie Ty dokonałeś tej zmiany, skontaktuj się z nami jak najszybciej, aby rozwiązać problem.

Działanie zostało wykonane z tego adresu IP: {ip_link}.

Z wyrazami szacunku,
-- Zespół {site_name}.
EOT;
