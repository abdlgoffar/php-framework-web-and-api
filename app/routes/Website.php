<?php
class Website
{
    public static array $request = []; //variable where to store requests

    //method for creaate request
    public static function _create_(
        string $httpMethod,
        string $controllerType,
        string $controllerName,
        string $controllerClass,
        string $controllerMethodAvailable
    ): void {
        //process save request
        self::$request[] = [
            "httpMethod" => $httpMethod,
            "controllerType" => $controllerType,
            "controllerName" => $controllerName,
            "controllerClass" => $controllerClass,
            "controllerMethodAvailable" => $controllerMethodAvailable
        ];
    }
    //method for running request
    public static function _running_(): void
    {
        if (isset($_SERVER["PATH_INFO"])) {
            $endpoint = $_SERVER["PATH_INFO"];
            $endpoint = explode("/", $endpoint);
            unset($endpoint[0]);
        }
        $httpMethodAvailable = $_SERVER["REQUEST_METHOD"];
        foreach (self::$request as $i) {
            //handle route rest controller method find all
            if (isset($_SERVER["PATH_INFO"]) && $httpMethodAvailable === $i["httpMethod"] && count($endpoint) === 1 && route\Config::REST_CONTROLLER === $i["controllerType"] && $endpoint[1] === $i["controllerName"] && route\Config::METHOD_FIND_ALL === $i["controllerMethodAvailable"]) {
                $controller = new $i["controllerClass"];
                $method = $i["controllerMethodAvailable"];
                $controller->$method();
                return;
            }
            //handle route rest controller method find one by id
            if (isset($_SERVER["PATH_INFO"]) && $httpMethodAvailable === $i["httpMethod"] && count($endpoint) === 2 && preg_match("/^[0-9]*$/", $endpoint[2]) && route\Config::REST_CONTROLLER === $i["controllerType"] && $endpoint[1] === $i["controllerName"] && route\Config::METHOD_FIND_ONE_BY_ID === $i["controllerMethodAvailable"]) {
                $controller = new $i["controllerClass"];
                $method = $i["controllerMethodAvailable"];
                $parameterIdValue = $endpoint[2];
                $controller->$method($parameterIdValue);
                return;
            }
            //handle route rest controller method find one by name
            if (isset($_SERVER["PATH_INFO"]) && $httpMethodAvailable === $i["httpMethod"] && count($endpoint) === 2 && preg_match("/^[a-z-' ']*$/", $endpoint[2]) && route\Config::REST_CONTROLLER === $i["controllerType"] && $endpoint[1] === $i["controllerName"] && route\Config::METHOD_FIND_ONE_BY_NAME === $i["controllerMethodAvailable"]) {
                $controller = new $i["controllerClass"];
                $method = $i["controllerMethodAvailable"];
                $parameterNameValue = $endpoint[2];
                $controller->$method($parameterNameValue);
                return;
            }
            //handle route rest controller method create
            if (isset($_SERVER["PATH_INFO"]) && $httpMethodAvailable === $i["httpMethod"] && count($endpoint) === 1 && route\Config::REST_CONTROLLER === $i["controllerType"]  && $endpoint[1] === $i["controllerName"] && route\Config::METHOD_CREATE === $i["controllerMethodAvailable"]) {
                $controller = new $i["controllerClass"];
                $method = $i["controllerMethodAvailable"];
                $controller->$method();
                return;
            }
            //handle route rest controller method add
            if (isset($_SERVER["PATH_INFO"]) && $httpMethodAvailable === $i["httpMethod"] && count($endpoint) === 1 && route\Config::REST_CONTROLLER === $i["controllerType"]  && $endpoint[1] === $i["controllerName"] && route\Config::METHOD_ADD === $i["controllerMethodAvailable"]) {
                $controller = new $i["controllerClass"];
                $method = $i["controllerMethodAvailable"];
                $controller->$method();
                return;
            }
            //handle route rest controller method update by id
            if (isset($_SERVER["PATH_INFO"]) && $httpMethodAvailable === $i["httpMethod"] && count($endpoint) === 2 && preg_match("/^[0-9]*$/", $endpoint[2]) && route\Config::REST_CONTROLLER === $i["controllerType"] && $endpoint[1] === $i["controllerName"] && route\Config::METHOD_UPDATE_ONE_BY_ID === $i["controllerMethodAvailable"]) {
                $controller = new $i["controllerClass"];
                $method = $i["controllerMethodAvailable"];
                $parameterIdValue = $endpoint[2];
                $controller->$method($parameterIdValue);
                return;
            }
            //handle route rest controller method update by name
            if (isset($_SERVER["PATH_INFO"]) && $httpMethodAvailable === $i["httpMethod"] && count($endpoint) === 2 && preg_match("/^[a-z-' ']*$/", $endpoint[2]) && route\Config::REST_CONTROLLER === $i["controllerType"] && $endpoint[1] === $i["controllerName"] && route\Config::METHOD_UPDATE_ONE_BY_NAME === $i["controllerMethodAvailable"]) {
                $controller = new $i["controllerClass"];
                $method = $i["controllerMethodAvailable"];
                $parameterNameValue = $endpoint[2];
                $controller->$method($parameterNameValue);
                return;
            }
            //handle route rest controller method delete by id
            if (isset($_SERVER["PATH_INFO"]) && $httpMethodAvailable === $i["httpMethod"] && count($endpoint) === 2 && preg_match("/^[0-9]*$/", $endpoint[2]) && route\Config::REST_CONTROLLER === $i["controllerType"] && $endpoint[1] === $i["controllerName"] && route\Config::METHOD_DELETE_ONE_BY_ID === $i["controllerMethodAvailable"]) {
                $controller = new $i["controllerClass"];
                $method = $i["controllerMethodAvailable"];
                $parameterIdValue = $endpoint[2];
                $controller->$method($parameterIdValue);
                return;
            }
            //handle route rest controller method delete by name
            if (isset($_SERVER["PATH_INFO"]) && $httpMethodAvailable === $i["httpMethod"] && count($endpoint) === 2 && preg_match("/^[a-z-' ']*$/", $endpoint[2]) && route\Config::REST_CONTROLLER === $i["controllerType"] && $endpoint[1] === $i["controllerName"] && route\Config::METHOD_DELETE_ONE_BY_NAME === $i["controllerMethodAvailable"]) {
                $controller = new $i["controllerClass"];
                $method = $i["controllerMethodAvailable"];
                $parameterNameValue = $endpoint[2];
                $controller->$method($parameterNameValue);
                return;
            }
            //handle route web controller if there endpoint
            if (isset($_SERVER["PATH_INFO"]) && $httpMethodAvailable === $i["httpMethod"] && count($endpoint) > 1 && route\Config::WEB_CONTROLLER ===  $i["controllerType"] && $endpoint[1] === $i["controllerName"] && $endpoint[2] ===  $i["controllerMethodAvailable"]) {
                $controller = new $i["controllerClass"];
                $method = $i["controllerMethodAvailable"];
                if (count($endpoint) === 3 && preg_match("/^[0-9]*$/", $endpoint[3])) {
                    $parameterIdValue = $endpoint[3];
                    $controller->$method($parameterIdValue);
                    return;
                } elseif (count($endpoint) === 3 && preg_match("/^[a-z-' ']*$/", $endpoint[3])) {
                    $parameterNameValue = $endpoint[3];
                    $controller->$method($parameterNameValue);
                    return;
                } else {
                    $controller->$method();
                    return;
                }
            }
            //handle route web controller if there'n endpoint
            if (empty($_SERVER["PATH_INFO"]) && $i["controllerType"] === route\Config::WEB_CONTROLLER) {
                for ($x = 0; $x < count(self::$request); $x++) {
                    if (self::$request[$x]["controllerType"] === "WEB_CONTROLLER")
                    /** take just route controller type web that available */
                    {
                        $controller = new self::$request[$x]["controllerClass"];
                        $method = self::$request[$x]["controllerMethodAvailable"];
                        if (method_exists($controller, $method)) {
                            $controller->$method();
                            return;
                        }
                    }
                }
            }
        }
        http_response_code(404);
        echo "REQUEST NOT FOUND ERROR: 404";
    }
}
