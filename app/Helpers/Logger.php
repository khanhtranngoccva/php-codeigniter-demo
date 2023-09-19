<?php

namespace App\Helpers;

use DateTimeZone;

class Logger extends \Monolog\Logger
{
    static function _get_output($data): string
    {
        if ($data instanceof \Throwable) {
            $trace = $data->getTraceAsString();
            return $data->getMessage() . $trace;
        }
        return var_export($data, true);
    }

    public function __construct(string $name, array $handlers = [], array $processors = [], ?DateTimeZone $timezone = null)
    {
        parent::__construct($name, $handlers, $processors, $timezone);
        $this->pushHandler(new \Monolog\Handler\StreamHandler("php://stdout"));
    }

    public function info($message, array $context = []): void
    {
        parent::info(Logger::_get_output($message), $context);
    }

    public function error($message, array $context = []): void
    {
        parent::error(Logger::_get_output($message), $context);
    }

    public function warning($message, array $context = []): void
    {
        parent::warning(Logger::_get_output($message), $context);
    }
}