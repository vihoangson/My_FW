cd ../../src/
composer update
cd public
bower update
cd ..
vendor/bin/doctrine orm:schema-tool:create
vendor/bin/doctrine orm:schema-tool:update -f