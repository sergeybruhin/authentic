init:
	sh ./deploy/local/init.sh; \

build:
	sh ./deploy/local/build.sh; \

install:
	sh ./deploy/local/install.sh; \

fresh:
	sh ./deploy/local/fresh.sh; \

reset:
	sh ./deploy/local/reset.sh; \

cache-clear:
	sh ./deploy/local/clear.sh; \

deploy:
	sh ./deploy/local/deploy.sh; \

test:
	sh ./deploy/local/test.sh; \

bash:
	sh ./deploy/local/bash.sh; \

stop:
	sh ./deploy/local/stop.sh; \

start:
	sh ./deploy/local/start.sh; \

ide-helper:
	sh ./deploy/local/ide-helper.sh; \

dump-autoload:
	sh ./deploy/local/dump-autoload.sh; \

migrate:
	sh ./deploy/local/migrate.sh; \

swagger-generate:
	sh ./deploy/local/swagger-generate.sh; \

# Shortcuts
up: start
down: stop
restart: down up
du: dump-autoload
ih: ide-helper
duh: du ih
clear: cache-clear
force-clear: clear down up
sw: swagger-generate
