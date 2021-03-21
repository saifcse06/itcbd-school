<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-12-24 19:42:28 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-24 19:42:28 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`examID` = '1'
AND `mark`.`classesID` = '2'
ERROR - 2019-12-24 19:42:28 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-24 19:42:28 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1577194948
WHERE `id` = 'fef38eab5c053d67737e4f917072688f79bcd5f5'
ERROR - 2019-12-24 19:42:28 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-24 19:42:28 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('3572875bb7e873118e68bc55aea6f8a8') AS ci_session_lock
