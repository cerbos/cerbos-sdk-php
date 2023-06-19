SRC_DIR := "src"
TESTS_DIR := "tests"
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
	sed -i.bak 's/syntax = "proto2"/syntax = "proto3"/' ${PROTOS_DIR}/validate/validate.proto
	sed -i.bak 's/ \[default = true\];/;/' ${PROTOS_DIR}/validate/validate.proto
	rm ${PROTOS_DIR}/validate/validate.proto.bak
	rm -rf ${SRC_DIR}/Cerbos ${SRC_DIR}/GPBMetadata
	buf generate ${PROTOS_DIR}
