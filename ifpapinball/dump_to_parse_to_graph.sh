#!/bin/bash
set -e
set -x

python dump_user_history.py api_key 1 | python parse_user_history.py > score_history.csv
Rscript <(cat <<EOF
data <- read.csv('score_history.csv', header=TRUE);
png('score_history.png', height=800, width=600);
plot(data$rating_date, data$rating);
dev.off();
EOF
)
