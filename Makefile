tests:
	$(MAKE) phpunit
	$(MAKE) phpstan
.PHONY: tests

phpunit:
	cd tests && ./vendor/bin/phpunit

phpunit_fast:
	cd tests && ./vendor/bin/phpunit --exclude-group slow

phpunit_slow:
	cd tests && ./vendor/bin/phpunit --group slow

update_snapshots:
	cd tests && ./vendor/bin/phpunit -d --update-snapshots

update_snapshots_slow:
	cd tests && ./vendor/bin/phpunit -d --update-snapshots --group slow

update_snapshots_fast:
	cd tests && ./vendor/bin/phpunit -d --update-snapshots --exclude-group slow

phpstan:
	cd tests && ./vendor/bin/phpstan analyse --memory-limit=2G