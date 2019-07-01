-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Erstellungszeit: 01. Jul 2019 um 15:48
-- Server-Version: 5.7.25
-- PHP-Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Datenbank: `yeoman9`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `backend_layout`
--

DROP TABLE IF EXISTS `backend_layout`;
CREATE TABLE `backend_layout` (
  `uid` int(10) UNSIGNED NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `tstamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `sorting` int(11) NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `t3_origuid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_oid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `t3ver_wsid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_state` smallint(6) NOT NULL DEFAULT '0',
  `t3ver_stage` int(11) NOT NULL DEFAULT '0',
  `t3ver_count` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_move_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `config` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `be_groups`
--

DROP TABLE IF EXISTS `be_groups`;
CREATE TABLE `be_groups` (
  `uid` int(10) UNSIGNED NOT NULL,
  `pid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `non_exclude_fields` text COLLATE utf8mb4_unicode_ci,
  `explicit_allowdeny` text COLLATE utf8mb4_unicode_ci,
  `allowed_languages` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `custom_options` text COLLATE utf8mb4_unicode_ci,
  `db_mountpoints` text COLLATE utf8mb4_unicode_ci,
  `pagetypes_select` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `tables_select` text COLLATE utf8mb4_unicode_ci,
  `tables_modify` text COLLATE utf8mb4_unicode_ci,
  `groupMods` text COLLATE utf8mb4_unicode_ci,
  `file_mountpoints` text COLLATE utf8mb4_unicode_ci,
  `file_permissions` text COLLATE utf8mb4_unicode_ci,
  `lockToDomain` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `TSconfig` text COLLATE utf8mb4_unicode_ci,
  `subgroup` text COLLATE utf8mb4_unicode_ci,
  `workspace_perms` smallint(6) NOT NULL DEFAULT '1',
  `category_perms` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `be_sessions`
--

DROP TABLE IF EXISTS `be_sessions`;
CREATE TABLE `be_sessions` (
  `ses_id` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `ses_iplock` varchar(39) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `ses_userid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ses_tstamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ses_data` longblob,
  `ses_backuserid` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `be_sessions`
--

INSERT INTO `be_sessions` (`ses_id`, `ses_iplock`, `ses_userid`, `ses_tstamp`, `ses_data`, `ses_backuserid`) VALUES
('98017a1a53c3078feae84dab5a72f5e9', '::1', 1, 1561988771, 0x613a323a7b733a32363a22666f726d50726f74656374696f6e53657373696f6e546f6b656e223b733a36343a2265336330306163383733623062333135336233323263376636333762643432383633343236353436636130353530376366666538636361383432623734336239223b733a32373a22636f72652e74656d706c6174652e666c6173684d65737361676573223b4e3b7d, 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `be_users`
--

DROP TABLE IF EXISTS `be_users`;
CREATE TABLE `be_users` (
  `uid` int(10) UNSIGNED NOT NULL,
  `pid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `disable` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `avatar` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `admin` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `usergroup` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `lang` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `db_mountpoints` text COLLATE utf8mb4_unicode_ci,
  `options` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `realName` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `userMods` text COLLATE utf8mb4_unicode_ci,
  `allowed_languages` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `uc` mediumblob,
  `file_mountpoints` text COLLATE utf8mb4_unicode_ci,
  `file_permissions` text COLLATE utf8mb4_unicode_ci,
  `workspace_perms` smallint(6) NOT NULL DEFAULT '1',
  `lockToDomain` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `disableIPlock` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `TSconfig` text COLLATE utf8mb4_unicode_ci,
  `lastlogin` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `createdByAction` int(11) NOT NULL DEFAULT '0',
  `usergroup_cached_list` text COLLATE utf8mb4_unicode_ci,
  `workspace_id` int(11) NOT NULL DEFAULT '0',
  `category_perms` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `be_users`
--

INSERT INTO `be_users` (`uid`, `pid`, `tstamp`, `crdate`, `cruser_id`, `deleted`, `disable`, `starttime`, `endtime`, `description`, `username`, `avatar`, `password`, `admin`, `usergroup`, `lang`, `email`, `db_mountpoints`, `options`, `realName`, `userMods`, `allowed_languages`, `uc`, `file_mountpoints`, `file_permissions`, `workspace_perms`, `lockToDomain`, `disableIPlock`, `TSconfig`, `lastlogin`, `createdByAction`, `usergroup_cached_list`, `workspace_id`, `category_perms`) VALUES
(1, 0, 1561988738, 1561988738, 0, 0, 0, 0, 0, NULL, '###ADMIN###', 0, '###PASS###', 1, '', '', '', NULL, 0, '', NULL, '', 0x613a31333a7b733a31343a22696e746572666163655365747570223b733a373a226261636b656e64223b733a31303a226d6f64756c6544617461223b613a303a7b7d733a31393a227468756d626e61696c73427944656661756c74223b693a313b733a31343a22656d61696c4d6541744c6f67696e223b693a303b733a31313a2273746172744d6f64756c65223b733a31353a2268656c705f41626f757441626f7574223b733a383a227469746c654c656e223b693a35303b733a383a22656469745f525445223b733a313a2231223b733a32303a22656469745f646f634d6f64756c6555706c6f6164223b733a313a2231223b733a31353a22726573697a65546578746172656173223b693a313b733a32353a22726573697a655465787461726561735f4d6178486569676874223b693a3530303b733a32343a22726573697a655465787461726561735f466c657869626c65223b693a303b733a343a226c616e67223b733a303a22223b733a31393a2266697273744c6f67696e54696d655374616d70223b693a313536313938383736393b7d, NULL, NULL, 1, '', 0, NULL, 1561988769, 0, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cache_treelist`
--

DROP TABLE IF EXISTS `cache_treelist`;
CREATE TABLE `cache_treelist` (
  `md5hash` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `pid` int(11) NOT NULL DEFAULT '0',
  `treelist` mediumtext COLLATE utf8mb4_unicode_ci,
  `tstamp` int(11) NOT NULL DEFAULT '0',
  `expires` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cf_adminpanel_requestcache`
--

DROP TABLE IF EXISTS `cf_adminpanel_requestcache`;
CREATE TABLE `cf_adminpanel_requestcache` (
  `id` int(10) UNSIGNED NOT NULL,
  `identifier` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `expires` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `content` longblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cf_adminpanel_requestcache_tags`
--

DROP TABLE IF EXISTS `cf_adminpanel_requestcache_tags`;
CREATE TABLE `cf_adminpanel_requestcache_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `identifier` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `tag` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cf_cache_hash`
--

DROP TABLE IF EXISTS `cf_cache_hash`;
CREATE TABLE `cf_cache_hash` (
  `id` int(10) UNSIGNED NOT NULL,
  `identifier` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `expires` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `content` longblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `cf_cache_hash`
--

INSERT INTO `cf_cache_hash` (`id`, `identifier`, `expires`, `content`) VALUES
(1, 'a341977e40078ac89538934c8436cc57', 2145909600, 0x613a323a7b693a303b613a333a7b733a383a225453636f6e666967223b613a333a7b733a383a226f7074696f6e732e223b613a383a7b733a31353a22656e61626c65426f6f6b6d61726b73223b733a313a2231223b733a31303a2266696c655f6c6973742e223b613a343a7b733a32383a22656e61626c65446973706c6179426967436f6e74726f6c50616e656c223b733a31303a2273656c65637461626c65223b733a32333a22656e61626c65446973706c61795468756d626e61696c73223b733a31303a2273656c65637461626c65223b733a31353a22656e61626c65436c6970426f617264223b733a31303a2273656c65637461626c65223b733a31303a227468756d626e61696c2e223b613a323a7b733a353a227769647468223b733a323a223634223b733a363a22686569676874223b733a323a223634223b7d7d733a393a2270616765547265652e223b613a313a7b733a33313a22646f6b7479706573546f53686f77496e4e6577506167654472616741726561223b733a32313a22312c362c342c372c332c3235342c3235352c313939223b7d733a31323a22636f6e746578744d656e752e223b613a313a7b733a363a227461626c652e223b613a333a7b733a363a2270616765732e223b613a323a7b733a31323a2264697361626c654974656d73223b733a303a22223b733a353a22747265652e223b613a313a7b733a31323a2264697361626c654974656d73223b733a303a22223b7d7d733a393a227379735f66696c652e223b613a323a7b733a31323a2264697361626c654974656d73223b733a303a22223b733a353a22747265652e223b613a313a7b733a31323a2264697361626c654974656d73223b733a303a22223b7d7d733a31353a227379735f66696c656d6f756e74732e223b613a323a7b733a31323a2264697361626c654974656d73223b733a303a22223b733a353a22747265652e223b613a313a7b733a31323a2264697361626c654974656d73223b733a303a22223b7d7d7d7d733a31313a2273617665446f6356696577223b733a313a2231223b733a31303a2273617665446f634e6577223b733a313a2231223b733a31313a2273617665446f634e65772e223b613a333a7b733a353a227061676573223b733a313a2230223b733a383a227379735f66696c65223b733a313a2230223b733a31373a227379735f66696c655f6d65746164617461223b733a313a2230223b7d733a31343a2264697361626c6544656c6574652e223b613a313a7b733a383a227379735f66696c65223b733a313a2231223b7d7d733a393a2261646d50616e656c2e223b613a313a7b733a373a22656e61626c652e223b613a313a7b733a333a22616c6c223b733a313a2231223b7d7d733a31323a2254434164656661756c74732e223b613a313a7b733a393a227379735f6e6f74652e223b613a323a7b733a363a22617574686f72223b733a303a22223b733a353a22656d61696c223b733a303a22223b7d7d7d733a383a2273656374696f6e73223b613a303a7b7d733a353a226d61746368223b613a303a7b7d7d693a313b733a33323a226133323865393736646162313531363664666333636462646161643962336461223b7d);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cf_cache_hash_tags`
--

DROP TABLE IF EXISTS `cf_cache_hash_tags`;
CREATE TABLE `cf_cache_hash_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `identifier` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `tag` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `cf_cache_hash_tags`
--

INSERT INTO `cf_cache_hash_tags` (`id`, `identifier`, `tag`) VALUES
(1, 'a341977e40078ac89538934c8436cc57', 'ident_userTS_TSconfig');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cf_cache_imagesizes`
--

DROP TABLE IF EXISTS `cf_cache_imagesizes`;
CREATE TABLE `cf_cache_imagesizes` (
  `id` int(10) UNSIGNED NOT NULL,
  `identifier` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `expires` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `content` longblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cf_cache_imagesizes_tags`
--

DROP TABLE IF EXISTS `cf_cache_imagesizes_tags`;
CREATE TABLE `cf_cache_imagesizes_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `identifier` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `tag` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cf_cache_pages`
--

DROP TABLE IF EXISTS `cf_cache_pages`;
CREATE TABLE `cf_cache_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `identifier` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `expires` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `content` longblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cf_cache_pagesection`
--

DROP TABLE IF EXISTS `cf_cache_pagesection`;
CREATE TABLE `cf_cache_pagesection` (
  `id` int(10) UNSIGNED NOT NULL,
  `identifier` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `expires` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `content` longblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cf_cache_pagesection_tags`
--

DROP TABLE IF EXISTS `cf_cache_pagesection_tags`;
CREATE TABLE `cf_cache_pagesection_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `identifier` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `tag` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cf_cache_pages_tags`
--

DROP TABLE IF EXISTS `cf_cache_pages_tags`;
CREATE TABLE `cf_cache_pages_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `identifier` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `tag` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cf_cache_rootline`
--

DROP TABLE IF EXISTS `cf_cache_rootline`;
CREATE TABLE `cf_cache_rootline` (
  `id` int(10) UNSIGNED NOT NULL,
  `identifier` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `expires` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `content` longblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cf_cache_rootline_tags`
--

DROP TABLE IF EXISTS `cf_cache_rootline_tags`;
CREATE TABLE `cf_cache_rootline_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `identifier` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `tag` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cf_extbase_datamapfactory_datamap`
--

DROP TABLE IF EXISTS `cf_extbase_datamapfactory_datamap`;
CREATE TABLE `cf_extbase_datamapfactory_datamap` (
  `id` int(10) UNSIGNED NOT NULL,
  `identifier` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `expires` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `content` longblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cf_extbase_datamapfactory_datamap_tags`
--

DROP TABLE IF EXISTS `cf_extbase_datamapfactory_datamap_tags`;
CREATE TABLE `cf_extbase_datamapfactory_datamap_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `identifier` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `tag` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cf_extbase_object`
--

DROP TABLE IF EXISTS `cf_extbase_object`;
CREATE TABLE `cf_extbase_object` (
  `id` int(11) UNSIGNED NOT NULL,
  `identifier` varchar(250) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `expires` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `content` longblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cf_extbase_object_tags`
--

DROP TABLE IF EXISTS `cf_extbase_object_tags`;
CREATE TABLE `cf_extbase_object_tags` (
  `id` int(11) UNSIGNED NOT NULL,
  `identifier` varchar(250) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `tag` varchar(250) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fe_groups`
--

DROP TABLE IF EXISTS `fe_groups`;
CREATE TABLE `fe_groups` (
  `uid` int(10) UNSIGNED NOT NULL,
  `pid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `tx_extbase_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `lockToDomain` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
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
  `ses_id` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `ses_iplock` varchar(39) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `ses_userid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ses_tstamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ses_data` mediumblob,
  `ses_permanent` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `ses_anonymous` smallint(5) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fe_users`
--

DROP TABLE IF EXISTS `fe_users`;
CREATE TABLE `fe_users` (
  `uid` int(10) UNSIGNED NOT NULL,
  `pid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `disable` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `tx_extbase_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `usergroup` tinytext COLLATE utf8mb4_unicode_ci,
  `name` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `middle_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `telephone` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `fax` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `lockToDomain` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `uc` blob,
  `title` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `zip` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `country` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `www` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `company` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `image` tinytext COLLATE utf8mb4_unicode_ci,
  `TSconfig` text COLLATE utf8mb4_unicode_ci,
  `lastlogin` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `is_online` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `felogin_redirectPid` tinytext COLLATE utf8mb4_unicode_ci,
  `felogin_forgotHash` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `uid` int(10) UNSIGNED NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `tstamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `fe_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `sorting` int(11) NOT NULL DEFAULT '0',
  `rowDescription` text COLLATE utf8mb4_unicode_ci,
  `editlock` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `sys_language_uid` int(11) NOT NULL DEFAULT '0',
  `l10n_parent` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `l10n_source` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `l10n_state` text COLLATE utf8mb4_unicode_ci,
  `t3_origuid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `l10n_diffsource` mediumblob,
  `t3ver_oid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `t3ver_wsid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_state` smallint(6) NOT NULL DEFAULT '0',
  `t3ver_stage` int(11) NOT NULL DEFAULT '0',
  `t3ver_count` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_move_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `perms_userid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `perms_groupid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `perms_user` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `perms_group` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `perms_everybody` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `slug` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doktype` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `TSconfig` text COLLATE utf8mb4_unicode_ci,
  `is_siteroot` smallint(6) NOT NULL DEFAULT '0',
  `php_tree_stop` smallint(6) NOT NULL DEFAULT '0',
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `shortcut` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `shortcut_mode` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `layout` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `target` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `media` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `lastUpdated` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `keywords` text COLLATE utf8mb4_unicode_ci,
  `cache_timeout` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `cache_tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `newUntil` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `no_search` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `SYS_LASTCHANGED` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `abstract` text COLLATE utf8mb4_unicode_ci,
  `module` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `extendToSubpages` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `author_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `nav_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `nav_hide` smallint(6) NOT NULL DEFAULT '0',
  `content_from_pid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `mount_pid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `mount_pid_ol` smallint(6) NOT NULL DEFAULT '0',
  `alias` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `l18n_cfg` smallint(6) NOT NULL DEFAULT '0',
  `fe_login_mode` smallint(6) NOT NULL DEFAULT '0',
  `backend_layout` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `backend_layout_next_level` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `tsconfig_includes` text COLLATE utf8mb4_unicode_ci,
  `legacy_overlay_uid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `tx_impexp_origuid` int(11) NOT NULL DEFAULT '0',
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `no_index` smallint(6) NOT NULL DEFAULT '0',
  `no_follow` smallint(6) NOT NULL DEFAULT '0',
  `og_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `og_description` text COLLATE utf8mb4_unicode_ci,
  `og_image` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `twitter_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `twitter_description` text COLLATE utf8mb4_unicode_ci,
  `twitter_image` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `canonical_link` varchar(2048) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `categories` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_be_shortcuts`
--

DROP TABLE IF EXISTS `sys_be_shortcuts`;
CREATE TABLE `sys_be_shortcuts` (
  `uid` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `module_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `url` text COLLATE utf8mb4_unicode_ci,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `sorting` int(11) NOT NULL DEFAULT '0',
  `sc_group` smallint(6) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_category`
--

DROP TABLE IF EXISTS `sys_category`;
CREATE TABLE `sys_category` (
  `uid` int(10) UNSIGNED NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `tstamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `sorting` int(11) NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `sys_language_uid` int(11) NOT NULL DEFAULT '0',
  `l10n_parent` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `l10n_state` text COLLATE utf8mb4_unicode_ci,
  `t3_origuid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `l10n_diffsource` mediumblob,
  `t3ver_oid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `t3ver_wsid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_state` smallint(6) NOT NULL DEFAULT '0',
  `t3ver_stage` int(11) NOT NULL DEFAULT '0',
  `t3ver_count` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_move_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `title` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL DEFAULT '0',
  `items` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_category_record_mm`
--

DROP TABLE IF EXISTS `sys_category_record_mm`;
CREATE TABLE `sys_category_record_mm` (
  `uid_local` int(11) NOT NULL DEFAULT '0',
  `uid_foreign` int(11) NOT NULL DEFAULT '0',
  `tablenames` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `fieldname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `sorting` int(11) NOT NULL DEFAULT '0',
  `sorting_foreign` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_collection`
--

DROP TABLE IF EXISTS `sys_collection`;
CREATE TABLE `sys_collection` (
  `uid` int(10) UNSIGNED NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `tstamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `fe_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `sys_language_uid` int(11) NOT NULL DEFAULT '0',
  `l10n_parent` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `l10n_state` text COLLATE utf8mb4_unicode_ci,
  `t3_origuid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `l10n_diffsource` mediumblob,
  `t3ver_oid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `t3ver_wsid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_state` smallint(6) NOT NULL DEFAULT '0',
  `t3ver_stage` int(11) NOT NULL DEFAULT '0',
  `t3ver_count` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_move_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `title` tinytext COLLATE utf8mb4_unicode_ci,
  `type` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'static',
  `table_name` tinytext COLLATE utf8mb4_unicode_ci,
  `items` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_collection_entries`
--

DROP TABLE IF EXISTS `sys_collection_entries`;
CREATE TABLE `sys_collection_entries` (
  `uid` int(11) NOT NULL,
  `uid_local` int(11) NOT NULL DEFAULT '0',
  `uid_foreign` int(11) NOT NULL DEFAULT '0',
  `tablenames` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `sorting` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_domain`
--

DROP TABLE IF EXISTS `sys_domain`;
CREATE TABLE `sys_domain` (
  `uid` int(10) UNSIGNED NOT NULL,
  `pid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `sorting` int(11) NOT NULL DEFAULT '0',
  `domainName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_file`
--

DROP TABLE IF EXISTS `sys_file`;
CREATE TABLE `sys_file` (
  `uid` int(10) UNSIGNED NOT NULL,
  `pid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `last_indexed` int(11) NOT NULL DEFAULT '0',
  `missing` smallint(6) NOT NULL DEFAULT '0',
  `storage` int(11) NOT NULL DEFAULT '0',
  `type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `metadata` int(11) NOT NULL DEFAULT '0',
  `identifier` text COLLATE utf8mb4_unicode_ci,
  `identifier_hash` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `folder_hash` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `extension` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `name` tinytext COLLATE utf8mb4_unicode_ci,
  `sha1` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `size` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `creation_date` int(11) NOT NULL DEFAULT '0',
  `modification_date` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_filemounts`
--

DROP TABLE IF EXISTS `sys_filemounts`;
CREATE TABLE `sys_filemounts` (
  `uid` int(10) UNSIGNED NOT NULL,
  `pid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `sorting` int(11) NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `base` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `read_only` smallint(5) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_file_collection`
--

DROP TABLE IF EXISTS `sys_file_collection`;
CREATE TABLE `sys_file_collection` (
  `uid` int(10) UNSIGNED NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `tstamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `sys_language_uid` int(11) NOT NULL DEFAULT '0',
  `l10n_parent` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `l10n_state` text COLLATE utf8mb4_unicode_ci,
  `t3_origuid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `l10n_diffsource` mediumblob,
  `t3ver_oid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `t3ver_wsid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_state` smallint(6) NOT NULL DEFAULT '0',
  `t3ver_stage` int(11) NOT NULL DEFAULT '0',
  `t3ver_count` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_move_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `title` tinytext COLLATE utf8mb4_unicode_ci,
  `type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'static',
  `files` int(11) NOT NULL DEFAULT '0',
  `storage` int(11) NOT NULL DEFAULT '0',
  `folder` text COLLATE utf8mb4_unicode_ci,
  `recursive` smallint(6) NOT NULL DEFAULT '0',
  `category` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_file_metadata`
--

DROP TABLE IF EXISTS `sys_file_metadata`;
CREATE TABLE `sys_file_metadata` (
  `uid` int(10) UNSIGNED NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `tstamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `sys_language_uid` int(11) NOT NULL DEFAULT '0',
  `l10n_parent` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `l10n_state` text COLLATE utf8mb4_unicode_ci,
  `t3_origuid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `l10n_diffsource` mediumblob,
  `t3ver_oid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `t3ver_wsid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_state` smallint(6) NOT NULL DEFAULT '0',
  `t3ver_stage` int(11) NOT NULL DEFAULT '0',
  `t3ver_count` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_move_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `file` int(11) NOT NULL DEFAULT '0',
  `title` tinytext COLLATE utf8mb4_unicode_ci,
  `width` int(11) NOT NULL DEFAULT '0',
  `height` int(11) NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `alternative` text COLLATE utf8mb4_unicode_ci,
  `categories` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_file_processedfile`
--

DROP TABLE IF EXISTS `sys_file_processedfile`;
CREATE TABLE `sys_file_processedfile` (
  `uid` int(11) NOT NULL,
  `tstamp` int(11) NOT NULL DEFAULT '0',
  `crdate` int(11) NOT NULL DEFAULT '0',
  `storage` int(11) NOT NULL DEFAULT '0',
  `original` int(11) NOT NULL DEFAULT '0',
  `identifier` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `name` tinytext COLLATE utf8mb4_unicode_ci,
  `configuration` text COLLATE utf8mb4_unicode_ci,
  `configurationsha1` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `originalfilesha1` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `task_type` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `checksum` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `width` int(11) DEFAULT '0',
  `height` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_file_reference`
--

DROP TABLE IF EXISTS `sys_file_reference`;
CREATE TABLE `sys_file_reference` (
  `uid` int(10) UNSIGNED NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `tstamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `sys_language_uid` int(11) NOT NULL DEFAULT '0',
  `l10n_parent` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `l10n_state` text COLLATE utf8mb4_unicode_ci,
  `l10n_diffsource` mediumblob,
  `t3ver_oid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `t3ver_wsid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_state` smallint(6) NOT NULL DEFAULT '0',
  `t3ver_stage` int(11) NOT NULL DEFAULT '0',
  `t3ver_count` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_move_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `uid_local` int(11) NOT NULL DEFAULT '0',
  `uid_foreign` int(11) NOT NULL DEFAULT '0',
  `tablenames` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `fieldname` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `sorting_foreign` int(11) NOT NULL DEFAULT '0',
  `table_local` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `title` tinytext COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `alternative` text COLLATE utf8mb4_unicode_ci,
  `link` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `crop` varchar(4000) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `autoplay` smallint(6) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_file_storage`
--

DROP TABLE IF EXISTS `sys_file_storage`;
CREATE TABLE `sys_file_storage` (
  `uid` int(10) UNSIGNED NOT NULL,
  `pid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `driver` tinytext COLLATE utf8mb4_unicode_ci,
  `configuration` text COLLATE utf8mb4_unicode_ci,
  `is_default` smallint(6) NOT NULL DEFAULT '0',
  `is_browsable` smallint(6) NOT NULL DEFAULT '0',
  `is_public` smallint(6) NOT NULL DEFAULT '0',
  `is_writable` smallint(6) NOT NULL DEFAULT '0',
  `is_online` smallint(6) NOT NULL DEFAULT '1',
  `auto_extract_metadata` smallint(6) NOT NULL DEFAULT '1',
  `processingfolder` tinytext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_history`
--

DROP TABLE IF EXISTS `sys_history`;
CREATE TABLE `sys_history` (
  `uid` int(10) UNSIGNED NOT NULL,
  `pid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `actiontype` smallint(6) NOT NULL DEFAULT '0',
  `usertype` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'BE',
  `userid` int(10) UNSIGNED DEFAULT NULL,
  `originaluserid` int(10) UNSIGNED DEFAULT NULL,
  `recuid` int(11) NOT NULL DEFAULT '0',
  `tablename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `history_data` mediumtext COLLATE utf8mb4_unicode_ci,
  `workspace` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_language`
--

DROP TABLE IF EXISTS `sys_language`;
CREATE TABLE `sys_language` (
  `uid` int(10) UNSIGNED NOT NULL,
  `pid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `sorting` int(11) NOT NULL DEFAULT '0',
  `title` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `flag` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `language_isocode` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `static_lang_isocode` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_lockedrecords`
--

DROP TABLE IF EXISTS `sys_lockedrecords`;
CREATE TABLE `sys_lockedrecords` (
  `uid` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `record_table` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `record_uid` int(11) NOT NULL DEFAULT '0',
  `record_pid` int(11) NOT NULL DEFAULT '0',
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `feuserid` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_log`
--

DROP TABLE IF EXISTS `sys_log`;
CREATE TABLE `sys_log` (
  `uid` int(10) UNSIGNED NOT NULL,
  `pid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `userid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `action` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `recuid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `tablename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `recpid` int(11) NOT NULL DEFAULT '0',
  `error` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `details_nr` smallint(6) NOT NULL DEFAULT '0',
  `IP` varchar(39) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `log_data` text COLLATE utf8mb4_unicode_ci,
  `event_pid` int(11) NOT NULL DEFAULT '-1',
  `workspace` int(11) NOT NULL DEFAULT '0',
  `NEWid` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `request_id` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `time_micro` double NOT NULL DEFAULT '0',
  `component` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `level` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `message` text COLLATE utf8mb4_unicode_ci,
  `data` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `sys_log`
--

INSERT INTO `sys_log` (`uid`, `pid`, `tstamp`, `userid`, `action`, `recuid`, `tablename`, `recpid`, `error`, `details`, `type`, `details_nr`, `IP`, `log_data`, `event_pid`, `workspace`, `NEWid`, `request_id`, `time_micro`, `component`, `level`, `message`, `data`) VALUES
(1, 0, 1561988769, 1, 1, 0, '', 0, 0, 'User %s logged in from ###IP###', 255, 1, '::1', 'a:1:{i:0;s:7:\"raphael\";}', -1, -99, '', '', 0, '', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_news`
--

DROP TABLE IF EXISTS `sys_news`;
CREATE TABLE `sys_news` (
  `uid` int(10) UNSIGNED NOT NULL,
  `pid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `content` mediumtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_note`
--

DROP TABLE IF EXISTS `sys_note`;
CREATE TABLE `sys_note` (
  `uid` int(10) UNSIGNED NOT NULL,
  `pid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `cruser` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `sorting` int(11) NOT NULL DEFAULT '0',
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `message` text COLLATE utf8mb4_unicode_ci,
  `personal` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `category` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `position` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_redirect`
--

DROP TABLE IF EXISTS `sys_redirect`;
CREATE TABLE `sys_redirect` (
  `uid` int(10) UNSIGNED NOT NULL,
  `pid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `updatedon` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `createdon` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `createdby` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `disabled` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `source_host` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `source_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `is_regexp` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `force_https` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `respect_query_parameters` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `keep_query_parameters` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `target_statuscode` int(11) NOT NULL DEFAULT '307',
  `hitcount` int(11) NOT NULL DEFAULT '0',
  `lasthiton` int(11) NOT NULL DEFAULT '0',
  `disable_hitcount` smallint(5) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_refindex`
--

DROP TABLE IF EXISTS `sys_refindex`;
CREATE TABLE `sys_refindex` (
  `hash` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `tablename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `recuid` int(11) NOT NULL DEFAULT '0',
  `field` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `flexpointer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `softref_key` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `softref_id` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `sorting` int(11) NOT NULL DEFAULT '0',
  `deleted` smallint(6) NOT NULL DEFAULT '0',
  `workspace` int(11) NOT NULL DEFAULT '0',
  `ref_table` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `ref_uid` int(11) NOT NULL DEFAULT '0',
  `ref_string` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_registry`
--

DROP TABLE IF EXISTS `sys_registry`;
CREATE TABLE `sys_registry` (
  `uid` int(10) UNSIGNED NOT NULL,
  `entry_namespace` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `entry_key` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `entry_value` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `sys_registry`
--

INSERT INTO `sys_registry` (`uid`, `entry_namespace`, `entry_key`, `entry_value`) VALUES
(1, 'installUpdate', 'TYPO3\\CMS\\Form\\Hooks\\FormFileExtensionUpdate', 0x693a313b),
(2, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\ExtensionManagerTables', 0x693a313b),
(3, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\WizardDoneToRegistry', 0x693a313b),
(4, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\StartModuleUpdate', 0x693a313b),
(5, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\FrontendUserImageUpdateWizard', 0x693a313b),
(6, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\DatabaseRowsUpdateWizard', 0x693a313b),
(7, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\CommandLineBackendUserRemovalUpdate', 0x693a313b),
(8, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\FillTranslationSourceField', 0x693a313b),
(9, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\SectionFrameToFrameClassUpdate', 0x693a313b),
(10, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\SplitMenusUpdate', 0x693a313b),
(11, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\BulletContentElementUpdate', 0x693a313b),
(12, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\UploadContentElementUpdate', 0x693a313b),
(13, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\MigrateFscStaticTemplateUpdate', 0x693a313b),
(14, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\FileReferenceUpdate', 0x693a313b),
(15, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\MigrateFeSessionDataUpdate', 0x693a313b),
(16, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\Compatibility7ExtractionUpdate', 0x693a313b),
(17, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\FormLegacyExtractionUpdate', 0x693a313b),
(18, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\RteHtmlAreaExtractionUpdate', 0x693a313b),
(19, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\LanguageSortingUpdate', 0x693a313b),
(20, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\Typo3DbExtractionUpdate', 0x693a313b),
(21, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\FuncExtractionUpdate', 0x693a313b),
(22, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\MigrateUrlTypesInPagesUpdate', 0x693a313b),
(23, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\SeparateSysHistoryFromSysLogUpdate', 0x693a313b),
(24, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\RedirectExtractionUpdate', 0x693a313b),
(25, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\BackendUserStartModuleUpdate', 0x693a313b),
(26, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\MigratePagesLanguageOverlayUpdate', 0x693a313b),
(27, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\MigratePagesLanguageOverlayBeGroupsAccessRights', 0x693a313b),
(28, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\BackendLayoutIconUpdateWizard', 0x693a313b),
(29, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\RedirectsExtensionUpdate', 0x693a313b),
(30, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\AdminPanelInstall', 0x693a313b),
(31, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\PopulatePageSlugs', 0x693a313b),
(32, 'installUpdate', 'TYPO3\\CMS\\Install\\Updates\\Argon2iPasswordHashes', 0x693a313b),
(33, 'core', 'formProtectionSessionToken:1', 0x733a36343a2265336330306163383733623062333135336233323263376636333762643432383633343236353436636130353530376366666538636361383432623734336239223b);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_template`
--

DROP TABLE IF EXISTS `sys_template`;
CREATE TABLE `sys_template` (
  `uid` int(10) UNSIGNED NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `tstamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `sorting` int(11) NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `t3_origuid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_oid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `t3ver_wsid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_state` smallint(6) NOT NULL DEFAULT '0',
  `t3ver_stage` int(11) NOT NULL DEFAULT '0',
  `t3ver_count` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_move_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `sitetitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `root` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `clear` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `include_static_file` text COLLATE utf8mb4_unicode_ci,
  `constants` text COLLATE utf8mb4_unicode_ci,
  `config` text COLLATE utf8mb4_unicode_ci,
  `nextLevel` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `basedOn` tinytext COLLATE utf8mb4_unicode_ci,
  `includeStaticAfterBasedOn` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `static_file_mode` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `tx_impexp_origuid` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tt_content`
--

DROP TABLE IF EXISTS `tt_content`;
CREATE TABLE `tt_content` (
  `uid` int(10) UNSIGNED NOT NULL,
  `rowDescription` text COLLATE utf8mb4_unicode_ci,
  `pid` int(11) NOT NULL DEFAULT '0',
  `tstamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `fe_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `sorting` int(11) NOT NULL DEFAULT '0',
  `editlock` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `sys_language_uid` int(11) NOT NULL DEFAULT '0',
  `l18n_parent` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `l10n_source` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `l10n_state` text COLLATE utf8mb4_unicode_ci,
  `t3_origuid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `l18n_diffsource` mediumblob,
  `t3ver_oid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `t3ver_wsid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_state` smallint(6) NOT NULL DEFAULT '0',
  `t3ver_stage` int(11) NOT NULL DEFAULT '0',
  `t3ver_count` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_move_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `CType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `header` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `header_position` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `bodytext` mediumtext COLLATE utf8mb4_unicode_ci,
  `bullets_type` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `uploads_description` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `uploads_type` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `assets` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `image` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `imagewidth` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `imageorient` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `imagecols` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `imageborder` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `media` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `layout` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `frame_class` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default',
  `cols` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `spaceBefore` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `spaceAfter` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `space_before_class` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `space_after_class` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `records` text COLLATE utf8mb4_unicode_ci,
  `pages` text COLLATE utf8mb4_unicode_ci,
  `colPos` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `subheader` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `header_link` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `image_zoom` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `header_layout` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `list_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `sectionIndex` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `linkToTop` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `file_collections` text COLLATE utf8mb4_unicode_ci,
  `filelink_size` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `filelink_sorting` varchar(17) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `filelink_sorting_direction` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `target` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `date` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `recursive` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `imageheight` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `pi_flexform` mediumtext COLLATE utf8mb4_unicode_ci,
  `accessibility_title` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `accessibility_bypass` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `accessibility_bypass_text` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `selected_categories` text COLLATE utf8mb4_unicode_ci,
  `category_field` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `table_class` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `table_caption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `table_delimiter` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `table_enclosure` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `table_header_position` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `table_tfoot` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `tx_impexp_origuid` int(11) NOT NULL DEFAULT '0',
  `categories` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tx_extensionmanager_domain_model_extension`
--

DROP TABLE IF EXISTS `tx_extensionmanager_domain_model_extension`;
CREATE TABLE `tx_extensionmanager_domain_model_extension` (
  `uid` int(10) UNSIGNED NOT NULL,
  `pid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `extension_key` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `repository` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `version` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `alldownloadcounter` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `downloadcounter` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` mediumtext COLLATE utf8mb4_unicode_ci,
  `state` int(11) NOT NULL DEFAULT '0',
  `review_state` int(11) NOT NULL DEFAULT '0',
  `category` int(11) NOT NULL DEFAULT '0',
  `last_updated` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `serialized_dependencies` mediumtext COLLATE utf8mb4_unicode_ci,
  `author_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `author_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `ownerusername` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `md5hash` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `update_comment` mediumtext COLLATE utf8mb4_unicode_ci,
  `authorcompany` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `integer_version` int(11) NOT NULL DEFAULT '0',
  `current_version` int(11) NOT NULL DEFAULT '0',
  `lastreviewedversion` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tx_extensionmanager_domain_model_repository`
--

DROP TABLE IF EXISTS `tx_extensionmanager_domain_model_repository`;
CREATE TABLE `tx_extensionmanager_domain_model_repository` (
  `uid` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` mediumtext COLLATE utf8mb4_unicode_ci,
  `wsdl_url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `mirror_list_url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `last_update` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `extension_count` int(11) NOT NULL DEFAULT '0',
  `pid` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `tx_extensionmanager_domain_model_repository`
--

INSERT INTO `tx_extensionmanager_domain_model_repository` (`uid`, `title`, `description`, `wsdl_url`, `mirror_list_url`, `last_update`, `extension_count`, `pid`) VALUES
(1, 'TYPO3.org Main Repository', 'Main repository on typo3.org. This repository has some mirrors configured which are available with the mirror url.', 'https://typo3.org/wsdl/tx_ter_wsdl.php', 'https://repositories.typo3.org/mirrors.xml.gz', 1346191200, 0, 0);

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
-- Indizes für die Tabelle `cache_treelist`
--
ALTER TABLE `cache_treelist`
  ADD PRIMARY KEY (`md5hash`);

--
-- Indizes für die Tabelle `cf_adminpanel_requestcache`
--
ALTER TABLE `cf_adminpanel_requestcache`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`(180),`expires`);

--
-- Indizes für die Tabelle `cf_adminpanel_requestcache_tags`
--
ALTER TABLE `cf_adminpanel_requestcache_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`(191)),
  ADD KEY `cache_tag` (`tag`(191));

--
-- Indizes für die Tabelle `cf_cache_hash`
--
ALTER TABLE `cf_cache_hash`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`(180),`expires`);

--
-- Indizes für die Tabelle `cf_cache_hash_tags`
--
ALTER TABLE `cf_cache_hash_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`(191)),
  ADD KEY `cache_tag` (`tag`(191));

--
-- Indizes für die Tabelle `cf_cache_imagesizes`
--
ALTER TABLE `cf_cache_imagesizes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`(180),`expires`);

--
-- Indizes für die Tabelle `cf_cache_imagesizes_tags`
--
ALTER TABLE `cf_cache_imagesizes_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`(191)),
  ADD KEY `cache_tag` (`tag`(191));

--
-- Indizes für die Tabelle `cf_cache_pages`
--
ALTER TABLE `cf_cache_pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`(180),`expires`);

--
-- Indizes für die Tabelle `cf_cache_pagesection`
--
ALTER TABLE `cf_cache_pagesection`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`(180),`expires`);

--
-- Indizes für die Tabelle `cf_cache_pagesection_tags`
--
ALTER TABLE `cf_cache_pagesection_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`(191)),
  ADD KEY `cache_tag` (`tag`(191));

--
-- Indizes für die Tabelle `cf_cache_pages_tags`
--
ALTER TABLE `cf_cache_pages_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`(191)),
  ADD KEY `cache_tag` (`tag`(191));

--
-- Indizes für die Tabelle `cf_cache_rootline`
--
ALTER TABLE `cf_cache_rootline`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`(180),`expires`);

--
-- Indizes für die Tabelle `cf_cache_rootline_tags`
--
ALTER TABLE `cf_cache_rootline_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`(191)),
  ADD KEY `cache_tag` (`tag`(191));

--
-- Indizes für die Tabelle `cf_extbase_datamapfactory_datamap`
--
ALTER TABLE `cf_extbase_datamapfactory_datamap`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`(180),`expires`);

--
-- Indizes für die Tabelle `cf_extbase_datamapfactory_datamap_tags`
--
ALTER TABLE `cf_extbase_datamapfactory_datamap_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`(191)),
  ADD KEY `cache_tag` (`tag`(191));

--
-- Indizes für die Tabelle `cf_extbase_object`
--
ALTER TABLE `cf_extbase_object`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`,`expires`);

--
-- Indizes für die Tabelle `cf_extbase_object_tags`
--
ALTER TABLE `cf_extbase_object_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`),
  ADD KEY `cache_tag` (`tag`);

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
  ADD KEY `is_online` (`is_online`);

--
-- Indizes für die Tabelle `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `alias` (`alias`),
  ADD KEY `determineSiteRoot` (`is_siteroot`),
  ADD KEY `language_identifier` (`l10n_parent`,`sys_language_uid`),
  ADD KEY `parent` (`pid`,`deleted`,`hidden`),
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
  ADD KEY `uid_local_foreign` (`uid_local`,`uid_foreign`),
  ADD KEY `uid_foreign_tablefield` (`uid_foreign`,`tablenames`(40),`fieldname`(3),`sorting_foreign`);

--
-- Indizes für die Tabelle `sys_collection`
--
ALTER TABLE `sys_collection`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`,`deleted`,`hidden`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`);

--
-- Indizes für die Tabelle `sys_collection_entries`
--
ALTER TABLE `sys_collection_entries`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `uid_local` (`uid_local`),
  ADD KEY `uid_foreign` (`uid_foreign`);

--
-- Indizes für die Tabelle `sys_domain`
--
ALTER TABLE `sys_domain`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `getSysDomain` (`hidden`),
  ADD KEY `getDomainStartPage` (`pid`,`hidden`,`domainName`(100)),
  ADD KEY `parent` (`pid`,`hidden`);

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
  ADD KEY `recordident_2` (`tablename`(100),`tstamp`),
  ADD KEY `parent` (`pid`);

--
-- Indizes für die Tabelle `sys_language`
--
ALTER TABLE `sys_language`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`,`hidden`);

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
  ADD KEY `parent` (`pid`);

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
  ADD KEY `parent` (`pid`,`deleted`,`hidden`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`);

--
-- Indizes für die Tabelle `tt_content`
--
ALTER TABLE `tt_content`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`,`sorting`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`),
  ADD KEY `language` (`l18n_parent`,`sys_language_uid`);

--
-- Indizes für die Tabelle `tx_extensionmanager_domain_model_extension`
--
ALTER TABLE `tx_extensionmanager_domain_model_extension`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `versionextrepo` (`extension_key`,`version`,`repository`),
  ADD KEY `index_extrepo` (`extension_key`,`repository`),
  ADD KEY `index_versionrepo` (`integer_version`,`repository`,`extension_key`),
  ADD KEY `index_currentversions` (`current_version`,`review_state`),
  ADD KEY `parent` (`pid`);

--
-- Indizes für die Tabelle `tx_extensionmanager_domain_model_repository`
--
ALTER TABLE `tx_extensionmanager_domain_model_repository`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `backend_layout`
--
ALTER TABLE `backend_layout`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `be_groups`
--
ALTER TABLE `be_groups`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `be_users`
--
ALTER TABLE `be_users`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `cf_adminpanel_requestcache`
--
ALTER TABLE `cf_adminpanel_requestcache`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `cf_adminpanel_requestcache_tags`
--
ALTER TABLE `cf_adminpanel_requestcache_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `cf_cache_hash`
--
ALTER TABLE `cf_cache_hash`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `cf_cache_hash_tags`
--
ALTER TABLE `cf_cache_hash_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `cf_cache_imagesizes`
--
ALTER TABLE `cf_cache_imagesizes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `cf_cache_imagesizes_tags`
--
ALTER TABLE `cf_cache_imagesizes_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `cf_cache_pages`
--
ALTER TABLE `cf_cache_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `cf_cache_pagesection`
--
ALTER TABLE `cf_cache_pagesection`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `cf_cache_pagesection_tags`
--
ALTER TABLE `cf_cache_pagesection_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `cf_cache_pages_tags`
--
ALTER TABLE `cf_cache_pages_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `cf_cache_rootline`
--
ALTER TABLE `cf_cache_rootline`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `cf_cache_rootline_tags`
--
ALTER TABLE `cf_cache_rootline_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `cf_extbase_datamapfactory_datamap`
--
ALTER TABLE `cf_extbase_datamapfactory_datamap`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `cf_extbase_datamapfactory_datamap_tags`
--
ALTER TABLE `cf_extbase_datamapfactory_datamap_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `cf_extbase_object`
--
ALTER TABLE `cf_extbase_object`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `cf_extbase_object_tags`
--
ALTER TABLE `cf_extbase_object_tags`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `fe_groups`
--
ALTER TABLE `fe_groups`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `fe_users`
--
ALTER TABLE `fe_users`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `pages`
--
ALTER TABLE `pages`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sys_be_shortcuts`
--
ALTER TABLE `sys_be_shortcuts`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sys_category`
--
ALTER TABLE `sys_category`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sys_collection`
--
ALTER TABLE `sys_collection`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sys_collection_entries`
--
ALTER TABLE `sys_collection_entries`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sys_domain`
--
ALTER TABLE `sys_domain`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sys_file`
--
ALTER TABLE `sys_file`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sys_filemounts`
--
ALTER TABLE `sys_filemounts`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sys_file_collection`
--
ALTER TABLE `sys_file_collection`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sys_file_metadata`
--
ALTER TABLE `sys_file_metadata`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sys_file_processedfile`
--
ALTER TABLE `sys_file_processedfile`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sys_file_reference`
--
ALTER TABLE `sys_file_reference`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sys_file_storage`
--
ALTER TABLE `sys_file_storage`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sys_history`
--
ALTER TABLE `sys_history`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sys_language`
--
ALTER TABLE `sys_language`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sys_lockedrecords`
--
ALTER TABLE `sys_lockedrecords`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sys_log`
--
ALTER TABLE `sys_log`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `sys_news`
--
ALTER TABLE `sys_news`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sys_note`
--
ALTER TABLE `sys_note`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sys_redirect`
--
ALTER TABLE `sys_redirect`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `sys_registry`
--
ALTER TABLE `sys_registry`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT für Tabelle `sys_template`
--
ALTER TABLE `sys_template`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `tt_content`
--
ALTER TABLE `tt_content`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `tx_extensionmanager_domain_model_extension`
--
ALTER TABLE `tx_extensionmanager_domain_model_extension`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `tx_extensionmanager_domain_model_repository`
--
ALTER TABLE `tx_extensionmanager_domain_model_repository`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
