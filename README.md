
This projects includes a Dockerfile to bundle adminer as part of a Docker image.

$ docker run -d -e DB_PATH=/data/database.sqlite \
                -e DB_ADMIN=admin -e DB_ADMIN_PASS=admin_pass \
                -e DB_EDITOR=editor -e DB_EDITOR_PASS=editor_pass \
                nesrait/adminer-sqlite

Adminer overview
----------------

  - https://www.adminer.org/
  - http://www.otak.info/index.php?page=postDetailReplyList&post=130&page_num=1&title=SQLite+Adminer+-+login#131
