<!-- Explain - Eloquent Relationships -->

Eloquent Relationships in Laravel allow you to define the associations between different database tables/models. These relationships enable you to retrieve related data easily and perform operations across related tables in a more intuitive manner. Laravel supports several types of relationships, including one-to-one, one-to-many, many-to-one (inverse of one-to-many), and many-to-many relationships.

1] One-to-One Relationship:

- In a one-to-one relationship, each record in the table is associated with exactly one record in another table.

- Example: A User has one Profile.

- In the User model:

public function profile()
{
    return $this->hasOne(Profile::class);
}

- In the Profile model:

public function user()
{
    return $this->belongsTo(User::class);
}


2] One-to-Many Relationship:

- In a one-to-many relationship, a single record in one table is associated with multiple records in another table.

- Example: A Post belongs to a User, but a User can have multiple Posts.

- In the User model:

public function posts()
{
    return $this->hasMany(Post::class);
}


- In the Post model:

public function user()
{
    return $this->belongsTo(User::class);
}

3] Many-to-Many Relationship:

- In a many-to-many relationship, records in one table are associated with multiple records in another table, and vice versa.

- Example: A User can have many Roles, and a Role can belong to many Users.

- In the User model:

public function roles()
{
    return $this->belongsToMany(Role::class);
}

- In the Role model:

public function users()
{
    return $this->belongsToMany(User::class);
}

4] Has Many Through Relationship:

- This relationship allows you to define relationships across one-to-many relationships.

- Example: A Country has many Posts through User.

- In the Country model:

public function posts()
{
    return $this->hasManyThrough(Post::class, User::class);
}


5] Polymorphic Relationships:

- Polymorphic relationships allow a model to belong to more than one other model on a single association.

- Example: Comment can belong to Post or Video.

- In the Comment model:

public function commentable()
{
    return $this->morphTo();
}

- In the Post and Video models:

public function comments()
{
    return $this->morphMany(Comment::class, 'commentable');
}