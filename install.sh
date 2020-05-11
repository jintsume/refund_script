bash build.sh && \
  docker run --rm -it \
  --env-file ./.env \
  -v ${PWD}:/refund_script \
  -w /refund_script \
  composer install