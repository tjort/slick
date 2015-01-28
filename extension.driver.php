<?php

	Class extension_slick extends Extension{

		public function about() {
			return array(
				'name'			=> 'Slick: a better looking Symphony',
				'version'		=> '1.0',
				'release-date'	=> '2015-01-28',
				'author'		=> array(
					'name'			=> 'Jordi Verdult',
					'website'		=> 'http://www.github.com/tjort',
					'email'			=> 'jordi@verdultworks.nl'
				)
			);
		}

		public function getSubscribedDelegates() {
			return array(
				array(
					'page' => '/backend/',
					'delegate' => 'AdminPagePreGenerate',
					'callback' => 'appendAssets'
				)
			);
		}

		public function appendAssets($context) {
			$page = $context['parent']->Page;

			if ($page instanceof HTMLPage) {
				$page->addStylesheetToHead(URL . '/extensions/slick/assets/slick.css', 'screen', 1982);
			}
		}

	}
