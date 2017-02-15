<?php
namespace PaulGibbs\WordpressBehatExtension\Exception;

use PaulGibbs\WordpressBehatExtension\Driver\DriverInterface;
use Exception;

/**
 * Exception to handle unsupported driver actions.
 */
class UnsupportedDriverActionException extends Exception
{
    /**
     * Constructor.
     *
     * @param string  $message  Exception message.
     * @param int     $code     User-defined exception code.
     * @param unknown $previous If this was a nested exception, the previous exception.
     */
    public function __construct($message = null, $code = 0, $previous = null)
    {
        parent::__construct(
            "No ability to {$message}. Maybe use another driver?",
            $code,
            $previous
        );
    }
}
