<?php

class Post 
{
    public $title;
    public $author;
    public $published;

    public function __construct($title,$author, $published)
    {
        $this->title = $title;
        $this->author = $author;
        $this->published = $published;
    }
}

// Creating a collection of posts array
$posts = [
    new Post('My first post', 'LT', true),
    new Post('My second post', 'LT', true),
    new Post('My third post', 'JW', true),
    new Post('My fourth post', 'TR', false)
];

$unpublishedPosts = array_filter($posts, function($post){
    return $post->published === false;
});

$publishedPosts = array_filter($posts, function($post){
    return $post->published;
    // We can also write the output similar to the unpublishedPosts variable
    // return $post->published === true;
});

// We want to map over the posts array and change the published status to true for all of the posts 
// $changes = array_map(function($post){
//     return $post->published = true;
//      return ['title' => $post->title];
// }, $posts);

// We can achieve the same result by using a foreach loop
// foreach($posts as $post){
//     $post->published = true;
// }

// $titles = array_map(function($post) {
//     return $post->title;
// }, $posts);

// foreach($posts as $post){
//     echo "
//         <li>{$post->title}</li>
//     ";
// }

// If we just want to get the titles of the array, if we use this array function the property needs to public or else it won't work 
$titles = array_column($posts, 'title');

// Return a array version of the posts object
$posts = array_map(function($post) {
    return (array) $post;
}, $posts);

// Return an array of authors, but we pass in a third argument that shows all authors and their titles 
$authors = array_column($posts, 'author', 'title');

var_dump($authors);