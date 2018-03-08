<?php

namespace Controller;

use App\Controller;
use Model\Post;

/**
* BlogController
*/
class BlogController extends Controller
{

	public function index()
	{
		$manager = $this->getDatabase()->getManager(Post::class);
		$lastPosts = $manager->getLastPosts();
		return $this->render("index.html.twig", [
            "lastPosts" => $lastPosts
        ]);
	}

	public function contact()
	{
		return $this->render("contact.html.twig", []);
	}

}