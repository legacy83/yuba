#!/bin/sh

#!/bin/sh

# -- Composer Asset Plugin
# =========================================
composer --no-interaction global require "fxp/composer-asset-plugin:1.0.0"

# -- App Install/Update
# =========================================
cd /vagrant/ && composer --no-interaction install
cd /vagrant/ && composer --no-interaction update