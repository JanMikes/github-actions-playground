<?php

putenv('MY_ENV=foobar');

echo getenv('MY_ENV');
