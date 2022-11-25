::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
::
::  is a Windows batch script for invoking PHP shell commands
::
:: PHP(tm) : Rapid Development Framework (https://php.org)
:: Copyright (c)  Software Foundation, Inc. (https://foundation.org)
::
:: Licensed under The MIT License
:: Redistributions of files must retain the above copyright notice.
::
:: @copyright     Copyright (c)  Software Foundation, Inc. (https://foundation.org)
:: @link          https://php.org PHP(tm) Project
:: @since         2.0.0
:: @license       https://opensource.org/licenses/mit-license.php MIT License
::
::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::

@echo off

SET app=%0
SET lib=%~dp0

php "%lib%.php" %*

echo.

exit /B %ERRORLEVEL%
