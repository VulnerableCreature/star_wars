<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


## Errors

> php artisan migrate

```php
INFO  Running migrations.

  2023_05_28_084400_create_posts_table ................................................................................................... 30ms FAIL

   Illuminate\Database\QueryException 

  SQLSTATE[42P01]: Undefined table: 7 ERROR:  relation "categories" does not exist (Connection: pgsql, SQL: alter table "posts" add constraint "post_category_fk" foreig
key ("category_id") references "categories" ("id"))

  at vendor\laravel\framework\src\Illuminate\Database\Connection.php:793
    790▕         // message to include the bindings with SQL, which will make this exception a
    791▕         // lot more helpful to the developer instead of just the database's errors.
    792▕         catch (Exception $e) {
  ➜ 793▕             throw new QueryException(
    794▕                 $this->getName(), $query, $this->prepareBindings($bindings), $e
    796▕         }
    797▕     }

  1   vendor\laravel\framework\src\Illuminate\Database\Connection.php:578
      PDOException::("SQLSTATE[42P01]: Undefined table: 7 ERROR:  relation "categories" does not exist")
  2   vendor\laravel\framework\src\Illuminate\Database\Connection.php:578
      PDOStatement::execute()
```

> Решение

> Идем в папку (database-migrations) и переименовываем файл 2022_07_11_141XXX_create_categories_table так, чтобы число после даты было ниже, чем число в файле 2022_07_11_142XXX_create_posts_table.


> Работа с миграциями

- Когда надо, что-то добавить
```bash
php artisan make:migration add_column_soft_deletes_to_categories_table
```
- `2023_05_28_144515_add_column_soft_deletes_to_categories_table`
```php
return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
};
```
- Проверяем работоспособность миграции
```bash
php artisan migrate 
```
```bash
php artisan rollback 
```
