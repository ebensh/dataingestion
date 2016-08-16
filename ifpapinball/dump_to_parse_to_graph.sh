#!/bin/bash
set -e
set -x

python dump_user_history.py api_key 1 | python parse_user_history.py > score_history.csv

cat <<'EOF' | R --no-save
data <- read.csv('score_history.csv', header=TRUE)
data$rating_date <- as.Date(data$rating_date)
png('score_history.png', height=800, width=600)
plot(data$rating_date, data$rating)
dev.off()
EOF
