---
layout: post
title: Installing php-uuid on OS X
---

Theres a lot of mis-information out there about how to install php-uuid on osx. After many many hours of various methods, i finally found a solution. And its really simple.

### 1. Install Homebrew

[Brew](http://brew.sh/) is a package manager for os x. It's a bit like yum or apt-get. 

	ruby -e "$(curl -fsSL https://raw.github.com/Homebrew/homebrew/go/install)"

You will need ruby installed for this to work, so head over to [here](https://www.ruby-lang.org/en/installation/#homebrew) for details on how to install ruby.

### 2. Install Homebrew-php

[Homebrew-php](https://github.com/josegonzalez/homebrew-php) is a centralized repo for lots of php packages which will build nicely on os x. Homebrew calls these extra repos 'taps'.

####Tap the homebrew/dupes repository into your brew installation:

	brew tap homebrew/dupes

####Tap the repository into your brew installation:

	brew tap josegonzalez/homebrew-php

### 3. Install php54-uuid

And now for the main attraction, installing uuid. The next command will install php54-uuid aswell as the neccessary dependencies it will need, this includes php if you have not yet installed it, or it has not been installed via brew. So make sure you check how php is installed.

	brew install php54-uuid

Once installed, brew will tell you if there is anything else you need to do.

#### Restart apache and you should now have php-uuid running.

	sudo apachectl restart

#### To test php-uuid is working, simply run the folloing command.

	php -i | grep "uuid"

You should then see something like this...

	Additional .ini files parsed => /usr/local/etc/php/5.4/conf.d/ext-uuid.ini
	uuid
	CVS Revision => $Id: uuid.c 297236 2010-03-31 20:39:48Z johannes $

I hope this helps!