# Machine Learning library for PHP - GUI for KNearestNeighbors

[![GitHub stars](https://img.shields.io/github/stars/liashchynskyi/PHP-ML-GUI.svg)](https://github.com/liashchynskyi/PHP-ML-GUI/stargazers)
[![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg)](https://raw.githubusercontent.com/liashchynskyi/PHP-ML-GUI/master/LICENSE)
[![Twitter](https://img.shields.io/twitter/url/https/github.com/liashchynskyi/PHP-ML-GUI.svg?style=social)](https://twitter.com/intent/tweet?text=Wow:&url=%5Bobject%20Object%5D)
 
<center><p><img src="https://image.flaticon.com/icons/svg/247/247468.svg" width="200px"></p><center>


# Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

## Installing

First, you need to clone the repository to your computer:

```sh
git clone https://github.com/liashchynskyi/potato.git
``` 

Then, you need to move your project dir to web server. (I used LAMP. You can use XAMP, Nginx, etc. if you want). 

Also you need to configure virtual hosts on your server. How to do that is explained in this [article](https://serversforhackers.com/c/configuring-apache-virtual-hosts).

After that open `public_html` dir and run command:

```sh
php composer.phar install
```

**PHP 7 and Composer is required.**

## How to use it?

Save your data in `json` file like this:

```
{
	"samples": [
		[1, 3],
		[1, 4],
		[2, 4],
		[3, 1],
		[4, 1],
		[4, 2]
	],
	"labels": ["a", "a", "a", "b", "b", "b"]
}

```

After that upload your file to a server & enjoy it)

# Demo

![demo](http://i.imgur.com/RYmVNii.gif)

# License

This project is licensed under the MIT. For more see **LICENSE** file.
