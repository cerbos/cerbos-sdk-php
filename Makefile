.PHONY: all
all: lint static-analysis test

.PHONY: lint
lint:
	vendor/bin/parallel-lint --exclude .git --exclude .github --exclude build --exclude vendor .

.PHONY: static-analysis
static-analysis:
	vendor/bin/psalm
	vendor/bin/phpstan analyse src tests

.PHONY: test
test:
	vendor/bin/phpunit