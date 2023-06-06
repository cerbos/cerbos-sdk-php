SRC_DIR := "src"
TESTS_DIR := "src"
OVERRIDE_PROTOS_DIR := "override_protos"
PROTOS_DIR := "protos"

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
	docker-compose up -d
	vendor/bin/phpunit --no-coverage
	docker-compose down

.PHONY: generate-proto-code
generate-proto-code:
	./fetch_protos.sh
	rm -rf ${PROTOS_DIR}/validate
	cp -rf ${OVERRIDE_PROTOS_DIR}/validate ${PROTOS_DIR}/
	rm -rf ${SRC_DIR}/Cerbos ${SRC_DIR}/GPBMetadata
	buf generate ${PROTOS_DIR}
