<?php

    class InvalidCCNumberException extends InvalidArgumentException {
        public function __construct($message="No CC number", $code = 0, Throwable $previous = null) {
            parent::__construct($message, $code, $previous);
        }
    }

?>