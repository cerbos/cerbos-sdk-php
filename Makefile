SRC_DIR := src
TESTS_DIR := tests
PROTOS_DIR := protos

.PHONY: all
all: generate lint static-analysis validate-composer test

.PHONY: generate
generate: generate-proto-code

.PHONY: lint
lint:
	vendor/bin/parallel-lint ${SRC_DIR}/Sdk ${TESTS_DIR}/Sdk

.PHONY: static-analysis
static-analysis:
	vendor/bin/psalm
	vendor/bin/phpstan analyse ${SRC_DIR}/Sdk ${TESTS_DIR}/Sdk

.PHONY: validate-composer
validate-composer:
	composer validate

.PHONY: test
test:
	docker compose up -d
	vendor/bin/phpunit --no-coverage
	docker compose down

.PHONY: generate-proto-code
generate-proto-code:
	rm -rf ${SRC_DIR}/Cerbos ${SRC_DIR}/Google ${SRC_DIR}/GPBMetadata ${SRC_DIR}/Grpc
	buf generate ${PROTOS_DIR}
