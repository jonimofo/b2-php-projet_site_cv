.PHONY: help cache-clear permissions create-db reload-db install server 

APACHE_USER?=www-data

help:
	@grep -E '(^[a-zA-Z_-]+:.*?##.*$$)|(^##)' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[32m%-10s\033[0m %s\n", $$1, $$2}' | sed -e 's/\[32m##/[33m/'

vendor: composer.json
	composer install

cache-clear: var/cache 
	@sudo chmod -R 777 var/cache
	@php bin/console cache:clear 
	@sudo chmod -R 777 var/cache

permissions: var/ web/assets/images
	@sudo chown -R $(APACHE_USER):$(APACHE_USER) var/
	@sudo chown -R $(APACHE_USER):$(APACHE_USER) web/assets/images
	@sudo chmod -R 777 var/

create-db:
	php bin/console doctrine:database:create
	php bin/console doctrine:schema:update --force
	php bin/console doctrine:fixtures:load -n

reload-db:
	php bin/console doctrine:database:drop --force
	make create-db

install:
	make permissions
	make vendor
	make cache-clear
	make create-db

server:
	make cache-clear
	php bin/console server:run