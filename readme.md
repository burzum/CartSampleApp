# CakePHP Cart Plugin - Sample Application

This is a sample application for the CakePHP Cart plugin:

http://github.com/burzum/Cart

This sample application is thought to show how the cart plugin can be used and is *not* thought as an example of a shop application!

This is, same as the cart, still work in progress.

The Cart plugin itself is MIT licensed, this sample app GPLv2 because it is thought for eductional use.

## Setup

	git clone git://github.com/burzum/CartSampleApp.git
	cd CartSampleApp
	git submodule update --init

In app/Config/ create your database.php. You can take a look at the database.default.php as an example. After you created that file you need to create and populate the database:

	cd app
	migrations.bat 

On *nix systems run migrations.sh instead of .bat

It will create an user for you, you can login with admin@samplecart.com and the password is "password". There will be a few items to play with.

The plugin is also implementing a dummy checkout process.

## Sample Data

### Users

There are two users you can login with:

	Username: admin@samplecart.com
	Password: password

and

	Username: customer@samplecart.com
	Password: password

The customer wont have access to the admin backend, thats all.

### Items

The app comes with a few items with different data to test different scenarios. By looking at the item list they should be selfexplaining.

## Copyright & License

Copyright (c) 2012 Florian Krämer.

CartSampleApp is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

CartSampleApp is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with CartSampleApp.  If not, see <http ://www.gnu.org/licenses/>.

