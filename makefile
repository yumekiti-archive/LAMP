UID := $(shell id -u)
GID := $(shell id -g)
USER := $(UID):$(GID)
dc := user=$(USER) docker-compose

.PHONY: init
init:
	$(dc) -f ./docker/docker-compose.yml up -d --build && \
	bash ./docker/php/sql.sh

.PHONY: up
up:
	$(dc) -f ./docker/docker-compose.yml up -d --build

.PHONY: down
down:
	$(dc) -f ./docker/docker-compose.yml down

.PHONY: reup
reup:
	$(dc) -f ./docker/docker-compose.yml -p lamp restart

.PHONY: rm
rm:
	$(dc) -f ./docker/docker-compose.yml down --rmi all

.PHONY: logs
logs:
	$(dc) -f ./docker/docker-compose.yml logs -f
