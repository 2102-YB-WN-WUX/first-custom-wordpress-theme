# first-custom-wordpress-theme

Installing Wordpress in Vagrant (if using XAMPP/MAMP, replace the http://192.168.33.10/ with localhost and the port number if required)

- Open terminal, enter folder with vagrant file and run vagrant up (or run MAMP/XAMPP)
- Check Dev environment’s working by going to http://192.168.33.10/
- Download the Wordpress base installer from https://wordpress.org/download/
- Unzip and drag the wordpress folder into your sites folder called “www”/"htdocs"
- Open the wordpress folder in browser which will start the installer.
- Create your database at http://192.168.33.10/phpmyadmin/
- Type in the database name (you can call it whatever you like), click create.
- You don’t need to create a table afterwards or any records. Wordpress will do this automatically.
- Go back to your dev environment, click let’s go, you should see this screen:
- Enter your database name, your username and your password (this is for your Vagrant hosted database - by default it’s user “root” and root “”)
- Click “run the installation”
- Fill out the page with your details and make sure you write down your username and password. This is how you’ll log into the site. 
- Click install Wordpress.

Success! You should see all the Wordpress data populated in your database now. Login with your user/password you just set up.

To use the theme, put all the files in this repo into a folder, i.e. "custom-theme" within the "themes" folder in wp-content.
