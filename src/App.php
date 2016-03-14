<?php 

namespace Service;

class App extends \ImageButler\Application
{
	/**
	 * Bind new or overwrite existing services to make
	 * image-butler work exactly that way you need it.
	 * 
	 * @return void
	 */ 
	public function bindServices()
	{
		// first bind the core services
		parent::bindServices();

		// Bind extensions / plugins etc...
		// > Don't leave this empty or the entire
		// > architecturial (is that even a word?) work 
		// > would be entirely usless :(
	}
}