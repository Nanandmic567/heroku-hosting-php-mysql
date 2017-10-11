# heroku-hosting-php-mysql
[Demo](https://heroku-hosting-php-mysql.herokuapp.com/)


Goto https://dashboard.heroku.com/apps

Select the "new" then "Create new app".

Give your app a name, select the approiate region and then click "Create app".

You will need to enter payment details in order to add the correct addons to your hosting account, no charges will be made if you select the free tier. This can be setup under the [Billing Tab](https://dashboard.heroku.com/account/billing).

## Connect to github

Under deploment methods select github and then link your account.

After linking your account enter the name of the repo you wish to deploy.

Select "Enable Automatic Deploys" if you wish for your website to be deployed to your server after every commit.

If you dont want your web app to be automatically deployed you can click the "Deploy Branch" to deploy the website manually.

## Add Clear DB

Goto your apps home page and select the "Resources" tab, then in the Add-ons search enter "ClearDB MySQL".

Make sure the plan names says "Ignite - Free" and click Provision.

When the addon is installed it creates a enviroment varible for us to use in the app.

## Setting up the demo app

First add the files from this repo to your github and commit the changes.

Download [mysql workbench](https://www.mysql.com/products/workbench/) or [sequelpro](http://www.sequelpro.com/) for Mac.

to get the details you need goto you settings tab on heroku, then select "Reveal Config Vars".

Copy the string in the right text box.
Heres an example. mysql://23423423vsdfsdfsdf:21312321316@eu-cdbr-west-01.cleardb.com/heroku_sadasdasdasddasasc?reconnect=true

[USERNAME]:[PASSWORD]@[HOST]/[DATABASE NAME] use this to get the information you need from **YOUR** connection string.

Click okay and enter your password
![Image](https://gyazo.com/4a622c1f6cfd105c88c48f733c4e3e93.png)

## Create the demo table

After you connect to the database using the app for your operating system you need to create a query.

Open the "testdb.sql" and copy the contents into the query editor. Next you will need to change the database name from "testdb" to the database name you got from above. After doing this execute the query.
![Image](https://gyazo.com/6dbb24d82f718f263e6fe5db8401d648.png)

To test your site select "open app" on the app home page. Next create a account and then login.
