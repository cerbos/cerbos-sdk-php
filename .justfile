src_dir := "src"
tests_dir := "tests"
protos_dir := "protos"

all: generate lint static-analysis validate-composer test

generate: generate-proto-code

lint:
    vendor/bin/parallel-lint {{src_dir}}/Sdk {{tests_dir}}/Sdk

static-analysis:
    vendor/bin/psalm
    vendor/bin/phpstan analyse {{src_dir}}/Sdk {{tests_dir}}/Sdk

validate-composer:
    composer validate

test:
    vendor/bin/phpunit --no-coverage

generate-proto-code:
    rm -rf {{src_dir}}/Cerbos {{src_dir}}/Google {{src_dir}}/GPBMetadata {{src_dir}}/Grpc
    buf generate {{protos_dir}}
