<?php

// Home
Breadcrumbs::for('dashboard.home', function ($trail) {
    $trail->push('Dashboard', route('dashboard.home'));
});

Breadcrumbs::for('projeto.create', function ($trail) {
    $trail->parent('dashboard.home');
    $trail->push('Add Projeto', route('projeto.create'));
});

Breadcrumbs::for('projeto.edit', function ($trail, $project) {
    $trail->parent('dashboard.home');
    $trail->push($project->title, route('projeto.edit', $project->id));
});

// // Home > Blog
// Breadcrumbs::for('blog', function ($trail) {
//     $trail->parent('home');
//     $trail->push('Blog', route('blog'));
// });

// // Home > Blog > [Category]
// Breadcrumbs::for('category', function ($trail, $category) {
//     $trail->parent('blog');
//     $trail->push($category->title, route('category', $category->id));
// });

// // Home > Blog > [Category] > [Post]
// Breadcrumbs::for('post', function ($trail, $post) {
//     $trail->parent('category', $post->category);
//     $trail->push($post->title, route('post', $post->id));
// });