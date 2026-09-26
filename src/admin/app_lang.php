<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = 'Komponenty';
$lang['admin_content'] = 'Treść';
$lang['admin_database_backup'] = 'Kopie zapasowe bazy danych';
$lang['admin_extensions'] = 'Rozszerzenia';
$lang['admin_firewall'] = 'Zapora sieciowa';
$lang['admin_help'] = 'Pomoc';
$lang['admin_languages'] = 'Języki';
$lang['admin_logs'] = 'Dzienniki systemowe';
$lang['admin_media'] = 'Biblioteka mediów';
$lang['admin_modules'] = 'Moduły';
$lang['admin_plugins'] = 'Wtyczki';
$lang['admin_reports'] = 'Dziennik aktywności';
$lang['admin_settings'] = 'Ustawienia systemu';
$lang['admin_sysinfo'] = 'Informacje o systemie';
$lang['admin_system'] = 'System';
$lang['admin_system_firewall'] = 'Zapora systemowa';
$lang['admin_themes'] = 'Motywy';
$lang['admin_updates'] = 'Aktualizacje systemu';
$lang['admin_users'] = 'Użytkownicy';
$lang['admin_view_site'] = 'Zobacz stronę';
$lang['per_page'] = 'Na stronę';

// Generic Messages
$lang['admin_footer_thankyou'] = 'Dziękujemy za tworzenie z <a href="%s" target="_blank">%s</a>.';
$lang['admin_items_active_count'] = '=0{Brak aktywnych elementów.} other{<b>#</b> z <b>%s</b> elementów jest aktywnych.}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install_error_com'] = 'Instalacja nie powiodła się: %s';
$lang['admin_install_location_app'] = 'Tylko ta aplikacja';
$lang['admin_install_location_core'] = 'Wszystkie aplikacje';
$lang['admin_install_location_select'] = '&#151; Wybierz lokalizację &#151;';
$lang['admin_install_update_confirm'] = 'Czy na pewno chcesz zaktualizować ten pakiet?';
$lang['admin_install_update_error'] = 'Nie udało się zaktualizować pakietu.';
$lang['admin_install_update_skip_confirm'] = 'Czy na pewno chcesz pominąć tę aktualizację?';
$lang['admin_install_update_skip_error'] = 'Nie udało się pominąć tej aktualizacji.';
$lang['admin_install_update_skip_success'] = 'Aktualizacja została pomyślnie pominięta.';
$lang['admin_install_update_success'] = 'Pakiet został pomyślnie zaktualizowany.';
$lang['admin_install_upload_tip'] = 'Zainstaluj pakiet, przesyłając tutaj jego plik <b>.zip</b>.';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'Nie udało się wyczyścić starych plików kopii zapasowych.';
$lang['admin_database_backup_clean_success'] = 'Usunięto %d plików kopii zapasowych. Zwolniono %d miejsca na dysku.';
$lang['admin_database_backup_create'] = 'Utwórz kopię zapasową';
$lang['admin_database_backup_create_confirm'] = 'Czy na pewno chcesz teraz stworzyć kopię zapasową?';
$lang['admin_database_backup_create_error'] = 'Nie udało się utworzyć pliku kopii zapasowej. Upewnij się, że folder <b>%s</b> jest zapisywalny.';
$lang['admin_database_backup_create_success'] = 'Plik kopii zapasowej bazy danych <b>%s</b> został pomyślnie utworzony.';
$lang['admin_database_backup_delete_confirm'] = 'Czy na pewno chcesz usunąć te pliki kopii zapasowej?';
$lang['admin_database_backup_delete_error'] = 'Nie udało się usunąć wybranych plików kopii zapasowych.';
$lang['admin_database_backup_delete_success'] = 'Pliki kopii zapasowej zostały pomyślnie usunięte.';
$lang['admin_database_backup_download_error'] = 'Nie można pobrać wybranego pliku kopii zapasowej.';
$lang['admin_database_backup_download_success'] = 'Plik kopii zapasowej został pomyślnie pobrany.';
$lang['admin_database_backup_lock_confirm'] = 'Czy na pewno chcesz zablokować te pliki kopii zapasowej?';
$lang['admin_database_backup_lock_error'] = 'Nie udało się zablokować wybranych plików kopii zapasowych.';
$lang['admin_database_backup_lock_success'] = 'Pliki kopii zapasowej zostały pomyślnie zablokowane.';
$lang['admin_database_backup_locked_error'] = 'Nie udało się usunąć zablokowanych plików kopii zapasowych.';
$lang['admin_database_backup_missing_error'] = 'Nie można znaleźć pliku kopii zapasowej.';
$lang['admin_database_backup_unlock_confirm'] = 'Czy na pewno chcesz odblokować te pliki kopii zapasowych?';
$lang['admin_database_backup_unlock_error'] = 'Nie można odblokować wybranych plików kopii zapasowej.';
$lang['admin_database_backup_unlock_success'] = 'Pliki kopii zapasowej zostały pomyślnie odblokowane.';
$lang['admin_database_prune'] = 'Przycinanie';
$lang['admin_database_prune_confirm'] = 'Czy na pewno chcesz wyczyścić bazę danych? Zostanie wykonana kopia zapasowa przed wykonaniem.';
$lang['admin_database_prune_error'] = 'Nie można przeprowadzić przerzedzania bazy danych.';
$lang['admin_database_prune_next'] = 'Następne usuwanie: <b>%s</b>';
$lang['admin_database_prune_success'] = 'Baza danych została pomyślnie oczyszczona.';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = 'Usuń logi';
$lang['admin_logs_delete_confirm'] = 'Czy na pewno chcesz usunąć wybrane pliki dziennika?';
$lang['admin_logs_delete_error'] = 'Nie można usunąć plików dziennika.';
$lang['admin_logs_delete_success'] = 'Pliki dziennika zostały pomyślnie usunięte.';
$lang['admin_logs_error_disabled'] = 'Logowanie jest obecnie wyłączone.';
$lang['admin_logs_error_empty'] = 'Brak znalezionych logów.';
$lang['admin_logs_error_missing'] = 'Nie można znaleźć pliku dziennika lub jest on pusty.';
$lang['admin_logs_tip'] = 'Logowanie może szybko tworzyć bardzo duże pliki. W przypadku stron na żywo, warto usunąć stare.';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = 'Czy na pewno chcesz usunąć wybrane wiadomości e-mail?';
$lang['admin_emails_delete_error'] = 'Nie udało się usunąć wybranych wiadomości.';
$lang['admin_emails_delete_success'] = 'Wybrane wiadomości e-mail zostały pomyślnie usunięte.';
$lang['admin_emails_email_from'] = 'Wysłano od';
$lang['admin_emails_mail_queue'] = 'Kolejka e-maili';
$lang['admin_emails_mailer'] = 'Masowa wysyłka';
$lang['admin_emails_search'] = 'Szukaj e-maile według tematu lub treści...';
$lang['admin_emails_send_error'] = 'Nie udało się dodać e-maila do kolejki. Spróbuj ponownie.';
$lang['admin_emails_send_none'] = 'Brak użytkowników spełniających wybrane kryteria.';
$lang['admin_emails_send_success'] = 'E-mail został dodany do kolejki i wkrótce zostanie wysłany.';
$lang['admin_emails_send_to_banned'] = 'Wyślij do zbanowanych użytkowników.';
$lang['admin_emails_send_to_deleted'] = 'Wyślij do usuniętych użytkowników.';
$lang['admin_emails_send_to_disabled'] = 'Wyślij do nieaktywnych użytkowników.';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'Dodaj użytkownika';
$lang['admin_users_all_users'] = 'Wszyscy użytkownicy';
$lang['admin_users_ban_confirm'] = 'Czy na pewno chcesz zbanować wybranych użytkowników?';
$lang['admin_users_ban_error'] = 'Nie można zbanować wybranych użytkowników.';
$lang['admin_users_ban_success'] = 'Wybrani użytkownicy zostali pomyślnie zbanowani.';
$lang['admin_users_delete_confirm'] = 'Czy na pewno chcesz usunąć wybranych użytkowników?';
$lang['admin_users_delete_error'] = 'Nie można usunąć wybranych użytkowników.';
$lang['admin_users_delete_success'] = 'Wybrani użytkownicy zostali pomyślnie usunięci.';
$lang['admin_users_disable_confirm'] = 'Czy na pewno chcesz wyłączyć wybranych użytkowników?';
$lang['admin_users_disable_error'] = 'Nie można wyłączyć wybranych użytkowników.';
$lang['admin_users_disable_success'] = 'Wybrani użytkownicy zostali pomyślnie wyłączeni.';
$lang['admin_users_edit'] = 'Edytuj użytkownika';
$lang['admin_users_edit_error'] = 'Nie można zaktualizować użytkownika.';
$lang['admin_users_edit_success'] = 'Użytkownik został pomyślnie zaktualizowany.';
$lang['admin_users_enable_confirm'] = 'Czy na pewno chcesz włączyć wybranych użytkowników?';
$lang['admin_users_enable_error'] = 'Nie można włączyć wybranych użytkowników.';
$lang['admin_users_enable_success'] = 'Wybrani użytkownicy zostali pomyślnie włączeni.';
$lang['admin_users_groups'] = 'Grupy';
$lang['admin_users_lock_confirm'] = 'Czy na pewno chcesz zablokować wybranych użytkowników?';
$lang['admin_users_lock_error'] = 'Nie udało się zablokować wybranych użytkowników.';
$lang['admin_users_lock_success'] = 'Wybrani użytkownicy zostali pomyślnie zablokowani.';
$lang['admin_users_logged'] = 'Zalogowani użytkownicy';
$lang['admin_users_manage'] = 'Zarządzaj użytkownikami';
$lang['admin_users_remove_confirm'] = 'Czy na pewno chcesz trwale usunąć wybranych użytkowników i wszystkie ich dane?';
$lang['admin_users_remove_error'] = 'Nie można trwale usunąć wybranych użytkowników i wszystkich ich danych.';
$lang['admin_users_remove_success'] = 'Wybrani użytkownicy i wszystkie ich dane zostały pomyślnie usunięte.';
$lang['admin_users_restore_confirm'] = 'Czy na pewno chcesz przywrócić wybranych użytkowników?';
$lang['admin_users_restore_error'] = 'Nie można przywrócić wybranych użytkowników.';
$lang['admin_users_restore_success'] = 'Wybrani użytkownicy zostali pomyślnie przywróceni.';
$lang['admin_users_search'] = 'Szukaj po imieniu lub e-mailu...';
$lang['admin_users_unban_confirm'] = 'Czy na pewno chcesz odbanować wybranych użytkowników?';
$lang['admin_users_unban_error'] = 'Nie można odbanować wybranych użytkowników.';
$lang['admin_users_unban_success'] = 'Wybrani użytkownicy zostali pomyślnie odbanowani.';
$lang['admin_users_unlock_confirm'] = 'Czy na pewno chcesz odblokować wybranych użytkowników?';
$lang['admin_users_unlock_error'] = 'Nie udało się odblokować wybranych użytkowników.';
$lang['admin_users_unlock_success'] = 'Wybrani użytkownicy zostali pomyślnie odblokowani.';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = 'Wyczyść dzienniki';
$lang['admin_reports_clear_confirm'] = 'Czy na pewno chcesz wyczyścić dziennik działań?';
$lang['admin_reports_clear_error'] = 'Nie udało się wyczyścić dziennika działań.';
$lang['admin_reports_clear_success'] = 'Dziennik działań został pomyślnie wyczyszczony.';
$lang['admin_reports_latest_actions'] = 'Najnowsze akcje';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = 'Czy na pewno chcesz usunąć wybrane pliki?';
$lang['admin_media_delete_error'] = 'Nie można usunąć plików.';
$lang['admin_media_delete_success'] = 'Pliki zostały pomyślnie usunięte.';
$lang['admin_media_file_delete_error'] = 'Nie można usunąć pliku.';
$lang['admin_media_file_delete_success'] = 'Plik został pomyślnie usunięty.';
$lang['admin_media_file_update_error'] = 'Nie można zaktualizować pliku.';
$lang['admin_media_file_update_success'] = 'Plik został pomyślnie zaktualizowany.';
$lang['admin_media_search'] = 'Szukaj według nazwy, opisu lub nazwy pliku...';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{Brak aktywnych modułów.} other{<b>#</b> z <b>%s</b> modułów jest aktywnych.}';
$lang['admin_modules_add'] = 'Dodaj moduł';
$lang['admin_modules_delete_confirm'] = 'Czy na pewno chcesz usunąć moduł: <b>%s</b>?';
$lang['admin_modules_delete_error'] = 'Nie można usunąć modułu.';
$lang['admin_modules_delete_error_active'] = 'Aktywnych modułów nie można usunąć.';
$lang['admin_modules_delete_success'] = 'Moduł został pomyślnie usunięty.';
$lang['admin_modules_disable_all_confirm'] = 'Czy na pewno chcesz wyłączyć wszystkie moduły?';
$lang['admin_modules_disable_all_error'] = 'Nie można wyłączyć wszystkich modułów.';
$lang['admin_modules_disable_all_success'] = 'Wszystkie moduły zostały pomyślnie wyłączone.';
$lang['admin_modules_disable_confirm'] = 'Czy na pewno chcesz wyłączyć moduł: <b>%s</b>?';
$lang['admin_modules_disable_error'] = 'Nie można dezaktywować modułu.';
$lang['admin_modules_disable_success'] = 'Moduł został pomyślnie dezaktywowany.';
$lang['admin_modules_enable_all_confirm'] = 'Czy na pewno chcesz włączyć wszystkie moduły?';
$lang['admin_modules_enable_all_error'] = 'Nie można włączyć wszystkich modułów.';
$lang['admin_modules_enable_all_success'] = 'Wszystkie moduły zostały pomyślnie włączone.';
$lang['admin_modules_enable_confirm'] = 'Czy na pewno chcesz włączyć moduł: <b>%s</b>?';
$lang['admin_modules_enable_error'] = 'Nie udało się aktywować modułu.';
$lang['admin_modules_enable_success'] = 'Moduł został pomyślnie aktywowany.';
$lang['admin_modules_global'] = 'Moduł globalny (współdzielony)';
$lang['admin_modules_install_confirm'] = 'Czy na pewno chcesz zainstalować moduł: <b>%s</b>?';
$lang['admin_modules_install_error'] = 'Nie udało się zainstalować modułu.';
$lang['admin_modules_install_success'] = 'Moduł został pomyślnie zainstalowany.';
$lang['admin_modules_install_tip'] = 'Moduły dodają do Twojej strony nowe funkcje. Przeglądaj dostępne moduły w <a href="%s" target="_blank" rel="noopener">katalogu modułów</a> lub prześlij plik <b>.zip</b>.';
$lang['admin_modules_update_confirm'] = 'Czy na pewno chcesz zaktualizować ten moduł?';
$lang['admin_modules_update_error'] = 'Nie udało się zaktualizować modułu.';
$lang['admin_modules_update_success'] = 'Moduł został pomyślnie zaktualizowany.';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{Brak aktywnych wtyczek.} other{<b>#</b> z <b>%s</b> wtyczek jest aktywnych.}';
$lang['admin_plugins_add'] = 'Dodaj wtyczkę';
$lang['admin_plugins_delete_confirm'] = 'Czy na pewno chcesz usunąć wtyczkę: <b>%s</b>?';
$lang['admin_plugins_delete_error'] = 'Nie można usunąć wtyczki.';
$lang['admin_plugins_delete_error_active'] = 'Aktywnych wtyczek nie można usunąć.';
$lang['admin_plugins_delete_success'] = 'Wtyczka została pomyślnie usunięta.';
$lang['admin_plugins_disable_all_confirm'] = 'Czy na pewno chcesz wyłączyć wszystkie wtyczki?';
$lang['admin_plugins_disable_all_error'] = 'Nie można wyłączyć wszystkich wtyczek.';
$lang['admin_plugins_disable_all_success'] = 'Wszystkie wtyczki zostały pomyślnie wyłączone.';
$lang['admin_plugins_disable_confirm'] = 'Czy na pewno chcesz wyłączyć wtyczkę: <b>%s</b>?';
$lang['admin_plugins_disable_error'] = 'Nie można wyłączyć wtyczki.';
$lang['admin_plugins_disable_success'] = 'Wtyczka została pomyślnie wyłączona.';
$lang['admin_plugins_enable_all_confirm'] = 'Czy na pewno chcesz włączyć wszystkie wtyczki?';
$lang['admin_plugins_enable_all_error'] = 'Nie można włączyć wszystkich wtyczek.';
$lang['admin_plugins_enable_all_success'] = 'Wszystkie wtyczki zostały pomyślnie włączone.';
$lang['admin_plugins_enable_confirm'] = 'Czy na pewno chcesz włączyć wtyczkę: <b>%s</b>?';
$lang['admin_plugins_enable_error'] = 'Nie można włączyć wtyczki.';
$lang['admin_plugins_enable_success'] = 'Wtyczka została pomyślnie włączona.';
$lang['admin_plugins_global'] = 'Wtyczka globalna (współdzielona)';
$lang['admin_plugins_install_confirm'] = 'Czy na pewno chcesz zainstalować wtyczkę: <b>%s</b>?';
$lang['admin_plugins_install_error'] = 'Nie udało się zainstalować wtyczki.';
$lang['admin_plugins_install_success'] = 'Wtyczka została pomyślnie zainstalowana.';
$lang['admin_plugins_install_tip'] = 'Wtyczki rozszerzają istniejące funkcje o dodatkowe opcje lub integracje. Zainstaluj z <a href="%s" target="_blank" rel="noopener">katalogu wtyczek</a> lub prześlij plik <b>.zip</b>.';
$lang['admin_plugins_update_confirm'] = 'Czy na pewno chcesz zaktualizować tę wtyczkę?';
$lang['admin_plugins_update_error'] = 'Nie udało się zaktualizować wtyczki.';
$lang['admin_plugins_update_success'] = 'Wtyczka została pomyślnie zaktualizowana.';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = 'Dodaj motyw';
$lang['admin_themes_delete_confirm'] = 'Czy na pewno chcesz usunąć motyw: <b>%s</b>?';
$lang['admin_themes_delete_error'] = 'Nie można usunąć motywu.';
$lang['admin_themes_delete_error_active'] = 'Nie można usunąć aktualnie aktywnego motywu.';
$lang['admin_themes_delete_success'] = 'Motyw został pomyślnie usunięty.';
$lang['admin_themes_disable_confirm'] = 'Czy na pewno chcesz dezaktywować motyw: <b>%s</b>?';
$lang['admin_themes_disable_error'] = 'Nie można dezaktywować motywu.';
$lang['admin_themes_disable_error_active'] = 'Nie można wyłączyć aktywnego motywu.';
$lang['admin_themes_disable_success'] = 'Motyw został pomyślnie dezaktywowany.';
$lang['admin_themes_enable_confirm'] = 'Czy na pewno chcesz włączyć motyw: <b>%s</b>?';
$lang['admin_themes_enable_error'] = 'Nie udało się aktywować motywu.';
$lang['admin_themes_enable_success'] = 'Motyw został pomyślnie aktywowany.';
$lang['admin_themes_install_confirm'] = 'Czy na pewno chcesz zainstalować motyw: <b>%s</b>?';
$lang['admin_themes_install_error'] = 'Nie udało się zainstalować motywu.';
$lang['admin_themes_install_success'] = 'Motyw został pomyślnie zainstalowany.';
$lang['admin_themes_install_tip'] = 'Motywy zmieniają wygląd i układ Twojej strony. Wybierz z <a href="%s" target="_blank" rel="noopener">biblioteki motywów</a> lub prześlij plik <b>.zip</b>.';
$lang['admin_themes_none_tip'] = 'Ta aplikacja działa bez motywu. Zainstaluj motyw, aby dostosować interfejs publiczny.';
$lang['admin_themes_update_confirm'] = 'Czy na pewno chcesz zaktualizować ten motyw?';
$lang['admin_themes_update_error'] = 'Nie udało się zaktualizować motywu.';
$lang['admin_themes_update_success'] = 'Motyw został pomyślnie zaktualizowany.';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = 'Menu';
$lang['admin_menus_assign_error'] = 'Nie można zaktualizować lokalizacji menu.';
$lang['admin_menus_assign_success'] = 'Lokalizacje menu zostały pomyślnie zaktualizowane.';
$lang['admin_menus_header'] = 'Dostępnych jest <b>%s</b> lokalizacji menu.';
$lang['admin_menus_location'] = 'Lokalizacja';
$lang['admin_menus_locations'] = 'Lokalizacje menu';
$lang['admin_menus_manage'] = 'Zarządzaj menu';
$lang['admin_menus_menu'] = 'Przypisane menu';
$lang['admin_menus_none'] = '&#151; Brak &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_add'] = 'Dodaj język';
$lang['admin_languages_default_confirm'] = 'Czy na pewno chcesz ustawić ten język jako domyślny język strony?';
$lang['admin_languages_default_error'] = 'Nie można zmienić języka domyślnego.';
$lang['admin_languages_default_error_nochange'] = 'Ten język jest już językiem domyślnym.';
$lang['admin_languages_default_success'] = 'Domyślny język został pomyślnie zmieniony.';
$lang['admin_languages_delete_confirm'] = 'Czy na pewno chcesz usunąć język: <b>%s</b>?';
$lang['admin_languages_delete_error'] = 'Nie udało się usunąć języka.';
$lang['admin_languages_delete_error_active'] = 'Aktywnych języków nie można usunąć.';
$lang['admin_languages_delete_error_default'] = 'Domyślnego języka nie można usunąć.';
$lang['admin_languages_delete_success'] = 'Język został pomyślnie usunięty.';
$lang['admin_languages_disable_all_confirm'] = 'Czy na pewno chcesz wyłączyć wszystkie języki?';
$lang['admin_languages_disable_all_error'] = 'Nie można wyłączyć wszystkich języków.';
$lang['admin_languages_disable_all_success'] = 'Wszystkie języki zostały pomyślnie wyłączone.';
$lang['admin_languages_disable_confirm'] = 'Czy na pewno chcesz wyłączyć język: <b>%s</b>?';
$lang['admin_languages_disable_error'] = 'Nie można wyłączyć języka.';
$lang['admin_languages_disable_error_default'] = 'Nie można wyłączyć domyślnego języka.';
$lang['admin_languages_disable_error_nochange'] = 'Ten język jest już wyłączony.';
$lang['admin_languages_disable_success'] = 'Język został pomyślnie wyłączony.';
$lang['admin_languages_enable_all_confirm'] = 'Czy na pewno chcesz włączyć wszystkie języki?';
$lang['admin_languages_enable_all_error'] = 'Nie można włączyć wszystkich języków.';
$lang['admin_languages_enable_all_success'] = 'Wszystkie języki zostały pomyślnie włączone.';
$lang['admin_languages_enable_confirm'] = 'Czy na pewno chcesz włączyć język: <b>%s</b>?';
$lang['admin_languages_enable_error'] = 'Nie udało się aktywować języka.';
$lang['admin_languages_enable_error_nochange'] = 'Ten język jest już włączony.';
$lang['admin_languages_enable_success'] = 'Język został pomyślnie włączony.';
$lang['admin_languages_install_confirm'] = 'Czy na pewno chcesz zainstalować język: <b>%s</b>?';
$lang['admin_languages_install_error'] = 'Nie udało się zainstalować języka.';
$lang['admin_languages_install_success'] = 'Język został pomyślnie zainstalowany.';
$lang['admin_languages_install_tip'] = 'Języki dodają tłumaczenia interfejsu i treści witryny. Przeglądaj dostępne języki w <a href="%s" target="_blank" rel="noopener">katalogu języków</a> lub prześlij pakiet <b>.zip</b>, aby zainstalować własny.';
$lang['admin_languages_tip'] = 'Włącz, wyłącz i ustaw domyślny język witryny. Włączone języki są dostępne dla odwiedzających witrynę.';
$lang['admin_languages_update_confirm'] = 'Czy na pewno chcesz zaktualizować ten język?';
$lang['admin_languages_update_error'] = 'Nie udało się zaktualizować języka.';
$lang['admin_languages_update_success'] = 'Język został pomyślnie zaktualizowany.';

/**
 * ---------------------------------------------------------------
 * Package Driver & Installation Messages
 * ---------------------------------------------------------------
 * Language lines for package installation, download, backup, and validation.
 */
$lang['package_already_exists'] = 'Pakiet już istnieje.';
$lang['package_archive_download_failed'] = 'Nie udało się pobrać archiwum pakietu.';
$lang['package_backup_create_error'] = 'Nie udało się utworzyć kopii zapasowej pakietu.';
$lang['package_backup_dir_failed'] = 'Nie udało się utworzyć katalogu kopii zapasowej %s';
$lang['package_backup_missing'] = 'Plik kopii zapasowej nie istnieje.';
$lang['package_backup_path_error'] = 'Nie można ustalić ścieżki pliku kopii zapasowej.';
$lang['package_backup_request_invalid'] = 'Nieprawidłowe żądanie kopii zapasowej.';
$lang['package_backup_restore_error'] = 'Nie udało się przywrócić kopii zapasowej pakietu.';
$lang['package_catalog_type_unknown'] = 'Nieznany typ katalogu.';
$lang['package_checksum_error'] = 'Weryfikacja sumy kontrolnej (checksum) pakietu nie powiodła się.';
$lang['package_copy_files_error'] = 'Nie udało się skopiować plików pakietu do lokalizacji docelowej.';
$lang['package_copy_updates_error'] = 'Nie udało się skopiować plików aktualizacji do lokalizacji docelowej.';
$lang['package_dest_dir_failed'] = 'Nie udało się utworzyć katalogu docelowego %s';
$lang['package_destination_error'] = 'Nie można ustalić miejsca docelowego pakietu.';
$lang['package_download_dir_failed'] = 'Nie udało się utworzyć katalogu pobierania %s';
$lang['package_download_empty'] = 'Pobieranie pakietu zwróciło pustą odpowiedź.';
$lang['package_download_request_invalid'] = 'Nieprawidłowe żądanie pobrania pakietu.';
$lang['package_extract_failed'] = 'Nie udało się wypakować pliku ZIP %s';
$lang['package_invalid_lang_files'] = 'Nieprawidłowy język — brak wymaganych plików językowych aplikacji.';
$lang['package_invalid_lang_structure'] = 'Nieprawidłowy język — brak katalogów admin i/lub ci3.';
$lang['package_invalid_missing_info'] = 'Nieprawidłowy %s: brak pliku "info.php".';
$lang['package_invalid_module_structure'] = 'Nieprawidłowy moduł — brak wymaganych katalogów config i/lub controllers.';
$lang['package_invalid_plugin_boot'] = 'Nieprawidłowa wtyczka (plugin) — brak pliku "boot.php".';
$lang['package_invalid_plugin_contents'] = 'Nieprawidłowa wtyczka (plugin) — wtyczki nie mogą zawierać kontrolerów ani widoków (views).';
$lang['package_invalid_theme_boot'] = 'Nieprawidłowy motyw — brak pliku "boot.php".';
$lang['package_invalid_theme_views'] = 'Nieprawidłowy motyw — brak katalogu views.';
$lang['package_no_root_dir'] = 'Pakiet nie zawiera katalogu głównego (root).';
$lang['package_not_downloadable'] = 'Pakiet nie jest publicznie pobieralny.';
$lang['package_not_in_registry'] = 'Pakiet jest niedostępny w publicznym rejestrze.';
$lang['package_request_invalid'] = 'Nieprawidłowe żądanie pakietu.';
$lang['package_rollback_request_invalid'] = 'Nieprawidłowe żądanie wycofania (rollback).';
$lang['package_root_mismatch'] = 'Katalog główny archiwum pakietu nie odpowiada %s';
$lang['package_single_root_required'] = 'Pakiet musi zawierać dokładnie jeden katalog główny.';
$lang['package_source_error'] = 'Nie można ustalić źródła pakietu.';
$lang['package_system_core_restricted'] = 'Komponenty systemowe nie mogą być instalowane jako pakiety.';
$lang['package_temp_dir_failed'] = 'Nie udało się utworzyć katalogu tymczasowego %s';
$lang['package_type_unknown'] = 'Nieznany typ pakietu.';
$lang['package_update_request_invalid'] = 'Nieprawidłowe żądanie aktualizacji pakietu.';
$lang['package_update_root_mismatch'] = 'Katalog główny archiwum aktualizacji nie odpowiada %s.';
$lang['package_upload_dir_failed'] = 'Nie udało się utworzyć katalogu przesyłania %s';
$lang['package_url_invalid'] = 'Nieprawidłowy adres URL dystrybucji pakietu.';
$lang['package_write_failed'] = 'Nie udało się zapisać pakietu do %s';
$lang['package_zip_not_found'] = 'Pakiet ZIP nie istnieje: %s';

/**
 * ---------------------------------------------------------------
 * Updates Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = 'Dostępne nowe aktualizacje!';
$lang['update_backup_error'] = 'Nie można utworzyć kopii zapasowej istniejącego pakietu. Aktualizacja została przerwana.';
$lang['update_check_disabled'] = 'Automatyczne sprawdzanie aktualizacji jest wyłączone. Włącz je, aby zobaczyć aktualizacje.';
$lang['update_check_error'] = 'Nie można obecnie uruchomić sprawdzania aktualizacji.';
$lang['update_check_success'] = 'Sprawdzanie aktualizacji zakończone pomyślnie.';
$lang['update_install_error'] = 'Nie można zainstalować pakietu. Poprzednia wersja została zachowana.';
$lang['update_install_success'] = 'Pakiet pomyślnie zaktualizowany do najnowszej wersji.';
$lang['update_interval_3days'] = 'Co 3 dni';
$lang['update_interval_biweekly'] = 'Co 2 tygodnie';
$lang['update_interval_daily'] = 'Codziennie';
$lang['update_interval_monthly'] = 'Raz w miesiącu';
$lang['update_interval_weekly'] = 'Raz w tygodniu';
$lang['update_not_available'] = 'Twoja strona internetowa jest aktualna.';
$lang['update_rollback_confirm'] = 'Czy na pewno chcesz przywrócić poprzednią wersję?';
$lang['update_rollback_error'] = 'Nie można przywrócić poprzedniej wersji. Może być wymagana ręczna interwencja.';
$lang['update_rollback_success'] = 'Poprzednia wersja została pomyślnie przywrócona.';
$lang['updates_available'] = 'Dostępne aktualizacje';
$lang['updates_check_now'] = 'Sprawdź teraz';
$lang['updates_check_now_confirm'] = 'Czy na pewno chcesz teraz sprawdzić aktualizacje?';
$lang['updates_current_version'] = 'Bieżąca wersja';
$lang['updates_enable'] = 'Włącz aktualizacje';
$lang['updates_last_check'] = 'Ostatnie sprawdzenie: %s';
$lang['updates_latest_version'] = 'Najnowsza wersja';
$lang['updates_next_check'] = 'Następne zaplanowane sprawdzenie: %s';
$lang['updates_previous_version'] = 'Poprzednia wersja';
$lang['updates_recent'] = 'Ostatnio zaktualizowane';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'Zablokowanie określonego adresu IP nie powiodło się.';
$lang['admin_firewall_ban_success'] = 'Adres IP został pomyślnie zablokowany.';
$lang['admin_firewall_block_ip'] = 'Zablokuj adres IP';
$lang['admin_firewall_delete_confirm'] = 'Czy na pewno chcesz odblokować wybrane adresy IP?';
$lang['admin_firewall_delete_error'] = 'Odblokowanie wybranych adresów IP nie powiodło się.';
$lang['admin_firewall_delete_success'] = 'Wybrane adresy IP zostały pomyślnie odblokowane.';
$lang['admin_firewall_duration'] = 'Czas trwania blokady';
$lang['admin_firewall_permanent'] = 'Stała';
$lang['admin_firewall_reason'] = 'Powód blokady';
$lang['admin_firewall_tip'] = 'Przeglądaj i zarządzaj adresami IP zablokowanymi przez zaporę z powodu powtarzających się naruszeń lub podejrzanej aktywności.';

// Settings
$lang['404_ban_duration'] = 'Czas trwania blokady 404';
$lang['404_threshold'] = 'Limit błędów 404';
$lang['uri_ban_duration'] = 'Czas trwania blokady URI';
$lang['uri_strike_threshold'] = 'Limit ostrzeżeń URI';
