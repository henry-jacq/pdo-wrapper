# PDO wrapper

This PDO wrapper is a collection of methods for working with a database, including selecting, inserting, updating and deleting records.

> NOTE: Not tested in production. Use at your own risk!

## Quick Reference
```php
// Create new instance
$db = new Database('localhost', 'db_name', $user, $password);

// Create table
$db->raw("CREATE TABLE demo (id int auto_increment primary key, name varchar(255))");

// Use PDO directly
$db->getDB()->query('Select username FROM users')->fetchAll();

// Set table
// Before doing any operations on the database, make sure to set the table name.
$db->setTable($tableName);

// Use run to query and chain methods
$db->run("SELECT * FROM users")->fetchAll();
$db->run("SELECT * FROM users")->fetch();
$db->run("SELECT * FROM users WHERE id = ?", [$id])->fetch();
// Select using array instead of object
$db->run("SELECT * FROM users")->fetch(PDO::FETCH_ASSOC);

// Get Row by ID
$db->getRowById(2);

// Get all rows
$db->rows("SELECT title FROM posts");
// Get all rows with placeholders
$db->rows("SELECT title FROM posts WHERE user_id = ?", [$user_id]);

// Get single row
$db->row("SELECT title FROM posts");
// Get single row with placeholders
$db->row("SELECT title FROM posts WHERE user_id = ?", [$user_id]);

// Count
$db->getCount("SELECT id FROM posts");
$db->getCount("SELECT id FROM posts WHERE category_id = ?", [$category_id]);

// Insert
$id = $db->insert(['username' => 'Dave', 'role' => 'Admin']);

// Last Inserted ID
$db->lastInsertId();

// Update
$db->update(['role' => 'Editor'], ['id' => 3]);

// Delete from table with a where claus and a limit of 1 record
$db->delete(['type_id' => 'draft'], $limit = 1);

// Delete from table with a where claus and a limit of 10 record
$db->delete(['type_id' => 'draft'], $limit = 10);

// Delete all from table with a where claus and a limit of 10 record
$db->delete(['type_id' => 'draft'], null);

// Delete by ID from table
$db->deleteById(2);

// Delete by IDs from table
$db->deleteById('2,4,7');

```
