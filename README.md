# ToaTwitterBootstrapBundle

This Bundle serves basic integration of [Twitter Bootstrap](http://twitter.github.com/bootstrap)(v2.2.0) into [Symfony Standard Edition](https://github.com/symfony/symfony-standard).  
It includes a CRUD-generator based on [SensioGeneratorBundle](https://github.com/sensio/SensioGeneratorBundle).


## Installation

###### Add `toa/twitter-bootstrap-bundle` to `composer.json`.

	{
	    "require": {
	        // ...
	        "toa/twitter-bootstrap-bundle": "2.2.*",
	        // ...
	    }
	}

###### Register this bundle in the `app/AppKernel.php`

	public function registerBundles()
	{
		$bundles = array(
			// ...
			new Toa\Bundle\TwitterBootstrapBundle\ToaTwitterBootstrapBundle(),
			// ...
		);
	}


## Usage

#### CRUD generation

The CRUD-generator in [ToaTwitterBootstrapBundle](https://github.com/toaotc/ToaTwitterBootstrapBundle) is based on [SensioGeneratorBundle](https://github.com/sensio/SensioGeneratorBundle).

Instead of `php ./app/console doctrine:generate:crud`  
you can use `php ./app/console toa:generate:twitter-bootstrap-crud`  
with the same options and arguments.

#### Template overriding

Default CRUD-templates reside in [Resources/skeleton/crud]() that can be overridden in `/app/Resources/ToaTwitterBootstrapBundle/skeleton/crud`.  
The base-templates of [SensioGeneratorBundle](https://github.com/sensio/SensioGeneratorBundle) can be overridden in the same way.

###### Example #1:
All generated views extend from `ToaTwitterBootstrapBundle::layout.html.twig` that can be overridden in `/app/Resources/ToaTwitterBootstrapBundle/skeleton/crud/views/others/extends.twig.twig`.

###### Example #2:
All generated views use the `content` block that can be overridden in `/app/Resources/ToaTwitterBootstrapBundle/skeleton/crud/views/others/block.twig.twig`.

