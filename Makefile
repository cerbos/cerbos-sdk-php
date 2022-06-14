.PHONY: fetch
fetch:
	@ ./fetch_protos.sh

.PHONY: generate
generate:
	@ buf generate proto
