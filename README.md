# ToaTwitterBootstrapBundle

This Bundle serves basic integration of [Twitter Bootstrap](http://twitter.github.com/bootstrap)(v2.0.3) into [Symfony Standard Edition](https://github.com/symfony/symfony-standard).
It also includes a CRUD-generator based on [SensioGeneratorBundle](https://github.com/sensio/SensioGeneratorBundle).


## Installation

#####Symfony < 2.1
1. Add this lines to your `deps` file

	[ToaTwitterBootstrapBundle]
	git=http://github.com/toaotc/ToaTwitterBootstrapBundle.git

2. Run `php bin/vendors update`

#####Symfony >= 2.1
1. Add `toa/twitter-bootstrap-bundle` to `composer.json`
2. Run `php composer.phar update`

Run `php ./app/console assets:install web`.


## Configuration

the default configuration can be overridden in `app/config/config.yml`:

	toa_twitter_bootstrap:
		template: "ToaTwitterBootstrapBundle::layout.html.twig"
		block: "content"

The `ToaTwitterBootstrapBundle::layout.html.twig` template includes the [Twitter Bootstrap](http://twitter.github.com/bootstrap) and [jQuery](http://jquery.com/).

It contains

	{% block content %}{% endblock %}

referenced by the default configuration.

## Usage

`php ./app/console toa:generate:twitter-bootstrap-crud`