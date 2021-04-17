<?php
  if (isset($_ENV['PANTHEON_ENVIRONMENT'])) {
    if (isset($_SERVER['HTTP_USER_AGENT_HTTPS']) && $_SERVER['HTTP_USER_AGENT_HTTPS'] === 'ON') {
      $_SERVER['SERVER_PORT'] = 443;
    }
    else {
      $_SERVER['SERVER_PORT'] = 80;
    }
  }

  echo "Listening in address: ";
  echo $_SERVER['SERVER_PORT'];
  
?>