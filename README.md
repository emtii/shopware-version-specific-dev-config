# shopware-version-specific-dev-config

This repository contains specific development configs for specific shopware versions.

## General
The main idea behind this repository is to provide developers different working configs for their local shopware development.

## How to use
Just create a symlink of every environment config file to your project root and you're done.

Normally this is done by typing:

```
ln -s /home/emtii/Workspace/shopware-version-specific-dev-config/5.2.9/config_dev.php /home/emtii/Workspace/shopware-5.2.9/
```

## More Info
All available config options can be found in:

```
shopware-5.2.9/engine/Shopware/Configs/Default.php
```