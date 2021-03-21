<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-12-21 11:51:25 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 11:51:25 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT `mark`.*, `markrelation`.`markrelationID`, `markrelation`.`markpercentageID`, `markrelation`.`mark`
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '2'
AND `mark`.`examID` = '1'
ERROR - 2019-12-21 11:51:25 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 152
ERROR - 2019-12-21 11:51:25 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576907485
WHERE `id` = '854f3758b966745601caa59038ad6eede3294127'
ERROR - 2019-12-21 11:51:25 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 11:51:25 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('88e56466918cea8b83849ed6fee8e0ae') AS ci_session_lock
ERROR - 2019-12-21 11:51:50 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 11:51:50 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT `mark`.*, `markrelation`.`markrelationID`, `markrelation`.`markpercentageID`, `markrelation`.`mark`
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '2'
AND `mark`.`examID` = '1'
ERROR - 2019-12-21 11:51:50 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 152
ERROR - 2019-12-21 11:51:50 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576907510
WHERE `id` = '854f3758b966745601caa59038ad6eede3294127'
ERROR - 2019-12-21 11:51:50 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 11:51:50 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('88e56466918cea8b83849ed6fee8e0ae') AS ci_session_lock
ERROR - 2019-12-21 11:52:15 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 11:52:15 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT `mark`.*, `markrelation`.`markrelationID`, `markrelation`.`markpercentageID`, `markrelation`.`mark`
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '2'
AND `mark`.`examID` = '1'
ERROR - 2019-12-21 11:52:15 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 152
ERROR - 2019-12-21 11:52:15 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576907535
WHERE `id` = '854f3758b966745601caa59038ad6eede3294127'
ERROR - 2019-12-21 11:52:15 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 11:52:15 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('88e56466918cea8b83849ed6fee8e0ae') AS ci_session_lock
ERROR - 2019-12-21 11:56:35 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 11:56:35 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '3'
ERROR - 2019-12-21 11:56:35 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT `data`
FROM `school_sessions`
WHERE `id` = 'b76900690579afd88d2e5022e1e0a5d1c9282a45'
ERROR - 2019-12-21 11:56:35 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 11:56:35 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576907795
WHERE `id` = 'b76900690579afd88d2e5022e1e0a5d1c9282a45'
ERROR - 2019-12-21 11:56:35 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 11:56:35 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('bda7bf32decf5ad2d337c8440542d37d') AS ci_session_lock
ERROR - 2019-12-21 11:56:35 --> Query error: MySQL server has gone away - Invalid query: SELECT *
FROM `setting`
ERROR - 2019-12-21 11:56:35 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Site_m.php 22
ERROR - 2019-12-21 11:56:35 --> Query error: MySQL server has gone away - Invalid query: INSERT INTO `school_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b76900690579afd88d2e5022e1e0a5d1c9282a45', '64.233.173.18', 1576907795, '__ci_last_regenerate|i:1576907795;')
ERROR - 2019-12-21 11:56:35 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 11:56:35 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('bda7bf32decf5ad2d337c8440542d37d') AS ci_session_lock
ERROR - 2019-12-21 11:57:00 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 11:57:00 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '3'
ERROR - 2019-12-21 11:57:00 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 11:57:00 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576907820
WHERE `id` = 'b76900690579afd88d2e5022e1e0a5d1c9282a45'
ERROR - 2019-12-21 11:57:00 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 11:57:00 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('bda7bf32decf5ad2d337c8440542d37d') AS ci_session_lock
ERROR - 2019-12-21 12:11:35 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 12:11:35 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '3'
ERROR - 2019-12-21 12:11:35 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 12:11:35 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576908695
WHERE `id` = '1b8d6d6c4b4b2be098f8a07c579383fe43b548a4'
ERROR - 2019-12-21 12:11:35 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 12:11:35 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('c3874491578a5a04063024fbb59ac96f') AS ci_session_lock
ERROR - 2019-12-21 12:12:05 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 12:12:05 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '3'
ERROR - 2019-12-21 12:12:05 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 12:12:05 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576908725
WHERE `id` = '1b8d6d6c4b4b2be098f8a07c579383fe43b548a4'
ERROR - 2019-12-21 12:12:05 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 12:12:05 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('c3874491578a5a04063024fbb59ac96f') AS ci_session_lock
ERROR - 2019-12-21 12:12:35 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 12:12:35 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '3'
ERROR - 2019-12-21 12:12:35 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 12:12:35 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576908755
WHERE `id` = '1b8d6d6c4b4b2be098f8a07c579383fe43b548a4'
ERROR - 2019-12-21 12:12:35 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 12:12:35 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('c3874491578a5a04063024fbb59ac96f') AS ci_session_lock
ERROR - 2019-12-21 13:04:57 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 13:04:57 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT `mark`.*, `markrelation`.`markrelationID`, `markrelation`.`markpercentageID`, `markrelation`.`mark`
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '2'
AND `mark`.`examID` = '1'
ERROR - 2019-12-21 13:04:57 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 152
ERROR - 2019-12-21 13:04:57 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576911897
WHERE `id` = 'f74a15aa2c1d428a5fc2cdde76ac26b21346a4fe'
ERROR - 2019-12-21 13:04:57 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 13:04:57 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('06d36e43a5d610582a77f8dc5d36f1aa') AS ci_session_lock
ERROR - 2019-12-21 13:05:22 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 13:05:22 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT `mark`.*, `markrelation`.`markrelationID`, `markrelation`.`markpercentageID`, `markrelation`.`mark`
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '2'
AND `mark`.`examID` = '1'
ERROR - 2019-12-21 13:05:22 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 152
ERROR - 2019-12-21 13:05:22 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576911922
WHERE `id` = 'f74a15aa2c1d428a5fc2cdde76ac26b21346a4fe'
ERROR - 2019-12-21 13:05:22 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 13:05:22 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('06d36e43a5d610582a77f8dc5d36f1aa') AS ci_session_lock
ERROR - 2019-12-21 13:37:08 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 13:37:08 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '2'
ERROR - 2019-12-21 13:37:08 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 13:37:08 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576913828
WHERE `id` = 'db7473a823883f170c4029d4f38026178cab4fab'
ERROR - 2019-12-21 13:37:08 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 13:37:08 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('6b6bb8490056becc3dee7172de4c7494') AS ci_session_lock
ERROR - 2019-12-21 13:38:43 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 13:38:43 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '2'
ERROR - 2019-12-21 13:38:43 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 13:38:43 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576913923
WHERE `id` = 'db7473a823883f170c4029d4f38026178cab4fab'
ERROR - 2019-12-21 13:38:43 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 13:38:43 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('6b6bb8490056becc3dee7172de4c7494') AS ci_session_lock
ERROR - 2019-12-21 13:48:28 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 13:48:28 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`examID` = '1'
AND `mark`.`classesID` = '2'
ERROR - 2019-12-21 13:48:28 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 13:48:28 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576914508
WHERE `id` = '503fe91a562a8d4f0f48cb4ee2d38df596b5e65e'
ERROR - 2019-12-21 13:48:28 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 13:48:28 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('c67c052375ca0c67739c41e4892cc17e') AS ci_session_lock
ERROR - 2019-12-21 13:52:28 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 13:52:28 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT `mark`.*, `markrelation`.`markrelationID`, `markrelation`.`markpercentageID`, `markrelation`.`mark`
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '2'
AND `mark`.`examID` = '1'
ERROR - 2019-12-21 13:52:28 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 152
ERROR - 2019-12-21 13:52:28 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576914748
WHERE `id` = '503fe91a562a8d4f0f48cb4ee2d38df596b5e65e'
ERROR - 2019-12-21 13:52:28 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 13:52:28 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('c67c052375ca0c67739c41e4892cc17e') AS ci_session_lock
ERROR - 2019-12-21 13:53:43 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 13:53:43 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`examID` = '1'
AND `mark`.`classesID` = '2'
ERROR - 2019-12-21 13:53:43 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 13:53:43 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576914823
WHERE `id` = '56d910c5fd8a1e4e3c3053a9268c8b84a4dc800e'
ERROR - 2019-12-21 13:53:43 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 13:53:43 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('b2477e9df34db4dcfbfe11db1dc5a9a6') AS ci_session_lock
ERROR - 2019-12-21 13:54:23 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 13:54:23 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`examID` = '1'
AND `mark`.`classesID` = '2'
ERROR - 2019-12-21 13:54:23 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 13:54:23 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576914863
WHERE `id` = '56d910c5fd8a1e4e3c3053a9268c8b84a4dc800e'
ERROR - 2019-12-21 13:54:23 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 13:54:23 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('b2477e9df34db4dcfbfe11db1dc5a9a6') AS ci_session_lock
ERROR - 2019-12-21 13:55:38 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 13:55:38 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`examID` = '1'
AND `mark`.`classesID` = '3'
ERROR - 2019-12-21 13:55:38 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 13:55:38 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576914938
WHERE `id` = '56d910c5fd8a1e4e3c3053a9268c8b84a4dc800e'
ERROR - 2019-12-21 13:55:38 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 13:55:38 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('b2477e9df34db4dcfbfe11db1dc5a9a6') AS ci_session_lock
ERROR - 2019-12-21 14:57:34 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 14:57:34 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '3'
ERROR - 2019-12-21 14:57:34 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 14:57:34 --> Query error: MySQL server has gone away - Invalid query: INSERT INTO `school_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('2c5f31244c9ab8447c955cedd9b512e399d9c404', '141.0.8.105', 1576918654, '__ci_last_regenerate|i:1576918630;english|N;loginuserID|s:2:\"21\";name|s:17:\"Mongkayatui Marma\";email|s:21:\"mongkayatui@gmail.com\";usertypeID|s:1:\"2\";usertype|s:7:\"Teacher\";username|s:16:\"MongkayatuiMarma\";photo|s:132:\"70349291279444958a8cd0674a0d755fc5152b9221a634655a68e7fc690bf1db9bbcac7f511e3783cae4230b28082712e5d2b64a8464bf20cc1d9dd08fcc086d.jpg\";lang|s:7:\"english\";defaultschoolyearID|s:1:\"1\";varifyvaliduser|b:1;loggedin|b:1;get_permission|b:1;master_permission_set|a:371:{s:9:\"dashboard\";s:3:\"yes\";s:7:\"student\";s:3:\"yes\";s:11:\"student_add\";s:2:\"no\";s:12:\"student_edit\";s:2:\"no\";s:14:\"student_delete\";s:2:\"no\";s:12:\"student_view\";s:3:\"yes\";s:7:\"parents\";s:3:\"yes\";s:11:\"parents_add\";s:2:\"no\";s:12:\"parents_edit\";s:2:\"no\";s:14:\"parents_delete\";s:2:\"no\";s:12:\"parents_view\";s:3:\"yes\";s:7:\"teacher\";s:3:\"yes\";s:11:\"teacher_add\";s:2:\"no\";s:12:\"teacher_edit\";s:2:\"no\";s:14:\"teacher_delete\";s:2:\"no\";s:12:\"teacher_view\";s:3:\"yes\";s:4:\"user\";s:2:\"no\";s:8:\"user_add\";s:2:\"no\";s:9:\"user_edit\";s:2:\"no\";s:11:\"user_delete\";s:2:\"no\";s:9:\"user_view\";s:2:\"no\";s:7:\"classes\";s:2:\"no\";s:11:\"classes_add\";s:2:\"no\";s:12:\"classes_edit\";s:2:\"no\";s:14:\"classes_delete\";s:2:\"no\";s:7:\"section\";s:2:\"no\";s:11:\"section_add\";s:2:\"no\";s:12:\"section_edit\";s:2:\"no\";s:15:\"semester_delete\";s:2:\"no\";s:14:\"section_delete\";s:2:\"no\";s:7:\"subject\";s:3:\"yes\";s:11:\"subject_add\";s:2:\"no\";s:12:\"subject_edit\";s:3:\"yes\";s:14:\"subject_delete\";s:2:\"no\";s:8:\"syllabus\";s:3:\"yes\";s:12:\"syllabus_add\";s:3:\"yes\";s:13:\"syllabus_edit\";s:3:\"yes\";s:15:\"syllabus_delete\";s:3:\"yes\";s:10:\"assignment\";s:3:\"yes\";s:14:\"assignment_add\";s:3:\"yes\";s:15:\"assignment_edit\";s:3:\"yes\";s:17:\"assignment_delete\";s:3:\"yes\";s:15:\"assignment_view\";s:3:\"yes\";s:7:\"routine\";s:3:\"yes\";s:11:\"routine_add\";s:2:\"no\";s:12:\"routine_edit\";s:2:\"no\";s:14:\"routine_delete\";s:2:\"no\";s:11:\"sattendance\";s:3:\"yes\";s:15:\"sattendance_add\";s:3:\"yes\";s:16:\"sattendance_view\";s:3:\"yes\";s:11:\"tattendance\";s:3:\"yes\";s:15:\"tattendance_add\";s:2:\"no\";s:16:\"tattendance_view\";s:3:\"yes\";s:11:\"uattendance\";s:3:\"yes\";s:15:\"uattendance_add\";s:2:\"no\";s:16:\"uattendance_view\";s:3:\"yes\";s:4:\"exam\";s:2:\"no\";s:8:\"exam_add\";s:2:\"no\";s:9:\"exam_edit\";s:2:\"no\";s:11:\"exam_delete\";s:2:\"no\";s:12:\"examschedule\";s:3:\"yes\";s:16:\"examschedule_add\";s:2:\"no\";s:17:\"examschedule_edit\";s:2:\"no\";s:19:\"examschedule_delete\";s:2:\"no\";s:5:\"grade\";s:3:\"yes\";s:9:\"grade_add\";s:3:\"yes\";s:10:\"grade_edit\";s:3:\"yes\";s:12:\"grade_delete\";s:3:\"yes\";s:11:\"eattendance\";s:3:\"yes\";s:15:\"eattendance_add\";s:3:\"yes\";s:4:\"mark\";s:3:\"yes\";s:8:\"mark_add\";s:3:\"yes\";s:9:\"mark_view\";s:3:\"yes\";s:14:\"markpercentage\";s:2:\"no\";s:18:\"markpercentage_add\";s:2:\"no\";s:19:\"markpercentage_edit\";s:2:\"no\";s:21:\"markpercentage_delete\";s:2:\"no\";s:9:\"promotion\";s:2:\"no\";s:12:\"conversation\";s:3:\"yes\";s:5:\"media\";s:3:\"yes\";s:9:\"media_add\";s:3:\"yes\";s:12:\"media_delete\";s:3:\"yes\";s:10:\"mailandsms\";s:2:\"no\";s:14:\"mailandsms_add\";s:2:\"no\";s:15:\"mailandsms_view\";s:2:\"no\";s:14:\"question_group\";s:2:\"no\";s:18:\"question_group_add\";s:2:\"no\";s:19:\"question_group_edit\";s:2:\"no\";s:21:\"question_group_delete\";s:2:\"no\";s:14:\"question_level\";s:2:\"no\";s:18:\"question_level_add\";s:2:\"no\";s:19:\"question_level_edit\";s:2:\"no\";s:21:\"question_level_delete\";s:2:\"no\";s:13:\"question_bank\";s:2:\"no\";s:17:\"question_bank_add\";s:2:\"no\";s:18:\"question_bank_edit\";s:2:\"no\";s:20:\"question_bank_delete\";s:2:\"no\";s:18:\"question_bank_view\";s:2:\"no\";s:11:\"online_exam\";s:2:\"no\";s:15:\"online_exam_add\";s:2:\"no\";s:16:\"online_exam_edit\";s:2:\"no\";s:18:\"online_exam_delete\";s:2:\"no\";s:11:\"instruction\";s:2:\"no\";s:15:\"instruction_add\";s:2:\"no\";s:16:\"instruction_edit\";s:2:\"no\";s:18:\"instruction_delete\";s:2:\"no\";s:16:\"instruction_view\";s:2:\"no\";s:15:\"salary_template\";s:2:\"no\";s:19:\"salary_template_add\";s:2:\"no\";s:20:\"salary_template_edit\";s:2:\"no\";s:22:\"salary_template_delete\";s:2:\"no\";s:20:\"salary_template_view\";s:2:\"no\";s:15:\"hourly_template\";s:2:\"no\";s:19:\"hourly_template_add\";s:2:\"no\";s:20:\"hourly_template_edit\";s:2:\"no\";s:22:\"hourly_template_delete\";s:2:\"no\";s:13:\"manage_salary\";s:2:\"no\";s:17:\"manage_salary_add\";s:2:\"no\";s:18:\"manage_salary_edit\";s:2:\"no\";s:20:\"manage_salary_delete\";s:2:\"no\";s:18:\"manage_salary_view\";s:2:\"no\";s:12:\"make_payment\";s:2:\"no\";s:6:\"vendor\";s:2:\"no\";s:10:\"vendor_add\";s:2:\"no\";s:11:\"vendor_edit\";s:2:\"no\";s:13:\"vendor_delete\";s:2:\"no\";s:8:\"location\";s:2:\"no\";s:12:\"location_add\";s:2:\"no\";s:13:\"location_edit\";s:2:\"no\";s:15:\"location_delete\";s:2:\"no\";s:14:\"asset_category\";s:2:\"no\";s:18:\"asset_category_add\";s:2:\"no\";s:19:\"asset_category_edit\";s:2:\"no\";s:21:\"asset_category_delete\";s:2:\"no\";s:5:\"asset\";s:2:\"no\";s:9:\"asset_add\";s:2:\"no\";s:10:\"asset_edit\";s:2:\"no\";s:12:\"asset_delete\";s:2:\"no\";s:10:\"asset_view\";s:2:\"no\";s:16:\"asset_assignment\";s:2:\"no\";s:20:\"asset_assignment_add\";s:2:\"no\";s:21:\"asset_assignment_edit\";s:2:\"no\";s:23:\"asset_assignment_delete\";s:2:\"no\";s:21:\"asset_assignment_view\";s:2:\"no\";s:8:\"purchase\";s:2:\"no\";s:12:\"purchase_add\";s:2:\"no\";s:13:\"purchase_edit\";s:2:\"no\";s:15:\"purchase_delete\";s:2:\"no\";s:15:\"productcategory\";s:2:\"no\";s:19:\"productcategory_add\";s:2:\"no\";s:20:\"productcategory_edit\";s:2:\"no\";s:22:\"productcategory_delete\";s:2:\"no\";s:7:\"product\";s:2:\"no\";s:11:\"product_add\";s:2:\"no\";s:12:\"product_edit\";s:2:\"no\";s:14:\"product_delete\";s:2:\"no\";s:16:\"productwarehouse\";s:2:\"no\";s:20:\"productwarehouse_add\";s:2:\"no\";s:21:\"productwarehouse_edit\";s:2:\"no\";s:23:\"productwarehouse_delete\";s:2:\"no\";s:15:\"productsupplier\";s:2:\"no\";s:19:\"productsupplier_add\";s:2:\"no\";s:20:\"productsupplier_edit\";s:2:\"no\";s:22:\"productsupplier_delete\";s:2:\"no\";s:15:\"productpurchase\";s:2:\"no\";s:19:\"productpurchase_add\";s:2:\"no\";s:20:\"productpurchase_edit\";s:2:\"no\";s:22:\"productpurchase_delete\";s:2:\"no\";s:20:\"productpurchase_view\";s:2:\"no\";s:11:\"productsale\";s:2:\"no\";s:15:\"productsale_add\";s:2:\"no\";s:16:\"productsale_edit\";s:2:\"no\";s:18:\"productsale_delete\";s:2:\"no\";s:16:\"productsale_view\";s:2:\"no\";s:13:\"leavecategory\";s:2:\"no\";s:17:\"leavecategory_add\";s:2:\"no\";s:18:\"leavecategory_edit\";s:2:\"no\";s:20:\"leavecategory_delete\";s:2:\"no\";s:11:\"leaveassign\";s:2:\"no\";s:15:\"leaveassign_add\";s:2:\"no\";s:16:\"leaveassign_edit\";s:2:\"no\";s:18:\"leaveassign_delete\";s:2:\"no\";s:10:\"leaveapply\";s:2:\"no\";s:14:\"leaveapply_add\";s:2:\"no\";s:15:\"leaveapply_edit\";s:2:\"no\";s:17:\"leaveapply_delete\";s:2:\"no\";s:15:\"leaveapply_view\";s:2:\"no\";s:16:\"leaveapplication\";s:2:\"no\";s:18:\"activitiescategory\";s:2:\"no\";s:22:\"activitiescategory_add\";s:2:\"no\";s:23:\"activitiescategory_edit\";s:2:\"no\";s:25:\"activitiescategory_delete\";s:2:\"no\";s:10:\"activities\";s:3:\"yes\";s:14:\"activities_add\";s:3:\"yes\";s:17:\"activities_delete\";s:3:\"yes\";s:9:\"childcare\";s:2:\"no\";s:13:\"childcare_add\";s:2:\"no\";s:14:\"childcare_edit\";s:2:\"no\";s:16:\"childcare_delete\";s:2:\"no\";s:7:\"lmember\";s:2:\"no\";s:11:\"lmember_add\";s:2:\"no\";s:12:\"lmember_edit\";s:2:\"no\";s:14:\"lmember_delete\";s:2:\"no\";s:12:\"lmember_view\";s:2:\"no\";s:4:\"book\";s:2:\"no\";s:8:\"book_add\";s:2:\"no\";s:9:\"book_edit\";s:2:\"no\";s:11:\"book_delete\";s:2:\"no\";s:5:\"issue\";s:2:\"no\";s:9:\"issue_add\";s:2:\"no\";s:10:\"issue_edit\";s:2:\"no\";s:10:\"issue_view\";s:2:\"no\";s:6:\"ebooks\";s:2:\"no\";s:10:\"ebooks_add\";s:2:\"no\";s:11:\"ebooks_edit\";s:2:\"no\";s:13:\"ebooks_delete\";s:2:\"no\";s:11:\"ebooks_view\";s:2:\"no\";s:9:\"transport\";s:2:\"no\";s:13:\"transport_add\";s:2:\"no\";s:14:\"transport_edit\";s:2:\"no\";s:16:\"transport_delete\";s:2:\"no\";s:7:\"tmember\";s:2:\"no\";s:11:\"tmember_add\";s:2:\"no\";s:12:\"tmember_edit\";s:2:\"no\";s:14:\"tmember_delete\";s:2:\"no\";s:12:\"tmember_view\";s:2:\"no\";s:6:\"hostel\";s:2:\"no\";s:10:\"hostel_add\";s:2:\"no\";s:11:\"hostel_edit\";s:2:\"no\";s:13:\"hostel_delete\";s:2:\"no\";s:8:\"category\";s:2:\"no\";s:12:\"category_add\";s:2:\"no\";s:13:\"category_edit\";s:2:\"no\";s:15:\"category_delete\";s:2:\"no\";s:7:\"hmember\";s:2:\"no\";s:11:\"hmember_add\";s:2:\"no\";s:12:\"hmember_edit\";s:2:\"no\";s:14:\"hmember_delete\";s:2:\"no\";s:12:\"hmember_view\";s:2:\"no\";s:8:\"feetypes\";s:2:\"no\";s:12:\"feetypes_add\";s:2:\"no\";s:13:\"feetypes_edit\";s:2:\"no\";s:15:\"feetypes_delete\";s:2:\"no\";s:7:\"invoice\";s:2:\"no\";s:11:\"invoice_add\";s:2:\"no\";s:12:\"invoice_edit\";s:2:\"no\";s:14:\"invoice_delete\";s:2:\"no\";s:12:\"invoice_view\";s:2:\"no\";s:14:\"paymenthistory\";s:2:\"no\";s:19:\"paymenthistory_edit\";s:2:\"no\";s:21:\"paymenthistory_delete\";s:2:\"no\";s:7:\"expense\";s:2:\"no\";s:11:\"expense_add\";s:2:\"no\";s:12:\"expense_edit\";s:2:\"no\";s:14:\"expense_delete\";s:2:\"no\";s:6:\"income\";s:2:\"no\";s:10:\"income_add\";s:2:\"no\";s:11:\"income_edit\";s:2:\"no\";s:13:\"income_delete\";s:2:\"no\";s:14:\"global_payment\";s:2:\"no\";s:6:\"notice\";s:3:\"yes\";s:10:\"notice_add\";s:2:\"no\";s:11:\"notice_edit\";s:2:\"no\";s:13:\"notice_delete\";s:2:\"no\";s:11:\"notice_view\";s:3:\"yes\";s:5:\"event\";s:3:\"yes\";s:9:\"event_add\";s:2:\"no\";s:10:\"event_edit\";s:2:\"no\";s:12:\"event_delete\";s:2:\"no\";s:10:\"event_view\";s:3:\"yes\";s:7:\"holiday\";s:3:\"yes\";s:11:\"holiday_add\";s:2:\"no\";s:12:\"holiday_edit\";s:2:\"no\";s:14:\"holiday_delete\";s:2:\"no\";s:12:\"holiday_view\";s:3:\"yes\";s:13:\"classesreport\";s:3:\"yes\";s:13:\"studentreport\";s:3:\"yes\";s:12:\"idcardreport\";s:2:\"no\";s:15:\"admitcardreport\";s:2:\"no\";s:13:\"routinereport\";s:3:\"yes\";s:18:\"examschedulereport\";s:3:\"yes\";s:16:\"attendancereport\";s:3:\"yes\";s:24:\"attendanceoverviewreport\";s:3:\"yes\";s:18:\"librarybooksreport\";s:2:\"no\";s:17:\"librarycardreport\";s:2:\"no\";s:22:\"librarybookissuereport\";s:2:\"no\";s:14:\"terminalreport\";s:3:\"yes\";s:16:\"meritstagereport\";s:3:\"yes\";s:21:\"tabulationsheetreport\";s:3:\"yes\";s:15:\"marksheetreport\";s:3:\"yes\";s:18:\"progresscardreport\";s:3:\"yes\";s:20:\"studentsessionreport\";s:3:\"yes\";s:16:\"onlineexamreport\";s:2:\"no\";s:24:\"onlineexamquestionreport\";s:2:\"no\";s:21:\"onlineadmissionreport\";s:2:\"no\";s:17:\"certificatereport\";s:2:\"no\";s:22:\"leaveapplicationreport\";s:2:\"no\";s:21:\"productpurchasereport\";s:2:\"no\";s:17:\"productsalereport\";s:2:\"no\";s:23:\"searchpaymentfeesreport\";s:2:\"no\";s:10:\"feesreport\";s:2:\"no\";s:13:\"duefeesreport\";s:2:\"no\";s:17:\"balancefeesreport\";s:2:\"no\";s:17:\"transactionreport\";s:2:\"no\";s:17:\"studentfinereport\";s:2:\"no\";s:12:\"salaryreport\";s:2:\"no\";s:19:\"accountledgerreport\";s:2:\"no\";s:15:\"onlineadmission\";s:2:\"no\";s:11:\"visitorinfo\";s:2:\"no\";s:18:\"visitorinfo_delete\";s:2:\"no\";s:16:\"visitorinfo_view\";s:2:\"no\";s:10:\"schoolyear\";s:2:\"no\";s:14:\"schoolyear_add\";s:2:\"no\";s:15:\"schoolyear_edit\";s:2:\"no\";s:17:\"schoolyear_delete\";s:2:\"no\";s:12:\"studentgroup\";s:2:\"no\";s:16:\"studentgroup_add\";s:2:\"no\";s:17:\"studentgroup_edit\";s:2:\"no\";s:19:\"studentgroup_delete\";s:2:\"no\";s:8:\"complain\";s:3:\"yes\";s:12:\"complain_add\";s:3:\"yes\";s:13:\"complain_edit\";s:2:\"no\";s:15:\"complain_delete\";s:2:\"no\";s:13:\"complain_view\";s:3:\"yes\";s:20:\"certificate_template\";s:2:\"no\";s:24:\"certificate_template_add\";s:2:\"no\";s:25:\"certificate_template_edit\";s:2:\"no\";s:27:\"certificate_template_delete\";s:2:\"no\";s:25:\"certificate_template_view\";s:2:\"no\";s:11:\"systemadmin\";s:2:\"no\";s:15:\"systemadmin_add\";s:2:\"no\";s:16:\"systemadmin_edit\";s:2:\"no\";s:18:\"systemadmin_delete\";s:2:\"no\";s:16:\"systemadmin_view\";s:2:\"no\";s:13:\"resetpassword\";s:2:\"no\";s:10:\"sociallink\";s:2:\"no\";s:14:\"sociallink_add\";s:2:\"no\";s:15:\"sociallink_edit\";s:2:\"no\";s:17:\"sociallink_delete\";s:2:\"no\";s:18:\"mailandsmstemplate\";s:2:\"no\";s:22:\"mailandsmstemplate_add\";s:2:\"no\";s:23:\"mailandsmstemplate_edit\";s:2:\"no\";s:25:\"mailandsmstemplate_delete\";s:2:\"no\";s:23:\"mailandsmstemplate_view\";s:2:\"no\";s:11:\"bulkimport \";s:2:\"no\";s:6:\"backup\";s:2:\"no\";s:8:\"usertype\";s:2:\"no\";s:12:\"usertype_add\";s:2:\"no\";s:13:\"usertype_edit\";s:2:\"no\";s:15:\"usertype_delete\";s:2:\"no\";s:10:\"permission\";s:2:\"no\";s:6:\"update\";s:2:\"no\";s:16:\"posts_categories\";s:2:\"no\";s:20:\"posts_categories_add\";s:2:\"no\";s:21:\"posts_categories_edit\";s:2:\"no\";s:23:\"posts_categories_delete\";s:2:\"no\";s:5:\"posts\";s:2:\"no\";s:9:\"posts_add\";s:2:\"no\";s:10:\"posts_edit\";s:2:\"no\";s:12:\"posts_delete\";s:2:\"no\";s:5:\"pages\";s:2:\"no\";s:9:\"pages_add\";s:2:\"no\";s:10:\"pages_edit\";s:2:\"no\";s:12:\"pages_delete\";s:2:\"no\";s:12:\"frontendmenu\";s:2:\"no\";s:7:\"setting\";s:2:\"no\";s:16:\"frontend_setting\";s:2:\"no\";s:15:\"paymentsettings\";s:2:\"no\";s:11:\"smssettings\";s:2:\"no\";s:12:\"emailsetting\";s:2:\"no\";s:11:\"marksetting\";s:3:\"yes\";}')
ERROR - 2019-12-21 14:57:34 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 14:57:34 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('2663e42224ec8aecaa5b350c64732179') AS ci_session_lock
ERROR - 2019-12-21 16:15:01 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 16:15:01 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT `mark`.*, `markrelation`.`markrelationID`, `markrelation`.`markpercentageID`, `markrelation`.`mark`
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '2'
AND `mark`.`examID` = '1'
ERROR - 2019-12-21 16:15:01 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 152
ERROR - 2019-12-21 16:15:01 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576923301
WHERE `id` = '8b1377df8b254331b5791b0dd36a50cca9a77f70'
ERROR - 2019-12-21 16:15:01 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 16:15:01 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('28b18e08ebf0579095b3680129d04f8e') AS ci_session_lock
ERROR - 2019-12-21 16:15:31 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 16:15:31 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT `mark`.*, `markrelation`.`markrelationID`, `markrelation`.`markpercentageID`, `markrelation`.`mark`
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '2'
AND `mark`.`examID` = '1'
ERROR - 2019-12-21 16:15:31 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 152
ERROR - 2019-12-21 16:15:31 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576923331
WHERE `id` = '8b1377df8b254331b5791b0dd36a50cca9a77f70'
ERROR - 2019-12-21 16:15:31 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 16:15:31 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('28b18e08ebf0579095b3680129d04f8e') AS ci_session_lock
ERROR - 2019-12-21 16:34:02 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 16:34:02 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '3'
ERROR - 2019-12-21 16:34:02 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 16:34:02 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576924442
WHERE `id` = '4b96a1895a790abb962777f49fc3dfb1ea7fddf6'
ERROR - 2019-12-21 16:34:02 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 16:34:02 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('46248a05d6a37734cc8ef344222dee7e') AS ci_session_lock
ERROR - 2019-12-21 16:34:07 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT GET_LOCK('46248a05d6a37734cc8ef344222dee7e', 300) AS ci_session_lock
ERROR - 2019-12-21 16:34:07 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/main/libraries/Session/drivers/Session_database_driver.php 384
ERROR - 2019-12-21 16:34:12 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT GET_LOCK('46248a05d6a37734cc8ef344222dee7e', 300) AS ci_session_lock
ERROR - 2019-12-21 16:34:12 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/main/libraries/Session/drivers/Session_database_driver.php 384
ERROR - 2019-12-21 16:34:17 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT GET_LOCK('46248a05d6a37734cc8ef344222dee7e', 300) AS ci_session_lock
ERROR - 2019-12-21 16:34:17 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/main/libraries/Session/drivers/Session_database_driver.php 384
ERROR - 2019-12-21 16:34:17 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT GET_LOCK('46248a05d6a37734cc8ef344222dee7e', 300) AS ci_session_lock
ERROR - 2019-12-21 16:34:17 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/main/libraries/Session/drivers/Session_database_driver.php 384
ERROR - 2019-12-21 16:34:27 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 16:34:27 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '3'
ERROR - 2019-12-21 16:34:27 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT `data`
FROM `school_sessions`
WHERE `id` = '4b96a1895a790abb962777f49fc3dfb1ea7fddf6'
ERROR - 2019-12-21 16:34:27 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 16:34:27 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576924467
WHERE `id` = '4b96a1895a790abb962777f49fc3dfb1ea7fddf6'
ERROR - 2019-12-21 16:34:27 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 16:34:27 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('46248a05d6a37734cc8ef344222dee7e') AS ci_session_lock
ERROR - 2019-12-21 16:34:27 --> Query error: MySQL server has gone away - Invalid query: SELECT *
FROM `setting`
ERROR - 2019-12-21 16:34:27 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Site_m.php 22
ERROR - 2019-12-21 16:34:27 --> Query error: MySQL server has gone away - Invalid query: INSERT INTO `school_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('4b96a1895a790abb962777f49fc3dfb1ea7fddf6', '58.145.185.239', 1576924467, '')
ERROR - 2019-12-21 16:34:27 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 16:34:27 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('46248a05d6a37734cc8ef344222dee7e') AS ci_session_lock
ERROR - 2019-12-21 16:35:12 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 16:35:12 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '3'
ERROR - 2019-12-21 16:35:12 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 16:35:12 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576924512
WHERE `id` = '4b96a1895a790abb962777f49fc3dfb1ea7fddf6'
ERROR - 2019-12-21 16:35:12 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 16:35:12 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('46248a05d6a37734cc8ef344222dee7e') AS ci_session_lock
ERROR - 2019-12-21 16:35:12 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT `data`
FROM `school_sessions`
WHERE `id` = '4b96a1895a790abb962777f49fc3dfb1ea7fddf6'
ERROR - 2019-12-21 16:35:12 --> Query error: MySQL server has gone away - Invalid query: SELECT *
FROM `setting`
ERROR - 2019-12-21 16:35:12 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Site_m.php 22
ERROR - 2019-12-21 16:35:12 --> Query error: MySQL server has gone away - Invalid query: INSERT INTO `school_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('4b96a1895a790abb962777f49fc3dfb1ea7fddf6', '58.145.185.239', 1576924512, '__ci_last_regenerate|i:1576924512;')
ERROR - 2019-12-21 16:35:12 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 16:35:12 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('46248a05d6a37734cc8ef344222dee7e') AS ci_session_lock
ERROR - 2019-12-21 16:41:32 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 16:41:32 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`examID` = '1'
AND `mark`.`classesID` = '3'
ERROR - 2019-12-21 16:41:32 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 16:41:32 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576924892
WHERE `id` = 'c647d348009396c012f5f6ceeaa18541edc5aa09'
ERROR - 2019-12-21 16:41:32 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 16:41:32 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('21903b6fec2deaa78472360b7d89d355') AS ci_session_lock
ERROR - 2019-12-21 16:42:02 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 16:42:02 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`examID` = '1'
AND `mark`.`classesID` = '3'
ERROR - 2019-12-21 16:42:02 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 16:42:02 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576924922
WHERE `id` = 'c647d348009396c012f5f6ceeaa18541edc5aa09'
ERROR - 2019-12-21 16:42:02 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 16:42:02 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('21903b6fec2deaa78472360b7d89d355') AS ci_session_lock
ERROR - 2019-12-21 16:42:42 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 16:42:42 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`examID` = '1'
AND `mark`.`classesID` = '3'
ERROR - 2019-12-21 16:42:42 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 16:42:42 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576924962
WHERE `id` = 'c647d348009396c012f5f6ceeaa18541edc5aa09'
ERROR - 2019-12-21 16:42:42 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 16:42:42 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('21903b6fec2deaa78472360b7d89d355') AS ci_session_lock
ERROR - 2019-12-21 16:43:07 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 16:43:07 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`examID` = '1'
AND `mark`.`classesID` = '3'
ERROR - 2019-12-21 16:43:07 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 16:43:07 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576924987
WHERE `id` = 'c647d348009396c012f5f6ceeaa18541edc5aa09'
ERROR - 2019-12-21 16:43:07 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 16:43:07 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('21903b6fec2deaa78472360b7d89d355') AS ci_session_lock
ERROR - 2019-12-21 16:43:32 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 16:43:32 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`examID` = '1'
AND `mark`.`classesID` = '3'
ERROR - 2019-12-21 16:43:32 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 16:43:32 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576925012
WHERE `id` = 'c647d348009396c012f5f6ceeaa18541edc5aa09'
ERROR - 2019-12-21 16:43:32 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 16:43:32 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('21903b6fec2deaa78472360b7d89d355') AS ci_session_lock
ERROR - 2019-12-21 17:07:22 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 17:07:22 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`examID` = '1'
AND `mark`.`classesID` = '2'
ERROR - 2019-12-21 17:07:22 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 17:07:22 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576926442
WHERE `id` = 'c1c422ce65d918e6d041cf90c42e0b2d3431923c'
ERROR - 2019-12-21 17:07:22 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 17:07:22 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('ef670438d850afc752d4aef74639341b') AS ci_session_lock
ERROR - 2019-12-21 17:09:28 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 17:09:28 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT `mark`.*, `markrelation`.`markrelationID`, `markrelation`.`markpercentageID`, `markrelation`.`mark`
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '2'
AND `mark`.`examID` = '1'
ERROR - 2019-12-21 17:09:28 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 152
ERROR - 2019-12-21 17:09:28 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576926568
WHERE `id` = 'c1c422ce65d918e6d041cf90c42e0b2d3431923c'
ERROR - 2019-12-21 17:09:28 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 17:09:28 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('ef670438d850afc752d4aef74639341b') AS ci_session_lock
ERROR - 2019-12-21 17:09:58 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 17:09:58 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT `mark`.*, `markrelation`.`markrelationID`, `markrelation`.`markpercentageID`, `markrelation`.`mark`
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '2'
AND `mark`.`examID` = '1'
ERROR - 2019-12-21 17:09:58 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 152
ERROR - 2019-12-21 17:09:58 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576926598
WHERE `id` = 'c1c422ce65d918e6d041cf90c42e0b2d3431923c'
ERROR - 2019-12-21 17:09:58 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 17:09:58 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('ef670438d850afc752d4aef74639341b') AS ci_session_lock
ERROR - 2019-12-21 17:10:28 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 17:10:28 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT `mark`.*, `markrelation`.`markrelationID`, `markrelation`.`markpercentageID`, `markrelation`.`mark`
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '2'
AND `mark`.`examID` = '1'
ERROR - 2019-12-21 17:10:28 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 152
ERROR - 2019-12-21 17:10:28 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576926628
WHERE `id` = 'c1c422ce65d918e6d041cf90c42e0b2d3431923c'
ERROR - 2019-12-21 17:10:28 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 17:10:28 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('ef670438d850afc752d4aef74639341b') AS ci_session_lock
ERROR - 2019-12-21 17:11:13 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 17:11:13 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT `mark`.*, `markrelation`.`markrelationID`, `markrelation`.`markpercentageID`, `markrelation`.`mark`
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '2'
AND `mark`.`examID` = '1'
ERROR - 2019-12-21 17:11:13 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 152
ERROR - 2019-12-21 17:11:13 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576926673
WHERE `id` = 'c1c422ce65d918e6d041cf90c42e0b2d3431923c'
ERROR - 2019-12-21 17:11:13 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 17:11:13 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('ef670438d850afc752d4aef74639341b') AS ci_session_lock
ERROR - 2019-12-21 17:11:58 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 17:11:58 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT `mark`.*, `markrelation`.`markrelationID`, `markrelation`.`markpercentageID`, `markrelation`.`mark`
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '2'
AND `mark`.`examID` = '1'
ERROR - 2019-12-21 17:11:58 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 152
ERROR - 2019-12-21 17:11:58 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576926718
WHERE `id` = 'c1c422ce65d918e6d041cf90c42e0b2d3431923c'
ERROR - 2019-12-21 17:11:58 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 17:11:58 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('ef670438d850afc752d4aef74639341b') AS ci_session_lock
ERROR - 2019-12-21 17:12:53 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 17:12:53 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '2'
ERROR - 2019-12-21 17:12:53 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 17:12:53 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576926773
WHERE `id` = '620e3dbf92495d8e355e25a46bc4021200ea53da'
ERROR - 2019-12-21 17:12:53 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 17:12:53 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('7d9e7554048a6f62dc9862a3fe1647e9') AS ci_session_lock
ERROR - 2019-12-21 17:12:53 --> Query error: MySQL server has gone away - Invalid query: SELECT *
FROM `setting`
ERROR - 2019-12-21 17:12:53 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Site_m.php 22
ERROR - 2019-12-21 17:12:53 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576926773
WHERE `id` = '620e3dbf92495d8e355e25a46bc4021200ea53da'
ERROR - 2019-12-21 17:12:53 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 17:12:53 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('7d9e7554048a6f62dc9862a3fe1647e9') AS ci_session_lock
ERROR - 2019-12-21 17:13:12 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:13:12 --> Unable to connect to the database
ERROR - 2019-12-21 17:13:12 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:13:12 --> Unable to connect to the database
ERROR - 2019-12-21 17:13:12 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:13:12 --> Unable to connect to the database
ERROR - 2019-12-21 17:13:12 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:13:12 --> Unable to connect to the database
ERROR - 2019-12-21 17:13:12 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:13:12 --> Unable to connect to the database
ERROR - 2019-12-21 17:13:12 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:13:12 --> Unable to connect to the database
ERROR - 2019-12-21 17:13:12 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:13:12 --> Unable to connect to the database
ERROR - 2019-12-21 17:13:12 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:13:12 --> Unable to connect to the database
ERROR - 2019-12-21 17:13:12 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:13:12 --> Unable to connect to the database
ERROR - 2019-12-21 17:13:12 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:13:12 --> Severity: Error --> session_start(): Failed to initialize storage module: user (path: school_sessions) /home/pmhsedu/public_html/erp/main/libraries/Session/Session.php 143
ERROR - 2019-12-21 17:13:12 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:13:12 --> Unable to connect to the database
ERROR - 2019-12-21 17:13:12 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:13:12 --> Unable to connect to the database
ERROR - 2019-12-21 17:13:12 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:13:12 --> Unable to connect to the database
ERROR - 2019-12-21 17:13:12 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:13:12 --> Unable to connect to the database
ERROR - 2019-12-21 17:13:12 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:13:12 --> Unable to connect to the database
ERROR - 2019-12-21 17:13:12 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:13:12 --> Unable to connect to the database
ERROR - 2019-12-21 17:13:12 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:13:12 --> Unable to connect to the database
ERROR - 2019-12-21 17:13:12 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:13:12 --> Unable to connect to the database
ERROR - 2019-12-21 17:13:12 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:13:12 --> Unable to connect to the database
ERROR - 2019-12-21 17:13:12 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:13:12 --> Severity: Error --> session_start(): Failed to initialize storage module: user (path: school_sessions) /home/pmhsedu/public_html/erp/main/libraries/Session/Session.php 143
ERROR - 2019-12-21 17:13:12 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:13:12 --> Unable to connect to the database
ERROR - 2019-12-21 17:13:12 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:13:12 --> Unable to connect to the database
ERROR - 2019-12-21 17:13:12 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:13:12 --> Unable to connect to the database
ERROR - 2019-12-21 17:13:12 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:13:12 --> Unable to connect to the database
ERROR - 2019-12-21 17:13:12 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:13:12 --> Unable to connect to the database
ERROR - 2019-12-21 17:13:12 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:13:12 --> Unable to connect to the database
ERROR - 2019-12-21 17:13:12 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:13:12 --> Unable to connect to the database
ERROR - 2019-12-21 17:13:12 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:13:12 --> Unable to connect to the database
ERROR - 2019-12-21 17:13:12 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:13:12 --> Unable to connect to the database
ERROR - 2019-12-21 17:13:12 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:13:12 --> Severity: Error --> session_start(): Failed to initialize storage module: user (path: school_sessions) /home/pmhsedu/public_html/erp/main/libraries/Session/Session.php 143
ERROR - 2019-12-21 17:13:15 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:13:15 --> Unable to connect to the database
ERROR - 2019-12-21 17:13:15 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:13:15 --> Unable to connect to the database
ERROR - 2019-12-21 17:13:15 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:13:15 --> Unable to connect to the database
ERROR - 2019-12-21 17:13:15 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:13:15 --> Unable to connect to the database
ERROR - 2019-12-21 17:13:15 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:13:15 --> Unable to connect to the database
ERROR - 2019-12-21 17:13:15 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:13:15 --> Unable to connect to the database
ERROR - 2019-12-21 17:13:15 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:13:15 --> Unable to connect to the database
ERROR - 2019-12-21 17:13:15 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:13:15 --> Unable to connect to the database
ERROR - 2019-12-21 17:13:15 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:13:15 --> Unable to connect to the database
ERROR - 2019-12-21 17:13:15 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:13:15 --> Severity: Error --> session_start(): Failed to initialize storage module: user (path: school_sessions) /home/pmhsedu/public_html/erp/main/libraries/Session/Session.php 143
ERROR - 2019-12-21 17:13:18 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 17:13:18 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '2'
ERROR - 2019-12-21 17:13:18 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 17:13:18 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576926798
WHERE `id` = '620e3dbf92495d8e355e25a46bc4021200ea53da'
ERROR - 2019-12-21 17:13:18 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 17:13:18 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT GET_LOCK('7d9e7554048a6f62dc9862a3fe1647e9', 300) AS ci_session_lock
ERROR - 2019-12-21 17:13:18 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('7d9e7554048a6f62dc9862a3fe1647e9') AS ci_session_lock
ERROR - 2019-12-21 17:13:18 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/main/libraries/Session/drivers/Session_database_driver.php 384
ERROR - 2019-12-21 17:13:18 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT `data`
FROM `school_sessions`
WHERE `id` = '620e3dbf92495d8e355e25a46bc4021200ea53da'
ERROR - 2019-12-21 17:13:18 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT `data`
FROM `school_sessions`
WHERE `id` = '620e3dbf92495d8e355e25a46bc4021200ea53da'
ERROR - 2019-12-21 17:13:18 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT GET_LOCK('7d9e7554048a6f62dc9862a3fe1647e9', 300) AS ci_session_lock
ERROR - 2019-12-21 17:13:18 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/main/libraries/Session/drivers/Session_database_driver.php 384
ERROR - 2019-12-21 17:13:18 --> Query error: MySQL server has gone away - Invalid query: SELECT *
FROM `setting`
ERROR - 2019-12-21 17:13:18 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Site_m.php 22
ERROR - 2019-12-21 17:13:18 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576926798
WHERE `id` = '620e3dbf92495d8e355e25a46bc4021200ea53da'
ERROR - 2019-12-21 17:13:18 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 17:13:18 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('7d9e7554048a6f62dc9862a3fe1647e9') AS ci_session_lock
ERROR - 2019-12-21 17:13:18 --> Query error: MySQL server has gone away - Invalid query: SELECT *
FROM `setting`
ERROR - 2019-12-21 17:13:18 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Site_m.php 22
ERROR - 2019-12-21 17:13:18 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576926798
WHERE `id` = '620e3dbf92495d8e355e25a46bc4021200ea53da'
ERROR - 2019-12-21 17:13:18 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 17:13:18 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('7d9e7554048a6f62dc9862a3fe1647e9') AS ci_session_lock
ERROR - 2019-12-21 17:13:18 --> Query error: MySQL server has gone away - Invalid query: SELECT *
FROM `setting`
ERROR - 2019-12-21 17:13:18 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Site_m.php 22
ERROR - 2019-12-21 17:13:18 --> Query error: MySQL server has gone away - Invalid query: INSERT INTO `school_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('620e3dbf92495d8e355e25a46bc4021200ea53da', '64.233.173.20', 1576926798, '__ci_last_regenerate|i:1576926798;')
ERROR - 2019-12-21 17:13:18 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 17:13:18 --> Query error: MySQL server has gone away - Invalid query: SELECT *
FROM `setting`
ERROR - 2019-12-21 17:13:18 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('7d9e7554048a6f62dc9862a3fe1647e9') AS ci_session_lock
ERROR - 2019-12-21 17:13:18 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Site_m.php 22
ERROR - 2019-12-21 17:13:18 --> Query error: MySQL server has gone away - Invalid query: INSERT INTO `school_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('620e3dbf92495d8e355e25a46bc4021200ea53da', '64.233.173.18', 1576926798, '__ci_last_regenerate|i:1576926798;')
ERROR - 2019-12-21 17:13:18 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 17:13:18 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('7d9e7554048a6f62dc9862a3fe1647e9') AS ci_session_lock
ERROR - 2019-12-21 17:14:48 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 17:14:48 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '2'
ERROR - 2019-12-21 17:14:48 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 17:14:48 --> Query error: MySQL server has gone away - Invalid query: INSERT INTO `school_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b4fcc89dd8af62ec42e5cd5c1225023c52352092', '107.167.108.59', 1576926888, '__ci_last_regenerate|i:1576926862;english|N;loginuserID|s:2:\"11\";name|s:14:\"Smriti Mallick\";email|s:23:\"smritimallick@gmail.com\";usertypeID|s:1:\"2\";usertype|s:7:\"Teacher\";username|s:13:\"SmritiMallick\";photo|s:132:\"f6cae63cc3ec12897d322416066563e21f6119e12aca7d7f0ef151bfd17247afd829719cca9271be8b5e3149ee297612e00fefc1f1cc225cb363037d0f9fe95e.jpg\";lang|s:7:\"english\";defaultschoolyearID|s:1:\"1\";varifyvaliduser|b:1;loggedin|b:1;get_permission|b:1;master_permission_set|a:371:{s:9:\"dashboard\";s:3:\"yes\";s:7:\"student\";s:3:\"yes\";s:11:\"student_add\";s:2:\"no\";s:12:\"student_edit\";s:2:\"no\";s:14:\"student_delete\";s:2:\"no\";s:12:\"student_view\";s:3:\"yes\";s:7:\"parents\";s:3:\"yes\";s:11:\"parents_add\";s:2:\"no\";s:12:\"parents_edit\";s:2:\"no\";s:14:\"parents_delete\";s:2:\"no\";s:12:\"parents_view\";s:3:\"yes\";s:7:\"teacher\";s:3:\"yes\";s:11:\"teacher_add\";s:2:\"no\";s:12:\"teacher_edit\";s:2:\"no\";s:14:\"teacher_delete\";s:2:\"no\";s:12:\"teacher_view\";s:3:\"yes\";s:4:\"user\";s:2:\"no\";s:8:\"user_add\";s:2:\"no\";s:9:\"user_edit\";s:2:\"no\";s:11:\"user_delete\";s:2:\"no\";s:9:\"user_view\";s:2:\"no\";s:7:\"classes\";s:2:\"no\";s:11:\"classes_add\";s:2:\"no\";s:12:\"classes_edit\";s:2:\"no\";s:14:\"classes_delete\";s:2:\"no\";s:7:\"section\";s:2:\"no\";s:11:\"section_add\";s:2:\"no\";s:12:\"section_edit\";s:2:\"no\";s:15:\"semester_delete\";s:2:\"no\";s:14:\"section_delete\";s:2:\"no\";s:7:\"subject\";s:3:\"yes\";s:11:\"subject_add\";s:2:\"no\";s:12:\"subject_edit\";s:3:\"yes\";s:14:\"subject_delete\";s:2:\"no\";s:8:\"syllabus\";s:3:\"yes\";s:12:\"syllabus_add\";s:3:\"yes\";s:13:\"syllabus_edit\";s:3:\"yes\";s:15:\"syllabus_delete\";s:3:\"yes\";s:10:\"assignment\";s:3:\"yes\";s:14:\"assignment_add\";s:3:\"yes\";s:15:\"assignment_edit\";s:3:\"yes\";s:17:\"assignment_delete\";s:3:\"yes\";s:15:\"assignment_view\";s:3:\"yes\";s:7:\"routine\";s:3:\"yes\";s:11:\"routine_add\";s:2:\"no\";s:12:\"routine_edit\";s:2:\"no\";s:14:\"routine_delete\";s:2:\"no\";s:11:\"sattendance\";s:3:\"yes\";s:15:\"sattendance_add\";s:3:\"yes\";s:16:\"sattendance_view\";s:3:\"yes\";s:11:\"tattendance\";s:3:\"yes\";s:15:\"tattendance_add\";s:2:\"no\";s:16:\"tattendance_view\";s:3:\"yes\";s:11:\"uattendance\";s:3:\"yes\";s:15:\"uattendance_add\";s:2:\"no\";s:16:\"uattendance_view\";s:3:\"yes\";s:4:\"exam\";s:2:\"no\";s:8:\"exam_add\";s:2:\"no\";s:9:\"exam_edit\";s:2:\"no\";s:11:\"exam_delete\";s:2:\"no\";s:12:\"examschedule\";s:3:\"yes\";s:16:\"examschedule_add\";s:2:\"no\";s:17:\"examschedule_edit\";s:2:\"no\";s:19:\"examschedule_delete\";s:2:\"no\";s:5:\"grade\";s:3:\"yes\";s:9:\"grade_add\";s:3:\"yes\";s:10:\"grade_edit\";s:3:\"yes\";s:12:\"grade_delete\";s:3:\"yes\";s:11:\"eattendance\";s:3:\"yes\";s:15:\"eattendance_add\";s:3:\"yes\";s:4:\"mark\";s:3:\"yes\";s:8:\"mark_add\";s:3:\"yes\";s:9:\"mark_view\";s:3:\"yes\";s:14:\"markpercentage\";s:2:\"no\";s:18:\"markpercentage_add\";s:2:\"no\";s:19:\"markpercentage_edit\";s:2:\"no\";s:21:\"markpercentage_delete\";s:2:\"no\";s:9:\"promotion\";s:2:\"no\";s:12:\"conversation\";s:3:\"yes\";s:5:\"media\";s:3:\"yes\";s:9:\"media_add\";s:3:\"yes\";s:12:\"media_delete\";s:3:\"yes\";s:10:\"mailandsms\";s:2:\"no\";s:14:\"mailandsms_add\";s:2:\"no\";s:15:\"mailandsms_view\";s:2:\"no\";s:14:\"question_group\";s:2:\"no\";s:18:\"question_group_add\";s:2:\"no\";s:19:\"question_group_edit\";s:2:\"no\";s:21:\"question_group_delete\";s:2:\"no\";s:14:\"question_level\";s:2:\"no\";s:18:\"question_level_add\";s:2:\"no\";s:19:\"question_level_edit\";s:2:\"no\";s:21:\"question_level_delete\";s:2:\"no\";s:13:\"question_bank\";s:2:\"no\";s:17:\"question_bank_add\";s:2:\"no\";s:18:\"question_bank_edit\";s:2:\"no\";s:20:\"question_bank_delete\";s:2:\"no\";s:18:\"question_bank_view\";s:2:\"no\";s:11:\"online_exam\";s:2:\"no\";s:15:\"online_exam_add\";s:2:\"no\";s:16:\"online_exam_edit\";s:2:\"no\";s:18:\"online_exam_delete\";s:2:\"no\";s:11:\"instruction\";s:2:\"no\";s:15:\"instruction_add\";s:2:\"no\";s:16:\"instruction_edit\";s:2:\"no\";s:18:\"instruction_delete\";s:2:\"no\";s:16:\"instruction_view\";s:2:\"no\";s:15:\"salary_template\";s:2:\"no\";s:19:\"salary_template_add\";s:2:\"no\";s:20:\"salary_template_edit\";s:2:\"no\";s:22:\"salary_template_delete\";s:2:\"no\";s:20:\"salary_template_view\";s:2:\"no\";s:15:\"hourly_template\";s:2:\"no\";s:19:\"hourly_template_add\";s:2:\"no\";s:20:\"hourly_template_edit\";s:2:\"no\";s:22:\"hourly_template_delete\";s:2:\"no\";s:13:\"manage_salary\";s:2:\"no\";s:17:\"manage_salary_add\";s:2:\"no\";s:18:\"manage_salary_edit\";s:2:\"no\";s:20:\"manage_salary_delete\";s:2:\"no\";s:18:\"manage_salary_view\";s:2:\"no\";s:12:\"make_payment\";s:2:\"no\";s:6:\"vendor\";s:2:\"no\";s:10:\"vendor_add\";s:2:\"no\";s:11:\"vendor_edit\";s:2:\"no\";s:13:\"vendor_delete\";s:2:\"no\";s:8:\"location\";s:2:\"no\";s:12:\"location_add\";s:2:\"no\";s:13:\"location_edit\";s:2:\"no\";s:15:\"location_delete\";s:2:\"no\";s:14:\"asset_category\";s:2:\"no\";s:18:\"asset_category_add\";s:2:\"no\";s:19:\"asset_category_edit\";s:2:\"no\";s:21:\"asset_category_delete\";s:2:\"no\";s:5:\"asset\";s:2:\"no\";s:9:\"asset_add\";s:2:\"no\";s:10:\"asset_edit\";s:2:\"no\";s:12:\"asset_delete\";s:2:\"no\";s:10:\"asset_view\";s:2:\"no\";s:16:\"asset_assignment\";s:2:\"no\";s:20:\"asset_assignment_add\";s:2:\"no\";s:21:\"asset_assignment_edit\";s:2:\"no\";s:23:\"asset_assignment_delete\";s:2:\"no\";s:21:\"asset_assignment_view\";s:2:\"no\";s:8:\"purchase\";s:2:\"no\";s:12:\"purchase_add\";s:2:\"no\";s:13:\"purchase_edit\";s:2:\"no\";s:15:\"purchase_delete\";s:2:\"no\";s:15:\"productcategory\";s:2:\"no\";s:19:\"productcategory_add\";s:2:\"no\";s:20:\"productcategory_edit\";s:2:\"no\";s:22:\"productcategory_delete\";s:2:\"no\";s:7:\"product\";s:2:\"no\";s:11:\"product_add\";s:2:\"no\";s:12:\"product_edit\";s:2:\"no\";s:14:\"product_delete\";s:2:\"no\";s:16:\"productwarehouse\";s:2:\"no\";s:20:\"productwarehouse_add\";s:2:\"no\";s:21:\"productwarehouse_edit\";s:2:\"no\";s:23:\"productwarehouse_delete\";s:2:\"no\";s:15:\"productsupplier\";s:2:\"no\";s:19:\"productsupplier_add\";s:2:\"no\";s:20:\"productsupplier_edit\";s:2:\"no\";s:22:\"productsupplier_delete\";s:2:\"no\";s:15:\"productpurchase\";s:2:\"no\";s:19:\"productpurchase_add\";s:2:\"no\";s:20:\"productpurchase_edit\";s:2:\"no\";s:22:\"productpurchase_delete\";s:2:\"no\";s:20:\"productpurchase_view\";s:2:\"no\";s:11:\"productsale\";s:2:\"no\";s:15:\"productsale_add\";s:2:\"no\";s:16:\"productsale_edit\";s:2:\"no\";s:18:\"productsale_delete\";s:2:\"no\";s:16:\"productsale_view\";s:2:\"no\";s:13:\"leavecategory\";s:2:\"no\";s:17:\"leavecategory_add\";s:2:\"no\";s:18:\"leavecategory_edit\";s:2:\"no\";s:20:\"leavecategory_delete\";s:2:\"no\";s:11:\"leaveassign\";s:2:\"no\";s:15:\"leaveassign_add\";s:2:\"no\";s:16:\"leaveassign_edit\";s:2:\"no\";s:18:\"leaveassign_delete\";s:2:\"no\";s:10:\"leaveapply\";s:2:\"no\";s:14:\"leaveapply_add\";s:2:\"no\";s:15:\"leaveapply_edit\";s:2:\"no\";s:17:\"leaveapply_delete\";s:2:\"no\";s:15:\"leaveapply_view\";s:2:\"no\";s:16:\"leaveapplication\";s:2:\"no\";s:18:\"activitiescategory\";s:2:\"no\";s:22:\"activitiescategory_add\";s:2:\"no\";s:23:\"activitiescategory_edit\";s:2:\"no\";s:25:\"activitiescategory_delete\";s:2:\"no\";s:10:\"activities\";s:3:\"yes\";s:14:\"activities_add\";s:3:\"yes\";s:17:\"activities_delete\";s:3:\"yes\";s:9:\"childcare\";s:2:\"no\";s:13:\"childcare_add\";s:2:\"no\";s:14:\"childcare_edit\";s:2:\"no\";s:16:\"childcare_delete\";s:2:\"no\";s:7:\"lmember\";s:2:\"no\";s:11:\"lmember_add\";s:2:\"no\";s:12:\"lmember_edit\";s:2:\"no\";s:14:\"lmember_delete\";s:2:\"no\";s:12:\"lmember_view\";s:2:\"no\";s:4:\"book\";s:2:\"no\";s:8:\"book_add\";s:2:\"no\";s:9:\"book_edit\";s:2:\"no\";s:11:\"book_delete\";s:2:\"no\";s:5:\"issue\";s:2:\"no\";s:9:\"issue_add\";s:2:\"no\";s:10:\"issue_edit\";s:2:\"no\";s:10:\"issue_view\";s:2:\"no\";s:6:\"ebooks\";s:2:\"no\";s:10:\"ebooks_add\";s:2:\"no\";s:11:\"ebooks_edit\";s:2:\"no\";s:13:\"ebooks_delete\";s:2:\"no\";s:11:\"ebooks_view\";s:2:\"no\";s:9:\"transport\";s:2:\"no\";s:13:\"transport_add\";s:2:\"no\";s:14:\"transport_edit\";s:2:\"no\";s:16:\"transport_delete\";s:2:\"no\";s:7:\"tmember\";s:2:\"no\";s:11:\"tmember_add\";s:2:\"no\";s:12:\"tmember_edit\";s:2:\"no\";s:14:\"tmember_delete\";s:2:\"no\";s:12:\"tmember_view\";s:2:\"no\";s:6:\"hostel\";s:2:\"no\";s:10:\"hostel_add\";s:2:\"no\";s:11:\"hostel_edit\";s:2:\"no\";s:13:\"hostel_delete\";s:2:\"no\";s:8:\"category\";s:2:\"no\";s:12:\"category_add\";s:2:\"no\";s:13:\"category_edit\";s:2:\"no\";s:15:\"category_delete\";s:2:\"no\";s:7:\"hmember\";s:2:\"no\";s:11:\"hmember_add\";s:2:\"no\";s:12:\"hmember_edit\";s:2:\"no\";s:14:\"hmember_delete\";s:2:\"no\";s:12:\"hmember_view\";s:2:\"no\";s:8:\"feetypes\";s:2:\"no\";s:12:\"feetypes_add\";s:2:\"no\";s:13:\"feetypes_edit\";s:2:\"no\";s:15:\"feetypes_delete\";s:2:\"no\";s:7:\"invoice\";s:2:\"no\";s:11:\"invoice_add\";s:2:\"no\";s:12:\"invoice_edit\";s:2:\"no\";s:14:\"invoice_delete\";s:2:\"no\";s:12:\"invoice_view\";s:2:\"no\";s:14:\"paymenthistory\";s:2:\"no\";s:19:\"paymenthistory_edit\";s:2:\"no\";s:21:\"paymenthistory_delete\";s:2:\"no\";s:7:\"expense\";s:2:\"no\";s:11:\"expense_add\";s:2:\"no\";s:12:\"expense_edit\";s:2:\"no\";s:14:\"expense_delete\";s:2:\"no\";s:6:\"income\";s:2:\"no\";s:10:\"income_add\";s:2:\"no\";s:11:\"income_edit\";s:2:\"no\";s:13:\"income_delete\";s:2:\"no\";s:14:\"global_payment\";s:2:\"no\";s:6:\"notice\";s:3:\"yes\";s:10:\"notice_add\";s:2:\"no\";s:11:\"notice_edit\";s:2:\"no\";s:13:\"notice_delete\";s:2:\"no\";s:11:\"notice_view\";s:3:\"yes\";s:5:\"event\";s:3:\"yes\";s:9:\"event_add\";s:2:\"no\";s:10:\"event_edit\";s:2:\"no\";s:12:\"event_delete\";s:2:\"no\";s:10:\"event_view\";s:3:\"yes\";s:7:\"holiday\";s:3:\"yes\";s:11:\"holiday_add\";s:2:\"no\";s:12:\"holiday_edit\";s:2:\"no\";s:14:\"holiday_delete\";s:2:\"no\";s:12:\"holiday_view\";s:3:\"yes\";s:13:\"classesreport\";s:3:\"yes\";s:13:\"studentreport\";s:3:\"yes\";s:12:\"idcardreport\";s:2:\"no\";s:15:\"admitcardreport\";s:2:\"no\";s:13:\"routinereport\";s:3:\"yes\";s:18:\"examschedulereport\";s:3:\"yes\";s:16:\"attendancereport\";s:3:\"yes\";s:24:\"attendanceoverviewreport\";s:3:\"yes\";s:18:\"librarybooksreport\";s:2:\"no\";s:17:\"librarycardreport\";s:2:\"no\";s:22:\"librarybookissuereport\";s:2:\"no\";s:14:\"terminalreport\";s:3:\"yes\";s:16:\"meritstagereport\";s:3:\"yes\";s:21:\"tabulationsheetreport\";s:3:\"yes\";s:15:\"marksheetreport\";s:3:\"yes\";s:18:\"progresscardreport\";s:3:\"yes\";s:20:\"studentsessionreport\";s:3:\"yes\";s:16:\"onlineexamreport\";s:2:\"no\";s:24:\"onlineexamquestionreport\";s:2:\"no\";s:21:\"onlineadmissionreport\";s:2:\"no\";s:17:\"certificatereport\";s:2:\"no\";s:22:\"leaveapplicationreport\";s:2:\"no\";s:21:\"productpurchasereport\";s:2:\"no\";s:17:\"productsalereport\";s:2:\"no\";s:23:\"searchpaymentfeesreport\";s:2:\"no\";s:10:\"feesreport\";s:2:\"no\";s:13:\"duefeesreport\";s:2:\"no\";s:17:\"balancefeesreport\";s:2:\"no\";s:17:\"transactionreport\";s:2:\"no\";s:17:\"studentfinereport\";s:2:\"no\";s:12:\"salaryreport\";s:2:\"no\";s:19:\"accountledgerreport\";s:2:\"no\";s:15:\"onlineadmission\";s:2:\"no\";s:11:\"visitorinfo\";s:2:\"no\";s:18:\"visitorinfo_delete\";s:2:\"no\";s:16:\"visitorinfo_view\";s:2:\"no\";s:10:\"schoolyear\";s:2:\"no\";s:14:\"schoolyear_add\";s:2:\"no\";s:15:\"schoolyear_edit\";s:2:\"no\";s:17:\"schoolyear_delete\";s:2:\"no\";s:12:\"studentgroup\";s:2:\"no\";s:16:\"studentgroup_add\";s:2:\"no\";s:17:\"studentgroup_edit\";s:2:\"no\";s:19:\"studentgroup_delete\";s:2:\"no\";s:8:\"complain\";s:3:\"yes\";s:12:\"complain_add\";s:3:\"yes\";s:13:\"complain_edit\";s:2:\"no\";s:15:\"complain_delete\";s:2:\"no\";s:13:\"complain_view\";s:3:\"yes\";s:20:\"certificate_template\";s:2:\"no\";s:24:\"certificate_template_add\";s:2:\"no\";s:25:\"certificate_template_edit\";s:2:\"no\";s:27:\"certificate_template_delete\";s:2:\"no\";s:25:\"certificate_template_view\";s:2:\"no\";s:11:\"systemadmin\";s:2:\"no\";s:15:\"systemadmin_add\";s:2:\"no\";s:16:\"systemadmin_edit\";s:2:\"no\";s:18:\"systemadmin_delete\";s:2:\"no\";s:16:\"systemadmin_view\";s:2:\"no\";s:13:\"resetpassword\";s:2:\"no\";s:10:\"sociallink\";s:2:\"no\";s:14:\"sociallink_add\";s:2:\"no\";s:15:\"sociallink_edit\";s:2:\"no\";s:17:\"sociallink_delete\";s:2:\"no\";s:18:\"mailandsmstemplate\";s:2:\"no\";s:22:\"mailandsmstemplate_add\";s:2:\"no\";s:23:\"mailandsmstemplate_edit\";s:2:\"no\";s:25:\"mailandsmstemplate_delete\";s:2:\"no\";s:23:\"mailandsmstemplate_view\";s:2:\"no\";s:11:\"bulkimport \";s:2:\"no\";s:6:\"backup\";s:2:\"no\";s:8:\"usertype\";s:2:\"no\";s:12:\"usertype_add\";s:2:\"no\";s:13:\"usertype_edit\";s:2:\"no\";s:15:\"usertype_delete\";s:2:\"no\";s:10:\"permission\";s:2:\"no\";s:6:\"update\";s:2:\"no\";s:16:\"posts_categories\";s:2:\"no\";s:20:\"posts_categories_add\";s:2:\"no\";s:21:\"posts_categories_edit\";s:2:\"no\";s:23:\"posts_categories_delete\";s:2:\"no\";s:5:\"posts\";s:2:\"no\";s:9:\"posts_add\";s:2:\"no\";s:10:\"posts_edit\";s:2:\"no\";s:12:\"posts_delete\";s:2:\"no\";s:5:\"pages\";s:2:\"no\";s:9:\"pages_add\";s:2:\"no\";s:10:\"pages_edit\";s:2:\"no\";s:12:\"pages_delete\";s:2:\"no\";s:12:\"frontendmenu\";s:2:\"no\";s:7:\"setting\";s:2:\"no\";s:16:\"frontend_setting\";s:2:\"no\";s:15:\"paymentsettings\";s:2:\"no\";s:11:\"smssettings\";s:2:\"no\";s:12:\"emailsetting\";s:2:\"no\";s:11:\"marksetting\";s:3:\"yes\";}')
ERROR - 2019-12-21 17:14:48 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 17:14:48 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 17:14:48 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '2'
ERROR - 2019-12-21 17:14:48 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('72c50c604cc6b72bfe513646cd4cd2df') AS ci_session_lock
ERROR - 2019-12-21 17:14:48 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 17:14:48 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576926888
WHERE `id` = 'af60c5ee7cfdb5c9b285ce01ab9f2eca7466be11'
ERROR - 2019-12-21 17:14:48 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 17:14:48 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('9456a3216eb9525bc9151b71fe857bb9') AS ci_session_lock
ERROR - 2019-12-21 17:16:03 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 17:16:03 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '2'
ERROR - 2019-12-21 17:16:03 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 17:16:03 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576926963
WHERE `id` = 'af60c5ee7cfdb5c9b285ce01ab9f2eca7466be11'
ERROR - 2019-12-21 17:16:03 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 17:16:03 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('9456a3216eb9525bc9151b71fe857bb9') AS ci_session_lock
ERROR - 2019-12-21 17:18:40 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:18:40 --> Unable to connect to the database
ERROR - 2019-12-21 17:18:40 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:18:40 --> Unable to connect to the database
ERROR - 2019-12-21 17:18:40 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:18:40 --> Unable to connect to the database
ERROR - 2019-12-21 17:18:40 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:18:40 --> Unable to connect to the database
ERROR - 2019-12-21 17:18:40 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:18:40 --> Unable to connect to the database
ERROR - 2019-12-21 17:18:40 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:18:40 --> Unable to connect to the database
ERROR - 2019-12-21 17:18:40 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:18:40 --> Unable to connect to the database
ERROR - 2019-12-21 17:18:40 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:18:40 --> Unable to connect to the database
ERROR - 2019-12-21 17:18:40 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:18:40 --> Unable to connect to the database
ERROR - 2019-12-21 17:18:40 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:18:40 --> Severity: Error --> session_start(): Failed to initialize storage module: user (path: school_sessions) /home/pmhsedu/public_html/erp/main/libraries/Session/Session.php 143
ERROR - 2019-12-21 17:18:41 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:18:41 --> Unable to connect to the database
ERROR - 2019-12-21 17:18:41 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:18:41 --> Unable to connect to the database
ERROR - 2019-12-21 17:18:41 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:18:41 --> Unable to connect to the database
ERROR - 2019-12-21 17:18:41 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:18:41 --> Unable to connect to the database
ERROR - 2019-12-21 17:18:41 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:18:41 --> Unable to connect to the database
ERROR - 2019-12-21 17:18:41 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:18:41 --> Unable to connect to the database
ERROR - 2019-12-21 17:18:41 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:18:41 --> Unable to connect to the database
ERROR - 2019-12-21 17:18:41 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:18:41 --> Unable to connect to the database
ERROR - 2019-12-21 17:18:41 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:18:41 --> Unable to connect to the database
ERROR - 2019-12-21 17:18:41 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:18:41 --> Severity: Error --> session_start(): Failed to initialize storage module: user (path: school_sessions) /home/pmhsedu/public_html/erp/main/libraries/Session/Session.php 143
ERROR - 2019-12-21 17:18:47 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:18:47 --> Unable to connect to the database
ERROR - 2019-12-21 17:18:47 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:18:47 --> Unable to connect to the database
ERROR - 2019-12-21 17:18:47 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:18:47 --> Unable to connect to the database
ERROR - 2019-12-21 17:18:47 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:18:47 --> Unable to connect to the database
ERROR - 2019-12-21 17:18:47 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:18:47 --> Unable to connect to the database
ERROR - 2019-12-21 17:18:47 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:18:47 --> Unable to connect to the database
ERROR - 2019-12-21 17:18:47 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:18:47 --> Unable to connect to the database
ERROR - 2019-12-21 17:18:47 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:18:47 --> Unable to connect to the database
ERROR - 2019-12-21 17:18:47 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:18:47 --> Unable to connect to the database
ERROR - 2019-12-21 17:18:47 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 17:18:47 --> Severity: Error --> session_start(): Failed to initialize storage module: user (path: school_sessions) /home/pmhsedu/public_html/erp/main/libraries/Session/Session.php 143
ERROR - 2019-12-21 17:18:48 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 17:18:48 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '2'
ERROR - 2019-12-21 17:18:48 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 17:18:48 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576927128
WHERE `id` = '10641ae2e08c8345f98de675e87729616760357e'
ERROR - 2019-12-21 17:18:48 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 17:18:48 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('69ea5d60bdcc54d7dadea76f6b055352') AS ci_session_lock
ERROR - 2019-12-21 17:18:53 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT GET_LOCK('69ea5d60bdcc54d7dadea76f6b055352', 300) AS ci_session_lock
ERROR - 2019-12-21 17:18:53 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/main/libraries/Session/drivers/Session_database_driver.php 384
ERROR - 2019-12-21 17:19:13 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 17:19:13 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT GET_LOCK('69ea5d60bdcc54d7dadea76f6b055352', 300) AS ci_session_lock
ERROR - 2019-12-21 17:19:13 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '2'
ERROR - 2019-12-21 17:19:13 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 17:19:13 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/main/libraries/Session/drivers/Session_database_driver.php 384
ERROR - 2019-12-21 17:19:13 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576927153
WHERE `id` = '10641ae2e08c8345f98de675e87729616760357e'
ERROR - 2019-12-21 17:19:13 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 17:19:13 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('69ea5d60bdcc54d7dadea76f6b055352') AS ci_session_lock
ERROR - 2019-12-21 17:19:58 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 17:19:58 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '2'
ERROR - 2019-12-21 17:19:58 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 17:19:58 --> Query error: MySQL server has gone away - Invalid query: INSERT INTO `school_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('20d57b77100e40948b28cde89451473de7ed4eab', '107.167.108.59', 1576927198, '__ci_last_regenerate|i:1576927175;english|N;loginuserID|s:2:\"11\";name|s:14:\"Smriti Mallick\";email|s:23:\"smritimallick@gmail.com\";usertypeID|s:1:\"2\";usertype|s:7:\"Teacher\";username|s:13:\"SmritiMallick\";photo|s:132:\"f6cae63cc3ec12897d322416066563e21f6119e12aca7d7f0ef151bfd17247afd829719cca9271be8b5e3149ee297612e00fefc1f1cc225cb363037d0f9fe95e.jpg\";lang|s:7:\"english\";defaultschoolyearID|s:1:\"1\";varifyvaliduser|b:1;loggedin|b:1;get_permission|b:1;master_permission_set|a:371:{s:9:\"dashboard\";s:3:\"yes\";s:7:\"student\";s:3:\"yes\";s:11:\"student_add\";s:2:\"no\";s:12:\"student_edit\";s:2:\"no\";s:14:\"student_delete\";s:2:\"no\";s:12:\"student_view\";s:3:\"yes\";s:7:\"parents\";s:3:\"yes\";s:11:\"parents_add\";s:2:\"no\";s:12:\"parents_edit\";s:2:\"no\";s:14:\"parents_delete\";s:2:\"no\";s:12:\"parents_view\";s:3:\"yes\";s:7:\"teacher\";s:3:\"yes\";s:11:\"teacher_add\";s:2:\"no\";s:12:\"teacher_edit\";s:2:\"no\";s:14:\"teacher_delete\";s:2:\"no\";s:12:\"teacher_view\";s:3:\"yes\";s:4:\"user\";s:2:\"no\";s:8:\"user_add\";s:2:\"no\";s:9:\"user_edit\";s:2:\"no\";s:11:\"user_delete\";s:2:\"no\";s:9:\"user_view\";s:2:\"no\";s:7:\"classes\";s:2:\"no\";s:11:\"classes_add\";s:2:\"no\";s:12:\"classes_edit\";s:2:\"no\";s:14:\"classes_delete\";s:2:\"no\";s:7:\"section\";s:2:\"no\";s:11:\"section_add\";s:2:\"no\";s:12:\"section_edit\";s:2:\"no\";s:15:\"semester_delete\";s:2:\"no\";s:14:\"section_delete\";s:2:\"no\";s:7:\"subject\";s:3:\"yes\";s:11:\"subject_add\";s:2:\"no\";s:12:\"subject_edit\";s:3:\"yes\";s:14:\"subject_delete\";s:2:\"no\";s:8:\"syllabus\";s:3:\"yes\";s:12:\"syllabus_add\";s:3:\"yes\";s:13:\"syllabus_edit\";s:3:\"yes\";s:15:\"syllabus_delete\";s:3:\"yes\";s:10:\"assignment\";s:3:\"yes\";s:14:\"assignment_add\";s:3:\"yes\";s:15:\"assignment_edit\";s:3:\"yes\";s:17:\"assignment_delete\";s:3:\"yes\";s:15:\"assignment_view\";s:3:\"yes\";s:7:\"routine\";s:3:\"yes\";s:11:\"routine_add\";s:2:\"no\";s:12:\"routine_edit\";s:2:\"no\";s:14:\"routine_delete\";s:2:\"no\";s:11:\"sattendance\";s:3:\"yes\";s:15:\"sattendance_add\";s:3:\"yes\";s:16:\"sattendance_view\";s:3:\"yes\";s:11:\"tattendance\";s:3:\"yes\";s:15:\"tattendance_add\";s:2:\"no\";s:16:\"tattendance_view\";s:3:\"yes\";s:11:\"uattendance\";s:3:\"yes\";s:15:\"uattendance_add\";s:2:\"no\";s:16:\"uattendance_view\";s:3:\"yes\";s:4:\"exam\";s:2:\"no\";s:8:\"exam_add\";s:2:\"no\";s:9:\"exam_edit\";s:2:\"no\";s:11:\"exam_delete\";s:2:\"no\";s:12:\"examschedule\";s:3:\"yes\";s:16:\"examschedule_add\";s:2:\"no\";s:17:\"examschedule_edit\";s:2:\"no\";s:19:\"examschedule_delete\";s:2:\"no\";s:5:\"grade\";s:3:\"yes\";s:9:\"grade_add\";s:3:\"yes\";s:10:\"grade_edit\";s:3:\"yes\";s:12:\"grade_delete\";s:3:\"yes\";s:11:\"eattendance\";s:3:\"yes\";s:15:\"eattendance_add\";s:3:\"yes\";s:4:\"mark\";s:3:\"yes\";s:8:\"mark_add\";s:3:\"yes\";s:9:\"mark_view\";s:3:\"yes\";s:14:\"markpercentage\";s:2:\"no\";s:18:\"markpercentage_add\";s:2:\"no\";s:19:\"markpercentage_edit\";s:2:\"no\";s:21:\"markpercentage_delete\";s:2:\"no\";s:9:\"promotion\";s:2:\"no\";s:12:\"conversation\";s:3:\"yes\";s:5:\"media\";s:3:\"yes\";s:9:\"media_add\";s:3:\"yes\";s:12:\"media_delete\";s:3:\"yes\";s:10:\"mailandsms\";s:2:\"no\";s:14:\"mailandsms_add\";s:2:\"no\";s:15:\"mailandsms_view\";s:2:\"no\";s:14:\"question_group\";s:2:\"no\";s:18:\"question_group_add\";s:2:\"no\";s:19:\"question_group_edit\";s:2:\"no\";s:21:\"question_group_delete\";s:2:\"no\";s:14:\"question_level\";s:2:\"no\";s:18:\"question_level_add\";s:2:\"no\";s:19:\"question_level_edit\";s:2:\"no\";s:21:\"question_level_delete\";s:2:\"no\";s:13:\"question_bank\";s:2:\"no\";s:17:\"question_bank_add\";s:2:\"no\";s:18:\"question_bank_edit\";s:2:\"no\";s:20:\"question_bank_delete\";s:2:\"no\";s:18:\"question_bank_view\";s:2:\"no\";s:11:\"online_exam\";s:2:\"no\";s:15:\"online_exam_add\";s:2:\"no\";s:16:\"online_exam_edit\";s:2:\"no\";s:18:\"online_exam_delete\";s:2:\"no\";s:11:\"instruction\";s:2:\"no\";s:15:\"instruction_add\";s:2:\"no\";s:16:\"instruction_edit\";s:2:\"no\";s:18:\"instruction_delete\";s:2:\"no\";s:16:\"instruction_view\";s:2:\"no\";s:15:\"salary_template\";s:2:\"no\";s:19:\"salary_template_add\";s:2:\"no\";s:20:\"salary_template_edit\";s:2:\"no\";s:22:\"salary_template_delete\";s:2:\"no\";s:20:\"salary_template_view\";s:2:\"no\";s:15:\"hourly_template\";s:2:\"no\";s:19:\"hourly_template_add\";s:2:\"no\";s:20:\"hourly_template_edit\";s:2:\"no\";s:22:\"hourly_template_delete\";s:2:\"no\";s:13:\"manage_salary\";s:2:\"no\";s:17:\"manage_salary_add\";s:2:\"no\";s:18:\"manage_salary_edit\";s:2:\"no\";s:20:\"manage_salary_delete\";s:2:\"no\";s:18:\"manage_salary_view\";s:2:\"no\";s:12:\"make_payment\";s:2:\"no\";s:6:\"vendor\";s:2:\"no\";s:10:\"vendor_add\";s:2:\"no\";s:11:\"vendor_edit\";s:2:\"no\";s:13:\"vendor_delete\";s:2:\"no\";s:8:\"location\";s:2:\"no\";s:12:\"location_add\";s:2:\"no\";s:13:\"location_edit\";s:2:\"no\";s:15:\"location_delete\";s:2:\"no\";s:14:\"asset_category\";s:2:\"no\";s:18:\"asset_category_add\";s:2:\"no\";s:19:\"asset_category_edit\";s:2:\"no\";s:21:\"asset_category_delete\";s:2:\"no\";s:5:\"asset\";s:2:\"no\";s:9:\"asset_add\";s:2:\"no\";s:10:\"asset_edit\";s:2:\"no\";s:12:\"asset_delete\";s:2:\"no\";s:10:\"asset_view\";s:2:\"no\";s:16:\"asset_assignment\";s:2:\"no\";s:20:\"asset_assignment_add\";s:2:\"no\";s:21:\"asset_assignment_edit\";s:2:\"no\";s:23:\"asset_assignment_delete\";s:2:\"no\";s:21:\"asset_assignment_view\";s:2:\"no\";s:8:\"purchase\";s:2:\"no\";s:12:\"purchase_add\";s:2:\"no\";s:13:\"purchase_edit\";s:2:\"no\";s:15:\"purchase_delete\";s:2:\"no\";s:15:\"productcategory\";s:2:\"no\";s:19:\"productcategory_add\";s:2:\"no\";s:20:\"productcategory_edit\";s:2:\"no\";s:22:\"productcategory_delete\";s:2:\"no\";s:7:\"product\";s:2:\"no\";s:11:\"product_add\";s:2:\"no\";s:12:\"product_edit\";s:2:\"no\";s:14:\"product_delete\";s:2:\"no\";s:16:\"productwarehouse\";s:2:\"no\";s:20:\"productwarehouse_add\";s:2:\"no\";s:21:\"productwarehouse_edit\";s:2:\"no\";s:23:\"productwarehouse_delete\";s:2:\"no\";s:15:\"productsupplier\";s:2:\"no\";s:19:\"productsupplier_add\";s:2:\"no\";s:20:\"productsupplier_edit\";s:2:\"no\";s:22:\"productsupplier_delete\";s:2:\"no\";s:15:\"productpurchase\";s:2:\"no\";s:19:\"productpurchase_add\";s:2:\"no\";s:20:\"productpurchase_edit\";s:2:\"no\";s:22:\"productpurchase_delete\";s:2:\"no\";s:20:\"productpurchase_view\";s:2:\"no\";s:11:\"productsale\";s:2:\"no\";s:15:\"productsale_add\";s:2:\"no\";s:16:\"productsale_edit\";s:2:\"no\";s:18:\"productsale_delete\";s:2:\"no\";s:16:\"productsale_view\";s:2:\"no\";s:13:\"leavecategory\";s:2:\"no\";s:17:\"leavecategory_add\";s:2:\"no\";s:18:\"leavecategory_edit\";s:2:\"no\";s:20:\"leavecategory_delete\";s:2:\"no\";s:11:\"leaveassign\";s:2:\"no\";s:15:\"leaveassign_add\";s:2:\"no\";s:16:\"leaveassign_edit\";s:2:\"no\";s:18:\"leaveassign_delete\";s:2:\"no\";s:10:\"leaveapply\";s:2:\"no\";s:14:\"leaveapply_add\";s:2:\"no\";s:15:\"leaveapply_edit\";s:2:\"no\";s:17:\"leaveapply_delete\";s:2:\"no\";s:15:\"leaveapply_view\";s:2:\"no\";s:16:\"leaveapplication\";s:2:\"no\";s:18:\"activitiescategory\";s:2:\"no\";s:22:\"activitiescategory_add\";s:2:\"no\";s:23:\"activitiescategory_edit\";s:2:\"no\";s:25:\"activitiescategory_delete\";s:2:\"no\";s:10:\"activities\";s:3:\"yes\";s:14:\"activities_add\";s:3:\"yes\";s:17:\"activities_delete\";s:3:\"yes\";s:9:\"childcare\";s:2:\"no\";s:13:\"childcare_add\";s:2:\"no\";s:14:\"childcare_edit\";s:2:\"no\";s:16:\"childcare_delete\";s:2:\"no\";s:7:\"lmember\";s:2:\"no\";s:11:\"lmember_add\";s:2:\"no\";s:12:\"lmember_edit\";s:2:\"no\";s:14:\"lmember_delete\";s:2:\"no\";s:12:\"lmember_view\";s:2:\"no\";s:4:\"book\";s:2:\"no\";s:8:\"book_add\";s:2:\"no\";s:9:\"book_edit\";s:2:\"no\";s:11:\"book_delete\";s:2:\"no\";s:5:\"issue\";s:2:\"no\";s:9:\"issue_add\";s:2:\"no\";s:10:\"issue_edit\";s:2:\"no\";s:10:\"issue_view\";s:2:\"no\";s:6:\"ebooks\";s:2:\"no\";s:10:\"ebooks_add\";s:2:\"no\";s:11:\"ebooks_edit\";s:2:\"no\";s:13:\"ebooks_delete\";s:2:\"no\";s:11:\"ebooks_view\";s:2:\"no\";s:9:\"transport\";s:2:\"no\";s:13:\"transport_add\";s:2:\"no\";s:14:\"transport_edit\";s:2:\"no\";s:16:\"transport_delete\";s:2:\"no\";s:7:\"tmember\";s:2:\"no\";s:11:\"tmember_add\";s:2:\"no\";s:12:\"tmember_edit\";s:2:\"no\";s:14:\"tmember_delete\";s:2:\"no\";s:12:\"tmember_view\";s:2:\"no\";s:6:\"hostel\";s:2:\"no\";s:10:\"hostel_add\";s:2:\"no\";s:11:\"hostel_edit\";s:2:\"no\";s:13:\"hostel_delete\";s:2:\"no\";s:8:\"category\";s:2:\"no\";s:12:\"category_add\";s:2:\"no\";s:13:\"category_edit\";s:2:\"no\";s:15:\"category_delete\";s:2:\"no\";s:7:\"hmember\";s:2:\"no\";s:11:\"hmember_add\";s:2:\"no\";s:12:\"hmember_edit\";s:2:\"no\";s:14:\"hmember_delete\";s:2:\"no\";s:12:\"hmember_view\";s:2:\"no\";s:8:\"feetypes\";s:2:\"no\";s:12:\"feetypes_add\";s:2:\"no\";s:13:\"feetypes_edit\";s:2:\"no\";s:15:\"feetypes_delete\";s:2:\"no\";s:7:\"invoice\";s:2:\"no\";s:11:\"invoice_add\";s:2:\"no\";s:12:\"invoice_edit\";s:2:\"no\";s:14:\"invoice_delete\";s:2:\"no\";s:12:\"invoice_view\";s:2:\"no\";s:14:\"paymenthistory\";s:2:\"no\";s:19:\"paymenthistory_edit\";s:2:\"no\";s:21:\"paymenthistory_delete\";s:2:\"no\";s:7:\"expense\";s:2:\"no\";s:11:\"expense_add\";s:2:\"no\";s:12:\"expense_edit\";s:2:\"no\";s:14:\"expense_delete\";s:2:\"no\";s:6:\"income\";s:2:\"no\";s:10:\"income_add\";s:2:\"no\";s:11:\"income_edit\";s:2:\"no\";s:13:\"income_delete\";s:2:\"no\";s:14:\"global_payment\";s:2:\"no\";s:6:\"notice\";s:3:\"yes\";s:10:\"notice_add\";s:2:\"no\";s:11:\"notice_edit\";s:2:\"no\";s:13:\"notice_delete\";s:2:\"no\";s:11:\"notice_view\";s:3:\"yes\";s:5:\"event\";s:3:\"yes\";s:9:\"event_add\";s:2:\"no\";s:10:\"event_edit\";s:2:\"no\";s:12:\"event_delete\";s:2:\"no\";s:10:\"event_view\";s:3:\"yes\";s:7:\"holiday\";s:3:\"yes\";s:11:\"holiday_add\";s:2:\"no\";s:12:\"holiday_edit\";s:2:\"no\";s:14:\"holiday_delete\";s:2:\"no\";s:12:\"holiday_view\";s:3:\"yes\";s:13:\"classesreport\";s:3:\"yes\";s:13:\"studentreport\";s:3:\"yes\";s:12:\"idcardreport\";s:2:\"no\";s:15:\"admitcardreport\";s:2:\"no\";s:13:\"routinereport\";s:3:\"yes\";s:18:\"examschedulereport\";s:3:\"yes\";s:16:\"attendancereport\";s:3:\"yes\";s:24:\"attendanceoverviewreport\";s:3:\"yes\";s:18:\"librarybooksreport\";s:2:\"no\";s:17:\"librarycardreport\";s:2:\"no\";s:22:\"librarybookissuereport\";s:2:\"no\";s:14:\"terminalreport\";s:3:\"yes\";s:16:\"meritstagereport\";s:3:\"yes\";s:21:\"tabulationsheetreport\";s:3:\"yes\";s:15:\"marksheetreport\";s:3:\"yes\";s:18:\"progresscardreport\";s:3:\"yes\";s:20:\"studentsessionreport\";s:3:\"yes\";s:16:\"onlineexamreport\";s:2:\"no\";s:24:\"onlineexamquestionreport\";s:2:\"no\";s:21:\"onlineadmissionreport\";s:2:\"no\";s:17:\"certificatereport\";s:2:\"no\";s:22:\"leaveapplicationreport\";s:2:\"no\";s:21:\"productpurchasereport\";s:2:\"no\";s:17:\"productsalereport\";s:2:\"no\";s:23:\"searchpaymentfeesreport\";s:2:\"no\";s:10:\"feesreport\";s:2:\"no\";s:13:\"duefeesreport\";s:2:\"no\";s:17:\"balancefeesreport\";s:2:\"no\";s:17:\"transactionreport\";s:2:\"no\";s:17:\"studentfinereport\";s:2:\"no\";s:12:\"salaryreport\";s:2:\"no\";s:19:\"accountledgerreport\";s:2:\"no\";s:15:\"onlineadmission\";s:2:\"no\";s:11:\"visitorinfo\";s:2:\"no\";s:18:\"visitorinfo_delete\";s:2:\"no\";s:16:\"visitorinfo_view\";s:2:\"no\";s:10:\"schoolyear\";s:2:\"no\";s:14:\"schoolyear_add\";s:2:\"no\";s:15:\"schoolyear_edit\";s:2:\"no\";s:17:\"schoolyear_delete\";s:2:\"no\";s:12:\"studentgroup\";s:2:\"no\";s:16:\"studentgroup_add\";s:2:\"no\";s:17:\"studentgroup_edit\";s:2:\"no\";s:19:\"studentgroup_delete\";s:2:\"no\";s:8:\"complain\";s:3:\"yes\";s:12:\"complain_add\";s:3:\"yes\";s:13:\"complain_edit\";s:2:\"no\";s:15:\"complain_delete\";s:2:\"no\";s:13:\"complain_view\";s:3:\"yes\";s:20:\"certificate_template\";s:2:\"no\";s:24:\"certificate_template_add\";s:2:\"no\";s:25:\"certificate_template_edit\";s:2:\"no\";s:27:\"certificate_template_delete\";s:2:\"no\";s:25:\"certificate_template_view\";s:2:\"no\";s:11:\"systemadmin\";s:2:\"no\";s:15:\"systemadmin_add\";s:2:\"no\";s:16:\"systemadmin_edit\";s:2:\"no\";s:18:\"systemadmin_delete\";s:2:\"no\";s:16:\"systemadmin_view\";s:2:\"no\";s:13:\"resetpassword\";s:2:\"no\";s:10:\"sociallink\";s:2:\"no\";s:14:\"sociallink_add\";s:2:\"no\";s:15:\"sociallink_edit\";s:2:\"no\";s:17:\"sociallink_delete\";s:2:\"no\";s:18:\"mailandsmstemplate\";s:2:\"no\";s:22:\"mailandsmstemplate_add\";s:2:\"no\";s:23:\"mailandsmstemplate_edit\";s:2:\"no\";s:25:\"mailandsmstemplate_delete\";s:2:\"no\";s:23:\"mailandsmstemplate_view\";s:2:\"no\";s:11:\"bulkimport \";s:2:\"no\";s:6:\"backup\";s:2:\"no\";s:8:\"usertype\";s:2:\"no\";s:12:\"usertype_add\";s:2:\"no\";s:13:\"usertype_edit\";s:2:\"no\";s:15:\"usertype_delete\";s:2:\"no\";s:10:\"permission\";s:2:\"no\";s:6:\"update\";s:2:\"no\";s:16:\"posts_categories\";s:2:\"no\";s:20:\"posts_categories_add\";s:2:\"no\";s:21:\"posts_categories_edit\";s:2:\"no\";s:23:\"posts_categories_delete\";s:2:\"no\";s:5:\"posts\";s:2:\"no\";s:9:\"posts_add\";s:2:\"no\";s:10:\"posts_edit\";s:2:\"no\";s:12:\"posts_delete\";s:2:\"no\";s:5:\"pages\";s:2:\"no\";s:9:\"pages_add\";s:2:\"no\";s:10:\"pages_edit\";s:2:\"no\";s:12:\"pages_delete\";s:2:\"no\";s:12:\"frontendmenu\";s:2:\"no\";s:7:\"setting\";s:2:\"no\";s:16:\"frontend_setting\";s:2:\"no\";s:15:\"paymentsettings\";s:2:\"no\";s:11:\"smssettings\";s:2:\"no\";s:12:\"emailsetting\";s:2:\"no\";s:11:\"marksetting\";s:3:\"yes\";}')
ERROR - 2019-12-21 17:19:58 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 17:19:58 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('77dac1d72d2a4d704142bbe1ab5fb63b') AS ci_session_lock
ERROR - 2019-12-21 17:20:18 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 17:20:18 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '2'
ERROR - 2019-12-21 17:20:18 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 17:20:18 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576927218
WHERE `id` = 'af60c5ee7cfdb5c9b285ce01ab9f2eca7466be11'
ERROR - 2019-12-21 17:20:18 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 17:20:18 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('9456a3216eb9525bc9151b71fe857bb9') AS ci_session_lock
ERROR - 2019-12-21 17:22:13 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 17:22:13 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '2'
ERROR - 2019-12-21 17:22:13 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 17:22:13 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576927333
WHERE `id` = 'af60c5ee7cfdb5c9b285ce01ab9f2eca7466be11'
ERROR - 2019-12-21 17:22:13 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 17:22:13 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('9456a3216eb9525bc9151b71fe857bb9') AS ci_session_lock
ERROR - 2019-12-21 17:22:23 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT GET_LOCK('9456a3216eb9525bc9151b71fe857bb9', 300) AS ci_session_lock
ERROR - 2019-12-21 17:22:23 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/main/libraries/Session/drivers/Session_database_driver.php 384
ERROR - 2019-12-21 17:22:38 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 17:22:38 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '2'
ERROR - 2019-12-21 17:22:38 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 17:22:38 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576927358
WHERE `id` = 'af60c5ee7cfdb5c9b285ce01ab9f2eca7466be11'
ERROR - 2019-12-21 17:22:38 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 17:22:38 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('9456a3216eb9525bc9151b71fe857bb9') AS ci_session_lock
ERROR - 2019-12-21 17:22:38 --> Query error: MySQL server has gone away - Invalid query: SELECT *
FROM `setting`
ERROR - 2019-12-21 17:22:38 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Site_m.php 22
ERROR - 2019-12-21 17:22:38 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576927358
WHERE `id` = 'af60c5ee7cfdb5c9b285ce01ab9f2eca7466be11'
ERROR - 2019-12-21 17:22:38 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 17:22:38 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('9456a3216eb9525bc9151b71fe857bb9') AS ci_session_lock
ERROR - 2019-12-21 17:53:49 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 17:53:49 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '2'
ERROR - 2019-12-21 17:53:49 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 17:53:49 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576929229
WHERE `id` = 'a81a70e2f8702f0637be4dbdfcc9e88e0e1288c0'
ERROR - 2019-12-21 17:53:49 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 17:53:49 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('7f0cc0591a0a6d8cff5502a674026028') AS ci_session_lock
ERROR - 2019-12-21 17:53:49 --> Query error: MySQL server has gone away - Invalid query: SELECT *
FROM `schoolyear`
WHERE `schoolyearID` = '1'
ERROR - 2019-12-21 17:53:49 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/mvc/core/MY_Model.php 80
ERROR - 2019-12-21 17:53:49 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576929229
WHERE `id` = 'a81a70e2f8702f0637be4dbdfcc9e88e0e1288c0'
ERROR - 2019-12-21 17:53:49 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 17:53:49 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('7f0cc0591a0a6d8cff5502a674026028') AS ci_session_lock
ERROR - 2019-12-21 17:53:59 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT GET_LOCK('7f0cc0591a0a6d8cff5502a674026028', 300) AS ci_session_lock
ERROR - 2019-12-21 17:53:59 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/main/libraries/Session/drivers/Session_database_driver.php 384
ERROR - 2019-12-21 17:53:59 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT GET_LOCK('7f0cc0591a0a6d8cff5502a674026028', 300) AS ci_session_lock
ERROR - 2019-12-21 17:53:59 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/main/libraries/Session/drivers/Session_database_driver.php 384
ERROR - 2019-12-21 17:54:04 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT GET_LOCK('7f0cc0591a0a6d8cff5502a674026028', 300) AS ci_session_lock
ERROR - 2019-12-21 17:54:04 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/main/libraries/Session/drivers/Session_database_driver.php 384
ERROR - 2019-12-21 17:54:09 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT GET_LOCK('7f0cc0591a0a6d8cff5502a674026028', 300) AS ci_session_lock
ERROR - 2019-12-21 17:54:09 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT GET_LOCK('7f0cc0591a0a6d8cff5502a674026028', 300) AS ci_session_lock
ERROR - 2019-12-21 17:54:09 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/main/libraries/Session/drivers/Session_database_driver.php 384
ERROR - 2019-12-21 17:54:09 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/main/libraries/Session/drivers/Session_database_driver.php 384
ERROR - 2019-12-21 17:54:09 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT GET_LOCK('7f0cc0591a0a6d8cff5502a674026028', 300) AS ci_session_lock
ERROR - 2019-12-21 17:54:09 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/main/libraries/Session/drivers/Session_database_driver.php 384
ERROR - 2019-12-21 17:54:14 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 17:54:14 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '2'
ERROR - 2019-12-21 17:54:14 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT GET_LOCK('7f0cc0591a0a6d8cff5502a674026028', 300) AS ci_session_lock
ERROR - 2019-12-21 17:54:14 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 17:54:14 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/main/libraries/Session/drivers/Session_database_driver.php 384
ERROR - 2019-12-21 17:54:14 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576929254
WHERE `id` = 'a81a70e2f8702f0637be4dbdfcc9e88e0e1288c0'
ERROR - 2019-12-21 17:54:14 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 17:54:14 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('7f0cc0591a0a6d8cff5502a674026028') AS ci_session_lock
ERROR - 2019-12-21 17:54:19 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT GET_LOCK('7f0cc0591a0a6d8cff5502a674026028', 300) AS ci_session_lock
ERROR - 2019-12-21 17:54:19 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/main/libraries/Session/drivers/Session_database_driver.php 384
ERROR - 2019-12-21 17:54:24 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT GET_LOCK('7f0cc0591a0a6d8cff5502a674026028', 300) AS ci_session_lock
ERROR - 2019-12-21 17:54:24 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT GET_LOCK('7f0cc0591a0a6d8cff5502a674026028', 300) AS ci_session_lock
ERROR - 2019-12-21 17:54:24 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/main/libraries/Session/drivers/Session_database_driver.php 384
ERROR - 2019-12-21 17:54:24 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/main/libraries/Session/drivers/Session_database_driver.php 384
ERROR - 2019-12-21 17:54:39 --> Severity: Warning --> Division by zero /home/pmhsedu/public_html/erp/mvc/views/mark/view.php 273
ERROR - 2019-12-21 17:54:39 --> Severity: Warning --> Division by zero /home/pmhsedu/public_html/erp/mvc/views/mark/view.php 279
ERROR - 2019-12-21 17:54:49 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT GET_LOCK('7f0cc0591a0a6d8cff5502a674026028', 300) AS ci_session_lock
ERROR - 2019-12-21 17:54:49 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/main/libraries/Session/drivers/Session_database_driver.php 384
ERROR - 2019-12-21 17:54:54 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT GET_LOCK('7f0cc0591a0a6d8cff5502a674026028', 300) AS ci_session_lock
ERROR - 2019-12-21 17:54:54 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/main/libraries/Session/drivers/Session_database_driver.php 384
ERROR - 2019-12-21 17:55:04 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 17:55:04 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '2'
ERROR - 2019-12-21 17:55:04 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 17:55:04 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576929304
WHERE `id` = 'a81a70e2f8702f0637be4dbdfcc9e88e0e1288c0'
ERROR - 2019-12-21 17:55:04 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 17:55:04 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('7f0cc0591a0a6d8cff5502a674026028') AS ci_session_lock
ERROR - 2019-12-21 17:55:09 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 17:55:09 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`examID` = '1'
AND `mark`.`classesID` = '2'
ERROR - 2019-12-21 17:55:09 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 17:55:09 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576929309
WHERE `id` = 'b264e8d345ca9b13e6b3ac7cbf7970d6a7119538'
ERROR - 2019-12-21 17:55:09 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 17:55:09 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('646fab30282483a7d77a93e6d61f2855') AS ci_session_lock
ERROR - 2019-12-21 17:56:19 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 17:56:19 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`examID` = '1'
AND `mark`.`classesID` = '2'
ERROR - 2019-12-21 17:56:19 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 17:56:19 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576929379
WHERE `id` = 'b264e8d345ca9b13e6b3ac7cbf7970d6a7119538'
ERROR - 2019-12-21 17:56:19 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 17:56:19 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('646fab30282483a7d77a93e6d61f2855') AS ci_session_lock
ERROR - 2019-12-21 18:00:24 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 18:00:24 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`examID` = '1'
AND `mark`.`classesID` = '2'
ERROR - 2019-12-21 18:00:24 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 18:00:24 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576929624
WHERE `id` = '99c5b7f550a25ad2bba2f45ce84fc8d5e414f30f'
ERROR - 2019-12-21 18:00:24 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 18:00:24 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('0013cabd9a0ce410f056bad5898e7c34') AS ci_session_lock
ERROR - 2019-12-21 18:00:49 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 18:00:49 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`examID` = '1'
AND `mark`.`classesID` = '2'
ERROR - 2019-12-21 18:00:49 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 18:00:49 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576929649
WHERE `id` = '99c5b7f550a25ad2bba2f45ce84fc8d5e414f30f'
ERROR - 2019-12-21 18:00:49 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 18:00:49 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('0013cabd9a0ce410f056bad5898e7c34') AS ci_session_lock
ERROR - 2019-12-21 18:01:14 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 18:01:14 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`examID` = '1'
AND `mark`.`classesID` = '2'
ERROR - 2019-12-21 18:01:14 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 18:01:14 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576929674
WHERE `id` = '99c5b7f550a25ad2bba2f45ce84fc8d5e414f30f'
ERROR - 2019-12-21 18:01:14 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 18:01:14 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('0013cabd9a0ce410f056bad5898e7c34') AS ci_session_lock
ERROR - 2019-12-21 18:05:14 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 18:05:14 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT `mark`.*, `markrelation`.`markrelationID`, `markrelation`.`markpercentageID`, `markrelation`.`mark`
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '2'
AND `mark`.`examID` = '1'
ERROR - 2019-12-21 18:05:14 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 152
ERROR - 2019-12-21 18:05:14 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576929914
WHERE `id` = '84baf6a25e01f4fb5e0b8ebdb0f4792f303cb716'
ERROR - 2019-12-21 18:05:14 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 18:05:14 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('826010507e03227c40379459b4485f62') AS ci_session_lock
ERROR - 2019-12-21 18:05:39 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 18:05:39 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT `mark`.*, `markrelation`.`markrelationID`, `markrelation`.`markpercentageID`, `markrelation`.`mark`
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '2'
AND `mark`.`examID` = '1'
ERROR - 2019-12-21 18:05:39 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 152
ERROR - 2019-12-21 18:05:39 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576929939
WHERE `id` = '84baf6a25e01f4fb5e0b8ebdb0f4792f303cb716'
ERROR - 2019-12-21 18:05:39 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 18:05:39 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('826010507e03227c40379459b4485f62') AS ci_session_lock
ERROR - 2019-12-21 18:05:49 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 18:05:49 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '2'
ERROR - 2019-12-21 18:05:49 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 18:05:49 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576929949
WHERE `id` = 'ebcedb7807cb449af02d30d94fbc8265bc9c5275'
ERROR - 2019-12-21 18:05:49 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 18:05:49 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('09138f04d213a1878ffeae1ef6f714c1') AS ci_session_lock
ERROR - 2019-12-21 18:05:49 --> Query error: MySQL server has gone away - Invalid query: SELECT *
FROM `setting`
ERROR - 2019-12-21 18:05:49 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Site_m.php 22
ERROR - 2019-12-21 18:05:49 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576929949
WHERE `id` = 'ebcedb7807cb449af02d30d94fbc8265bc9c5275'
ERROR - 2019-12-21 18:05:49 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 18:05:49 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('09138f04d213a1878ffeae1ef6f714c1') AS ci_session_lock
ERROR - 2019-12-21 18:06:04 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 18:06:04 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT `mark`.*, `markrelation`.`markrelationID`, `markrelation`.`markpercentageID`, `markrelation`.`mark`
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '2'
AND `mark`.`examID` = '1'
ERROR - 2019-12-21 18:06:04 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 152
ERROR - 2019-12-21 18:06:04 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576929964
WHERE `id` = '84baf6a25e01f4fb5e0b8ebdb0f4792f303cb716'
ERROR - 2019-12-21 18:06:04 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 18:06:04 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('826010507e03227c40379459b4485f62') AS ci_session_lock
ERROR - 2019-12-21 18:06:14 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 18:06:14 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '2'
ERROR - 2019-12-21 18:06:14 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 18:06:14 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576929974
WHERE `id` = 'ebcedb7807cb449af02d30d94fbc8265bc9c5275'
ERROR - 2019-12-21 18:06:14 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 18:06:14 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('09138f04d213a1878ffeae1ef6f714c1') AS ci_session_lock
ERROR - 2019-12-21 18:06:29 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 18:06:29 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT `mark`.*, `markrelation`.`markrelationID`, `markrelation`.`markpercentageID`, `markrelation`.`mark`
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '2'
AND `mark`.`examID` = '1'
ERROR - 2019-12-21 18:06:29 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 152
ERROR - 2019-12-21 18:06:29 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576929989
WHERE `id` = '84baf6a25e01f4fb5e0b8ebdb0f4792f303cb716'
ERROR - 2019-12-21 18:06:29 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 18:06:29 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('826010507e03227c40379459b4485f62') AS ci_session_lock
ERROR - 2019-12-21 18:08:53 --> Severity: Warning --> unlink(/home/pmhsedu/public_html/erp/mvc/cache/blade-295d7e07e7dc6fa76d373451376b64d0): No such file or directory /home/pmhsedu/public_html/erp/main/libraries/Cache/drivers/Cache_file.php 279
ERROR - 2019-12-21 18:08:53 --> Severity: Warning --> chmod(): No such file or directory /home/pmhsedu/public_html/erp/main/libraries/Cache/drivers/Cache_file.php 106
ERROR - 2019-12-21 18:08:53 --> Severity: Warning --> unlink(/home/pmhsedu/public_html/erp/mvc/cache/get_backend): No such file or directory /home/pmhsedu/public_html/erp/main/libraries/Cache/drivers/Cache_file.php 279
ERROR - 2019-12-21 18:08:53 --> Severity: Warning --> unlink(/home/pmhsedu/public_html/erp/mvc/cache/blade-2f7e8c49428835cf450e837c15525188): No such file or directory /home/pmhsedu/public_html/erp/main/libraries/Cache/drivers/Cache_file.php 279
ERROR - 2019-12-21 18:08:53 --> Severity: Warning --> unlink(/home/pmhsedu/public_html/erp/mvc/cache/get_frontend): No such file or directory /home/pmhsedu/public_html/erp/main/libraries/Cache/drivers/Cache_file.php 279
ERROR - 2019-12-21 18:08:53 --> Severity: Warning --> unlink(/home/pmhsedu/public_html/erp/mvc/cache/blade-408224d3665f03346193d614d95b0d5b): No such file or directory /home/pmhsedu/public_html/erp/main/libraries/Cache/drivers/Cache_file.php 279
ERROR - 2019-12-21 18:08:53 --> Severity: Warning --> unlink(/home/pmhsedu/public_html/erp/mvc/cache/blade-fe768ebe5a8b0efd850094edfa317684): No such file or directory /home/pmhsedu/public_html/erp/main/libraries/Cache/drivers/Cache_file.php 279
ERROR - 2019-12-21 18:09:00 --> 404 Page Not Found: Frontend/apple-touch-icon.png
ERROR - 2019-12-21 18:27:50 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 18:27:50 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '5'
ERROR - 2019-12-21 18:27:50 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 18:27:50 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576931270
WHERE `id` = '9c25e1d49a375721cb7dafa9212aa8f7296d4fd0'
ERROR - 2019-12-21 18:27:50 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 18:27:50 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('18ff2d6543b82b4c587d6f5a053fcc80') AS ci_session_lock
ERROR - 2019-12-21 18:27:50 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT GET_LOCK('18ff2d6543b82b4c587d6f5a053fcc80', 300) AS ci_session_lock
ERROR - 2019-12-21 18:27:50 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/main/libraries/Session/drivers/Session_database_driver.php 384
ERROR - 2019-12-21 18:28:15 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 18:28:15 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '5'
ERROR - 2019-12-21 18:28:15 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 18:28:15 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576931295
WHERE `id` = '9c25e1d49a375721cb7dafa9212aa8f7296d4fd0'
ERROR - 2019-12-21 18:28:15 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 18:28:15 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('18ff2d6543b82b4c587d6f5a053fcc80') AS ci_session_lock
ERROR - 2019-12-21 18:28:40 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:40 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:40 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:40 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:40 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:40 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:40 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:40 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:40 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:40 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:40 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:40 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:40 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:40 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:40 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:40 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:40 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:40 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:40 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:40 --> Severity: Error --> session_start(): Failed to initialize storage module: user (path: school_sessions) /home/pmhsedu/public_html/erp/main/libraries/Session/Session.php 143
ERROR - 2019-12-21 18:28:40 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:40 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:40 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:40 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:40 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:40 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:40 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:40 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:40 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:40 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:40 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:40 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:40 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:40 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:40 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:40 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:40 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:40 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:40 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:40 --> Severity: Error --> session_start(): Failed to initialize storage module: user (path: school_sessions) /home/pmhsedu/public_html/erp/main/libraries/Session/Session.php 143
ERROR - 2019-12-21 18:28:41 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:41 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:41 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:41 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:41 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:41 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:41 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:41 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:41 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:41 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:41 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:41 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:41 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:41 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:41 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:41 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:41 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:41 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:41 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:41 --> Severity: Error --> session_start(): Failed to initialize storage module: user (path: school_sessions) /home/pmhsedu/public_html/erp/main/libraries/Session/Session.php 143
ERROR - 2019-12-21 18:28:41 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:41 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:41 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:41 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:41 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:41 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:41 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:41 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:41 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:41 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:41 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:41 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:41 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:41 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:41 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:41 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:41 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:41 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:41 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:41 --> Severity: Error --> session_start(): Failed to initialize storage module: user (path: school_sessions) /home/pmhsedu/public_html/erp/main/libraries/Session/Session.php 143
ERROR - 2019-12-21 18:28:41 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:41 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:41 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:41 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:41 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:41 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:41 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:41 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:41 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:41 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:41 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:41 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:41 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:41 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:41 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:41 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:41 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:41 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:41 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:41 --> Severity: Error --> session_start(): Failed to initialize storage module: user (path: school_sessions) /home/pmhsedu/public_html/erp/main/libraries/Session/Session.php 143
ERROR - 2019-12-21 18:28:43 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:43 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:43 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:43 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:43 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:43 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:43 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:43 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:43 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:43 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:43 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:43 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:43 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:43 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:43 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:43 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:43 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:43 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:43 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:43 --> Severity: Error --> session_start(): Failed to initialize storage module: user (path: school_sessions) /home/pmhsedu/public_html/erp/main/libraries/Session/Session.php 143
ERROR - 2019-12-21 18:28:47 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:47 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:47 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:47 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:47 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:47 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:47 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:47 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:47 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:47 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:47 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:47 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:47 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:47 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:47 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:47 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:47 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:47 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:47 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:47 --> Severity: Error --> session_start(): Failed to initialize storage module: user (path: school_sessions) /home/pmhsedu/public_html/erp/main/libraries/Session/Session.php 143
ERROR - 2019-12-21 18:28:48 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:48 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:48 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:48 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:48 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:48 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:48 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:48 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:48 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:48 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:48 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:48 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:48 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:48 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:48 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:48 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:48 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:48 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:48 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:48 --> Severity: Error --> session_start(): Failed to initialize storage module: user (path: school_sessions) /home/pmhsedu/public_html/erp/main/libraries/Session/Session.php 143
ERROR - 2019-12-21 18:28:50 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:50 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:50 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:50 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:50 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:50 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:50 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:50 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:50 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:50 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:50 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:50 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:50 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:50 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:50 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:50 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:50 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:50 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:50 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:50 --> Severity: Error --> session_start(): Failed to initialize storage module: user (path: school_sessions) /home/pmhsedu/public_html/erp/main/libraries/Session/Session.php 143
ERROR - 2019-12-21 18:28:50 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:50 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:50 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:50 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:50 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:50 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:50 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:50 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:50 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:50 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:50 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:50 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:50 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:50 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:50 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:50 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:50 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:50 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:50 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:50 --> Severity: Error --> session_start(): Failed to initialize storage module: user (path: school_sessions) /home/pmhsedu/public_html/erp/main/libraries/Session/Session.php 143
ERROR - 2019-12-21 18:28:51 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:51 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:51 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:51 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:51 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:51 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:51 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:51 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:51 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:51 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:51 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:51 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:51 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:51 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:51 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:51 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:51 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:51 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:51 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:51 --> Severity: Error --> session_start(): Failed to initialize storage module: user (path: school_sessions) /home/pmhsedu/public_html/erp/main/libraries/Session/Session.php 143
ERROR - 2019-12-21 18:28:51 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:51 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:51 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:51 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:51 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:51 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:51 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:51 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:51 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:51 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:51 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:51 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:51 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:51 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:51 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:51 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:51 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:51 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:51 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:51 --> Severity: Error --> session_start(): Failed to initialize storage module: user (path: school_sessions) /home/pmhsedu/public_html/erp/main/libraries/Session/Session.php 143
ERROR - 2019-12-21 18:28:52 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:52 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:52 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:52 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:52 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:52 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:52 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:52 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:52 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:52 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:52 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:52 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:52 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:52 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:52 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:52 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:52 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:52 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:52 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:52 --> Severity: Error --> session_start(): Failed to initialize storage module: user (path: school_sessions) /home/pmhsedu/public_html/erp/main/libraries/Session/Session.php 143
ERROR - 2019-12-21 18:28:52 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:52 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:52 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:52 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:53 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:53 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:53 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:53 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:53 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:53 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:53 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:53 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:53 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:53 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:53 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:53 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:53 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:53 --> Unable to connect to the database
ERROR - 2019-12-21 18:28:53 --> Severity: Warning --> mysqli::real_connect(): (42000/1203): User pmhsedu_erpuser already has more than 'max_user_connections' active connections /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-21 18:28:53 --> Severity: Error --> session_start(): Failed to initialize storage module: user (path: school_sessions) /home/pmhsedu/public_html/erp/main/libraries/Session/Session.php 143
ERROR - 2019-12-21 18:29:00 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 18:29:00 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '5'
ERROR - 2019-12-21 18:29:00 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 18:29:00 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT GET_LOCK('18ff2d6543b82b4c587d6f5a053fcc80', 300) AS ci_session_lock
ERROR - 2019-12-21 18:29:00 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576931340
WHERE `id` = '9c25e1d49a375721cb7dafa9212aa8f7296d4fd0'
ERROR - 2019-12-21 18:29:00 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 18:29:00 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('18ff2d6543b82b4c587d6f5a053fcc80') AS ci_session_lock
ERROR - 2019-12-21 18:29:00 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/main/libraries/Session/drivers/Session_database_driver.php 384
ERROR - 2019-12-21 18:29:00 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT GET_LOCK('18ff2d6543b82b4c587d6f5a053fcc80', 300) AS ci_session_lock
ERROR - 2019-12-21 18:29:00 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/main/libraries/Session/drivers/Session_database_driver.php 384
ERROR - 2019-12-21 18:29:05 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT GET_LOCK('18ff2d6543b82b4c587d6f5a053fcc80', 300) AS ci_session_lock
ERROR - 2019-12-21 18:29:05 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/main/libraries/Session/drivers/Session_database_driver.php 384
ERROR - 2019-12-21 18:29:05 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT GET_LOCK('18ff2d6543b82b4c587d6f5a053fcc80', 300) AS ci_session_lock
ERROR - 2019-12-21 18:29:05 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/main/libraries/Session/drivers/Session_database_driver.php 384
ERROR - 2019-12-21 18:29:05 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT GET_LOCK('18ff2d6543b82b4c587d6f5a053fcc80', 300) AS ci_session_lock
ERROR - 2019-12-21 18:29:05 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/main/libraries/Session/drivers/Session_database_driver.php 384
ERROR - 2019-12-21 18:29:05 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT GET_LOCK('18ff2d6543b82b4c587d6f5a053fcc80', 300) AS ci_session_lock
ERROR - 2019-12-21 18:29:05 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/main/libraries/Session/drivers/Session_database_driver.php 384
ERROR - 2019-12-21 18:29:05 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT GET_LOCK('18ff2d6543b82b4c587d6f5a053fcc80', 300) AS ci_session_lock
ERROR - 2019-12-21 18:29:05 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT GET_LOCK('18ff2d6543b82b4c587d6f5a053fcc80', 300) AS ci_session_lock
ERROR - 2019-12-21 18:29:05 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/main/libraries/Session/drivers/Session_database_driver.php 384
ERROR - 2019-12-21 18:29:05 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/main/libraries/Session/drivers/Session_database_driver.php 384
ERROR - 2019-12-21 18:42:58 --> 404 Page Not Found: Frontend/apple-touch-icon.png
ERROR - 2019-12-21 18:46:50 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-21 18:46:50 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`examID` = '1'
AND `mark`.`classesID` = '2'
ERROR - 2019-12-21 18:46:50 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-21 18:46:50 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576932410
WHERE `id` = '7506ac275382261f97a2b792d3331554f8fd5e95'
ERROR - 2019-12-21 18:46:50 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-21 18:46:50 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('ed930180c4fe8d363f90b320b55085e5') AS ci_session_lock
