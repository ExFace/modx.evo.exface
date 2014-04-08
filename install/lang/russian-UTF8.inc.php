<?php
/**
 * MODX Installer language file
 *
 * @author Pertsev Dmitriy
 * @author Safronovich Victor
 * @author Russian MODX Community
 * @version 1.0.13
 * @date 2014/02/24
 *
 * @language Russian
 * @package modx
 * @subpackage installer
 *
 * Please commit your language changes on Transifex (https://www.transifex.com/projects/p/modx-evolution/) or on GitHub (https://github.com/modxcms/evolution).
 */
setlocale (LC_ALL, 'ru_RU.UTF-8');
$_lang["agree_to_terms"] = 'Согласиться с условиями лицензии и приступить к установке';
$_lang["alert_database_test_connection"] = 'Вы должны создать базу данных или выбрать базу данных для проверки!';
$_lang["alert_database_test_connection_failed"] = 'Неудачная проверка выбранной базы данных!';
$_lang["alert_enter_adminconfirm"] = 'Пароль администратора и подтверждение пароля не совпадают!';
$_lang["alert_enter_adminlogin"] = 'Введите имя администратора!';
$_lang["alert_enter_adminpassword"] = 'Введите пароль администратора!';
$_lang["alert_enter_database_name"] = 'Введите имя базы данных!';
$_lang["alert_enter_host"] = 'Введите хост базы данных!';
$_lang["alert_enter_login"] = 'Введите имя пользователя базы данных!';
$_lang["alert_server_test_connection"] = 'Проверьте соединение с сервером базы данных!';
$_lang["alert_server_test_connection_failed"] = 'Соединиться с сервером базы данных не удалось!';
$_lang["alert_table_prefixes"] = 'Префикс таблиц должен начинаться с буквы!';
$_lang["all"] = 'Все';
$_lang["and_try_again"] = ', и попробуйте снова. Если вам нужна помощь по исправлению этой ошибки';
$_lang["and_try_again_plural"] = ', и попробуйте снова. Если вам нужна помощь по исправлению этих ошибок';
$_lang["begin"] = 'Начать';
$_lang["btnback_value"] = 'Назад';
$_lang["btnclose_value"] = 'Закрыть';
$_lang["btnnext_value"] = 'Далее';
$_lang["cant_write_config_file"] = 'Программа установки не смогла записать файл конфигурации. Скопируйте вышеперечисленное в файл ';
$_lang["cant_write_config_file_note"] = 'Как только вы это сделаете, вы можете войти в панель управления, перейдя в браузере по адресу Адрес_Вашего_Сайта/[+MGR_DIR+]/.';
$_lang["checkbox_select_options"] = 'Параметры выбора флажков:';
$_lang["checking_if_cache_exist"] = 'Проверка существования папок <span class="mono">/assets/cache</span> и <span class="mono">/assets/cache/rss</span>: ';
$_lang["checking_if_cache_file_writable"] = 'Проверка возможности записи в файл <span class="mono">/assets/cache/siteCache.idx.php</span>: ';
$_lang["checking_if_cache_file2_writable"] = 'Проверка возможности записи в файл <span class="mono">/assets/cache/sitePublishing.idx.php</span>: ';
$_lang["checking_if_cache_writable"] = 'Проверка возможности записи в папки <span class="mono">/assets/cache</span> и <span class="mono">/assets/cache/rss</span>: ';
$_lang["checking_if_config_exist_and_writable"] = 'Проверка существования и возможности записи в файл <span class="mono">/[+MGR_DIR+]/includes/config.inc.php</span>: ';
$_lang["checking_if_export_exists"] = 'Проверка существования папки <span class="mono">/assets/export</span>: ';
$_lang["checking_if_export_writable"] = 'Проверка возможности записи в папку <span class="mono">/assets/export</span>: ';
$_lang["checking_if_images_exist"] = 'Проверка существования папок <span class="mono">/assets/images</span>, <span class="mono">/assets/files</span>, <span class="mono">/assets/flash</span>, <span class="mono">/assets/media</span>, <span class="mono">/assets/backup</span> и <span class="mono">/assets/.thumbs</span>: ';
$_lang["checking_if_images_writable"] = 'Проверка возможности записи в папки <span class="mono">/assets/images</span>, <span class="mono">/assets/files</span>, <span class="mono">/assets/flash</span>, <span class="mono">/assets/media</span>, <span class="mono">/assets/backup</span> и <span class="mono">/assets/.thumbs</span>: ';
$_lang["checking_mysql_strict_mode"] = 'Проверка MySQL на строгий режим strict sql_mode: ';
$_lang["checking_mysql_version"] = 'Проверка версии MySQL: ';
$_lang["checking_php_version"] = 'Проверка версии PHP: ';
$_lang["checking_registerglobals"] = 'Проверка PHP-параметра Register_Globals: ';
$_lang["checking_registerglobals_note"] = 'Конфигурация PHP делает ваш сайт более восприимчивым к XSS-атакам. Вы должны самостоятельно, или связавшись с администрацией хостинга, выключить Register_Globals. Обычно это делается одним из следующих путей: вносятся исправления в php.ini файл, добавляются правила в файл .htaccess, который находится в корне папки MODX, или добавлением своего php.ini в каждую папку внутри папки MODX (их очень много). Вы можете продолжить установку MODX, но обдумайте это предупреждение.';
$_lang["checking_sessions"] = 'Проверка настроек сессий: ';
$_lang["checking_table_prefix"] = 'Проверка префикса таблиц `';
$_lang["chunks"] = 'Чанки';
$_lang["config_permissions_note"] = 'При новой Linux/Unix установке, создайте пустой файл <span class="mono">config.inc.php</span> в папке <span class="mono">/[+MGR_DIR+]/includes/</span> с правами 0666.';
$_lang["connection_screen_collation"] = 'Сопоставление:';
$_lang["connection_screen_connection_method"] = 'Метод сопоставления:';
$_lang["connection_screen_database_connection_information"] = 'Параметры базы данных';
$_lang["connection_screen_database_connection_note"] = 'Введите имя базы данных, созданной для MODX. Если у вас еще нет базы данных, то программа установки попытается создать базу данных для вас. В зависимости от конфигурации MySQL или прав пользователя базы данных процесс может завершиться неудачей.';
$_lang["connection_screen_database_host"] = 'Хост базы данных:';
$_lang["connection_screen_database_info"] = 'Информация базы данных';
$_lang["connection_screen_database_login"] = 'Имя пользователя:';
$_lang["connection_screen_database_name"] = 'Имя базы данных:';
$_lang["connection_screen_database_pass"] = 'Пароль:';
$_lang["connection_screen_database_test_connection"] = 'Нажмите здесь для создания базы данных или для проверки, что такая база существует';
$_lang["connection_screen_default_admin_email"] = 'E-mail администратора:';
$_lang["connection_screen_default_admin_login"] = 'Имя администратора:';
$_lang["connection_screen_default_admin_note"] = 'Теперь вы должны ввести данные о главной записи администратора. Вы можете ввести свое имя и пароль, который вы вряд ли забудете. Вам понадобятся эти данные, чтобы войти в панель управления после окончания установки.';
$_lang["connection_screen_default_admin_password"] = 'Пароль администратора:';
$_lang["connection_screen_default_admin_password_confirm"] = 'Подтвердить пароль:';
$_lang["connection_screen_default_admin_user"] = 'Администратор по умолчанию';
$_lang["connection_screen_defaults"] = 'Установки по умолчанию менеджера';
$_lang["connection_screen_server_connection_information"] = 'Параметры подключения и входа на сервер базы данных';
$_lang["connection_screen_server_connection_note"] = 'Введите данные для входа в базу данных и затем проверьте их.';
$_lang["connection_screen_server_test_connection"] = 'Нажмите здесь для проверки соединения с вашим сервером базы данных и получения сопоставления кодировки';
$_lang["connection_screen_table_prefix"] = 'Префикс таблиц:';
$_lang["creating_database_connection"] = 'Проверка соединения с базой данных: ';
$_lang["database_alerts"] = 'Внимание ошибка!';
$_lang["database_connection_failed"] = 'Ошибка соединения с базой данных!';
$_lang["database_connection_failed_note"] = 'Проверьте параметры соединения и попробуйте еще раз.';
$_lang["database_use_failed"] = 'Невозможно выбрать базу данных!';
$_lang["database_use_failed_note"] = 'Проверьте, есть ли у вас необходимые права на доступ к базе данных.';
$_lang["default_language"] = 'Язык по умолчанию менеджера';
$_lang["default_language_description"] = 'Это язык, который будет по умолчанию использоваться менеджером в административной панели MODX.';
$_lang["depedency_create"] = 'Зависимости созданы ';
$_lang["depedency_update"] = 'Зависимости обновлены';
$_lang["during_execution_of_sql"] = ' во время выполнения SQL запроса ';
$_lang["encoding"] = 'utf-8';
$_lang["error"] = 'ошибки';
$_lang["errors"] = 'ошибок';
$_lang["failed"] = 'ОШИБКА!';
$_lang["guid_set"] = 'GUID ключ';
$_lang["help"] = 'Помощь!';
$_lang["help_link"] = 'http://forums.modx.com/board/230/russian';
$_lang["help_title"] = 'Помощь в установке на форумах MODX';
$_lang["iagree_box"] = 'Я согласен с условиями <a href="../assets/docs/license.txt" target="_blank">лицензии</a>. С русским переводом текста лицензии можно познакомиться на странице <a href="http://ru.wikipedia.org/wiki/GPL" target="_blank">GNU General Public License</a>.';
$_lang["install"] = 'Установить';
$_lang["install_overwrite"] = 'Установить/Переписать';
$_lang["install_results"] = 'Результаты установки';
$_lang["install_update"] = 'Установить/Обновить';
$_lang["installation_error_occured"] = 'Следующая ошибка возникла во время установки';
$_lang["installation_install_new_copy"] = 'Установить новую копию ';
$_lang["installation_install_new_note"] = 'Внимание, выбор этого варианта может перезаписать данные в вашей базе данных.';
$_lang["installation_mode"] = 'Режим установки';
$_lang["installation_new_installation"] = 'Новая установка';
$_lang["installation_note"] = '<strong>Внимание:</strong> После входа в панель управления вы должны отредактировать и сохранить системную конфигурацию MODX, прежде чем смотреть сайт, выбрав <strong>Инструменты</strong> -> Конфигурация в панели управления.';
$_lang["installation_successful"] = 'Установка успешно завершена!';
$_lang["installation_upgrade_advanced"] = 'Расширенное обновление установки';
$_lang["installation_upgrade_advanced_note"] = 'Для расширенного управления базой данных с различным набором символов.<br /><b>Вы должны знать полное название вашей базы данных, имя пользователя, пароль, детали подключения и таблицу сопоставления.</b>';
$_lang["installation_upgrade_existing"] = 'Обновление существующей установки';
$_lang["installation_upgrade_existing_note"] = 'Обновление ваших файлов и базы данных.';
$_lang["installed"] = 'Установлен';
$_lang["installing_demo_site"] = 'Установка примера веб-сайта: ';
$_lang["language_code"] = 'ru';
$_lang["loading"] = 'Загружается...';
$_lang["modules"] = 'Модули';
$_lang["modx_footer1"] = '&copy; 2005-2014 <a href="http://modx.com/" target="_blank" style="color: green; text-decoration:underline">MODX</a> Content Mangement Framework (CMF) project. Все права защищены. MODX лицензирован GNU GPL.';
$_lang["modx_footer2"] = 'MODX &mdash; свободное программное обеспечение. Мы поощряем вас быть творческими и использовать MODX как вы считаете целесообразным. Если вы внесете изменения и решите распространять ваш измененный вариант MODX, то должны сохранять и распространять исходный код бесплатно.';
$_lang["modx_install"] = 'MODX &raquo; Установка';
$_lang["modx_requires_php"] = ', а MODX необходим PHP 4.4.9 или более поздний';
$_lang["mysql_5051"] = ' версия MySQL - 5.0.51!';
$_lang["mysql_5051_warning"] = 'Известны проблемы с MySQL 5.0.51. Настоятельно рекомендуем обновить базу данных перед продолжением установки.';
$_lang["mysql_version_is"] = ' Ваша версия MySQL: ';
$_lang["no"] = 'Нет';
$_lang["none"] = 'Ни один';
$_lang["not_found"] = 'не найден';
$_lang["ok"] = 'OK!';
$_lang["optional_items"] = 'Дополнительные элементы';
$_lang["optional_items_note"] = 'Пожалуйста, выберите параметры установки и нажмите кнопку `Установить`:';
$_lang["php_security_notice"] = '<legend>Уведомление безопасности</legend><p>Несмотря на то, что MODX будет работать на вашей версии PHP, использовать его c этой версией PHP крайне не рекомендуется. Ваша версия PHP уязвима из-за многочисленных брешей в защите. Обновите PHP до версии 4.3.8 или более поздней для безопасности вашего сайта.</p>';
$_lang["please_correct_error"] = '. Исправьте эту ошибку';
$_lang["please_correct_errors"] = '. Исправьте эти ошибки';
$_lang["plugins"] = 'Плагины';
$_lang["preinstall_validation"] = 'Проверка перед установкой';
$_lang["recommend_setting_change_title"] = 'Рекомендуемое изменение настройки';
$_lang["recommend_setting_change_validate_referer_confirmation"] = 'Изменить установку: <em>Проверять заголовки HTTP_REFERER?</em>';
$_lang["recommend_setting_change_validate_referer_description"] = 'Ваш сайт не настроен на проверку серверных заголовков HTTP_REFERER во входящих запросах в систему управления. Мы настоятельно рекомендуем включить этот параметр, чтобы снизить риск CSRF (Cross Site Request Forgery - подделка межсайтовых запросов) атак.';
$_lang["remove_install_folder_auto"] = 'Удалить папку и файлы программы установки с моего сайта <br />&nbsp;(Для выполнения этой операции необходимы права на запись в папку install).';
$_lang["remove_install_folder_manual"] = 'Пожалуйста, удалите папку &quot;<b>install</b>&quot; прежде чем войти в панель управления.';
$_lang["retry"] = 'Повторить';
$_lang["running_database_updates"] = 'Обновление базы данных: ';
$_lang["sample_web_site"] = 'Пример веб-сайта';
$_lang["sample_web_site_note"] = 'Осторожно! Установка этого параметра <b>перепишет</b> существующие ресурсы и элементы.';
$_lang["session_problem"] = 'Была обнаружена проблема в сессии сервера. Свяжитесь, пожалуйста, с администратором сервера для ее устранения.';
$_lang["session_problem_try_again"] = 'Повторить?';
$_lang["setup_cannot_continue"] = 'К сожалению, установка не может быть продолжена из-за ';
$_lang["setup_couldnt_install"] = 'Программа установки MODX не смогла установить/изменить некоторые таблицы базы данных.';
$_lang["setup_database"] = 'Программа установки сейчас попробует установить базу данных:<br />';
$_lang["setup_database_create_connection"] = 'Создание подключения к базе данных: ';
$_lang["setup_database_create_connection_failed"] = 'Не удалось соединиться с базой данных!';
$_lang["setup_database_create_connection_failed_note"] = 'Проверьте параметры подключения и попробуйте снова.';
$_lang["setup_database_creating_tables"] = 'Создание таблиц базы данных: ';
$_lang["setup_database_creation"] = 'Создание базы данных `';
$_lang["setup_database_creation_failed"] = 'Не удалось создать базу данных!';
$_lang["setup_database_creation_failed_note"] = ' - программа установки не смогла создать базу данных!';
$_lang["setup_database_creation_failed_note2"] = 'Программа установки не смогла создать базу данных, и нет базы данных с таким именем. Возможно, у вас нет прав на создание базы. Проверьте параметры базы данных и попробуйте еще раз.';
$_lang["setup_database_selection"] = 'Выбор базы данных `';
$_lang["setup_database_selection_failed"] = 'Ошибка выбора базы данных...';
$_lang["setup_database_selection_failed_note"] = 'База данных не существует. Программа установки попробует ее создать.';
$_lang["snippets"] = 'Cниппеты';
$_lang["some_tables_not_updated"] = 'Некоторые таблицы не были обновлены. Возможно из-за предыдущих модификаций';
$_lang["status_checking_database"] = 'Проверка базы данных: ';
$_lang["status_connecting"] = ' Подключение: ';
$_lang["status_failed"] = 'ошибка!';
$_lang["status_failed_could_not_create_database"] = 'ошибка - не удается создать базу данных';
$_lang["status_failed_database_collation_does_not_match"] = 'ошибка - сопоставление базы данных не соответствует; используйте SET NAMES или выберите %s';
$_lang["status_failed_table_prefix_already_in_use"] = 'ошибка - префикс таблицы уже используется!';
$_lang["status_passed"] = 'успех - база данных выбрана';
$_lang["status_passed_database_created"] = 'успех - база данных создана';
$_lang["status_passed_server"] = 'успех - сопоставление базы данных доступно';
$_lang["strict_mode"] = ' сервер MySQL работает в строгом режиме strict sql_mode!';
$_lang["strict_mode_error"] = 'Некоторые возможности MODX не могут работать должным образом, если режим sql_mode STRICT_TRANS_TABLES не отключен. Вы можете задать режим через внесения изменений в my.cnf файл или связаться с администратором базы данных.';
$_lang["summary_setup_check"] = 'Программа установки выполнит несколько тестов, чтобы удостовериться, что все готово к установке.';
$_lang["system_configuration"] = 'Конфигурация системы';
$_lang["system_configuration_validate_referer_description"] = 'Рекомендуется установка <strong>Проверять заголовки HTTP_REFERER</strong>, которая может защитить ваш сайт от атак CSRF, но при некоторых конфигурациях сервера система управления может быть недоступна.';
$_lang["table_prefix_already_inuse"] = ' - такой префикс таблиц уже используется в базе данных!';
$_lang["table_prefix_already_inuse_note"] = 'Продолжение установки невозможно. Уже существуют таблицы с указанным префиксом, измените префикс таблиц и попробуйте снова.';
$_lang["table_prefix_not_exist"] = ' - нет такого префикса таблиц в базе данных!';
$_lang["table_prefix_not_exist_note"] = 'Продолжение установки невозможно, так как нет таблиц с указанным префиксом, измените префикс таблиц и попробуйте снова.';
$_lang["templates"] = 'Шаблоны';
$_lang["to_log_into_content_manager"] = 'Чтобы войти в панель управления ([+MGR_DIR+]/index.php) нажмите на кнопку `Закрыть`.';
$_lang["toggle"] = 'Переключить';
$_lang['tvs'] = 'Параметры (TV)';
$_lang["unable_install_chunk"] = 'Невозможно установить чанк. Файл';
$_lang["unable_install_module"] = 'Невозможно установить модуль. Файл';
$_lang["unable_install_plugin"] = 'Невозможно установить плагин. Файл';
$_lang["unable_install_snippet"] = 'Невозможно установить сниппет. Файл';
$_lang["unable_install_template"] = 'Невозможно установить шаблон. Файл';
$_lang["upgrade_note"] = '<strong>Внимание:</strong> Прежде чем открыть ваш сайт, вам необходимо войти в панель управления, затем просмотреть и сохранить системную конфигурацию.';
$_lang["upgraded"] = 'Обновлен';
$_lang["validate_referer_title"] = 'Проверять серверные заголовки HTTP_REFERER?';
$_lang["visit_forum"] = ', посетите <a href="http://forums.modx.com/board/230/russian" target="_blank">форум MODX</a>.';
$_lang["warning"] = 'Предупреждение!';
$_lang["welcome_message_start"] = 'Выберите тип установки:';
$_lang["welcome_message_text"] = 'Эта программа проведет вас через весь процесс установки.';
$_lang["welcome_message_welcome"] = 'Добро пожаловать в программу установки MODX.';
$_lang["writing_config_file"] = 'Запись конфигурационного файла: ';
$_lang["yes"] = 'Да';
$_lang["you_running_php"] = ' - вы используете PHP ';
?>