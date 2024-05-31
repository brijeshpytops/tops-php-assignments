<!-- Explain ORM -->

Laravel ORM (Object-Relational Mapping) is a feature of the Laravel PHP framework that allows developers to interact with their database using an elegant and expressive syntax instead of writing raw SQL queries. This ORM system in Laravel is called Eloquent.


concepts of Laravel ORM:
------------------------
Active Record Implementation: Each database table corresponds to a model in Eloquent, and each model instance represents a single record in the table.

Model Definitions: Models are defined as PHP classes that extend the Illuminate\Database\Eloquent\Model class. They encapsulate the data of the database tables and provide methods for interacting with this data.

Eloquent Methods: Eloquent models come with built-in methods for common database operations such as querying (retrieving), inserting, updating, and deleting records. For example:

    User::all() retrieves all records from the users table.
    User::find(1) retrieves the user with an ID of 1.
    $user->save() saves the current state of the model to the database.

Query Builder: Eloquent includes a powerful query builder for creating and running database queries in a fluent, chainable manner. 

For example:

$users = User::where('status', 'active')
             ->orderBy('created_at', 'desc')
             ->get();


Relationships: Eloquent makes it easy to define and work with relationships between different models, such as one-to-one, one-to-many, and many-to-many relationships. 

For example:

One-to-One: $user->profile()
One-to-Many: $user->posts()
Many-to-Many: $user->roles()


Eager Loading: To optimize database queries, Eloquent supports eager loading, allowing you to load related models alongside the main model to avoid the N+1 query problem. 

For example:

$users = User::with('posts')->get();


Mutators and Accessors: Eloquent models allow defining custom methods to modify attribute values when retrieving or setting them. Mutators transform attribute values when saving to the database, and accessors modify values when retrieving them.

Mass Assignment Protection: Eloquent includes features to protect against mass assignment vulnerabilities by specifying which attributes are mass assignable using the $fillable or $guarded properties on the model.

