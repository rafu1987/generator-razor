-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql8
-- Erstellungszeit: 18. Okt 2023 um 20:00
-- Server-Version: 8.0.31
-- PHP-Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Datenbank: `foobar`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `backend_layout`
--

DROP TABLE IF EXISTS `backend_layout`;
CREATE TABLE `backend_layout` (
  `uid` int UNSIGNED NOT NULL,
  `pid` int UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int UNSIGNED NOT NULL DEFAULT '0',
  `deleted` smallint UNSIGNED NOT NULL DEFAULT '0',
  `hidden` smallint UNSIGNED NOT NULL DEFAULT '0',
  `sorting` int NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `t3_origuid` int UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_oid` int UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_wsid` int UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_state` smallint NOT NULL DEFAULT '0',
  `t3ver_stage` int NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `config` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `be_dashboards`
--

DROP TABLE IF EXISTS `be_dashboards`;
CREATE TABLE `be_dashboards` (
  `uid` int UNSIGNED NOT NULL,
  `pid` int UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int UNSIGNED NOT NULL DEFAULT '0',
  `deleted` smallint UNSIGNED NOT NULL DEFAULT '0',
  `hidden` smallint UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int UNSIGNED NOT NULL DEFAULT '0',
  `identifier` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `cruser_id` int UNSIGNED NOT NULL DEFAULT '0',
  `title` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `widgets` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `be_dashboards`
--

INSERT INTO `be_dashboards` (`uid`, `pid`, `tstamp`, `crdate`, `deleted`, `hidden`, `starttime`, `endtime`, `identifier`, `cruser_id`, `title`, `widgets`) VALUES
(1, 0, 1697659183, 1697659183, 0, 0, 0, 0, '4242dad4329711440f254a220156a0335494533c', 1, 'My dashboard', '{\"24efd1d1ae4ab928a789b58596541b3ebc074acd\":{\"identifier\":\"t3information\"},\"ca12377ec8a65836515e666a0471e3025cbda822\":{\"identifier\":\"docGettingStarted\"}}');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `be_groups`
--

DROP TABLE IF EXISTS `be_groups`;
CREATE TABLE `be_groups` (
  `uid` int UNSIGNED NOT NULL,
  `pid` int UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int UNSIGNED NOT NULL DEFAULT '0',
  `deleted` smallint UNSIGNED NOT NULL DEFAULT '0',
  `hidden` smallint UNSIGNED NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `non_exclude_fields` text COLLATE utf8mb4_unicode_ci,
  `explicit_allowdeny` text COLLATE utf8mb4_unicode_ci,
  `allowed_languages` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `custom_options` text COLLATE utf8mb4_unicode_ci,
  `db_mountpoints` text COLLATE utf8mb4_unicode_ci,
  `pagetypes_select` text COLLATE utf8mb4_unicode_ci,
  `tables_select` text COLLATE utf8mb4_unicode_ci,
  `tables_modify` text COLLATE utf8mb4_unicode_ci,
  `groupMods` text COLLATE utf8mb4_unicode_ci,
  `availableWidgets` text COLLATE utf8mb4_unicode_ci,
  `mfa_providers` text COLLATE utf8mb4_unicode_ci,
  `file_mountpoints` text COLLATE utf8mb4_unicode_ci,
  `file_permissions` text COLLATE utf8mb4_unicode_ci,
  `TSconfig` text COLLATE utf8mb4_unicode_ci,
  `subgroup` text COLLATE utf8mb4_unicode_ci,
  `workspace_perms` smallint NOT NULL DEFAULT '1',
  `category_perms` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `be_sessions`
--

DROP TABLE IF EXISTS `be_sessions`;
CREATE TABLE `be_sessions` (
  `ses_id` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `ses_iplock` varchar(39) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `ses_userid` int UNSIGNED NOT NULL DEFAULT '0',
  `ses_tstamp` int UNSIGNED NOT NULL DEFAULT '0',
  `ses_data` longblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `be_users`
--

DROP TABLE IF EXISTS `be_users`;
CREATE TABLE `be_users` (
  `uid` int UNSIGNED NOT NULL,
  `pid` int UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int UNSIGNED NOT NULL DEFAULT '0',
  `deleted` smallint UNSIGNED NOT NULL DEFAULT '0',
  `disable` smallint UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int UNSIGNED NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `avatar` int UNSIGNED NOT NULL DEFAULT '0',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `admin` smallint UNSIGNED NOT NULL DEFAULT '0',
  `usergroup` text COLLATE utf8mb4_unicode_ci,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `db_mountpoints` text COLLATE utf8mb4_unicode_ci,
  `options` smallint UNSIGNED NOT NULL DEFAULT '0',
  `realName` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `userMods` text COLLATE utf8mb4_unicode_ci,
  `allowed_languages` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `uc` mediumblob,
  `file_mountpoints` text COLLATE utf8mb4_unicode_ci,
  `file_permissions` text COLLATE utf8mb4_unicode_ci,
  `workspace_perms` smallint NOT NULL DEFAULT '1',
  `TSconfig` text COLLATE utf8mb4_unicode_ci,
  `workspace_id` int NOT NULL DEFAULT '0',
  `mfa` mediumblob,
  `category_perms` longtext COLLATE utf8mb4_unicode_ci,
  `lastlogin` int NOT NULL DEFAULT '0',
  `password_reset_token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `be_users`
--

INSERT INTO `be_users` (`uid`, `pid`, `tstamp`, `crdate`, `deleted`, `disable`, `starttime`, `endtime`, `description`, `username`, `avatar`, `password`, `admin`, `usergroup`, `lang`, `email`, `db_mountpoints`, `options`, `realName`, `userMods`, `allowed_languages`, `uc`, `file_mountpoints`, `file_permissions`, `workspace_perms`, `TSconfig`, `workspace_id`, `mfa`, `category_perms`, `lastlogin`, `password_reset_token`) VALUES
(1, 0, 1697659040, 1697659040, 0, 0, 0, 0, NULL, '###ADMIN###', 0, '###PASS###', 1, NULL, 'default', '', NULL, 0, '', NULL, '', 0x613a353a7b733a31303a226d6f64756c6544617461223b613a313a7b733a32383a2264617368626f6172642f63757272656e745f64617368626f6172642f223b733a34303a2234323432646164343332393731313434306632353461323230313536613033333534393435333363223b7d733a31343a22656d61696c4d6541744c6f67696e223b693a303b733a383a227469746c654c656e223b693a35303b733a32303a22656469745f646f634d6f64756c6555706c6f6164223b733a313a2231223b733a31353a226d6f64756c6553657373696f6e4944223b613a313a7b733a32383a2264617368626f6172642f63757272656e745f64617368626f6172642f223b733a34303a2237646634626534663636666131373034356233316439656261373662323663323230323930323764223b7d7d, NULL, NULL, 1, NULL, 0, NULL, NULL, 1697659182, '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cache_adminpanel_requestcache`
--

DROP TABLE IF EXISTS `cache_adminpanel_requestcache`;
CREATE TABLE `cache_adminpanel_requestcache` (
  `id` int UNSIGNED NOT NULL,
  `identifier` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `expires` int UNSIGNED NOT NULL DEFAULT '0',
  `content` longblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cache_adminpanel_requestcache_tags`
--

DROP TABLE IF EXISTS `cache_adminpanel_requestcache_tags`;
CREATE TABLE `cache_adminpanel_requestcache_tags` (
  `id` int UNSIGNED NOT NULL,
  `identifier` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `tag` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cache_hash`
--

DROP TABLE IF EXISTS `cache_hash`;
CREATE TABLE `cache_hash` (
  `id` int UNSIGNED NOT NULL,
  `identifier` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `expires` int UNSIGNED NOT NULL DEFAULT '0',
  `content` longblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cache_hash_tags`
--

DROP TABLE IF EXISTS `cache_hash_tags`;
CREATE TABLE `cache_hash_tags` (
  `id` int UNSIGNED NOT NULL,
  `identifier` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `tag` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cache_imagesizes`
--

DROP TABLE IF EXISTS `cache_imagesizes`;
CREATE TABLE `cache_imagesizes` (
  `id` int UNSIGNED NOT NULL,
  `identifier` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `expires` int UNSIGNED NOT NULL DEFAULT '0',
  `content` longblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cache_imagesizes_tags`
--

DROP TABLE IF EXISTS `cache_imagesizes_tags`;
CREATE TABLE `cache_imagesizes_tags` (
  `id` int UNSIGNED NOT NULL,
  `identifier` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `tag` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cache_pages`
--

DROP TABLE IF EXISTS `cache_pages`;
CREATE TABLE `cache_pages` (
  `id` int UNSIGNED NOT NULL,
  `identifier` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `expires` int UNSIGNED NOT NULL DEFAULT '0',
  `content` longblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cache_pages_tags`
--

DROP TABLE IF EXISTS `cache_pages_tags`;
CREATE TABLE `cache_pages_tags` (
  `id` int UNSIGNED NOT NULL,
  `identifier` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `tag` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cache_rootline`
--

DROP TABLE IF EXISTS `cache_rootline`;
CREATE TABLE `cache_rootline` (
  `id` int UNSIGNED NOT NULL,
  `identifier` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `expires` int UNSIGNED NOT NULL DEFAULT '0',
  `content` longblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cache_rootline_tags`
--

DROP TABLE IF EXISTS `cache_rootline_tags`;
CREATE TABLE `cache_rootline_tags` (
  `id` int UNSIGNED NOT NULL,
  `identifier` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `tag` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cache_treelist`
--

DROP TABLE IF EXISTS `cache_treelist`;
CREATE TABLE `cache_treelist` (
  `md5hash` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `pid` int NOT NULL DEFAULT '0',
  `treelist` mediumtext COLLATE utf8mb4_unicode_ci,
  `tstamp` int NOT NULL DEFAULT '0',
  `expires` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fe_groups`
--

DROP TABLE IF EXISTS `fe_groups`;
CREATE TABLE `fe_groups` (
  `uid` int UNSIGNED NOT NULL,
  `pid` int UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int UNSIGNED NOT NULL DEFAULT '0',
  `deleted` smallint UNSIGNED NOT NULL DEFAULT '0',
  `hidden` smallint UNSIGNED NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `tx_extbase_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `subgroup` tinytext COLLATE utf8mb4_unicode_ci,
  `TSconfig` text COLLATE utf8mb4_unicode_ci,
  `felogin_redirectPid` tinytext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fe_sessions`
--

DROP TABLE IF EXISTS `fe_sessions`;
CREATE TABLE `fe_sessions` (
  `ses_id` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `ses_iplock` varchar(39) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `ses_userid` int UNSIGNED NOT NULL DEFAULT '0',
  `ses_tstamp` int UNSIGNED NOT NULL DEFAULT '0',
  `ses_data` mediumblob,
  `ses_permanent` smallint UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fe_users`
--

DROP TABLE IF EXISTS `fe_users`;
CREATE TABLE `fe_users` (
  `uid` int UNSIGNED NOT NULL,
  `pid` int UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int UNSIGNED NOT NULL DEFAULT '0',
  `deleted` smallint UNSIGNED NOT NULL DEFAULT '0',
  `disable` smallint UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int UNSIGNED NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `tx_extbase_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `lastlogin` int NOT NULL DEFAULT '0',
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `usergroup` text COLLATE utf8mb4_unicode_ci,
  `name` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `middle_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `telephone` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `fax` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `uc` blob,
  `title` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `zip` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `country` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `www` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `company` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `image` tinytext COLLATE utf8mb4_unicode_ci,
  `TSconfig` text COLLATE utf8mb4_unicode_ci,
  `is_online` int UNSIGNED NOT NULL DEFAULT '0',
  `mfa` mediumblob,
  `felogin_redirectPid` tinytext COLLATE utf8mb4_unicode_ci,
  `felogin_forgotHash` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `uid` int UNSIGNED NOT NULL,
  `pid` int UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int UNSIGNED NOT NULL DEFAULT '0',
  `deleted` smallint UNSIGNED NOT NULL DEFAULT '0',
  `hidden` smallint UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int UNSIGNED NOT NULL DEFAULT '0',
  `fe_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `sorting` int NOT NULL DEFAULT '0',
  `rowDescription` text COLLATE utf8mb4_unicode_ci,
  `editlock` smallint UNSIGNED NOT NULL DEFAULT '0',
  `sys_language_uid` int NOT NULL DEFAULT '0',
  `l10n_parent` int UNSIGNED NOT NULL DEFAULT '0',
  `l10n_source` int UNSIGNED NOT NULL DEFAULT '0',
  `l10n_state` text COLLATE utf8mb4_unicode_ci,
  `t3_origuid` int UNSIGNED NOT NULL DEFAULT '0',
  `l10n_diffsource` mediumblob,
  `t3ver_oid` int UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_wsid` int UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_state` smallint NOT NULL DEFAULT '0',
  `t3ver_stage` int NOT NULL DEFAULT '0',
  `perms_userid` int UNSIGNED NOT NULL DEFAULT '0',
  `perms_groupid` int UNSIGNED NOT NULL DEFAULT '0',
  `perms_user` smallint UNSIGNED NOT NULL DEFAULT '0',
  `perms_group` smallint UNSIGNED NOT NULL DEFAULT '0',
  `perms_everybody` smallint UNSIGNED NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `doktype` int UNSIGNED NOT NULL DEFAULT '0',
  `TSconfig` text COLLATE utf8mb4_unicode_ci,
  `is_siteroot` smallint NOT NULL DEFAULT '0',
  `php_tree_stop` smallint NOT NULL DEFAULT '0',
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `shortcut` int UNSIGNED NOT NULL DEFAULT '0',
  `shortcut_mode` int UNSIGNED NOT NULL DEFAULT '0',
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `layout` int UNSIGNED NOT NULL DEFAULT '0',
  `target` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `media` int UNSIGNED NOT NULL DEFAULT '0',
  `keywords` text COLLATE utf8mb4_unicode_ci,
  `cache_timeout` int UNSIGNED NOT NULL DEFAULT '0',
  `cache_tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` text COLLATE utf8mb4_unicode_ci,
  `no_search` smallint UNSIGNED NOT NULL DEFAULT '0',
  `SYS_LASTCHANGED` int UNSIGNED NOT NULL DEFAULT '0',
  `abstract` text COLLATE utf8mb4_unicode_ci,
  `module` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `extendToSubpages` smallint UNSIGNED NOT NULL DEFAULT '0',
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `author_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `nav_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `nav_hide` smallint NOT NULL DEFAULT '0',
  `content_from_pid` int UNSIGNED NOT NULL DEFAULT '0',
  `mount_pid` int UNSIGNED NOT NULL DEFAULT '0',
  `mount_pid_ol` smallint NOT NULL DEFAULT '0',
  `l18n_cfg` smallint NOT NULL DEFAULT '0',
  `backend_layout` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `backend_layout_next_level` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `tsconfig_includes` text COLLATE utf8mb4_unicode_ci,
  `categories` int UNSIGNED NOT NULL DEFAULT '0',
  `lastUpdated` int NOT NULL DEFAULT '0',
  `newUntil` int NOT NULL DEFAULT '0',
  `slug` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tx_impexp_origuid` int NOT NULL DEFAULT '0',
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `no_index` smallint NOT NULL DEFAULT '0',
  `no_follow` smallint NOT NULL DEFAULT '0',
  `og_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `og_description` text COLLATE utf8mb4_unicode_ci,
  `og_image` int UNSIGNED NOT NULL DEFAULT '0',
  `twitter_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `twitter_description` text COLLATE utf8mb4_unicode_ci,
  `twitter_image` int UNSIGNED NOT NULL DEFAULT '0',
  `twitter_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `canonical_link` varchar(2048) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `sitemap_priority` decimal(2,1) NOT NULL DEFAULT '0.5',
  `sitemap_changefreq` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_be_shortcuts`
--

DROP TABLE IF EXISTS `sys_be_shortcuts`;
CREATE TABLE `sys_be_shortcuts` (
  `uid` int UNSIGNED NOT NULL,
  `userid` int UNSIGNED NOT NULL DEFAULT '0',
  `route` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `arguments` text COLLATE utf8mb4_unicode_ci,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `sorting` int NOT NULL DEFAULT '0',
  `sc_group` smallint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_category`
--

DROP TABLE IF EXISTS `sys_category`;
CREATE TABLE `sys_category` (
  `uid` int UNSIGNED NOT NULL,
  `pid` int UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int UNSIGNED NOT NULL DEFAULT '0',
  `deleted` smallint UNSIGNED NOT NULL DEFAULT '0',
  `hidden` smallint UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int UNSIGNED NOT NULL DEFAULT '0',
  `sorting` int NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `sys_language_uid` int NOT NULL DEFAULT '0',
  `l10n_parent` int UNSIGNED NOT NULL DEFAULT '0',
  `l10n_state` text COLLATE utf8mb4_unicode_ci,
  `t3_origuid` int UNSIGNED NOT NULL DEFAULT '0',
  `l10n_diffsource` mediumblob,
  `t3ver_oid` int UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_wsid` int UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_state` smallint NOT NULL DEFAULT '0',
  `t3ver_stage` int NOT NULL DEFAULT '0',
  `title` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `items` int NOT NULL DEFAULT '0',
  `parent` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_category_record_mm`
--

DROP TABLE IF EXISTS `sys_category_record_mm`;
CREATE TABLE `sys_category_record_mm` (
  `uid_local` int UNSIGNED NOT NULL DEFAULT '0',
  `uid_foreign` int UNSIGNED NOT NULL DEFAULT '0',
  `tablenames` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `fieldname` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `sorting` int UNSIGNED NOT NULL DEFAULT '0',
  `sorting_foreign` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_csp_resolution`
--

DROP TABLE IF EXISTS `sys_csp_resolution`;
CREATE TABLE `sys_csp_resolution` (
  `summary` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` int UNSIGNED NOT NULL,
  `scope` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mutation_identifier` text COLLATE utf8mb4_unicode_ci,
  `mutation_collection` mediumtext COLLATE utf8mb4_unicode_ci,
  `meta` mediumtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_file`
--

DROP TABLE IF EXISTS `sys_file`;
CREATE TABLE `sys_file` (
  `uid` int UNSIGNED NOT NULL,
  `pid` int UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int UNSIGNED NOT NULL DEFAULT '0',
  `last_indexed` int NOT NULL DEFAULT '0',
  `missing` smallint NOT NULL DEFAULT '0',
  `storage` int NOT NULL DEFAULT '0',
  `type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `metadata` int NOT NULL DEFAULT '0',
  `identifier` text COLLATE utf8mb4_unicode_ci,
  `identifier_hash` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `folder_hash` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `extension` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `name` tinytext COLLATE utf8mb4_unicode_ci,
  `sha1` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `size` bigint UNSIGNED NOT NULL DEFAULT '0',
  `creation_date` int NOT NULL DEFAULT '0',
  `modification_date` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_filemounts`
--

DROP TABLE IF EXISTS `sys_filemounts`;
CREATE TABLE `sys_filemounts` (
  `uid` int UNSIGNED NOT NULL,
  `pid` int UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int UNSIGNED NOT NULL DEFAULT '0',
  `deleted` smallint UNSIGNED NOT NULL DEFAULT '0',
  `hidden` smallint UNSIGNED NOT NULL DEFAULT '0',
  `sorting` int NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `identifier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `read_only` smallint UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_file_collection`
--

DROP TABLE IF EXISTS `sys_file_collection`;
CREATE TABLE `sys_file_collection` (
  `uid` int UNSIGNED NOT NULL,
  `pid` int UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int UNSIGNED NOT NULL DEFAULT '0',
  `deleted` smallint UNSIGNED NOT NULL DEFAULT '0',
  `hidden` smallint UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int UNSIGNED NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `sys_language_uid` int NOT NULL DEFAULT '0',
  `l10n_parent` int UNSIGNED NOT NULL DEFAULT '0',
  `l10n_state` text COLLATE utf8mb4_unicode_ci,
  `t3_origuid` int UNSIGNED NOT NULL DEFAULT '0',
  `l10n_diffsource` mediumblob,
  `t3ver_oid` int UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_wsid` int UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_state` smallint NOT NULL DEFAULT '0',
  `t3ver_stage` int NOT NULL DEFAULT '0',
  `title` tinytext COLLATE utf8mb4_unicode_ci,
  `type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'static',
  `files` int NOT NULL DEFAULT '0',
  `folder_identifier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `recursive` smallint NOT NULL DEFAULT '0',
  `category` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_file_metadata`
--

DROP TABLE IF EXISTS `sys_file_metadata`;
CREATE TABLE `sys_file_metadata` (
  `uid` int UNSIGNED NOT NULL,
  `pid` int UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int UNSIGNED NOT NULL DEFAULT '0',
  `sys_language_uid` int NOT NULL DEFAULT '0',
  `l10n_parent` int UNSIGNED NOT NULL DEFAULT '0',
  `l10n_state` text COLLATE utf8mb4_unicode_ci,
  `t3_origuid` int UNSIGNED NOT NULL DEFAULT '0',
  `l10n_diffsource` mediumblob,
  `t3ver_oid` int UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_wsid` int UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_state` smallint NOT NULL DEFAULT '0',
  `t3ver_stage` int NOT NULL DEFAULT '0',
  `file` int NOT NULL DEFAULT '0',
  `title` tinytext COLLATE utf8mb4_unicode_ci,
  `width` int NOT NULL DEFAULT '0',
  `height` int NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `alternative` text COLLATE utf8mb4_unicode_ci,
  `categories` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_file_processedfile`
--

DROP TABLE IF EXISTS `sys_file_processedfile`;
CREATE TABLE `sys_file_processedfile` (
  `uid` int NOT NULL,
  `tstamp` int NOT NULL DEFAULT '0',
  `crdate` int NOT NULL DEFAULT '0',
  `storage` int NOT NULL DEFAULT '0',
  `original` int NOT NULL DEFAULT '0',
  `identifier` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `name` tinytext COLLATE utf8mb4_unicode_ci,
  `processing_url` text COLLATE utf8mb4_unicode_ci,
  `configuration` blob,
  `configurationsha1` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `originalfilesha1` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `task_type` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `checksum` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `width` int DEFAULT '0',
  `height` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_file_reference`
--

DROP TABLE IF EXISTS `sys_file_reference`;
CREATE TABLE `sys_file_reference` (
  `uid` int UNSIGNED NOT NULL,
  `pid` int UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int UNSIGNED NOT NULL DEFAULT '0',
  `deleted` smallint UNSIGNED NOT NULL DEFAULT '0',
  `hidden` smallint UNSIGNED NOT NULL DEFAULT '0',
  `sys_language_uid` int NOT NULL DEFAULT '0',
  `l10n_parent` int UNSIGNED NOT NULL DEFAULT '0',
  `l10n_state` text COLLATE utf8mb4_unicode_ci,
  `l10n_diffsource` mediumblob,
  `t3ver_oid` int UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_wsid` int UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_state` smallint NOT NULL DEFAULT '0',
  `t3ver_stage` int NOT NULL DEFAULT '0',
  `uid_local` int NOT NULL DEFAULT '0',
  `uid_foreign` int NOT NULL DEFAULT '0',
  `tablenames` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `fieldname` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `sorting_foreign` int NOT NULL DEFAULT '0',
  `title` tinytext COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `alternative` text COLLATE utf8mb4_unicode_ci,
  `link` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `crop` varchar(4000) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `autoplay` smallint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_file_storage`
--

DROP TABLE IF EXISTS `sys_file_storage`;
CREATE TABLE `sys_file_storage` (
  `uid` int UNSIGNED NOT NULL,
  `pid` int UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int UNSIGNED NOT NULL DEFAULT '0',
  `deleted` smallint UNSIGNED NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `driver` tinytext COLLATE utf8mb4_unicode_ci,
  `configuration` text COLLATE utf8mb4_unicode_ci,
  `is_default` smallint NOT NULL DEFAULT '0',
  `is_browsable` smallint NOT NULL DEFAULT '0',
  `is_public` smallint NOT NULL DEFAULT '0',
  `is_writable` smallint NOT NULL DEFAULT '0',
  `is_online` smallint NOT NULL DEFAULT '1',
  `auto_extract_metadata` smallint NOT NULL DEFAULT '1',
  `processingfolder` tinytext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_history`
--

DROP TABLE IF EXISTS `sys_history`;
CREATE TABLE `sys_history` (
  `uid` int UNSIGNED NOT NULL,
  `tstamp` int UNSIGNED NOT NULL DEFAULT '0',
  `actiontype` smallint NOT NULL DEFAULT '0',
  `usertype` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'BE',
  `userid` int UNSIGNED DEFAULT NULL,
  `originaluserid` int UNSIGNED DEFAULT NULL,
  `recuid` int NOT NULL DEFAULT '0',
  `tablename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `history_data` mediumtext COLLATE utf8mb4_unicode_ci,
  `workspace` int DEFAULT '0',
  `correlation_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_http_report`
--

DROP TABLE IF EXISTS `sys_http_report`;
CREATE TABLE `sys_http_report` (
  `uuid` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` smallint UNSIGNED NOT NULL DEFAULT '0',
  `created` int UNSIGNED NOT NULL,
  `changed` int UNSIGNED NOT NULL,
  `type` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scope` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `request_time` bigint UNSIGNED NOT NULL,
  `meta` mediumtext COLLATE utf8mb4_unicode_ci,
  `details` mediumtext COLLATE utf8mb4_unicode_ci,
  `summary` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `sys_http_report`
--

INSERT INTO `sys_http_report` (`uuid`, `status`, `created`, `changed`, `type`, `scope`, `request_time`, `meta`, `details`, `summary`) VALUES
('4ce11ac8-03f2-4ca8-83bb-7cd126856a1b', 0, 1697659183, 1697659183, 'csp-report', 'backend', 1697659183327135, '{\"addr\":\"172.30.0.0\",\"agent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/118.0.0.0 Safari\\/537.36\"}', '{\"document-uri\":\"https:\\/\\/foobar.dev.gandayo.com\\/typo3\\/main\",\"referrer\":\"https:\\/\\/foobar.dev.gandayo.com\\/typo3\\/index.php\",\"violated-directive\":\"font-src\",\"effective-directive\":\"font-src\",\"original-policy\":\"frame-src \'self\' *.youtube-nocookie.com *.youtube.com *.vimeo.com blob:; img-src \'self\' *.ytimg.com *.vimeocdn.com data: https:\\/\\/extensions.typo3.org; default-src \'self\'; script-src \'self\' \'nonce-OKLwPpaXzBcO2ck_iNJ-Lxa-bKOvPVqmy_wcfmtucwiTDO2dVpuGtQ\' \'report-sample\'; style-src \'self\' \'unsafe-inline\' \'report-sample\'; style-src-attr \'unsafe-inline\' \'report-sample\'; worker-src \'self\' blob:; base-uri \'none\'; object-src \'none\'; report-uri https:\\/\\/foobar.dev.gandayo.com\\/typo3\\/@http-reporting?csp=report&requestTime=1697659183327135\",\"disposition\":\"enforce\",\"blocked-uri\":\"data\",\"line-number\":1676,\"source-file\":\"https:\\/\\/foobar.dev.gandayo.com\\/typo3\\/main\",\"status-code\":200,\"script-sample\":\"\"}', 'beeae170dd92ae2533b4b115b77dbc9decdb8935'),
('6e6f24f4-bdf6-4f28-a192-c06802285107', 0, 1697659191, 1697659191, 'csp-report', 'backend', 1697659191630907, '{\"addr\":\"172.30.0.0\",\"agent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/118.0.0.0 Safari\\/537.36\"}', '{\"document-uri\":\"https:\\/\\/foobar.dev.gandayo.com\\/typo3\\/login\",\"referrer\":\"https:\\/\\/foobar.dev.gandayo.com\\/typo3\\/module\\/tools\\/maintenance\",\"violated-directive\":\"font-src\",\"effective-directive\":\"font-src\",\"original-policy\":\"frame-src \'self\' *.youtube-nocookie.com *.youtube.com *.vimeo.com blob:; img-src \'self\' *.ytimg.com *.vimeocdn.com data: https:\\/\\/extensions.typo3.org; default-src \'self\'; script-src \'self\' \'nonce-iWHe3_U4iCDEeW4n2JdQoGfM968FiTOX9NoRG85HMgCaLwtb-3DAAw\' \'report-sample\'; style-src \'self\' \'unsafe-inline\' \'report-sample\'; style-src-attr \'unsafe-inline\' \'report-sample\'; worker-src \'self\' blob:; base-uri \'none\'; object-src \'none\'; report-uri https:\\/\\/foobar.dev.gandayo.com\\/typo3\\/@http-reporting?csp=report&requestTime=1697659191630907\",\"disposition\":\"enforce\",\"blocked-uri\":\"data\",\"line-number\":43,\"source-file\":\"https:\\/\\/foobar.dev.gandayo.com\\/typo3\\/login\",\"status-code\":200,\"script-sample\":\"\"}', 'beeae170dd92ae2533b4b115b77dbc9decdb8935');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_lockedrecords`
--

DROP TABLE IF EXISTS `sys_lockedrecords`;
CREATE TABLE `sys_lockedrecords` (
  `uid` int UNSIGNED NOT NULL,
  `userid` int UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int UNSIGNED NOT NULL DEFAULT '0',
  `record_table` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `record_uid` int NOT NULL DEFAULT '0',
  `record_pid` int NOT NULL DEFAULT '0',
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `feuserid` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_log`
--

DROP TABLE IF EXISTS `sys_log`;
CREATE TABLE `sys_log` (
  `uid` int UNSIGNED NOT NULL,
  `pid` int UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int UNSIGNED NOT NULL DEFAULT '0',
  `userid` int UNSIGNED NOT NULL DEFAULT '0',
  `action` smallint UNSIGNED NOT NULL DEFAULT '0',
  `recuid` int UNSIGNED NOT NULL DEFAULT '0',
  `tablename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `recpid` int NOT NULL DEFAULT '0',
  `error` smallint UNSIGNED NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` smallint UNSIGNED NOT NULL DEFAULT '0',
  `channel` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default',
  `details_nr` smallint NOT NULL DEFAULT '0',
  `IP` varchar(39) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `log_data` text COLLATE utf8mb4_unicode_ci,
  `event_pid` int NOT NULL DEFAULT '-1',
  `workspace` int NOT NULL DEFAULT '0',
  `NEWid` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `request_id` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `time_micro` double NOT NULL DEFAULT '0',
  `component` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `level` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'info',
  `message` text COLLATE utf8mb4_unicode_ci,
  `data` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `sys_log`
--

INSERT INTO `sys_log` (`uid`, `pid`, `tstamp`, `userid`, `action`, `recuid`, `tablename`, `recpid`, `error`, `details`, `type`, `channel`, `details_nr`, `IP`, `log_data`, `event_pid`, `workspace`, `NEWid`, `request_id`, `time_micro`, `component`, `level`, `message`, `data`) VALUES
(1, 0, 1697659182, 1, 1, 0, '', 0, 0, 'User %s logged in from ###IP###', 255, 'user', 1, '172.30.0.28', '[\"gandayo\"]', -1, -99, '', '', 0, '', 'info', NULL, NULL),
(2, 0, 1697659191, 1, 2, 0, '', 0, 0, 'User %s logged out from TYPO3 Backend', 255, 'user', 1, '172.30.0.28', '[\"gandayo\"]', -1, 0, '', '', 0, '', 'info', NULL, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_messenger_messages`
--

DROP TABLE IF EXISTS `sys_messenger_messages`;
CREATE TABLE `sys_messenger_messages` (
  `id` int UNSIGNED NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_news`
--

DROP TABLE IF EXISTS `sys_news`;
CREATE TABLE `sys_news` (
  `uid` int UNSIGNED NOT NULL,
  `pid` int UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int UNSIGNED NOT NULL DEFAULT '0',
  `deleted` smallint UNSIGNED NOT NULL DEFAULT '0',
  `hidden` smallint UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int UNSIGNED NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `content` mediumtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_note`
--

DROP TABLE IF EXISTS `sys_note`;
CREATE TABLE `sys_note` (
  `uid` int UNSIGNED NOT NULL,
  `pid` int UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int UNSIGNED NOT NULL DEFAULT '0',
  `deleted` smallint UNSIGNED NOT NULL DEFAULT '0',
  `sorting` int NOT NULL DEFAULT '0',
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `cruser` int UNSIGNED NOT NULL DEFAULT '0',
  `message` text COLLATE utf8mb4_unicode_ci,
  `personal` smallint UNSIGNED NOT NULL DEFAULT '0',
  `category` smallint UNSIGNED NOT NULL DEFAULT '0',
  `position` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_redirect`
--

DROP TABLE IF EXISTS `sys_redirect`;
CREATE TABLE `sys_redirect` (
  `uid` int UNSIGNED NOT NULL,
  `pid` int UNSIGNED NOT NULL DEFAULT '0',
  `updatedon` int UNSIGNED NOT NULL DEFAULT '0',
  `createdon` int UNSIGNED NOT NULL DEFAULT '0',
  `deleted` smallint UNSIGNED NOT NULL DEFAULT '0',
  `disabled` smallint UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int UNSIGNED NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `source_host` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `source_path` varchar(2048) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `is_regexp` smallint UNSIGNED NOT NULL DEFAULT '0',
  `protected` smallint UNSIGNED NOT NULL DEFAULT '0',
  `creation_type` int UNSIGNED NOT NULL DEFAULT '0',
  `force_https` smallint UNSIGNED NOT NULL DEFAULT '0',
  `respect_query_parameters` smallint UNSIGNED NOT NULL DEFAULT '0',
  `keep_query_parameters` smallint UNSIGNED NOT NULL DEFAULT '0',
  `target` varchar(2048) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `target_statuscode` int NOT NULL DEFAULT '307',
  `hitcount` int NOT NULL DEFAULT '0',
  `disable_hitcount` smallint UNSIGNED NOT NULL DEFAULT '0',
  `lasthiton` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_refindex`
--

DROP TABLE IF EXISTS `sys_refindex`;
CREATE TABLE `sys_refindex` (
  `hash` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `tablename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `recuid` int NOT NULL DEFAULT '0',
  `field` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `flexpointer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `softref_key` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `softref_id` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `sorting` int NOT NULL DEFAULT '0',
  `workspace` int NOT NULL DEFAULT '0',
  `ref_table` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `ref_uid` int NOT NULL DEFAULT '0',
  `ref_string` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_registry`
--

DROP TABLE IF EXISTS `sys_registry`;
CREATE TABLE `sys_registry` (
  `uid` int UNSIGNED NOT NULL,
  `entry_namespace` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `entry_key` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `entry_value` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `sys_registry`
--

INSERT INTO `sys_registry` (`uid`, `entry_namespace`, `entry_key`, `entry_value`) VALUES
(1, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\BackendGroupsExplicitAllowDenyMigration', 0x693a313b),
(2, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\BackendModulePermissionMigration', 0x693a313b),
(3, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\BackendUserLanguageMigration', 0x693a313b),
(4, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\FeLoginModeExtractionUpdate', 0x693a313b),
(5, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\CollectionsExtractionUpdate', 0x693a313b),
(6, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\MigrateSiteSettingsConfigUpdate', 0x693a313b),
(7, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\PasswordPolicyForFrontendUsersUpdate', 0x693a313b),
(8, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\ShortcutRecordsMigration', 0x693a313b),
(9, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\SvgFilesSanitization', 0x693a313b),
(10, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\SysFileCollectionIdentifierMigration', 0x693a313b),
(11, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\SysFileMountIdentifierMigration', 0x693a313b),
(12, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\SysLogChannel', 0x693a313b),
(13, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\SysLogSerializationUpdate', 0x693a313b),
(14, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\SysTemplateNoWorkspaceMigration', 0x693a313b),
(15, 'installUpdateRows', 'rowUpdatersDone', 0x613a343a7b693a303b733a36363a225459504f335c434d535c496e7374616c6c5c557064617465735c526f77557064617465725c4c31386e44696666736f75726365546f4a736f6e4d6967726174696f6e223b693a313b733a37373a225459504f335c434d535c496e7374616c6c5c557064617465735c526f77557064617465725c576f726b73706163654d6f7665506c616365686f6c64657252656d6f76616c4d6967726174696f6e223b693a323b733a37363a225459504f335c434d535c496e7374616c6c5c557064617465735c526f77557064617465725c576f726b73706163654e6577506c616365686f6c64657252656d6f76616c4d6967726174696f6e223b693a333b733a36393a225459504f335c434d535c496e7374616c6c5c557064617465735c526f77557064617465725c5379735265646972656374526f6f74506167654d6f76654d6967726174696f6e223b7d);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_template`
--

DROP TABLE IF EXISTS `sys_template`;
CREATE TABLE `sys_template` (
  `uid` int UNSIGNED NOT NULL,
  `pid` int UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int UNSIGNED NOT NULL DEFAULT '0',
  `deleted` smallint UNSIGNED NOT NULL DEFAULT '0',
  `hidden` smallint UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int UNSIGNED NOT NULL DEFAULT '0',
  `sorting` int NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `t3_origuid` int UNSIGNED NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `root` smallint UNSIGNED NOT NULL DEFAULT '0',
  `clear` smallint UNSIGNED NOT NULL DEFAULT '0',
  `include_static_file` text COLLATE utf8mb4_unicode_ci,
  `constants` text COLLATE utf8mb4_unicode_ci,
  `config` text COLLATE utf8mb4_unicode_ci,
  `basedOn` tinytext COLLATE utf8mb4_unicode_ci,
  `includeStaticAfterBasedOn` smallint UNSIGNED NOT NULL DEFAULT '0',
  `static_file_mode` smallint UNSIGNED NOT NULL DEFAULT '0',
  `tx_impexp_origuid` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tt_content`
--

DROP TABLE IF EXISTS `tt_content`;
CREATE TABLE `tt_content` (
  `uid` int UNSIGNED NOT NULL,
  `rowDescription` text COLLATE utf8mb4_unicode_ci,
  `pid` int UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int UNSIGNED NOT NULL DEFAULT '0',
  `deleted` smallint UNSIGNED NOT NULL DEFAULT '0',
  `hidden` smallint UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int UNSIGNED NOT NULL DEFAULT '0',
  `fe_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `sorting` int NOT NULL DEFAULT '0',
  `editlock` smallint UNSIGNED NOT NULL DEFAULT '0',
  `sys_language_uid` int NOT NULL DEFAULT '0',
  `l18n_parent` int UNSIGNED NOT NULL DEFAULT '0',
  `l10n_source` int UNSIGNED NOT NULL DEFAULT '0',
  `l10n_state` text COLLATE utf8mb4_unicode_ci,
  `t3_origuid` int UNSIGNED NOT NULL DEFAULT '0',
  `l18n_diffsource` mediumblob,
  `t3ver_oid` int UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_wsid` int UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_state` smallint NOT NULL DEFAULT '0',
  `t3ver_stage` int NOT NULL DEFAULT '0',
  `CType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `header` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `header_position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `bodytext` mediumtext COLLATE utf8mb4_unicode_ci,
  `bullets_type` smallint UNSIGNED NOT NULL DEFAULT '0',
  `uploads_description` smallint UNSIGNED NOT NULL DEFAULT '0',
  `uploads_type` smallint UNSIGNED NOT NULL DEFAULT '0',
  `assets` int UNSIGNED NOT NULL DEFAULT '0',
  `image` int UNSIGNED NOT NULL DEFAULT '0',
  `imagewidth` int UNSIGNED NOT NULL DEFAULT '0',
  `imageorient` smallint UNSIGNED NOT NULL DEFAULT '0',
  `imagecols` smallint UNSIGNED NOT NULL DEFAULT '0',
  `imageborder` smallint UNSIGNED NOT NULL DEFAULT '0',
  `media` int UNSIGNED NOT NULL DEFAULT '0',
  `layout` int UNSIGNED NOT NULL DEFAULT '0',
  `frame_class` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default',
  `cols` int UNSIGNED NOT NULL DEFAULT '0',
  `space_before_class` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `space_after_class` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `records` text COLLATE utf8mb4_unicode_ci,
  `pages` text COLLATE utf8mb4_unicode_ci,
  `colPos` int UNSIGNED NOT NULL DEFAULT '0',
  `subheader` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `header_link` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `image_zoom` smallint UNSIGNED NOT NULL DEFAULT '0',
  `header_layout` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `list_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `sectionIndex` smallint UNSIGNED NOT NULL DEFAULT '0',
  `linkToTop` smallint UNSIGNED NOT NULL DEFAULT '0',
  `file_collections` text COLLATE utf8mb4_unicode_ci,
  `filelink_size` smallint UNSIGNED NOT NULL DEFAULT '0',
  `filelink_sorting` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `filelink_sorting_direction` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `target` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `recursive` smallint UNSIGNED NOT NULL DEFAULT '0',
  `imageheight` int UNSIGNED NOT NULL DEFAULT '0',
  `pi_flexform` mediumtext COLLATE utf8mb4_unicode_ci,
  `accessibility_title` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `accessibility_bypass` smallint UNSIGNED NOT NULL DEFAULT '0',
  `accessibility_bypass_text` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `category_field` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `table_class` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `table_caption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `table_delimiter` smallint UNSIGNED NOT NULL DEFAULT '0',
  `table_enclosure` smallint UNSIGNED NOT NULL DEFAULT '0',
  `table_header_position` smallint UNSIGNED NOT NULL DEFAULT '0',
  `table_tfoot` smallint UNSIGNED NOT NULL DEFAULT '0',
  `categories` int UNSIGNED NOT NULL DEFAULT '0',
  `selected_categories` longtext COLLATE utf8mb4_unicode_ci,
  `date` int NOT NULL DEFAULT '0',
  `tx_impexp_origuid` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tx_extensionmanager_domain_model_extension`
--

DROP TABLE IF EXISTS `tx_extensionmanager_domain_model_extension`;
CREATE TABLE `tx_extensionmanager_domain_model_extension` (
  `uid` int UNSIGNED NOT NULL,
  `pid` int UNSIGNED NOT NULL DEFAULT '0',
  `extension_key` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `repository` int NOT NULL DEFAULT '1',
  `remote` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ter',
  `version` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `alldownloadcounter` int UNSIGNED NOT NULL DEFAULT '0',
  `downloadcounter` int UNSIGNED NOT NULL DEFAULT '0',
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` mediumtext COLLATE utf8mb4_unicode_ci,
  `state` int NOT NULL DEFAULT '0',
  `review_state` int NOT NULL DEFAULT '0',
  `category` int NOT NULL DEFAULT '0',
  `serialized_dependencies` mediumtext COLLATE utf8mb4_unicode_ci,
  `author_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `author_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `ownerusername` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `md5hash` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `update_comment` mediumtext COLLATE utf8mb4_unicode_ci,
  `authorcompany` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `integer_version` int NOT NULL DEFAULT '0',
  `current_version` int NOT NULL DEFAULT '0',
  `lastreviewedversion` int NOT NULL DEFAULT '0',
  `documentation_link` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `distribution_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `distribution_welcome_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_updated` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tx_impexp_presets`
--

DROP TABLE IF EXISTS `tx_impexp_presets`;
CREATE TABLE `tx_impexp_presets` (
  `uid` int UNSIGNED NOT NULL,
  `pid` int UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int UNSIGNED NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `public` smallint NOT NULL DEFAULT '0',
  `item_uid` int NOT NULL DEFAULT '0',
  `user_uid` int UNSIGNED NOT NULL DEFAULT '0',
  `preset_data` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `backend_layout`
--
ALTER TABLE `backend_layout`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`,`deleted`,`hidden`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`);

--
-- Indizes für die Tabelle `be_dashboards`
--
ALTER TABLE `be_dashboards`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `identifier` (`identifier`),
  ADD KEY `parent` (`pid`,`deleted`,`hidden`);

--
-- Indizes für die Tabelle `be_groups`
--
ALTER TABLE `be_groups`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`,`deleted`,`hidden`);

--
-- Indizes für die Tabelle `be_sessions`
--
ALTER TABLE `be_sessions`
  ADD PRIMARY KEY (`ses_id`),
  ADD KEY `ses_tstamp` (`ses_tstamp`);

--
-- Indizes für die Tabelle `be_users`
--
ALTER TABLE `be_users`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `username` (`username`),
  ADD KEY `parent` (`pid`,`deleted`,`disable`);

--
-- Indizes für die Tabelle `cache_adminpanel_requestcache`
--
ALTER TABLE `cache_adminpanel_requestcache`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`(180),`expires`);

--
-- Indizes für die Tabelle `cache_adminpanel_requestcache_tags`
--
ALTER TABLE `cache_adminpanel_requestcache_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`(191)),
  ADD KEY `cache_tag` (`tag`(191));

--
-- Indizes für die Tabelle `cache_hash`
--
ALTER TABLE `cache_hash`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`(180),`expires`);

--
-- Indizes für die Tabelle `cache_hash_tags`
--
ALTER TABLE `cache_hash_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`(191)),
  ADD KEY `cache_tag` (`tag`(191));

--
-- Indizes für die Tabelle `cache_imagesizes`
--
ALTER TABLE `cache_imagesizes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`(180),`expires`);

--
-- Indizes für die Tabelle `cache_imagesizes_tags`
--
ALTER TABLE `cache_imagesizes_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`(191)),
  ADD KEY `cache_tag` (`tag`(191));

--
-- Indizes für die Tabelle `cache_pages`
--
ALTER TABLE `cache_pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`(180),`expires`);

--
-- Indizes für die Tabelle `cache_pages_tags`
--
ALTER TABLE `cache_pages_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`(191)),
  ADD KEY `cache_tag` (`tag`(191));

--
-- Indizes für die Tabelle `cache_rootline`
--
ALTER TABLE `cache_rootline`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`(180),`expires`);

--
-- Indizes für die Tabelle `cache_rootline_tags`
--
ALTER TABLE `cache_rootline_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`(191)),
  ADD KEY `cache_tag` (`tag`(191));

--
-- Indizes für die Tabelle `cache_treelist`
--
ALTER TABLE `cache_treelist`
  ADD PRIMARY KEY (`md5hash`);

--
-- Indizes für die Tabelle `fe_groups`
--
ALTER TABLE `fe_groups`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`,`deleted`,`hidden`);

--
-- Indizes für die Tabelle `fe_sessions`
--
ALTER TABLE `fe_sessions`
  ADD PRIMARY KEY (`ses_id`),
  ADD KEY `ses_tstamp` (`ses_tstamp`);

--
-- Indizes für die Tabelle `fe_users`
--
ALTER TABLE `fe_users`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`,`username`(100)),
  ADD KEY `username` (`username`(100)),
  ADD KEY `is_online` (`is_online`),
  ADD KEY `felogin_forgotHash` (`felogin_forgotHash`);

--
-- Indizes für die Tabelle `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `determineSiteRoot` (`is_siteroot`),
  ADD KEY `language_identifier` (`l10n_parent`,`sys_language_uid`),
  ADD KEY `slug` (`slug`(127)),
  ADD KEY `parent` (`pid`,`deleted`,`hidden`),
  ADD KEY `translation_source` (`l10n_source`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`);

--
-- Indizes für die Tabelle `sys_be_shortcuts`
--
ALTER TABLE `sys_be_shortcuts`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `event` (`userid`);

--
-- Indizes für die Tabelle `sys_category`
--
ALTER TABLE `sys_category`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `category_parent` (`parent`),
  ADD KEY `category_list` (`pid`,`deleted`,`sys_language_uid`),
  ADD KEY `parent` (`pid`,`deleted`,`hidden`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`);

--
-- Indizes für die Tabelle `sys_category_record_mm`
--
ALTER TABLE `sys_category_record_mm`
  ADD PRIMARY KEY (`uid_local`,`uid_foreign`,`tablenames`,`fieldname`),
  ADD KEY `uid_local` (`uid_local`),
  ADD KEY `uid_foreign` (`uid_foreign`);

--
-- Indizes für die Tabelle `sys_csp_resolution`
--
ALTER TABLE `sys_csp_resolution`
  ADD PRIMARY KEY (`summary`),
  ADD KEY `created` (`created`);

--
-- Indizes für die Tabelle `sys_file`
--
ALTER TABLE `sys_file`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `sel01` (`storage`,`identifier_hash`),
  ADD KEY `folder` (`storage`,`folder_hash`),
  ADD KEY `tstamp` (`tstamp`),
  ADD KEY `lastindex` (`last_indexed`),
  ADD KEY `sha1` (`sha1`),
  ADD KEY `parent` (`pid`);

--
-- Indizes für die Tabelle `sys_filemounts`
--
ALTER TABLE `sys_filemounts`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`,`deleted`,`hidden`);

--
-- Indizes für die Tabelle `sys_file_collection`
--
ALTER TABLE `sys_file_collection`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`,`deleted`,`hidden`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`);

--
-- Indizes für die Tabelle `sys_file_metadata`
--
ALTER TABLE `sys_file_metadata`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `file` (`file`),
  ADD KEY `fal_filelist` (`l10n_parent`,`sys_language_uid`),
  ADD KEY `parent` (`pid`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`);

--
-- Indizes für die Tabelle `sys_file_processedfile`
--
ALTER TABLE `sys_file_processedfile`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `combined_1` (`original`,`task_type`(100),`configurationsha1`),
  ADD KEY `identifier` (`storage`,`identifier`(180));

--
-- Indizes für die Tabelle `sys_file_reference`
--
ALTER TABLE `sys_file_reference`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `tablenames_fieldname` (`tablenames`(32),`fieldname`(12)),
  ADD KEY `deleted` (`deleted`),
  ADD KEY `uid_local` (`uid_local`),
  ADD KEY `uid_foreign` (`uid_foreign`),
  ADD KEY `combined_1` (`l10n_parent`,`t3ver_oid`,`t3ver_wsid`,`t3ver_state`,`deleted`),
  ADD KEY `parent` (`pid`,`deleted`,`hidden`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`);

--
-- Indizes für die Tabelle `sys_file_storage`
--
ALTER TABLE `sys_file_storage`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`,`deleted`);

--
-- Indizes für die Tabelle `sys_history`
--
ALTER TABLE `sys_history`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `recordident_1` (`tablename`(100),`recuid`),
  ADD KEY `recordident_2` (`tablename`(100),`tstamp`);

--
-- Indizes für die Tabelle `sys_http_report`
--
ALTER TABLE `sys_http_report`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `type_scope` (`type`,`scope`),
  ADD KEY `created` (`created`),
  ADD KEY `changed` (`changed`),
  ADD KEY `request_time` (`request_time`);

--
-- Indizes für die Tabelle `sys_lockedrecords`
--
ALTER TABLE `sys_lockedrecords`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `event` (`userid`,`tstamp`);

--
-- Indizes für die Tabelle `sys_log`
--
ALTER TABLE `sys_log`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `event` (`userid`,`event_pid`),
  ADD KEY `recuidIdx` (`recuid`),
  ADD KEY `user_auth` (`type`,`action`,`tstamp`),
  ADD KEY `request` (`request_id`),
  ADD KEY `combined_1` (`tstamp`,`type`,`userid`),
  ADD KEY `errorcount` (`tstamp`,`error`),
  ADD KEY `channel` (`channel`),
  ADD KEY `level` (`level`),
  ADD KEY `parent` (`pid`);

--
-- Indizes für die Tabelle `sys_messenger_messages`
--
ALTER TABLE `sys_messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `queue_name` (`queue_name`),
  ADD KEY `available_at` (`available_at`),
  ADD KEY `delivered_at` (`delivered_at`);

--
-- Indizes für die Tabelle `sys_news`
--
ALTER TABLE `sys_news`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`,`deleted`,`hidden`);

--
-- Indizes für die Tabelle `sys_note`
--
ALTER TABLE `sys_note`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`,`deleted`);

--
-- Indizes für die Tabelle `sys_redirect`
--
ALTER TABLE `sys_redirect`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `index_source` (`source_host`(80),`source_path`(80)),
  ADD KEY `parent` (`pid`,`deleted`,`disabled`);

--
-- Indizes für die Tabelle `sys_refindex`
--
ALTER TABLE `sys_refindex`
  ADD PRIMARY KEY (`hash`),
  ADD KEY `lookup_rec` (`tablename`(100),`recuid`),
  ADD KEY `lookup_uid` (`ref_table`(100),`ref_uid`),
  ADD KEY `lookup_string` (`ref_string`(191));

--
-- Indizes für die Tabelle `sys_registry`
--
ALTER TABLE `sys_registry`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `entry_identifier` (`entry_namespace`,`entry_key`);

--
-- Indizes für die Tabelle `sys_template`
--
ALTER TABLE `sys_template`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `roottemplate` (`deleted`,`hidden`,`root`),
  ADD KEY `parent` (`pid`,`deleted`,`hidden`);

--
-- Indizes für die Tabelle `tt_content`
--
ALTER TABLE `tt_content`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`,`sorting`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`),
  ADD KEY `language` (`l18n_parent`,`sys_language_uid`),
  ADD KEY `translation_source` (`l10n_source`);

--
-- Indizes für die Tabelle `tx_extensionmanager_domain_model_extension`
--
ALTER TABLE `tx_extensionmanager_domain_model_extension`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `versionextrepo` (`extension_key`,`version`,`remote`),
  ADD KEY `index_extrepo` (`extension_key`,`remote`),
  ADD KEY `index_versionrepo` (`integer_version`,`remote`,`extension_key`),
  ADD KEY `index_currentversions` (`current_version`,`review_state`),
  ADD KEY `parent` (`pid`);

--
-- Indizes für die Tabelle `tx_impexp_presets`
--
ALTER TABLE `tx_impexp_presets`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `lookup` (`item_uid`),
  ADD KEY `parent` (`pid`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `backend_layout`
--
ALTER TABLE `backend_layout`
  MODIFY `uid` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `be_dashboards`
--
ALTER TABLE `be_dashboards`
  MODIFY `uid` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `be_groups`
--
ALTER TABLE `be_groups`
  MODIFY `uid` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `be_users`
--
ALTER TABLE `be_users`
  MODIFY `uid` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `cache_adminpanel_requestcache`
--
ALTER TABLE `cache_adminpanel_requestcache`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `cache_adminpanel_requestcache_tags`
--
ALTER TABLE `cache_adminpanel_requestcache_tags`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `cache_hash`
--
ALTER TABLE `cache_hash`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `cache_hash_tags`
--
ALTER TABLE `cache_hash_tags`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `cache_imagesizes`
--
ALTER TABLE `cache_imagesizes`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `cache_imagesizes_tags`
--
ALTER TABLE `cache_imagesizes_tags`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `cache_pages`
--
ALTER TABLE `cache_pages`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `cache_pages_tags`
--
ALTER TABLE `cache_pages_tags`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `cache_rootline`
--
ALTER TABLE `cache_rootline`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `cache_rootline_tags`
--
ALTER TABLE `cache_rootline_tags`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `fe_groups`
--
ALTER TABLE `fe_groups`
  MODIFY `uid` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `fe_users`
--
ALTER TABLE `fe_users`
  MODIFY `uid` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `pages`
--
ALTER TABLE `pages`
  MODIFY `uid` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sys_be_shortcuts`
--
ALTER TABLE `sys_be_shortcuts`
  MODIFY `uid` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sys_category`
--
ALTER TABLE `sys_category`
  MODIFY `uid` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sys_file`
--
ALTER TABLE `sys_file`
  MODIFY `uid` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sys_filemounts`
--
ALTER TABLE `sys_filemounts`
  MODIFY `uid` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sys_file_collection`
--
ALTER TABLE `sys_file_collection`
  MODIFY `uid` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sys_file_metadata`
--
ALTER TABLE `sys_file_metadata`
  MODIFY `uid` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sys_file_processedfile`
--
ALTER TABLE `sys_file_processedfile`
  MODIFY `uid` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sys_file_reference`
--
ALTER TABLE `sys_file_reference`
  MODIFY `uid` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sys_file_storage`
--
ALTER TABLE `sys_file_storage`
  MODIFY `uid` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sys_history`
--
ALTER TABLE `sys_history`
  MODIFY `uid` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sys_lockedrecords`
--
ALTER TABLE `sys_lockedrecords`
  MODIFY `uid` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sys_log`
--
ALTER TABLE `sys_log`
  MODIFY `uid` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `sys_messenger_messages`
--
ALTER TABLE `sys_messenger_messages`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sys_news`
--
ALTER TABLE `sys_news`
  MODIFY `uid` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sys_note`
--
ALTER TABLE `sys_note`
  MODIFY `uid` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sys_redirect`
--
ALTER TABLE `sys_redirect`
  MODIFY `uid` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sys_registry`
--
ALTER TABLE `sys_registry`
  MODIFY `uid` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT für Tabelle `sys_template`
--
ALTER TABLE `sys_template`
  MODIFY `uid` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `tt_content`
--
ALTER TABLE `tt_content`
  MODIFY `uid` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `tx_extensionmanager_domain_model_extension`
--
ALTER TABLE `tx_extensionmanager_domain_model_extension`
  MODIFY `uid` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `tx_impexp_presets`
--
ALTER TABLE `tx_impexp_presets`
  MODIFY `uid` int UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;
