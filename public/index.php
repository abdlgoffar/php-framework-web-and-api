<?php

/**
 * IMPORT CONTROLLERS APPLICATION
 */
require_once __DIR__ . "/../app/controllers/StudentController.php";
require_once __DIR__ . "/../app/controllers/TeacherController.php";

/**
 * IMPORT ROUTES APPLICATION
 */
require_once __DIR__ . "/../app/routes/Config.php";
require_once __DIR__ . "/../app/routes/Website.php";

/**
 * CREATE ROUTE CONTROLLERS
 */

//student route rest controller
Website::_create_(route\Config::HTTP_METHOD_GET, route\Config::REST_CONTROLLER, "students", StudentController::class, route\Config::METHOD_FIND_ALL);
Website::_create_(route\Config::HTTP_METHOD_GET, route\Config::REST_CONTROLLER, "students", StudentController::class, route\Config::METHOD_FIND_ONE_BY_ID);
Website::_create_(route\Config::HTTP_METHOD_GET, route\Config::REST_CONTROLLER, "students", StudentController::class, route\Config::METHOD_FIND_ONE_BY_NAME);
Website::_create_(route\Config::HTTP_METHOD_POST, route\Config::REST_CONTROLLER, "students", StudentController::class, route\Config::METHOD_CREATE);
Website::_create_(route\Config::HTTP_METHOD_POST, route\Config::REST_CONTROLLER, "student", StudentController::class, route\Config::METHOD_ADD);
Website::_create_(route\Config::HTTP_METHOD_PUT, route\Config::REST_CONTROLLER, "students", StudentController::class, route\Config::METHOD_UPDATE_ONE_BY_ID);
Website::_create_(route\Config::HTTP_METHOD_PUT, route\Config::REST_CONTROLLER, "students", StudentController::class, route\Config::METHOD_UPDATE_ONE_BY_NAME);
Website::_create_(route\Config::HTTP_METHOD_DELETE, route\Config::REST_CONTROLLER, "students", StudentController::class, route\Config::METHOD_DELETE_ONE_BY_ID);
Website::_create_(route\Config::HTTP_METHOD_DELETE, route\Config::REST_CONTROLLER, "students", StudentController::class, route\Config::METHOD_DELETE_ONE_BY_NAME);
//teacher route rest controller
Website::_create_(route\Config::HTTP_METHOD_GET, route\Config::REST_CONTROLLER, "teachers", TeacherController::class, route\Config::METHOD_FIND_ALL);
Website::_create_(route\Config::HTTP_METHOD_GET, route\Config::REST_CONTROLLER, "teachers", TeacherController::class, route\Config::METHOD_FIND_ONE_BY_ID);
Website::_create_(route\Config::HTTP_METHOD_GET, route\Config::REST_CONTROLLER, "teachers", TeacherController::class, route\Config::METHOD_FIND_ONE_BY_NAME);
Website::_create_(route\Config::HTTP_METHOD_POST, route\Config::REST_CONTROLLER, "teachers", TeacherController::class, route\Config::METHOD_CREATE);
Website::_create_(route\Config::HTTP_METHOD_POST, route\Config::REST_CONTROLLER, "teacher", TeacherController::class, route\Config::METHOD_ADD);
Website::_create_(route\Config::HTTP_METHOD_PUT, route\Config::REST_CONTROLLER, "teachers", TeacherController::class, route\Config::METHOD_UPDATE_ONE_BY_ID);
Website::_create_(route\Config::HTTP_METHOD_PUT, route\Config::REST_CONTROLLER, "teachers", TeacherController::class, route\Config::METHOD_UPDATE_ONE_BY_NAME);
Website::_create_(route\Config::HTTP_METHOD_DELETE, route\Config::REST_CONTROLLER, "teachers", TeacherController::class, route\Config::METHOD_DELETE_ONE_BY_ID);
Website::_create_(route\Config::HTTP_METHOD_DELETE, route\Config::REST_CONTROLLER, "teachers", TeacherController::class, route\Config::METHOD_DELETE_ONE_BY_NAME);
//student route web controller
Website::_create_(route\Config::HTTP_METHOD_GET, route\Config::WEB_CONTROLLER, "/", StudentController::class, "all");
Website::_create_(route\Config::HTTP_METHOD_GET, route\Config::WEB_CONTROLLER, "/", StudentController::class, "detail");
/**
 * RUNNING CONTROLLERS
 */
Website::_running_();
