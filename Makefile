tests:
	$(MAKE) phpunit
	$(MAKE) phpstan
.PHONY: tests

phpunit:
	cd tests && ./vendor/bin/phpunit

update_snapshots:
	cd tests && ./vendor/bin/phpunit -d --update-snapshots

phpstan:
	cd tests && ./vendor/bin/phpstan analyse --memory-limit=2G