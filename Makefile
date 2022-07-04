.PHONY: all
all: lint static-analysis validate-composer test

.PHONY: lint
lint:
	vendor/bin/parallel-lint --exclude .git --exclude .github --exclude build --exclude vendor .

.PHONY: static-analysis
static-analysis:
	vendor/bin/psalm
	vendor/bin/phpstan analyse src tests

.PHONY: validate-composer
validate-composer:
	composer validate

.PHONY: test
test:
	docker-compose up -d
	vendor/bin/phpunit
	docker-compose down