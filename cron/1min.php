<?php

file_put_contents(__DIR__."/../htdocs/cron.txt", date("r\n"), FILE_APPEND | LOCK_EX);