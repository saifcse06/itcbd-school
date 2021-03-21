<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-12-19 11:15:34 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT GET_LOCK('a0522d8da550b285ea356a443d71b11b', 300) AS ci_session_lock
ERROR - 2019-12-19 11:15:34 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/main/libraries/Session/drivers/Session_database_driver.php 384
ERROR - 2019-12-19 11:38:32 --> 404 Page Not Found: Frontend/apple-touch-icon.png
ERROR - 2019-12-19 12:32:36 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT GET_LOCK('93a778b362cd7ebf7ef582456bbb4574', 300) AS ci_session_lock
ERROR - 2019-12-19 12:32:36 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/main/libraries/Session/drivers/Session_database_driver.php 384
ERROR - 2019-12-19 12:33:46 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT GET_LOCK('93a778b362cd7ebf7ef582456bbb4574', 300) AS ci_session_lock
ERROR - 2019-12-19 12:33:46 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/main/libraries/Session/drivers/Session_database_driver.php 384
ERROR - 2019-12-19 12:33:46 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT GET_LOCK('93a778b362cd7ebf7ef582456bbb4574', 300) AS ci_session_lock
ERROR - 2019-12-19 12:33:46 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/main/libraries/Session/drivers/Session_database_driver.php 384
ERROR - 2019-12-19 12:33:46 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT GET_LOCK('93a778b362cd7ebf7ef582456bbb4574', 300) AS ci_session_lock
ERROR - 2019-12-19 12:33:46 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/main/libraries/Session/drivers/Session_database_driver.php 384
ERROR - 2019-12-19 15:22:40 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-19 15:22:40 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '3'
ERROR - 2019-12-19 15:22:40 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-19 15:22:40 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576747360
WHERE `id` = '9d9d695f5a592397e96277a536cabb07fc729bea'
ERROR - 2019-12-19 15:22:40 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-19 15:22:40 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('145e36574e54589aea4a1cccc754df01') AS ci_session_lock
ERROR - 2019-12-19 15:22:40 --> Query error: Lost connection to MySQL server during query - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576747360
WHERE `id` = '9d9d695f5a592397e96277a536cabb07fc729bea'
ERROR - 2019-12-19 15:22:40 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-19 15:22:40 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('145e36574e54589aea4a1cccc754df01') AS ci_session_lock
ERROR - 2019-12-19 18:25:39 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-19 18:25:39 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`examID` = '1'
AND `mark`.`classesID` = '3'
ERROR - 2019-12-19 18:25:39 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-19 18:25:39 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576758339
WHERE `id` = '42309e95d6caad85f0e38b8e871668a1ea8f329e'
ERROR - 2019-12-19 18:25:39 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-19 18:25:39 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('ac22b97b5eaa305963f76eacdacf35ed') AS ci_session_lock
ERROR - 2019-12-19 18:26:10 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-19 18:26:10 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`examID` = '1'
AND `mark`.`classesID` = '3'
ERROR - 2019-12-19 18:26:10 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-19 18:26:10 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576758370
WHERE `id` = '42309e95d6caad85f0e38b8e871668a1ea8f329e'
ERROR - 2019-12-19 18:26:10 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-19 18:26:10 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('ac22b97b5eaa305963f76eacdacf35ed') AS ci_session_lock
ERROR - 2019-12-19 18:27:10 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-19 18:27:10 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`examID` = '1'
AND `mark`.`classesID` = '3'
ERROR - 2019-12-19 18:27:10 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-19 18:27:10 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576758430
WHERE `id` = '42309e95d6caad85f0e38b8e871668a1ea8f329e'
ERROR - 2019-12-19 18:27:10 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-19 18:27:10 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('ac22b97b5eaa305963f76eacdacf35ed') AS ci_session_lock
ERROR - 2019-12-19 18:27:50 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-19 18:27:50 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`examID` = '1'
AND `mark`.`classesID` = '3'
ERROR - 2019-12-19 18:27:50 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-19 18:27:50 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576758470
WHERE `id` = '42309e95d6caad85f0e38b8e871668a1ea8f329e'
ERROR - 2019-12-19 18:27:50 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-19 18:27:50 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('ac22b97b5eaa305963f76eacdacf35ed') AS ci_session_lock
ERROR - 2019-12-19 18:28:20 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-19 18:28:20 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`examID` = '1'
AND `mark`.`classesID` = '3'
ERROR - 2019-12-19 18:28:20 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-19 18:28:20 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576758500
WHERE `id` = '42309e95d6caad85f0e38b8e871668a1ea8f329e'
ERROR - 2019-12-19 18:28:20 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-19 18:28:20 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('ac22b97b5eaa305963f76eacdacf35ed') AS ci_session_lock
ERROR - 2019-12-19 18:50:15 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-19 18:50:15 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`examID` = '1'
AND `mark`.`classesID` = '3'
ERROR - 2019-12-19 18:50:15 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-19 18:50:15 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576759815
WHERE `id` = 'a5a151eef87a462294ebf12c9ef3bb09544e9f42'
ERROR - 2019-12-19 18:50:15 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-19 18:50:15 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('3a74b8408ba683d67f91813dccb0c9d6') AS ci_session_lock
ERROR - 2019-12-19 18:50:45 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-19 18:50:45 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`examID` = '1'
AND `mark`.`classesID` = '3'
ERROR - 2019-12-19 18:50:45 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-19 18:50:45 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576759845
WHERE `id` = 'a5a151eef87a462294ebf12c9ef3bb09544e9f42'
ERROR - 2019-12-19 18:50:45 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-19 18:50:45 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('3a74b8408ba683d67f91813dccb0c9d6') AS ci_session_lock
ERROR - 2019-12-19 18:51:10 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-19 18:51:10 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`examID` = '1'
AND `mark`.`classesID` = '3'
ERROR - 2019-12-19 18:51:10 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-19 18:51:10 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576759870
WHERE `id` = 'a5a151eef87a462294ebf12c9ef3bb09544e9f42'
ERROR - 2019-12-19 18:51:10 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-19 18:51:10 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('3a74b8408ba683d67f91813dccb0c9d6') AS ci_session_lock
ERROR - 2019-12-19 18:51:40 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-19 18:51:40 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`examID` = '1'
AND `mark`.`classesID` = '3'
ERROR - 2019-12-19 18:51:40 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-19 18:51:40 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576759900
WHERE `id` = 'a5a151eef87a462294ebf12c9ef3bb09544e9f42'
ERROR - 2019-12-19 18:51:40 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-19 18:51:40 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('3a74b8408ba683d67f91813dccb0c9d6') AS ci_session_lock
ERROR - 2019-12-19 18:52:10 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-19 18:52:10 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`examID` = '1'
AND `mark`.`classesID` = '3'
ERROR - 2019-12-19 18:52:10 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-19 18:52:10 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576759930
WHERE `id` = 'a5a151eef87a462294ebf12c9ef3bb09544e9f42'
ERROR - 2019-12-19 18:52:10 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-19 18:52:10 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('3a74b8408ba683d67f91813dccb0c9d6') AS ci_session_lock
