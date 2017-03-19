# PHP 7 MS SQL SERVER PRACTICAL GUIDE (CRUD Example)
[![GitHub Stars](https://img.shields.io/github/stars/KodeBlog/php-7-ms-sql-server.svg)](https://github.com/KodeBlog/php-7-ms-sql-server/stargazers) [![GitHub Issues](https://img.shields.io/github/issues/KodeBlog/php-7-ms-sql-server.svg)](https://github.com/KodeBlog/php-7-ms-sql-server/issues) [![Complete Tutorial](https://img.shields.io/badge/tutorial-read-green.svg)](https://tutorials.kode-blog.com/blog/php-mssqlserver)

This is the official repository for a tutorial project (php mssql server) that guides you on how to download and install SQL Server, download and configure SQL Server drivers for PHP and how to use Eloquent ORM to interact with SQL Server from PHP.

![PHP SQL Server](https://cdn2.kode-blog.com/images/blog/php_mssql_list.png)

## Getting Started
This section will guide you on how to get started with this project

### Prerequisites

For you to successfully run this code, you will need to have/know the following

- **Git** - needed to clone the repository, alternatively you can just downloaded the [zipped file](https://github.com/KodeBlog/php-7-ms-sql-server/archive/master.zip)
- **Composer** - needed to install project dependencies
- **MS SQL Server** - database engine upon which the tutorial is built.
- **PHP 7.*** - technocally higher versions of PHP will work but if you can get PHP 7 for free, why not get it?
- **Web Browser** - needed to access the application


### Installing

Clone this repository by running the following git command

```
git clone https://github.com/KodeBlog/php-7-ms-sql-server.git 
```

Install the dependencies using composer by running the following command

```
composer install
```

When you are done load the following URL in your web browser

```
http://localhost:8000/php7sqlsrv/index.php?action=list
```

## SQL Server Database Setup

Open Microsoft Visual Studio and run the following script

	CREATE DATABASE PHP7CrudExample
	GO
	
	CREATE TABLE [items](
	    [id] [numeric](18, 0) IDENTITY(1,1) NOT NULL,
	    [item] [nvarchar](50) NULL,
	    [description] [nvarchar](255) NULL,
	    [status] [nvarchar](50) NULL,
	    [created_at] [datetime] NULL,
	    [updated_at] [datetime] NULL,
	    [deleted_at] [datetime] NULL
	) ON [PRIMARY]
	GO
	
	ALTER TABLE [dbo].[items] ADD  CONSTRAINT [DF_items_status]  DEFAULT ((0)) FOR [status]
	GO
	
	INSERT INTO items (item,description,status)
	VALUES ('Exercising','Go to the Gym','Not Started')
	GO

## Step by step tutorial to understanding the code

You can read  complete step by step tutorial by visiting [https://tutorials.kode-blog.com/blog/php-mssqlserver](https://tutorials.kode-blog.com/blog/php-mssqlserver) 

## Built With

* [PHP 7](http://php.net/) - Server side scripting language
* [SQL Server](https://www.microsoft.com/en-us/sql-server/sql-server-editions-express) - Database Engine
* [Eloquent ORM](https://packagist.org/packages/illuminate/database) - Object Relational Mapper for interacting with the database
* [Burma CSS](http://bulma.io) - For styling and beautification
* [Font Awesome Icons](http://fontawesome.io) - Icons used on GUI

## Authors

* [Rodrick Kazembe](https://twitter.com/KazembeRodrick "Rodrick Kazembe")

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

