Projet
=====

A Symfony project created on March 9, 2017, 10:12 am.

=====

Quick Set Up Guide - Cassandra & PHP

Download & Install : 
	
	- Visual Studio 2015 (Windows SDK 10.0)


For Cassandra PHP Extension :

Download & Install :

	- Bison (http://gnuwin32.sourceforge.net/downlinks/bison.php)
		Make sure Bison is in your system PATH and not installed in a directory with spaces (e.g. %SYSTEMDRIVE%\GnuWin32)

For DataStax C/C++ Driver for Apache Cassandra :

Download & Install :

	- CMake (http://www.cmake.org/download)
		Make sure to select the option “Add CMake to the system PATH for all users” or “Add CMake to the system PATH for current user”.

	- Git (http://git-scm.com/download/win)
		Make sure to select the option “Use Git from Windows Command Prompt” or manually add the git executable to the system PATH.

	- ActiveState Perl (https://www.perl.org/get.html#win32)
		Make sure to select the option “Add Perl to PATH environment variable”.
		NOTE: This build dependency is required if building with OpenSSL support

	- Python v2.7.x
		Make sure to select/install the feature “Add python.exe to Path”

Finals Steps :

C:\> git clone https://github.com/datastax/php-driver.git
C:\> cd php-driver
C:\php-driver> git submodule update --init
C:\php-driver> cd ext
C:\php-driver\ext> VC_BUILD.BAT

Go to C:\php-driver\ext\build\lib

Replace Files except php.ini in your php7.0.x Directory

Open php.ini and add "extension=php_cassandra.dll"

====