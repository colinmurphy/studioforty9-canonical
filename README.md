# StudioForty9 Canonical Module

This module will add canonical tags to the homepage, cms & contact us page.

## 1. Installation

In your composer file you would add the following:

     {
         "repositories": [
             {
                 "type": "composer",
                 "url": "http://packages.firegento.com"
             },
             {
                 "url": "https://github.com/colinmurphy/studioforty9-canonical.git",
                 "type": "git"
             }
         ],
         "require": {
             "magento-hackathon/magento-composer-installer": "*",
             "colinmurphy/studioforty9-canonical": "dev-master"
         },
         "extra": {
             "magento-root-dir": "./"
         }
     }