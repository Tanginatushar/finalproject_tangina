<?php

Route::get('/', 'WelcomeController@index');
Route::get('/dolon', 'WelcomeController@dolon');
Route::get('home', 'HomeController@index');


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('/about', 'AboutController@about');

Route::get('/blog', 'BlogController@index');

Route::get('/contact', 'ContactController@contact');

Route::get('/newuserprofile', 'NuserprofileController@index');

Route::get('/task/index', 'TaskController@index');


Route::get('article/create', 'ArticleController@create');


Route::get('layouts/newuserprofile', 'NuserprofileController@index');


Route::get('/search', 'SearchResultController@search');


Route::get('/userprofile', 'UserController@userprofile');

Route::get('/newtimeline', 'NewTimelineController@newtimeline');


Route::get('/timeline', 'TimelineController@index');
Route::get('/timelineold', 'TimelineoldController@index');
Route::get('/faq', 'faqController@index');

Route::get('/blog-item', 'BlogItemController@index');
Route::get('/portfolio', 'PortfolioController@portfolio');

Route::get('/tangina', 'TanginaController@index');

Route::resource('projects', 'ProjectsController');
Route::resource('tasks', 'TasksController');

// Provide controller methods with object instead of ID
Route::model('tasks', 'Task');
Route::model('projects', 'Project');
// Use slugs rather than IDs in URLs
Route::bind('tasks', function($value, $route) {
    return App\Task::whereSlug($value)->first();
});
Route::bind('projects', function($value, $route) {
    return App\Project::whereSlug($value)->first();
});

Route::resource('projects', 'ProjectsController');
Route::resource('projects.tasks', 'TasksController');

//

Route::model('results', 'Result');
Route::model('titles', 'Title');

Route::resource('titles', 'TitlesController');
Route::resource('results', 'ResultsController');


Route::resource('titles.results', 'ResultsController');
//Route::resource('titles', 'TitlesController@search');


Route::bind('results', function($value, $route) {
    return App\Result::whereSummery($value)->first();
});
Route::bind('titles', function($value, $route) {
    return App\Title::whereSummery($value)->first();
});
