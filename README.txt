
This projects includes a Dockerfile to bundle adminer as part of a Docker image.

Adminer overview
----------------

  - https://www.adminer.org/
  - http://www.otak.info/index.php?page=postDetailReplyList&post=130&page_num=1&title=SQLite+Adminer+-+login#131


Build Docker image
------------------

$ docker build -t nesrait/adminer .;  docker push nesrait/adminer:latest


Use Docker image
----------------

$ docker run -d -e DB_PATH=/data/database.sqlite nesrait/adminer-sqlite

