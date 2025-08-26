<?php
shell_exec('cd /www/wwwroot/testdev.test && git pull origin main 2>&1');
echo "Updated from GitHub";
