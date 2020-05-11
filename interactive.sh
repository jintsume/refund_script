bash build.sh && \
  docker run --rm -it \
  --env-file ./.env \
  -v ${PWD}:/refund_script \
  -w /refund_script \
  refund_script /bin/bash