# PHP SimpleLogger
Provides a single class,`Logger`, that implements a PSR-3 compatiable logger (Psr\Log\AbstractLogger) that just logs to error_log().

This exists because core PHP or PSR don't provide a useful logger (like say Javascript's console, or Python's logger library) and many of the third party PSR-3 loggers are too bloated or opinionated. Plus there is no clear consensus on which to use as a pseudo standard (AFAIK). [PSR-3](http://www.php-fig.org/psr/psr-3/) only provides an interface Psr\Log\AbstractLogger. The Logger class provided by this package implements that as ~simply as possible with the constraint that logs should get piped through `error_log()`.
