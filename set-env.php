<?php

putenv('MY_ENV=foobar');

echo $_ENV['MY_ENV'];
