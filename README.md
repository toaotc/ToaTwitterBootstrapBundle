# ToaTwitterBootstrapBundle

This Bundle serves basic integration of [Twitter Bootstrap](http://twitter.github.com/bootstrap)(v2.1.0) into [Symfony Standard Edition](https://github.com/symfony/symfony-standard).
It also includes a CRUD-generator based on [SensioGeneratorBundle](https://github.com/sensio/SensioGeneratorBundle).


## Installation

#####Symfony 2.1.*
Add the package to the `composer.json` file and run `php composer.phar update`.

	{
	    "require": {
	        // ...
	        "toa/twitter-bootstrap-bundle": "dev-master"
	    }
	}

Register this bundle in the `app/AppKernel.php`

	public function registerBundles()
	{
		$bundles = array(
			// ...
			new Toa\Bundle\TwitterBootstrapBundle\ToaTwitterBootstrapBundle(),
		);
		
		// ...
	}


## Configuration

The default configuration can be overridden in `app/config/config.yml`:

	toa_twitter_bootstrap:
		template: "ToaTwitterBootstrapBundle::layout.html.twig"
		block: "content"

The `ToaTwitterBootstrapBundle::layout.html.twig` template includes the [Twitter Bootstrap](http://twitter.github.com/bootstrap) and [jQuery](http://jquery.com/) assets.

It contains a template block referenced by the default configuration.

	{% block content %}{% endblock %}

CRUDs will be generated into the `toa_twitter_bootstrap.block`.

 
## Usage

`php ./app/console toa:generate:twitter-bootstrap-crud`