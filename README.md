# swsec-intro-php
CakePHP project, based on  [spring-swsec](https://github.com/injcristianrojas/spring-swsec).

# Requirements

* Docker Compose

# Usage

First, clone the repo:

```shell
git clone https://github.com/injcristianrojas/swsec-intro-cakephp.git
```

Next, change the permissions in the temp area:

```shell
cd swsec-intro-cakephp
chmod -R 777 cakephp/app/tmp
```

Start the server using

```shell
docker-compose up
```

Then go to http://localhost:8080 and have fun.
