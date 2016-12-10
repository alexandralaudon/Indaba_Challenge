# Indaba Coding Challenge

Hey Courtney & Blake,

Great meeting you earlier this week! Shoot me an email if you have any questions or need additional information at alexandralaudon@gmail.com. Looking forward to hearing from you soon.

NOTES:
- Set up environment using Vagrant/Vibrantbox (specifically scotchbox) and SequelPro (even though I realized halfway through I didn't REALLY need it for this challenge - but it's always good to double-check).
- Magento 2 Codebase is in here
- The homepage will now highlight featured categories with image (+category link) and name. To set up which categories will be featured (once module has been enabled and cache is refreshed), go to the admin panel->Products->Categories and toggle the "Featured Category" checkbox for the category you wish to add to the homepage.
- Since it was a coding challenge and not a real-world application, I purposefully did not include any conditions for the category collection (i.e. only displaying categories that are active or have at least 1 product in the featured category displayed, etc).
- added admin using the command line
```sh
$ bin/magento admin:user:create --admin-firstname='hello' --admin-lastname='world' --admin-email='hello@world.com' --admin-user='indaba' --admin-password='indaba-1-TEST'
```

TUTORIALS USED:
- https://www.atwix.com/magento/adding-attribute-programatically-magento2/
- http://ibnab.com/en/blog/magento-2/magento-2-frontend-how-to-call-category-collection-on-home-page
- http://blog.mdnsolutions.com/magento2-create-custom-category-attribute/
- https://www.mageplaza.com/magento-2-module-development/
- http://www.learnmagento.com/magento-2-how-to-get-category-collection-2/
- http://magento.stackexchange.com/questions/108685/how-to-add-a-custom-css-file-in-magento-2
