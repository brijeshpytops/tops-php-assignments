<!-- What is Eager Loading and lazy loading?  -->

Eager Loading: This is a technique used to load related data upfront along with the primary data. Let's say you have a model representing a User and each user has many Posts. If you want to fetch a user and all of their posts, you can eagerly load the posts along with the user data in a single query. Eager loading can help avoid the N+1 query problem, where you would end up executing one additional query for each related record.

Example : 

$user = User::with('posts')->find(1);


Lazy Loading: In contrast, lazy loading defers the loading of related data until it's explicitly requested. So, if you fetch a user and later need their posts, lazy loading will fetch the posts only when you access the posts property of the user object. This can be more efficient if you don't always need the related data.

Example : 

$user = User::find(1);
$posts = $user->posts; // Lazy loading occurs here
