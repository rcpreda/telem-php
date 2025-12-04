#!/bin/bash

echo "🔍 Checking system requirements..."
echo ""

# Check PHP version
echo "📦 PHP Version:"
php -v | head -1

PHP_VERSION=$(php -r "echo PHP_VERSION;")
PHP_MAJOR=$(php -r "echo PHP_MAJOR_VERSION;")
PHP_MINOR=$(php -r "echo PHP_MINOR_VERSION;")

if [ "$PHP_MAJOR" -ge 8 ] && [ "$PHP_MINOR" -ge 4 ]; then
    echo "✅ PHP version is compatible (8.4+)"
else
    echo "❌ PHP version is too old. This project requires PHP 8.4+"
    echo "   Your version: $PHP_VERSION"
    exit 1
fi

echo ""

# Check required PHP extensions
echo "📦 Checking PHP Extensions:"

REQUIRED_EXTENSIONS=(
    "mbstring"
    "xml"
    "pdo"
    "pdo_mysql"
    "curl"
    "gd"
    "zip"
    "bcmath"
    "intl"
    "fileinfo"
    "tokenizer"
    "ctype"
    "json"
)

MISSING_EXTENSIONS=()

for ext in "${REQUIRED_EXTENSIONS[@]}"; do
    if php -m | grep -q "^$ext$"; then
        echo "✅ $ext"
    else
        echo "❌ $ext (missing)"
        MISSING_EXTENSIONS+=("$ext")
    fi
done

if [ ${#MISSING_EXTENSIONS[@]} -gt 0 ]; then
    echo ""
    echo "❌ Missing extensions: ${MISSING_EXTENSIONS[*]}"
    echo "   Please install them before deploying"
    exit 1
fi

echo ""
echo "✨ All requirements met! Ready for deployment."
