<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-12-20 07:47:55 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT GET_LOCK('cedc823d099c383a6e5f9725e5532d95', 300) AS ci_session_lock
ERROR - 2019-12-20 07:47:55 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/main/libraries/Session/drivers/Session_database_driver.php 384
ERROR - 2019-12-20 07:48:15 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-20 07:48:15 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '5'
ERROR - 2019-12-20 07:48:15 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-20 07:48:15 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576806495
WHERE `id` = '02509afc24dafc86d836a6817f3f8391b9df9756'
ERROR - 2019-12-20 07:48:15 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-20 07:48:15 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('cedc823d099c383a6e5f9725e5532d95') AS ci_session_lock
ERROR - 2019-12-20 08:02:01 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-20 08:02:01 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`examID` = '1'
AND `mark`.`classesID` = '5'
ERROR - 2019-12-20 08:02:01 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-20 08:02:01 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576807321
WHERE `id` = '1ca59c9c33156fb4b5146d007c6a1cb397f29193'
ERROR - 2019-12-20 08:02:01 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-20 08:02:01 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('54818a6e6fc152b0be3bcfc9def39bd9') AS ci_session_lock
ERROR - 2019-12-20 08:02:16 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT GET_LOCK('54818a6e6fc152b0be3bcfc9def39bd9', 300) AS ci_session_lock
ERROR - 2019-12-20 08:02:16 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/main/libraries/Session/drivers/Session_database_driver.php 384
ERROR - 2019-12-20 08:02:26 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-20 08:02:26 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`examID` = '1'
AND `mark`.`classesID` = '5'
ERROR - 2019-12-20 08:02:26 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-20 08:02:26 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576807346
WHERE `id` = '1ca59c9c33156fb4b5146d007c6a1cb397f29193'
ERROR - 2019-12-20 08:02:26 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-20 08:02:26 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('54818a6e6fc152b0be3bcfc9def39bd9') AS ci_session_lock
ERROR - 2019-12-20 08:02:41 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT GET_LOCK('54818a6e6fc152b0be3bcfc9def39bd9', 300) AS ci_session_lock
ERROR - 2019-12-20 08:02:41 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/main/libraries/Session/drivers/Session_database_driver.php 384
ERROR - 2019-12-20 09:58:58 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-20 09:58:58 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`examID` = '1'
AND `mark`.`classesID` = '3'
ERROR - 2019-12-20 09:58:58 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-20 09:58:58 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576814338
WHERE `id` = '7912d8eb5fcba8c3efa3647457282e2f94b0a4fb'
ERROR - 2019-12-20 09:58:58 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-20 09:58:58 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('847e8214f0bfbe0659bc694748853008') AS ci_session_lock
ERROR - 2019-12-20 10:03:48 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-20 10:03:48 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`examID` = '1'
AND `mark`.`classesID` = '3'
ERROR - 2019-12-20 10:03:48 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-20 10:03:48 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576814628
WHERE `id` = '7912d8eb5fcba8c3efa3647457282e2f94b0a4fb'
ERROR - 2019-12-20 10:03:48 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-20 10:03:48 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('847e8214f0bfbe0659bc694748853008') AS ci_session_lock
ERROR - 2019-12-20 10:04:18 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-20 10:04:18 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`examID` = '1'
AND `mark`.`classesID` = '3'
ERROR - 2019-12-20 10:04:18 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-20 10:04:18 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576814658
WHERE `id` = '7912d8eb5fcba8c3efa3647457282e2f94b0a4fb'
ERROR - 2019-12-20 10:04:18 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-20 10:04:18 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('847e8214f0bfbe0659bc694748853008') AS ci_session_lock
ERROR - 2019-12-20 10:09:49 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-20 10:09:49 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '3'
ERROR - 2019-12-20 10:09:49 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-20 10:09:49 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576814989
WHERE `id` = '7912d8eb5fcba8c3efa3647457282e2f94b0a4fb'
ERROR - 2019-12-20 10:09:49 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-20 10:09:49 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('847e8214f0bfbe0659bc694748853008') AS ci_session_lock
ERROR - 2019-12-20 10:09:54 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT GET_LOCK('847e8214f0bfbe0659bc694748853008', 300) AS ci_session_lock
ERROR - 2019-12-20 10:09:54 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/main/libraries/Session/drivers/Session_database_driver.php 384
ERROR - 2019-12-20 10:09:54 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT GET_LOCK('847e8214f0bfbe0659bc694748853008', 300) AS ci_session_lock
ERROR - 2019-12-20 10:09:54 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/main/libraries/Session/drivers/Session_database_driver.php 384
ERROR - 2019-12-20 10:09:59 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT GET_LOCK('847e8214f0bfbe0659bc694748853008', 300) AS ci_session_lock
ERROR - 2019-12-20 10:09:59 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/main/libraries/Session/drivers/Session_database_driver.php 384
ERROR - 2019-12-20 10:10:14 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-20 10:10:14 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '3'
ERROR - 2019-12-20 10:10:14 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-20 10:10:14 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576815014
WHERE `id` = '7912d8eb5fcba8c3efa3647457282e2f94b0a4fb'
ERROR - 2019-12-20 10:10:14 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-20 10:10:14 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('847e8214f0bfbe0659bc694748853008') AS ci_session_lock
ERROR - 2019-12-20 10:10:19 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT GET_LOCK('847e8214f0bfbe0659bc694748853008', 300) AS ci_session_lock
ERROR - 2019-12-20 10:10:19 --> Severity: error --> Exception: Call to a member function row() on boolean /home/pmhsedu/public_html/erp/main/libraries/Session/drivers/Session_database_driver.php 384
ERROR - 2019-12-20 10:10:39 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-20 10:10:39 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '3'
ERROR - 2019-12-20 10:10:39 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-20 10:10:39 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576815039
WHERE `id` = '7912d8eb5fcba8c3efa3647457282e2f94b0a4fb'
ERROR - 2019-12-20 10:10:39 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-20 10:10:39 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('847e8214f0bfbe0659bc694748853008') AS ci_session_lock
ERROR - 2019-12-20 10:11:04 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-20 10:11:04 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '3'
ERROR - 2019-12-20 10:11:04 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-20 10:11:04 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576815064
WHERE `id` = '7912d8eb5fcba8c3efa3647457282e2f94b0a4fb'
ERROR - 2019-12-20 10:11:04 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-20 10:11:04 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('847e8214f0bfbe0659bc694748853008') AS ci_session_lock
ERROR - 2019-12-20 10:11:34 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-20 10:11:34 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '3'
ERROR - 2019-12-20 10:11:34 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-20 10:11:34 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576815094
WHERE `id` = '7912d8eb5fcba8c3efa3647457282e2f94b0a4fb'
ERROR - 2019-12-20 10:11:34 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-20 10:11:34 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('847e8214f0bfbe0659bc694748853008') AS ci_session_lock
ERROR - 2019-12-20 10:22:34 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-20 10:22:34 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '3'
ERROR - 2019-12-20 10:22:34 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-20 10:22:34 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576815754
WHERE `id` = 'e888bfe51370532a8672b59b71d278dbfcca9b5a'
ERROR - 2019-12-20 10:22:34 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-20 10:22:34 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('a3ca5dcddfd1a364a41be7980c36d51b') AS ci_session_lock
ERROR - 2019-12-20 10:51:19 --> Severity: Warning --> mysqli::query(): (HY000/2013): Lost connection to MySQL server during query /home/pmhsedu/public_html/erp/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-12-20 10:51:19 --> Query error: Lost connection to MySQL server during query - Invalid query: SELECT *
FROM `mark`
LEFT JOIN `markrelation` ON `markrelation`.`markID` = `mark`.`markID`
WHERE `mark`.`schoolyearID` = '1'
AND `mark`.`classesID` = '5'
ERROR - 2019-12-20 10:51:19 --> Severity: error --> Exception: Call to a member function result() on boolean /home/pmhsedu/public_html/erp/mvc/models/Mark_m.php 96
ERROR - 2019-12-20 10:51:19 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1576817479
WHERE `id` = '723b5b1a2585384d709950a57ae9cf0c37337aa4'
ERROR - 2019-12-20 10:51:19 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: school_sessions) Unknown 0
ERROR - 2019-12-20 10:51:19 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('8c8d1878328d0067ed4bac723bb55831') AS ci_session_lock
ERROR - 2019-12-20 15:31:56 --> 404 Page Not Found: Frontend/apple-touch-icon.png
ERROR - 2019-12-20 15:32:12 --> 404 Page Not Found: Frontend/apple-touch-icon.png
ERROR - 2019-12-20 16:16:00 --> Severity: Warning --> Division by zero /home/pmhsedu/public_html/erp/mvc/views/report/progresscard/ProgresscardReport.php 268
ERROR - 2019-12-20 16:16:00 --> Severity: Warning --> Division by zero /home/pmhsedu/public_html/erp/mvc/views/report/progresscard/ProgresscardReport.php 268
ERROR - 2019-12-20 16:16:00 --> Severity: Warning --> Division by zero /home/pmhsedu/public_html/erp/mvc/views/report/progresscard/ProgresscardReport.php 268
ERROR - 2019-12-20 16:16:00 --> Severity: Warning --> Division by zero /home/pmhsedu/public_html/erp/mvc/views/report/progresscard/ProgresscardReport.php 268
ERROR - 2019-12-20 16:16:00 --> Severity: Warning --> Division by zero /home/pmhsedu/public_html/erp/mvc/views/report/progresscard/ProgresscardReport.php 268
ERROR - 2019-12-20 16:16:00 --> Severity: Warning --> Division by zero /home/pmhsedu/public_html/erp/mvc/views/report/progresscard/ProgresscardReport.php 268
ERROR - 2019-12-20 16:16:00 --> Severity: Warning --> Division by zero /home/pmhsedu/public_html/erp/mvc/views/report/progresscard/ProgresscardReport.php 268
ERROR - 2019-12-20 16:16:00 --> Severity: Warning --> Division by zero /home/pmhsedu/public_html/erp/mvc/views/report/progresscard/ProgresscardReport.php 268
ERROR - 2019-12-20 16:16:00 --> Severity: Warning --> Division by zero /home/pmhsedu/public_html/erp/mvc/views/report/progresscard/ProgresscardReport.php 268
ERROR - 2019-12-20 16:16:00 --> Severity: Warning --> Division by zero /home/pmhsedu/public_html/erp/mvc/views/report/progresscard/ProgresscardReport.php 268
ERROR - 2019-12-20 16:16:00 --> Severity: Warning --> Division by zero /home/pmhsedu/public_html/erp/mvc/views/report/progresscard/ProgresscardReport.php 268
ERROR - 2019-12-20 16:16:00 --> Severity: Warning --> Division by zero /home/pmhsedu/public_html/erp/mvc/views/report/progresscard/ProgresscardReport.php 268
ERROR - 2019-12-20 16:16:00 --> Severity: Warning --> Division by zero /home/pmhsedu/public_html/erp/mvc/views/report/progresscard/ProgresscardReport.php 268
ERROR - 2019-12-20 16:16:00 --> Severity: Warning --> Division by zero /home/pmhsedu/public_html/erp/mvc/views/report/progresscard/ProgresscardReport.php 347
ERROR - 2019-12-20 16:17:00 --> Severity: Warning --> Division by zero /home/pmhsedu/public_html/erp/mvc/views/report/progresscard/ProgresscardReport.php 268
ERROR - 2019-12-20 16:17:00 --> Severity: Warning --> Division by zero /home/pmhsedu/public_html/erp/mvc/views/report/progresscard/ProgresscardReport.php 268
ERROR - 2019-12-20 16:17:00 --> Severity: Warning --> Division by zero /home/pmhsedu/public_html/erp/mvc/views/report/progresscard/ProgresscardReport.php 268
ERROR - 2019-12-20 16:17:00 --> Severity: Warning --> Division by zero /home/pmhsedu/public_html/erp/mvc/views/report/progresscard/ProgresscardReport.php 268
ERROR - 2019-12-20 16:17:00 --> Severity: Warning --> Division by zero /home/pmhsedu/public_html/erp/mvc/views/report/progresscard/ProgresscardReport.php 268
ERROR - 2019-12-20 16:17:00 --> Severity: Warning --> Division by zero /home/pmhsedu/public_html/erp/mvc/views/report/progresscard/ProgresscardReport.php 268
ERROR - 2019-12-20 16:17:00 --> Severity: Warning --> Division by zero /home/pmhsedu/public_html/erp/mvc/views/report/progresscard/ProgresscardReport.php 268
ERROR - 2019-12-20 16:17:00 --> Severity: Warning --> Division by zero /home/pmhsedu/public_html/erp/mvc/views/report/progresscard/ProgresscardReport.php 268
ERROR - 2019-12-20 16:17:00 --> Severity: Warning --> Division by zero /home/pmhsedu/public_html/erp/mvc/views/report/progresscard/ProgresscardReport.php 268
ERROR - 2019-12-20 16:17:00 --> Severity: Warning --> Division by zero /home/pmhsedu/public_html/erp/mvc/views/report/progresscard/ProgresscardReport.php 268
ERROR - 2019-12-20 16:17:00 --> Severity: Warning --> Division by zero /home/pmhsedu/public_html/erp/mvc/views/report/progresscard/ProgresscardReport.php 268
ERROR - 2019-12-20 16:17:00 --> Severity: Warning --> Division by zero /home/pmhsedu/public_html/erp/mvc/views/report/progresscard/ProgresscardReport.php 268
ERROR - 2019-12-20 16:17:00 --> Severity: Warning --> Division by zero /home/pmhsedu/public_html/erp/mvc/views/report/progresscard/ProgresscardReport.php 268
ERROR - 2019-12-20 16:17:00 --> Severity: Warning --> Division by zero /home/pmhsedu/public_html/erp/mvc/views/report/progresscard/ProgresscardReport.php 347
