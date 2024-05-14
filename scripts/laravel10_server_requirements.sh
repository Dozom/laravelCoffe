#!/bin/bash
php_version_output=$(php -v)
php_version=${php_version_output:0:10}

if [ "$php_version" == "PHP 8.2.15" ]; then
        echo "version OK"
else
        echo "ERROR version"
fi

if php -m | grep -q 'ctype'; then
    echo "ctype OK"
else
    echo "ERROR ctype"
fi

if php -m | grep -q 'curl'; then
    echo "curl OK"
else
    echo "ERROR curl"
fi

if php -m | grep -q 'dom'; then
    echo "DOM OK"
else
    echo "ERROR DOM"
fi

if php -m | grep -q 'fileinfo'; then
    echo "fileinfo OK"
else
    echo "ERROR fileinfo"
fi

if php -m | grep -q 'filter'; then
    echo "filter OK"
else
    echo "ERROR filter"
fi

if php -m | grep -q 'hash'; then
    echo "hash OK"
else
    echo "ERROR hash"
fi

if php -m | grep -q 'mbstring'; then
    echo "mbstring OK"
else
    echo "ERROR mbstring"
fi

if php -m | grep -q 'openssl'; then
    echo "openssl OK"
else
    echo "ERROR openssl"
fi

if php -m | grep -q 'pcre'; then
    echo "pcre OK"
else
    echo "ERROR pcre"
fi

if php -m | grep -q 'PDO'; then
    echo "PDO OK"
else
    echo "ERROR PDO"
fi

if php -m | grep -q 'session'; then
    echo "session OK"
else
    echo "ERROR session"
fi

if php -m | grep -q 'tokenizer'; then
    echo "tokenizer OK"
else
    echo "ERROR tokenizer"
fi

if php -m | grep -q 'xml'; then
    echo "xml OK"
else
    echo "ERROR xml"
fi
