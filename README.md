# Silverstripe Framework Boilerplate

> **Archived** – This project has been archived and is generally unsupported

- Rob Anderson, robb-j
- A Boilerplate Repo to quickly setup a new project using just the [Silverstripe Framework](http://silverstripe.org).
You can find Silverstripe's great [documentation here](http://docs.silverstripe.org/en/developer_guides/). Requires:

##### Requirements
- [Composer](https://getcomposer.org/)
- Php Version 5.3
- Mysql



## Using the Boilerplate
### Localhost Setup
1. Create the folder for your project
2. `cd` into your directory
3. `git remote add boilerplate git@github.com:robb-j/ss-framework-boiler.git`
4. `git pull boilerplate master`
5. `composer update`
6. `cp _ss_environment_DEV.php _ss_environment.php`
7. Visit `localhost/SITENAME/public_html/dev/build`
8. Remove the boilerplate `git rm boilerplate`


### Live Server Setup
1. SSH to your server
2. Add a remote to your project `git remote add origin git@github.com:USERNAME/REPO`
3. `cp _ss_environment_LIVE.php _ss_environment.php`
4. Fill in your mysql database details in `_ss_environment.php`
5. Visit `http://SITENAME.com/dev/build`
6. Make sure you create and chmod these folders `public_html/silverstripe-cache/session`


## Tips
### Adding Composer to a server
1. SSH to your server
2. Install Composer: `curl -s http://getcomposer.org/installer | php-5.3`
3. Run Commands: `php-5.3 composer.phar <COMMAND>`

### Generating Public & Private Keys
1. SSH to your server
2. `cd ~/.ssh`
3. `ssh-keygen`
4. Copy the contents of .ssh/id_rsa.pub to your repo'a keys
