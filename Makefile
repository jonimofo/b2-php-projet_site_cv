.PHONY: cache-clear 

cache-clear: var/cache 
	@sudo chmod -R 777 var/cache
	@php bin/console cache:clear 
	@sudo chmod -R 777 var/cache

